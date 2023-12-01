@extends('layouts.auth-master')

@section('content')
 <div class="page-wrapper bg-gra-02 p-t-100 p-b-100 font-poppins">
    <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Registration Form</h2>
                    <form method="POST" action="{{route('register.custom')}}">
                        @csrf
                        @include('layouts.partials.messages')
                         <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Name</label>
                                    <input class="input--style-4" type="text" name="name">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="text" name="email">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Username</label>
                                    <input class="input--style-4" type="text" name="username">
                                </div>
                            </div>
                        <div class="col-2">
                            <div class="input-group" style="position: relative;">
                                <label class="label">Password</label>
                                <span class="toggle-password" onclick="togglePasswordVisibility()" style="position: absolute; right: 8px; top: 70%; transform: translateY(-50%);">
                                        <i class="fa fa-fw fa-eye field-icon" id="toggleIcon"></i>
                                </span>
                                <input class="input--style-4" type="password" name="password" id="password-field">
                            </div>
                        </div>
                        </div>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="registration/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="registration/vendor/select2/select2.min.js"></script>
    <script src="registration/vendor/datepicker/moment.min.js"></script>
    <script src="registration/vendor/datepicker/daterangepicker.js"></script>
    <script src="registration/js/global.js"></script>
    <script type="text/javascript">
        function togglePasswordVisibility() {
    const passwordField = document.getElementById('password-field');
    const toggleIcon = document.getElementById('toggleIcon');

    if (passwordField.type === 'password') {
        passwordField.type = 'text';
        toggleIcon.classList.remove('fa-eye');
        toggleIcon.classList.add('fa-eye-slash');
    } else {
        passwordField.type = 'password';
        toggleIcon.classList.remove('fa-eye-slash');
        toggleIcon.classList.add('fa-eye');
    }
}
    </script>

@endsection

