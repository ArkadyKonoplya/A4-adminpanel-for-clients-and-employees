@extends('layouts/layout')
@section('page-style')

    <!-- Datatable -->
    <link href="{{ asset('admin/vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="{{ asset('admin/css/style.css')}}" rel="stylesheet">
   <style>
   div#example_info {
    color: #666;
    }
    .dataTables_wrapper .dataTables_length, .dataTables_wrapper .dataTables_filter, .dataTables_wrapper .dataTables_info, .dataTables_wrapper .dataTables_processing, .dataTables_wrapper .dataTables_paginate{
        color: #d3d1e1!important;
    }
    .dataTables_wrapper .dataTables_paginate .paginate_button.disabled, .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:hover, .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:active{
        color: #d3d1e1!important;
    }
   </style>
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css" integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" crossorigin="anonymous">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection
@section('content')
    <div class="content-body">
        <div class="container-fluid">
        
            <!-- row -->
            @yield('sub_fields')


        </div>
    </div>
@endsection

@section('page-script')

    <!-- Required vendors -->
    <script src="{{ asset('admin/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('admin/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('admin/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
    <!-- Here is navigation script -->
    <script src="{{ asset('admin/vendor/quixnav/quixnav.min.js')}}"></script>
    <script src="{{ asset('admin/js/quixnav-init.js')}}"></script>
    <script src="{{ asset('admin/js/custom.min.js')}}"></script>
    <!--removeIf(production)-->
    <!-- Demo scripts -->
    <script src="{{ asset('admin/js/styleSwitcher.js')}}"></script>
    <!--endRemoveIf(production)-->
    <!-- Datatable -->
    <script src="{{ asset('admin/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('admin/js/plugins-init/datatables.init.js')}}"></script>

    <!-- Jquery Validation -->
    <script src="{{ asset('admin/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <!-- Form validate init -->
    <script src="{{ asset('admin/js/plugins-init/jquery.validate-init.js')}}"></script>
@endsection