@push('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
    <style>
        div.dataTables_wrapper div.dataTables_filter input {
            float: right!important;
        }

        div.dataTables_wrapper div.dataTables_filter label {
            float: right!important;
        }
    </style>
@endpush

@push('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" ></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js" ></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js" ></script>

{{--    <script src="{{ asset('backend/datatables/jquery.dataTables.min.js')}}"></script>--}}
{{--    <script src="{{ asset('backend/datatables/dataTables.bootstrap4.min.js') }}"></script>--}}
{{--    <script src="{{ asset('backend/demo/datatables-demo.js') }} "></script>--}}
    <script>
        $(document).ready( function(){
            $('#dataTable').DataTable();
        });
    </script>
@endpush
