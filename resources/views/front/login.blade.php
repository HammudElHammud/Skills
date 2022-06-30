{{--<!DOCTYPE html>--}}
{{--<html>--}}
{{--<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>--}}
{{--<head><title>Sign In</title>--}}
{{--    <style>#loader {--}}
{{--            transition: all .3s ease-in-out;--}}
{{--            opacity: 1;--}}
{{--            visibility: visible;--}}
{{--            position: fixed;--}}
{{--            height: 100vh;--}}
{{--            width: 100%;--}}
{{--            background: #fff;--}}
{{--            z-index: 90000--}}
{{--        }--}}

{{--        #loader.fadeOut {--}}
{{--            opacity: 0;--}}
{{--            visibility: hidden--}}
{{--        }--}}

{{--        .spinner {--}}
{{--            width: 40px;--}}
{{--            height: 40px;--}}
{{--            position: absolute;--}}
{{--            top: calc(50% - 20px);--}}
{{--            left: calc(50% - 20px);--}}
{{--            background-color: #333;--}}
{{--            border-radius: 100%;--}}
{{--            -webkit-animation: sk-scaleout 1s infinite ease-in-out;--}}
{{--            animation: sk-scaleout 1s infinite ease-in-out--}}
{{--        }--}}

{{--        @-webkit-keyframes sk-scaleout {--}}
{{--            0% {--}}
{{--                -webkit-transform: scale(0)--}}
{{--            }--}}
{{--            100% {--}}
{{--                -webkit-transform: scale(1);--}}
{{--                opacity: 0--}}
{{--            }--}}
{{--        }--}}

{{--        @keyframes sk-scaleout {--}}
{{--            0% {--}}
{{--                -webkit-transform: scale(0);--}}
{{--                transform: scale(0)--}}
{{--            }--}}
{{--            100% {--}}
{{--                -webkit-transform: scale(1);--}}
{{--                transform: scale(1);--}}
{{--                opacity: 0--}}
{{--            }--}}
{{--        }</style>--}}
{{--    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">--}}
{{--</head>--}}
{{--<body class="app">--}}
{{--<div id="loader">--}}
{{--    <div class="spinner"></div>--}}
{{--</div>--}}
{{--<script type="text/javascript">window.addEventListener('load', () => {--}}
{{--        const loader = document.getElementById('loader');--}}
{{--        setTimeout(() => {--}}
{{--            loader.classList.add('fadeOut');--}}
{{--        }, 300);--}}
{{--    });</script>--}}
{{--<div class="peers ai-s fxw-nw h-100vh">--}}
{{--    <div class="d-n@sm- peer peer-greed h-100 pos-r bgr-n bgpX-c bgpY-c bgsz-cv w-100px"--}}
{{--         style="background-image:url('{{ asset('assets/img/bg.jpg') }}');">--}}
{{--        <div class="pos-a centerXY">--}}
{{--            <div class="bgc-white bdrs-50p pos-r" style="width:120px;height:120px"><img class="pos-a centerXY"--}}
{{--                                                                                        style="max-width: 100px;"--}}
{{--                                                                                        src="{{ $configs->logoUrl }}"--}}
{{--                                                                                        alt=""></div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="col-12 col-md-4 peer pX-40 pY-80 h-100 bgc-white scrollable pos-r" style="min-width:320px"><h4--}}
{{--            class="fw-300 c-grey-900 mB-40">Login</h4>--}}
{{--        <form method="post" action="{{ localized_route('front.post_login') }}">--}}
{{--            @csrf--}}
{{--            <div class="form-group"><label class="text-normal text-dark">Username</label>--}}
{{--                <input type="email"--}}
{{--                       name="email"--}}
{{--                       required--}}
{{--                       class="form-control"--}}
{{--                       placeholder="Email Address">--}}
{{--            </div>--}}
{{--            <div class="form-group"><label class="text-normal text-dark">Password</label>--}}
{{--                <input type="password"--}}
{{--                       name="password"--}}
{{--                       required--}}
{{--                       class="form-control"--}}
{{--                       placeholder="Password">--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}
{{--                <div class="peers ai-c jc-sb fxw-nw">--}}
{{--                    <div class="peer">--}}
{{--                        <div class="checkbox checkbox-circle checkbox-info peers ai-c">--}}
{{--                            <input type="checkbox"--}}
{{--                                   id="inputCall1"--}}
{{--                                   name="remember"--}}
{{--                                   value="1"--}}
{{--                                   class="peer"><label--}}
{{--                                for="inputCall1" class="peers peer-greed js-sb ai-c">--}}
{{--                                <span class="peer peer-greed">Remember Me</span>--}}
{{--                            </label>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="peer">--}}
{{--                        <button class="btn btn-primary">Login</button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="pt-3">--}}
{{--                    <a href="{{ route('front.auth.redirect') }}" class="fb connect w-100 ">Sign in with Facebook</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<script type="text/javascript" src="{{ asset('assets/js/vendor.js') }}"></script>--}}
{{--<script type="text/javascript" src="{{ asset('assets/js/bundle.js') }}"></script>--}}
{{--</body>--}}
{{--</html>--}}

    <!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com/etc/lf/Login_v18/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 May 2021 17:58:02 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <title>Login V18</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{ asset("login/images/icons/favicon.ico")}}"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset("login/vendor/bootstrap/css/bootstrap.min.css")}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset("login/fonts/font-awesome-4.7.0/css/font-awesome.min.css")}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset("login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css")}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset("login/vendor/animate/animate.css")}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset("login/vendor/css-hamburgers/hamburgers.min.css")}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset("login/vendor/animsition/css/animsition.min.css")}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset("login/vendor/select2/select2.min.css")}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset("login/vendor/daterangepicker/daterangepicker.css")}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset("login/css/util.css")}}">
    <link rel="stylesheet" type="text/css" href="{{ asset("login/css/main.css")}}">
    <!--===============================================================================================-->
    <meta name="robots" content="noindex, follow">
</head>
<body style="background-color: #666666;">

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form action="{{ localized_route('front.post_login') }}" method="POST" class="login100-form validate-form">
				@csrf
					<span class="login100-form-title p-b-43">

					</span>


                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <input class="input100" type="text" placeholder="Email Address "  name="email" required>
                    <span class="focus-input100"></span>
                    <span class="label-input100">Email</span>
                </div>


                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100" type="password" name="password"  required>
                    <span class="focus-input100"></span>
                    <span class="label-input100">Password</span>
                </div>

                <div class="flex-sb-m w-full p-t-3 p-b-32">
                    <div class="contact100-form-checkbox">
                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember">
                        <label class="label-checkbox100" for="ckb1">
                            Remember me
                        </label>
                    </div>

                    <div>
                        <a href="#" class="txt1">
                        </a>
                    </div>
                </div>


                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Login
                    </button>
                </div>

                <div class="text-center p-t-46 p-b-20">
						<span class="txt2">
						</span>
                </div>

                <div class="login100-form-social flex-c-m">
                    <a href="{{ route('front.auth.redirect') }}" class="login100-form-social-item flex-c-m bg1 m-r-5">
                        <i class="fa fa-facebook-f" aria-hidden="true"></i>
                    </a>


                </div>
            </form>

            <div class="login100-more" style="background-image: url('login/images/bg-01.jpg');">
            </div>
        </div>
    </div>
</div>





<!--===============================================================================================-->
<script src="{{ asset("login/vendor/jquery/jquery-3.2.1.min.js")}}"></script>
<!--===============================================================================================-->
<script src="{{ asset("login/vendor/animsition/js/animsition.min.js")}}"></script>
<!--===============================================================================================-->
<script src="{{ asset("login/vendor/bootstrap/js/popper.js")}}"></script>
<script src="{{ asset("login/vendor/bootstrap/js/bootstrap.min.js")}}"></script>
<!--===============================================================================================-->
<script src="{{ asset("login/vendor/select2/select2.min.js")}}"></script>
<!--===============================================================================================-->
<script src="{{ asset("login/vendor/daterangepicker/moment.min.js")}}"></script>
<script src="{{ asset("login/vendor/daterangepicker/daterangepicker.js")}}"></script>
<!--===============================================================================================-->
<script src="{{ asset("login/vendor/countdowntime/countdowntime.js")}}"></script>
<!--===============================================================================================-->
<script src="{{ asset("login/js/main.js")}}"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>
<script defer src="../../../../static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"656120fb0ef0cbb8","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.5.1","si":10}'></script>
</body>

</html>
