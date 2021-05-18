<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فرنوی شخصیت‌پردازی</title>

    <link rel="stylesheet" href="{{ asset('farno/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('farno/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('farno/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('farno/css/landing.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('farno/img/fav.png') }}"/>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">

</head>

<body class="scrollNavData">

<header id="header" class="scrollNav-content">
    @include('layouts.menu')
    <div class="container">
        <div class="row header_cntnt">
            <div class="col-md-6">
                <div class="row">
                    <div class="hdr_cntnt_hedd">
                        <img src="{{ asset('farno/img/header_logo.png') }}" alt="img">
                    </div>
                    <div class="hdr_cntnt_bdy">
                        شخصیت‌پردازی، مبنای بازارپردازی (مرچندایزینگ) فرهنگی است. رویداد فرنو شخصیت‌پردازی، محلی
                        برای حمایت از ایده‌های نوین شخصیت‌پردازی برای آغاز مسیر بازارپردازی است. پس از همین الان
                        شروع کنید.
                    </div>


                </div>
                <div class="row">
                    <ul class="important_day">
                        <li class="day_event">مهلت ثبت نام:<span class="text-danger text-decoration-line-through">20 اردیبهشت 1400</span> ۱۰ خرداد ۱۴۰۰
                        </li>
                        <li class="day_event">زمان برگزاری رویداد: <span class="text-danger text-decoration-line-through">18 خرداد 1400</span> 6 تیر ۱۴۰۰</li>
                    </ul>
                </div>
                <div class="row">



                    <div class="holder_action">
                        @if (Auth::check())
                            <a class="action_link" href="{{ route('home') }}">حساب کاربری</a>
                        @else
                            <a class="action_link" href="{{ route('login') }}">ورود/ثبت‌نام</a>
                        @endif
                    </div>

                </div>
            </div>

            <div class="col-md-6">
                <div class="hdr_cntnt_hedl">
                    <img src="{{ asset('farno/img/header_bagTamdid.png') }}" alt="img">
                </div>

            </div>
            <!-- <div class="col-md-4"> -->
            <!-- <div class="hdr_img_bx"> -->
        <!-- <img class="img-fluid" src="{{ asset('farno/img/header_img.png') }}" alt="header_img"> -->
            <!-- </div> -->
            <!-- </div> -->
        </div>
    </div>
</header>

<section id="about_sec">
            <section style="padding-top: 0px" id="tabs_sec" class="scrollNav-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="tab">
                                <div id="tabOne" class="tabcontent">
                                    <div class="container">
                                        <div class="tab_cards">
                                            @foreach($news as $new)
                                            <div class="card">
                                                <a href="#" class="blogs_image_parent">
                                                    <div class="blogs_image_inner">
                                                        <img src="{{ asset('img/school_img4.jpg') }}" alt="Card image">
                                                    </div>
                                                </a>
                                                <div class="card-body">
                                                    <div class="crd_txt">
                                                        <div class="evnt_time">
                                                            <span>نویسنده: </span>
                                                            <p>{{ $new->authorId->name }}</p>
                                                        </div>
                                                        <div class="evnt_time">
                                                            <span>تاریخ: </span>
                                                            <p>{{ $new->created_at }}</p>
                                                        </div>
                                                        <p class="crd_title">{{ $new->title }}</p>
                                                        <p >
                                                            {!! $out = mb_strlen($new->body) > 150 ? mb_substr($new->body,0,150)."..." : $new->body  !!}     </p>
                                                    </div>
                                                    <div class="crd_btn_bx">
                                                        <button ><a
                                                                    href="{{ '/farno-char/news/'.$new->id }}">ادامه مطلب </a><span class="icon-Arrow---Left5"></span></button>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
</section>






<footer id="footer" class="scrollNav-content">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="footer_logo">
                    <img src="{{ asset('farno/img/footer_lgo.png') }}" alt="img">
                </div>
                <div class="sotial_icons">
                    <p>
                        فرنو؛ رویدادهای ماهانه برای حمایت از ایده‌های نوین فرهنگی برای تحقق بازارپردازی
                        (مرچندایزینگ) فرهنگی است. از مسیر فرنوها، دریچه‌ای برای ایجاد بازارهای نوین فرهنگی بوجود
                        می‌آید. </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact_bx">
                    <div class="contact_hed">
                        <h6>کارگزار رسمی برگزاری رویدادهای پیوند فرهنگی</h5>
                    </div>
                    <div class="contact_bdy">
                        <ul>
                            <li><span class="icon-Calling4"></span>&nbsp; <p>۰۲۱۶۶۵۶۶۹۰۳ - ۰۲۱۶۶۱۲۷۶۷۲
                                </p>
                            </li>
                            <li><span class="icon-mail3"></span>&nbsp; <p> info@sammarketinggroup.com</p>
                            </li>
                            <li><span class="icon-Location4"></span>&nbsp; <p> ميدان توحيد، خيابان نصرت غربی، کوچه
                                    بهمن، پلاک ۴، واحد ۱
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="contact_bx">
                    <div class="contact_hed">
                        <h6>دبیرخانه دائمی جشنواره بازارپردازی تهران</h5>
                    </div>
                    <div class="contact_bdy">
                        <ul>
                            <li><span class="icon-Calling4"></span>&nbsp; <p> ۰۲۱۸۶۰۵۴۲۱۷ - ۰۹۱۹۳۷۵۷۵۹۹</p>
                            </li>
                            <li><span class="icon-mail3"></span>&nbsp; <p> farno@farhangbonyan.ir</p>
                            </li>
                            <li><span class="icon-Location4"></span>&nbsp; <p> میدان‌ولیعصر، خیابان حجت دوست، پلاک
                                    ۴۷</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="copy_right">
                    <p>کليه حقوق مادي و معنوي محفوظ است </p>
                </div>

            </div>
        </div>
    </div>
</footer>




<script src="{{ asset('farno/js/jquery.min.js') }}"></script>
<script src="{{ asset('farno/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('farno/js/tabs.js') }}"></script>
<script src="{{ asset('farno/js/scroll_nav.js') }}"></script>

</body>

</html>
