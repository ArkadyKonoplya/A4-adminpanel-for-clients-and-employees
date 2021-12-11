@extends('layouts/layout')


@section('title', 'Profile')
@section('page-style')

<link href="{{ asset('admin/css/style.css')}}" rel="stylesheet">

<style>
#imageUpload {
    display: none;
}

#profileImage {
    cursor: pointer;
}

#profile-container {
    width: 150px;
    height: 150px;
    overflow: hidden;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    -o-border-radius: 50%;
    border-radius: 50%;
}

#profile-container img {
    width: 150px;
    height: 150px;
}
</style>

@endsection
@section('content')
<meta name="csrf-token" content="{!! csrf_token() !!}">

<body>
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="breadcrumb-range-picker">
                        <span><i class="icon-calender"></i></span>
                        <span class="ml-1">Profile</span>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active"><a href="{{route('profile')}}">Profile</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-lg-4 col-md-5 col-xxl-4 col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center mb-4">

                                <image id="profileImage" class="mr-3 rounded-circle mr-0 mr-sm-3"
                                    src="{{ asset('storage/avatars/')}}/{{$user[0]->image}}" width="80" height="80" alt="" />
                                
                                    <form action="{{route('updatePhoto')}}" id="updatePhoto" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <input id="imageUpload" type="file" class="mr-3 rounded-circle mr-0 mr-sm-3"
                                             name="profile_photo" placeholder="Photo" required="" capture>
                                    </form>

                                <div class="media-body">
                                    <h3 class="mb-0">{{$user[0]->First_Name}} {{$user[0]->Last_Name}}</h3>
                                </div>
                            </div>

                            <p class="text-muted">{{$user[0]->comment}}</p>
                            <ul class="card-profile__info">
                                <li class="mb-1"><strong class="text-dark mr-4">Mobile</strong>
                                    <span>{{$user[0]->phone}}</span>
                                </li>
                                <li><strong class="text-dark mr-4">Email</strong> <span>{{$user[0]->email}}</span></li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-lg-8 col-md-7 col-xxl-8 col-xl-8">

                    <div class="card comments_section">
                        <div class="card-body">

                            <div class="default-tab">
                                <ul class="nav nav-tabs" role="tablist">
                                   
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#profile">Reset Password</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    
                                    <div class="tab-pane fade show active" id="profile">
                                        <div class="pt-4">
                                            <button class="btn btn-dark" style="display: none;" id="demo_8">Without
                                                Message</button>

                                            <div class="form-validation">
                                                <form class="form-valide1" id="ResetPassword" action="#" method="post">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-xl-12">
                                                            <div class="form-group row">
                                                                <label class="col-lg-4 col-form-label"
                                                                    for="passwordNew">Current Password <span
                                                                        class="text-danger">*</span>
                                                                </label>
                                                                <div class="col-lg-6 ErrorPwd">
                                                                    <input type="password" class="form-control"
                                                                        id="passwordNew" name="passwordNew"
                                                                        placeholder="Current Password">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-lg-4 col-form-label"
                                                                    for="password">New Password <span
                                                                        class="text-danger">*</span>
                                                                </label>
                                                                <div class="col-lg-6">
                                                                    <input type="password" class="form-control"
                                                                        id="password" name="password"
                                                                        placeholder="New Password">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-lg-4 col-form-label"
                                                                    for="confirmPassword">Confirm Password <span
                                                                        class="text-danger">*</span>
                                                                </label>
                                                                <div class="col-lg-6">
                                                                    <input type="password" class="form-control"
                                                                        id="confirmPassword" name="confirmPassword"
                                                                        placeholder="Confirm Password">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-lg-8 ml-auto">
                                                                    <button type="submit"
                                                                        class="btn btn-primary">Update</button>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="alert alert-secondary alert-dismissible alert-alt solid fade ">
        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i
                    class="mdi mdi-close"></i></span>
        </button>
        <strong>Success!</strong> Message has been sent.
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
    <script src="{{ asset('admin/vendor/highlightjs/highlight.pack.min.js')}}"></script>
    <script>
    hljs.initHighlightingOnLoad();
    </script>
    <!-- Jquery Validation -->
    <script src="{{ asset('admin/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <!-- Form validate init -->
    <script src="{{ asset('admin/js/plugins-init/jquery.validate-init.js')}}"></script>
    <!-- BlockUI -->
    <script src="{{ asset('admin/vendor/block-ui/jquery.blockUI.js')}}"></script>


    <!-- All init script -->
    <script src="{{ asset('admin/js/plugins-init/blockui-init.js')}}"></script>
    <script>
    $(document).ready(function() {
        $("#profileImage").click(function(e) {
            $("#imageUpload").click();
        });

        function fasterPreview(uploader) {
            if (uploader.files && uploader.files[0]) {
                $('#profileImage').attr('src',
                    window.URL.createObjectURL(uploader.files[0]));
            }
        }

        $("#imageUpload").change(function() {
                
            $("#updatePhoto").submit();
            $("#demo_8").click();
            fasterPreview(this);
        });
        $('#ResetPassword').on('submit', function(e) {
            e.preventDefault();
            $("#demo_8").click();
            var password = $(this).find('input[name=password]').val();
            var passwordNew = $(this).find('input[name=passwordNew]').val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                method: "POST",
                url: 'ResetPwd',
                data: {
                    "password": password,
                    "passwordNew": passwordNew,
                }
            }).done(function(msg) {
                if (msg == 'password') {
                    $("#passwordNew").val('');
                    $(".ErrorPwd").append(
                        '<div id="password-error" class="invalid-feedback animated fadeInUp" style="display: block;">Please provide current password</div>'
                        );
                }
            });

        });
    });
    </script>
    @endsection