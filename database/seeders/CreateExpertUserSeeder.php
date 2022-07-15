<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CreateExpertUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'email' => 'it-park',
                'name' => 'it-park',
                'password' => Hash::make('87497467'),
                'role' => 'expert',
                'fullname' => 'Технологический парк программных продуктов и информационных технологий'
            ],
            [
                'email' => 'mininfokom',
                'name' => 'mininfokom',
                'password' => Hash::make('98787845'),
                'role' => 'expert',
                'fullname' => 'Министерство по развитию информационных технологий и коммуникаций'
            ],
            [
                'email' => 'cybercenter',
                'name' => 'cybercenter',
                'password' => Hash::make('98746734'),
                'role' => 'expert',
                'fullname' => 'Центр кибербезопасности'
            ],
            [
                'email' => 'statess',
                'name' => 'statess',
                'password' => Hash::make('23472387'),
                'role' => 'expert',
                'fullname' => 'Служба государственной безопасности'
            ],
            [
                'email' => 'aloqaventures',
                'name' => 'aloqaventures',
                'password' => Hash::make('48738434'),
                'role' => 'expert',
                'fullname' => 'Венчурный фонд «Aloqaventures»'
            ]
        ];
        foreach ($data as $item) {
            User::create($item);

        }
    }
}
