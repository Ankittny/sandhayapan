<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="admin, dashboard" />

    <title>sandhaya - Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('public/admin') }}/images/favicon.png">
	<link href="{{ asset('public/admin') }}/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="{{ asset('public/admin') }}/css/style.css" rel="stylesheet">

</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center mb-3">
										{{--  <a href="index.html"><img src="{{ asset('public/admin') }}/images/logo.jpeg" alt=""></a>  --}}
									</div>
                                    <h4 class="text-center mb-4">Sign in your account</h4>
                                    @if (\Session::has('success'))
                                    <div class="alert alert-info">
                                       {!! \Session::get('success') !!}
                                    </div>
                                    @endif
                                    <form method="Post" action="{{ url('loginchecks') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="email" name="email" class="form-control" placeholder="hello@example.com">
                                            @if ($errors->has('email'))
                                            <span class="error" style="color:red">{{ $errors->first('email') }}</span>
                                           @endif
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" name="password" class="form-control" placeholder="Password">
                                            @if ($errors->has('password'))
                                            <span class="error" style="color:red">{{ $errors->first('password') }}</span>
                                          @endif
                                        </div>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                               <div class="form-check custom-checkbox ms-1">
													<input type="checkbox" class="form-check-input" id="basic_checkbox_1">
													<label class="form-check-label" for="basic_checkbox_1">Remember my preference</label>
												</div>
                                            </div>
                                            <div class="form-group">
                                                <a href="page-forgot-password.html">Forgot Password?</a>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" name="submit" class="btn btn-primary btn-block">Sign Me In</button>
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


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('public/admin') }}/vendor/global/global.min.js"></script>
	<script src="{{ asset('public/admin') }}/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="{{ asset('public/admin') }}/js/custom.min.js"></script>
	<script src="{{ asset('public/admin') }}/js/deznav-init.js"></script>
	<script src="{{ asset('public/admin') }}/js/demo.js"></script>

</body>
</html>
