<!DOCTYPE html>
<html lang="en">

<head>
    <title>Aplikasi Asisten Lab</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="Mega Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
      <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
      <meta name="author" content="codedthemes" />
      <!-- Favicon icon -->

      <link rel="icon"  href="{{ asset('admin/assets') }}assets/images/favicon.ico" type="image/x-icon">
      <!-- Google font-->     
      <link  href="{{ asset('admin/assets') }}https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css"  href="{{ asset('admin/assets') }}/css/bootstrap/css/bootstrap.min.css">
      <!-- waves.css -->
      <link rel="stylesheet"  href="{{ asset('admin/assets') }}/pages/waves/css/waves.min.css" type="text/css" media="all">
      <!-- themify-icons line icon -->
      <link rel="stylesheet" type="text/css"  href="{{ asset('admin/assets') }}/icon/themify-icons/themify-icons.css">
      <!-- ico font -->
      <link rel="stylesheet" type="text/css"  href="{{ asset('admin/assets') }}/icon/icofont/css/icofont.css">
      <!-- Font Awesome -->
      <link rel="stylesheet" type="text/css"  href="{{ asset('admin/assets') }}/icon/font-awesome/css/font-awesome.min.css">
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css"  href="{{ asset('admin/assets') }}/css/style.css">
  </head>

  <body themebg-pattern="theme1">
  <!-- Pre-loader start -->
  <div class="theme-loader">
      <div class="loader-track">
          <div class="preloader-wrapper">
              <div class="spinner-layer spinner-blue">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
              <div class="spinner-layer spinner-red">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
            
              <div class="spinner-layer spinner-yellow">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
            
              <div class="spinner-layer spinner-green">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Pre-loader end -->
  <section class="login-block">
        <!-- Container-fluid starts -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <form class="md-float-material form-material" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="text-center">
                            <img  src="{{ asset('admin/assets') }}/images/logo.png" alt="logo.png" class="img-fluid mb-3" style="height: 70px">
                        </div>
                        <div class="auth-box card">
                            <div class="card-block">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center txt-primary">Sign up</h3>
                                    </div>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="text" name="nim" value="{{ old('nim') }}" required autofocus autocomplete="nim"  class="form-control">
                                    <span class="form-bar"></span>
                                    <label class="float-label">NIM</label>
                                    <x-input-error :messages="$errors->get('nim')" class="mt-2" />
                                </div>
                                <div class="form-group form-primary">
                                    <input type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name"  class="form-control">
                                    <span class="form-bar"></span>
                                    <label class="float-label">Nama</label>
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>
                                <div class="form-group form-primary">
                                    <input type="text" name="email" name="email" value="{{ old('email') }}" required autocomplete="username" class="form-control">
                                    <span class="form-bar"></span>
                                    <label class="float-label">Email Address</label>
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">
                                            <input type="password" name="password" name="password"
                                                required autocomplete="new-password" class="form-control">
                                            <span class="form-bar"></span>
                                            <label class="float-label">Password</label>
                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">
                                            <input type="password" type="password"
                                                name="password_confirmation" required autocomplete="new-password" class="form-control" required="">
                                            <span class="form-bar"></span>
                                            <label class="float-label">Confirm Password</label>
                                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-t-25 text-left">
                                    <div class="col-md-12">
                                        <div class="checkbox-fade fade-in-primary">
                                            <label>
                                                <input type="checkbox" value="">
                                                <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                <span class="text-inverse">I read and accept <a  href="{{ asset('admin/assets') }}#">Terms &amp; Conditions.</a></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkbox-fade fade-in-primary">
                                            <label>
                                                <input type="checkbox" value="">
                                                <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                <span class="text-inverse">Send me the <a  href="{{ asset('admin/assets') }}#!">Newsletter</a> weekly.</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        {{-- <button type="button" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Sign up now</button> --}}
                                        <x-primary-button class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">
                                            {{ __('Register') }}
                                        </x-primary-button>
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                                            {{ __('Sudah punya akun? Login') }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>
<!-- Warning Section Ends -->
<!-- Required Jquery -->
    <script type="text/javascript"  src="{{ asset('admin/assets') }}/js/jquery/jquery.min.js"></script>     <script type="text/javascript"  src="{{ asset('admin/assets') }}/js/jquery-ui/jquery-ui.min.js "></script>     <script type="text/javascript"  src="{{ asset('admin/assets') }}/js/popper.js/popper.min.js"></script>     <script type="text/javascript"  src="{{ asset('admin/assets') }}/js/bootstrap/js/bootstrap.min.js "></script>
<!-- waves js -->
<script  src="{{ asset('admin/assets') }}/pages/waves/js/waves.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript"  src="{{ asset('admin/assets') }}/js/jquery-slimscroll/jquery.slimscroll.js "></script>
<!-- modernizr js -->
    <script type="text/javascript"  src="{{ asset('admin/assets') }}/js/SmoothScroll.js"></script>     <script  src="{{ asset('admin/assets') }}/js/jquery.mCustomScrollbar.concat.min.js "></script>
<!-- i18next.min.js -->
<script type="text/javascript" src="bower_components/i18next/js/i18next.min.js"></script>
<script type="text/javascript" src="bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
<script type="text/javascript" src="bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>
<script type="text/javascript" src="bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>
<script type="text/javascript"  src="{{ asset('admin/assets') }}/js/common-pages.js"></script>
</body>

</html>
