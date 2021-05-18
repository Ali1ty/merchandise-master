<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
    
<head>
    <!--Start imber.live Widget--><script type="text/javascript">!(function(){window.IMBER_LANG = 'fa'; var a=window,d=document;function im(){window.IMBER_ID="z4uk2bpkkn2ptjl";window.IMBER_TOKEN=localStorage.getItem("imber_token");i=document.createElement("div");i.id="imber-top-parent";x=document;s=x.createElement("script");s.src="https://widget.imber.live/imber?id="+window.IMBER_ID+"&token="+window.IMBER_TOKEN;s.async=1;x.getElementsByTagName("head")[0].appendChild(s);x.getElementsByTagName("body")[0].appendChild(i);window.$imber={};}"complete"===d.readyState?im():a.attachEvent?a.attachEvent("onload",im):a.addEventListener("load",im,!1);})();</script><!--End imber.live Widget-->
    
    <!--Start hantana.org Widget--><script type="text/javascript" defer>!(function (d, w, u, t, s, i) { w.addEventListener('readystatechange', function () { if (w.readyState === "interactive") i = document.documentElement.scrollTop }); function ha() { s = w.createElement("script"); d._hantanaSettings = { tId: t, i: i }; s.type = "text/javascript", s.async = !0, s.src = u + t; h = w.getElementsByTagName('head')[0]; h.appendChild(s); } "complete" === w.readyState ? ha() : d.attachEvent ? d.attachEvent("onload", ha) : d.addEventListener("load", ha, !1); })(window, document, 'https://hantana.org/widget/', '6017d-a2cb2-290f5-ea189', 0);</script><!--End hantana.org Widget-->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta Tag -->
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta property="og:title" content="">

    <!-- Favicon -->
    <!-- <link rel="icon" href="#"> -->

    <!-- Title -->
    <title>{{ 'دالان فرهنگ‌بنیان | ' }}@yield('title')</title>

    <!-- Stylesheet -->
    <link rel="Stylesheet" href="{{ asset('pitch/css/bootstrap.min.css') }}">
    <link rel="Stylesheet" href="{{ asset('pitch/css/dropzone.css') }}">
    <link rel="Stylesheet" href="{{ asset('pitch/css/font.css') }}">
    <link rel="Stylesheet" href="{{ asset('pitch/css/style.css') }}">
</head>

<body>

    <!-- Start: Header -->
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-blue">
            <div class="container">
                <a class="mr-0 navbar-brand" href="#"><img src="{{ asset('images/logo1.png') }}" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('/home') }}">پنل کاربری <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('/farno-char') }}">رویداد فرنو شخصیت پردازی</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="#">پیچ ها</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">اعضا</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">درباره فرنو</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">ارتباط با ما</a>
                        </li> --}}
                    </ul>
                    {{-- <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="عنوان پیچ یا شرکت کننده">
                    </form> --}}
                    <div class="profile-alert">
                        {{-- <a href="" class="number-new-message">
                            <img class="ml-4" src="{{ asset('images/d-bell.png') }}" alt="bell">
                            <span>3</span>
                        </a> --}}
                        <div class="profile-box">
                            <div class="dropdown">
                                {{-- <button class="none-border" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button> --}}
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item " href="">پروفایل</a>
                                    <a class="dropdown-item" href="">ثبت پیچ</a>
                                    <a class="dropdown-item" href="">ثبت اطلاعات شرکت</a>
                                    <a class="dropdown-item" href="">پیام ها</a>
                                    <a class="dropdown-item" href="">خروج</a>
                                </div>
                            </div>
                            <a class="text-white" href="{{ route('logout') }}">خروج</a>
                        </div>
                    </div>
                </div>
        </div></nav>
        
    </header>
    <!-- End: Header -->

    <!-- Start: main body -->
    <div class="main p-documents p-pitch-register4">
        <div class="container">
            @yield('content')

            <!-- End: content -->
        </div>
    </div>
    <!-- End: main body -->
    <!-- scripts -->
    <script src="{{ asset('pitch/js/jquery-3.2.1.min.js.download') }}"></script>
    <script src="{{ asset('pitch/js/bootstrap.bundle.min.js.download') }}"></script>
    <script src="{{ asset('pitch/js/bootstrap.min.js.download') }}"></script>
    <script src="{{ asset('pitch/js/dropzone.js.download') }}"></script>
    <script src="{{ asset('pitch/js/d-main.js.download') }}"></script>
    <script>
        // dropzone
        $("div#myId").dropzone({ url: "/file/post" });
    </script>

@yield('footer-assets')
<input type="file" multiple="multiple" class="dz-hidden-input" style="visibility: hidden; position: absolute; top: 0px; left: 0px; height: 0px; width: 0px;"><input type="file" multiple="multiple" class="dz-hidden-input" style="visibility: hidden; position: absolute; top: 0px; left: 0px; height: 0px; width: 0px;"><input type="file" multiple="multiple" class="dz-hidden-input" style="visibility: hidden; position: absolute; top: 0px; left: 0px; height: 0px; width: 0px;"><input type="file" multiple="multiple" class="dz-hidden-input" style="visibility: hidden; position: absolute; top: 0px; left: 0px; height: 0px; width: 0px;"></body></html>