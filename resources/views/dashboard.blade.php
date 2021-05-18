<!DOCTYPE html>
<html lang="en" dir="rtl"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta Tag -->

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
  <meta name="robots" content="">
  <meta property="og:title" content="">
<!--Start imber.live Widget--><script type="text/javascript">!(function(){window.IMBER_LANG = 'fa'; var a=window,d=document;function im(){window.IMBER_ID="z4uk2bpkkn2ptjl";window.IMBER_TOKEN=localStorage.getItem("imber_token");i=document.createElement("div");i.id="imber-top-parent";x=document;s=x.createElement("script");s.src="https://widget.imber.live/imber?id="+window.IMBER_ID+"&token="+window.IMBER_TOKEN;s.async=1;x.getElementsByTagName("head")[0].appendChild(s);x.getElementsByTagName("body")[0].appendChild(i);window.$imber={};}"complete"===d.readyState?im():a.attachEvent?a.attachEvent("onload",im):a.addEventListener("load",im,!1);})();</script><!--End imber.live Widget-->
<!--Start hantana.org Widget--><script type="text/javascript" defer>!(function (d, w, u, t, s, i) { w.addEventListener('readystatechange', function () { if (w.readyState === "interactive") i = document.documentElement.scrollTop }); function ha() { s = w.createElement("script"); d._hantanaSettings = { tId: t, i: i }; s.type = "text/javascript", s.async = !0, s.src = u + t; h = w.getElementsByTagName('head')[0]; h.appendChild(s); } "complete" === w.readyState ? ha() : d.attachEvent ? d.attachEvent("onload", ha) : d.addEventListener("load", ha, !1); })(window, document, 'https://hantana.org/widget/', '6017d-a2cb2-290f5-ea189', 0);</script><!--End hantana.org Widget-->

<!-- Favicon -->
  <!-- <link rel="icon" href="#"> -->

  <!-- Title -->
  <title>دالان فرهنگ‌بنیان | صفحه کاربری</title>

  <!-- Stylesheet -->
  <link rel="Stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="Stylesheet" href="{{ asset('css/font.css') }}">
  <link rel="Stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

  <!-- Start: Header -->
  <header class="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-blue">
      <div class="container">
        <a class="mr-0 navbar-brand" href="#"><img src="{{ asset('img/logo1.png') }}" alt="logo"></a>
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
              <a class="nav-link d-flex align-items-center" href="#">پیچ ها</a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center" href="#">اعضا</a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center" href="#">درباره فرنو</a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center" href="#">ارتباط با ما</a>
            </li> --}}
          </ul>
          {{-- <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="عنوان پیچ یا فعال فرهنگی کننده">
          </form> --}}
          <div class="profile-alert">
            {{-- <a href="#" class="number-new-message">
              <img class="ml-4" src="{{ asset('img/d-bell.png') }}" alt="bell">
              <span>3</span>
            </a> --}}
            <div class="profile-box">
              <div class="dropdown">
                {{-- <button class="none-border" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button> --}}
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item " href="#">پروفایل</a>
                  <a class="dropdown-item" href="#">ثبت پیچ</a>
                  <a class="dropdown-item" href="#">{{ !empty(Auth::user()->company) ? 'ثبت اطلاعات فعال فرهنگی' : 'ویرایش اطلاعات فعال فرهنگی' }}</a>
                  {{-- <a class="dropdown-item" href="#">پیام ها</a> --}}
                  <a class="dropdown-item" href="#">خروج</a>
                </div>
              </div>
              <a href="{{ route('logout') }}" class="text-white">خروج</a>
            </div>
          </div>
        </div>
    </div></nav>

  </header>
  <!-- End: Header -->

  <!-- Start: main body -->
  <div class="main p-dashboard1">
    <div class="container">
      <div class="row">
        <!-- Start: sidebar-->
        <div class="col-3 d-none d-md-block">
        <div class="inner-sidebar">
          <div class="sidebar">
            <div>
              <ul class="navbar-nav ml-auto mt-2 mt-lg-0 p-0">
                <li class="nav-item">
                  <a class="nav-link d-flex align-items-center " href="{{ route('user-pitch.create') }}">
                    <div><img src="{{ asset('img/add.png') }}" alt="add"></div>
                    <span>ثبت طرح برای ارائه (Pitch)</span>
                  </a>
                </li>
                <li class="nav-item active">

                  <a class="nav-link d-flex align-items-center" href="#">
                    <div><img src="{{ asset('img/dashboard.png') }}" alt="dashboard"></div>
                    <span>داشبورد</span>
                  </a>
                </li>
                {{-- <li class="nav-item">
                  <a class="nav-link d-flex align-items-center" href="#">
                    <div><img src="{{ asset('img/pitch.png') }}" alt="pitch"></div>
                    <span>پیچ ها</span>
                  </a>
                </li> --}}
                <li class="nav-item">
                  <a class="nav-link d-flex align-items-center" href="{{ url('company-information/create') }}">
                    <div><img src="{{ asset('img/business-and-trade1.png') }}" alt="business-and-trade1"></div>
                    <span>{{ !empty(Auth::user()->company) ? 'ویرایش اطلاعات فعال فرهنگی' : 'ثبت اطلاعات فعال فرهنگی' }}</span>
                  </a>
                </li>
                {{-- <li class="nav-item">
                  <a class="nav-link d-flex align-items-center" href="#">
                    <div><img src="{{ asset('img/message.png') }}" alt="message"></div>
                    <span>پیام ها</span>
                  </a>
                </li> --}}
              </ul>
            </div>
            {{-- <div>
              <ul class="navbar-nav ml-auto mt-2 mt-lg-0 p-0">
                <li class="nav-item">
                  <a class="nav-link d-flex align-items-center " href="#">
                    <div><img src="{{ asset('img/Setting.png') }}" alt="Setting"></div>
                    <span>تنظیمات</span>
                  </a>
                </li>
              </ul>
            </div> --}}
          </div>
        </div>
        </div>
        <!-- End: sidebar -->
        <div class="col-12 col-md-9">
        <!-- REVIEW: for showing this alert: remove `d-none` class and add `d-flex`-->

        @if (\Session::has('success'))
        <div id="successChangesAlert" class="d-none alert alert-primary alert-dismissible fade show mt-3 d-flex align-items-center justify-content-between" role="alert">
          <div>{!! \Session::get('success') !!}</div>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span class="vertical-align-middle" aria-hidden="true">&times;</span>
          </button>
        </div>
        @endif
        <div class="content mt-3">
          <ul class="nav pr-0 d-flex d-md-none">
            <li class="nav-item">
              <a class="nav-link active" href="{{ route('home') }}">داشبورد</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">ثبت طرح برای ارائه (Pitch)</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('company-information/create') }}">{{ !empty(Auth::user()->company) ? 'ویرایش اطلاعات فعال فرهنگی' : 'ثبت اطلاعات فعال فرهنگی' }}</a>
            </li>

          </ul>
          <div class="row">
            <div class="col-12">
              <div class="middle-content">
                <!-- Start: stat-->
                <div class="stat">
                  <div class="stat-card review">
                    <div class="right-stat-card">
                      <span>0</span>
                      <span>بازدیدها</span>
                    </div>
                    <div class="left-stat-card">
                      <div><img src="{{ asset('img/review.svg') }}" alt="review"></div>
                    </div>
                  </div>
                  <div class="stat-card follower">
                    <div class="right-stat-card">
                      <span>0</span>
                      <span>دنبال‌کنندگان</span>
                    </div>
                    <div class="left-stat-card">
                      <div><img src="{{ asset('img/follower.svg') }}" alt="follower"></div>
                    </div>
                  </div>
                  <div class="stat-card pitch">
                    <div class="right-stat-card">
                      <span>{{ count(Auth::user()->pitches) ?? '0' }}</span>
                      <span>پیچ‌ها</span>
                    </div>
                    <div class="left-stat-card">
                      <div><img src="{{ asset('img/pitch-w.svg') }}" alt="pitch-w"></div>
                    </div>
                  </div>
                  <div class="stat-card present-event">
                    <div class="right-stat-card">
                      <span>0</span>
                      <span>رویدادهای حضور یافته</span>
                    </div>
                    <div class="left-stat-card">
                      <div><img src="{{ asset('img/icon-.svg') }}" alt="icon-"></div>
                    </div>
                  </div>
                </div>
                <!-- End: Stat -->
                <!--Start: banner -->
                <div class="banner">
                  <div class="right d-none d-md-block">
                    <img style="max-width: 80px;" src="{{ asset('img/img1.svg') }}" alt="img1">
                  </div>
                  <div class="left">
                    <h1 class="">به رویداد فرنو شخصیت‌پردازی خوش آمدید!</h1>
                    <p>شخصیت‌پردازی، مبنای بازارپردازی (مرچندایزینگ) فرهنگی است. رویداد فرنو شخصیت‌پردازی، محلی برای حمایت از ایده‌های نوین شخصیت‌پردازی برای آغاز مسیر بازارپردازی است. پس از همین الان شروع کنید.</p>
                  </div>
                </div>
                <!--End: banner -->
                <div class="my-pitch">
                  <br>
                  <a href="javascript:;" class="btn btn-lg btn-primary">ثبت طرح برای ارائه (Pitch) </a>
                  <a href="javascript:;" class="btn btn-lg btn-primary m-2">آموزش </a>
                </div>
                <!-- Start: pitch -->
                <div class="my-pitch">
                  <h4 class="txt-blue">پیچ های من</h4>
                  <div class="card-box">
                    <div class="d-card">
                      <div class="row">
                        <div class="col-12 details">
                          @if (Auth::user()->company)

                          @else

                          @endif

                          @forelse (Auth::user()->pitches as $pitch)
                          <div class="d-card">
                            <div class="right-box">
                              <div><img src="{{ !empty($pitch->image()) ? asset($pitch->image()->filename) : asset('img/pitch1.png') }}" alt="pitch1"></div>
                            </div>
                            <div class="left-box w-100">
                              <div class="row">
                                <div class="col-12 text-left edit-box">
                                  <a href="{{ route('user-pitch.edit', $pitch->id) }}"><img src="{{ asset('img/edit1.png') }}" alt="edit1"></a>
                                  <span  data-toggle="modal" data-target="#DeletePitchModal-{{ $pitch->id }}"><img src="{{ asset('img/delete.png') }}" alt="delete"></span>
                                </div>
                                <div class="col-12 title">
                                  <p class="txt-blue">{{ $pitch->title }}</p>
                                </div>
                                <div class="col-12 details">
                                  <p class="txt-gray"> {{ $pitch->excerpt() }}</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          @empty
                          <h4>جای پیچ شما خالی است.</h4>
                          @endforelse

                        </div>
                      </div>
                    </div>
                    {{-- <div class="d-card">
                      <div class="right-box">
                        <div><img src="{{ asset('img/pitch1.png') }}" alt="pitch1"></div>
                      </div>
                      <div class="left-box">
                        <div class="row">
                          <div class="col-12 text-left edit-box">
                            <span><img src="{{ asset('img/edit1.png') }}" alt="edit1"></span>
                            <span><img src="{{ asset('img/delete.png') }}" alt="delete"></span>
                          </div>
                          <div class="col-12 title">
                            <p class="txt-blue">پیچ فلان</p>
                          </div>
                          <div class="col-12 details">
                            <p class="txt-gray">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده
                              از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است،
                              و برای شرایط فعلی</p>
                          </div>
                        </div>
                      </div>
                    </div> --}}
                    {{-- <div class="d-card">
                      <div class="right-box">
                        <div><img src="{{ asset('img/pitch3.png') }}" alt="pitch3"></div>
                      </div>
                      <div class="left-box">
                        <div class="row">
                          <div class="col-12 text-left edit-box">
                            <span><img src="{{ asset('img/edit1.png') }}" alt="edit1"></span>
                            <span><img src="{{ asset('img/delete.png') }}" alt="delete"></span>
                          </div>
                          <div class="col-12 title">
                            <p class="txt-blue">پیچ فلان</p>
                          </div>
                          <div class="col-12 details">
                            <p class="txt-gray">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده
                              از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است،
                              و برای شرایط فعلی</p>
                          </div>
                        </div>
                      </div>
                    </div> --}}
                  </div>
                </div>
                <!-- End: pitch -->
              </div>
            </div>
            <!-- Start: left -->

            <!-- End: right -->
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>

  <!-- REVIEW: Modal for Delete Pitch -->
  @foreach (Auth::user()->pitches as $pitch)
  <div class="modal fade" id="DeletePitchModal-{{ $pitch->id }}" tabindex="-1" aria-labelledby="DeletePitchModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content dashboardModal-content">
        <div class="modal-body text-center ">
          <h2 class="my-4">حذف پیچ</h2>
          <div class="mb-5 pitch-modal-info">
            آیا از حذف این پیچ مطمئن هستید؟
          </div>
          <div class="my-4">
            <!-- REVIEW: call your event here -->
            {!! Form::open(array('method' => 'DELETE', 'route' => array('user-pitch.destroy', $pitch->id))) !!}
            <button type="submit" class="pitch-modal-btn pitch-delete-btn mx-3">حذف</button>
            {!! Form::close() !!}
            <button type="button" class="pitch-modal-btn pitch-cancel-btn mx-3" data-dismiss="modal">انصراف</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endforeach
  <!-- ------------------------------ -->

  <!-- REVIEW: Modal for Delete Pitch -->
  <div class="modal fade" id="DeletePitchModal" tabindex="-1" aria-labelledby="DeletePitchModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content dashboardModal-content">
        <div class="modal-body text-center ">
          <h2 class="my-4">حذف پیچ</h2>
          <div class="mb-5 pitch-modal-info">
            آیا از حذف این پیچ مطمئن هستید؟
          </div>
          <div class="my-4">
            <!-- REVIEW: call your event here -->
            <button type="button" class="pitch-modal-btn pitch-delete-btn mx-3">حذف</button>
            <button type="button" class="pitch-modal-btn pitch-cancel-btn mx-3" data-dismiss="modal">انصراف</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ------------------------------ -->

  <!-- REVIEW: Modal(alert) for ssuccessful registration -->

  <div class="modal fade dashboard-information-modal" id="SuccessRegModal" tabindex="-1" aria-labelledby="SuccessRegModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content dashboardModal-content">
        <div class="modal-body text-center py-5 my-3">
          <img width="32px" class="img-fluid" src="{{ asset('icons/tick.png') }}" alt="">
          <div class="my-3 pitch-modal-info">
            اطلاعات با موفقیت ثبت گردید
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- **** NOTE: for execute this modal use this code `$('#SuccessRegModal').modal('show')` **** -->
  <!-- ------------------------------------------------- -->

  <!-- REVIEW: Modal(alert) for Failed registration -->
  <div class="modal fade dashboard-information-modal" id="failedRegModal" tabindex="-1" aria-labelledby="failedRegModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content dashboardModal-content">
        <div class="modal-body text-center py-5 my-3">
          <img width="32px" class="img-fluid" src="{{ asset('icons/close.png') }}" alt="">
          <div class="my-3 pitch-modal-info">
            اختلالی پیش آمده، دوباره تلاش نمایید
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- **** NOTE: for execute this modal use this code `$('#failedRegModal').modal('show')` **** -->
  <!-- ------------------------------------------------- -->


  <!-- End: main body -->
  <!-- scripts -->
  <script src="{{ asset('js/jquery-3.2.1.min.js.download') }}"></script>
  <script src="{{ asset('js/bootstrap.bundle.min.js.download') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js.download') }}"></script>

</body></html>
