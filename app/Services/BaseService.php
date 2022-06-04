<?php

namespace App\Services;

class BaseService
{
    /**
     * @var
     */
    protected $repo;
    /**
     * @var
     */
    protected $relation;
    /**
     * @var
     */
    protected $attributes;
    /**
     * @var
     */
    protected $sort_fields;

    /**
     * @param array $params
     * @return mixed
     */
    public function get(array $params, $pagination = true)
    {
        $perPage = null;

        if ($pagination) {
            $perPage = isset($params['per_page']) ? $params['per_page'] : 20;
        }

        $query = $this->repo->getQuery();
        $query = $this->relation($query, $this->relation);
        $query = $this->filter($query, $this->filter_fields, $params);
        $query = $this->sort($query, $this->sort_fields, $params);
        $query = $this->select($query, $this->attributes);
        $query = $this->repo->getPaginate($query, $perPage);
        return $query;
    }


    /**
     * @param array $params
     * @return mixed
     */
    public function list(array $params)
    {
        $query = $this->repo->getQuery();
        $query = $this->filter($query, $this->filter_fields, $params);
        $query = $this->relation($query, $this->relation);
        $query = $this->select($query, $this->attributes);
        $query = $this->sort($query, $this->sort_fields, $params);
        return $query->get();
    }

    /**
     * @param Builder $query
     * @param null $relation
     * @return Builder
     */
    public function relation(Builder $query, $relation = null)
    {
        if ($relation) {
            $query->with($relation);
        }
        return $query;
    }

    /**
     * @param Builder $query
     * @param null $attributes
     * @return Builder
     */
    public function select(Builder $query, $attributes = null)
    {
        if ($attributes) {
            $query->select($attributes);
        }
        return $query;
    }


    /**
     * @param Builder $query
     * @param $filter_fields
     * @param $params
     * @return Builder
     */
    public function filter(Builder $query, $filter_fields, $params)
    {
        foreach ($filter_fields as $key => $item) {
            if (array_key_exists($key, $params)) {
                if ($item['type'] == 'string' && $params[$key] != '')
                    $query->where($key, 'ilike', '%' . $params[$key] . '%');

                if ($item['type'] == 'array' && $params[$key])
                    $query->whereIn($key, $params[$key]);

                if ($item['type'] == 'intarray' && $params[$key]) {
                    $value = "{" . implode(',', $params[$key]) . "}";
                    $query->where($key, '&&', $value);
                }

                if ($item['type'] == 'intarrayand' && $params[$key]) {
                    $value = "{" . implode(',', $params[$key]) . "}";
                    $query->where($key, '@>', $value);
                }

                if ($item['type'] == 'number' && $params[$key] != '')
                    $query->where($key, $params[$key]);
                if ($item['type'] == 'bool' && $params[$key] != '')
                    $query->where($key, $params[$key]);
                if ($item['type'] == 'day' && $params[$key] != '')
                    $query->where($key, '>=', Carbon::now()->subDays($params[$key]));

                if ($item['type'] == 'to' && $params[$key] != '')
                    $query->where($key, '<=', $params[$key]);

                if ($item['type'] == 'from' && $params[$key] != '')
                    $query->where($key, '>=', $params[$key]);

                if ($params[$key] and $item['type'] == 'json' and $item['json_type'] == 'array') {
                    if ($item['search'] == 'string')
                        $query->where('data->' . $key . '', 'ilike', $params[$key]);
                    if ($item['search'] == 'number')
                        $query->where('data->' . $key . '', $params[$key]);
                }
            }
        }
        return $query;
    }

    /**
     * @param $query
     * @param array $params
     * @return Builder
     */
    public function sort($query, $sort_fields = null, array $params): Builder
    {
        $key = 'id';
        $order = 'desc';
        if (isset($sort_fields) and isset($sort_fields['sort_key'])) {
            $key = $sort_fields['sort_key'];
            $order = $sort_fields['sort_type'];
        }
        if (isset($params) and isset($params['sort_key'])) {
            $key = $params['sort_key'];
            $order = $params['sort_type'];
        }
        $query->orderBy($key, $order);

        return $query;
    }

    /**
     * @param $params
     * @return mixed
     */
    public function create($params)
    {
        return $this->repo->store($params);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        return $this->repo->getById($id);
    }

    /**
     * @param $params
     * @param $id
     * @return mixed
     */
    public function update($params, $id)
    {
        return $this->repo->update($params, $id);

    }

    /**
     * @param int $id
     * @return mixed
     */
    public function delete(int $id)
    {
        return $this->repo->destroy($id);
    }
}
