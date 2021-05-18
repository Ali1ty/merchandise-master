<!DOCTYPE html>
<html lang="fa">

<head>
    <!--Start imber.live Widget--><script type="text/javascript">!(function(){window.IMBER_LANG = 'fa'; var a=window,d=document;function im(){window.IMBER_ID="z4uk2bpkkn2ptjl";window.IMBER_TOKEN=localStorage.getItem("imber_token");i=document.createElement("div");i.id="imber-top-parent";x=document;s=x.createElement("script");s.src="https://widget.imber.live/imber?id="+window.IMBER_ID+"&token="+window.IMBER_TOKEN;s.async=1;x.getElementsByTagName("head")[0].appendChild(s);x.getElementsByTagName("body")[0].appendChild(i);window.$imber={};}"complete"===d.readyState?im():a.attachEvent?a.attachEvent("onload",im):a.addEventListener("load",im,!1);})();</script><!--End imber.live Widget-->
    <!--Start hantana.org Widget--><script type="text/javascript" defer>!(function (d, w, u, t, s, i) { w.addEventListener('readystatechange', function () { if (w.readyState === "interactive") i = document.documentElement.scrollTop }); function ha() { s = w.createElement("script"); d._hantanaSettings = { tId: t, i: i }; s.type = "text/javascript", s.async = !0, s.src = u + t; h = w.getElementsByTagName('head')[0]; h.appendChild(s); } "complete" === w.readyState ? ha() : d.attachEvent ? d.attachEvent("onload", ha) : d.addEventListener("load", ha, !1); })(window, document, 'https://hantana.org/widget/', '6017d-a2cb2-290f5-ea189', 0);</script><!--End hantana.org Widget-->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ 'دالان فرهنگ‌بنیان | ' }} @yield('title')</title>
    <meta name="author" content="امیرمسعود مهرابیان" />
    <meta name="description" content="فرنو" />
    <meta name="keywords" content="فرنو" />
    <link rel="manifest" href="/site.webmanifest">

    <link rel="stylesheet" href="https://unpkg.com/persian-datepicker@1.1.3/dist/css/persian-datepicker.css">
    <link href="{{asset('fontawesome/css/all.css')}}" rel="stylesheet" />
    <link href=" {{asset('css/circle.css')}}" rel="stylesheet" />
    <link href=" {{asset('css/app.css')}}" rel="stylesheet" />
    <!--Replace with your tailwind.css once created-->
    {{-- <link href="{{asset('css/animate.min.css')}}" rel="stylesheet" /> --}}
</head>

<body class="font-sans leading-normal tracking-normal bg-gray-100">
    <div id="app">
            
        <!-- Second nav -->

        @yield('content')


        </div>
        <script src="{{asset('js/app.js')}}"></script>

        <script src="https://unpkg.com/popper.js@1/dist/umd/popper.min.js"></script>
        <script src="https://unpkg.com/tippy.js@4"></script>
        <script src="https://unpkg.com/persian-date@1.0.5/dist/persian-date.js"></script>
        <script src="https://unpkg.com/persian-datepicker@1.1.3/dist/js/persian-datepicker.js"></script>
        <script src="{{URL::asset('js/main.js')}}"></script>

        <script>
            //Init tooltips
            tippy(".avatar");
        </script>

        @yield('footer-assets')
    </div>
</body>

</html>