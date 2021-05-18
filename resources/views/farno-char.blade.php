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
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="process_title">
						<div class="down_arrow_bx"><img src="{{ asset('farno/img/down-arrow.svg') }}" alt="arrow"></div>
						<div class="fa_title">فرنوی شخصیت‌پردازی چیست؟<span> اهداف و درباره فرنوی شخصیت‌پردازی
							</span></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="row title_about_sec">
						<span>اهداف رویداد</span>
					</div>
					<div class="about_list">

						<div class="about_sot">
							<div class="about_item">
								<span>
									کمک به تولید و تامین محتوا و تکمیل زنجیره ارزش محصولات فرهنگی
								</span>
							</div>
							<div class="about_item">
								<span>
									شبکه سازی متخصصان و مربیان و ایده پردازان در حوزه محصولات فرهنگی
								</span>
							</div>
						</div>
						<div class="about_sot">
							<div class="about_item">
								<span>
									تجاری سازی مدل های کسب و کار بازارپردازی فرهنگی در اقتصاد کشور
								</span>
							</div>
							<div class="about_item">
								<span>
									تسهیل در توسعه بازارهای داخلی و بین المللی طرح های کسب و کار بازارپردازی فرهنگی
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="about_desc">
						<div class="row">
							<span>درباره رویداد</span>

						</div>
						<p> شخصیت پردازی، مبنای توسعه فعالیت‌های فرهنگی است که مبتنی بر مفهوم‌سازی شخصیت، محصولات و
							خدمات فرهنگی و هنری به یکدیگر زنجیر شده و بازارپردازی فرهنگی (Cultural merchandising) محقق
							می‌شود. تقریبا تجارب بازارپردازی در دنیا، حول یک یا چند شخصیت صورت گرفته و رفتارهای شخصیت که
							در محصولات فرهنگی متنوع بروز می‌کند، به عنوان الگوی مرجع برای رفتار مخاطبان تلقی می‌گردد.
							رویداد فرنوی شخصیت‌پردازی، بستری را فراهم می‌کند تا فعالان فرهنگی که در عرصه خلق و توسعه
							شخصیت فعالیت می‌کنند، از فرصت عادلانه و شفاف برای ارائه طرح شخصیت‌پردازی (Character
							Pitching) به توسعه دهندگان کسب و کارهای فرهنگی برخوردار گردند. در این رویداد، فعالان فرهنگی
							توسعه‌دهنده شخصیت، مبتنی بر آموزش‌ها و مربی‌گری‌ها، طرح خود را در قالب استاندارد ارائه
							(Pitch) می‌نمایند. فعالان فرهنگی شامل خالقان و توسعه‌دهندگان شخصیت، تولیدکنندگان پویانمایی،
							برنامه‌های عروسکی، بازی‌های ویدئویی، ناشران کتاب‌های تصویری و موارد مشابه به همراه توسعه
							دهندگان فرهنگی همانند مراکز نوآوری فرهنگی، شتابدهنده‌‌های محتوایی و تهیه‌کنندگان ارشد با
							حضور موثر در این رویداد، سعی می‌کنند در یک فضای شفاف، اقدام به تعامل با یکدیگر جهت انتخاب و
							توسعه شخصیت‌ نمایند.</p>
						<p>
							این رویداد با همکاری صندوق نوآوری و شکوفایی ریاست جمهوری در قالب سلسله رویدادهای پیوند
							فرهنگی در تاریخ 6 تیر ماه 1400 برگزار می‌گردد.

						</p>
					</div>

				</div>
			</div>
		</div>
	</section>




	<section id="process_sec">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="process_title">
						<div class="down_arrow_bx"><img src="{{ asset('farno/img/down-arrow.svg') }}" alt="arrow"></div>
						<div class="fa_title">فرایند<span>مـراحل شـرکت در فرنو شخصیت‌پردازی</span></div>
					</div>
					<div class="process_cntnt">
						<div class="row">
							<ul>
								<li class="p_li_one tablinks current" onClick="openDLL(event, 'ptabOne')">
									<div class="li_num num_one "><span>۱</span></div>
									<div class="li_cntnt">
										<h5>ثبت نام

										</h5>

									</div>
								</li>
								<li class="p_li_two tablinks" onClick="openDLL(event, 'ptabTwo')">
									<div class="li_num num_two"><span>۲</span></div>
									<div class="li_cntnt">
										<h5>آموزش</h5>

									</div>
								</li>
								<li class="p_li_three tablinks" onClick="openDLL(event, 'ptabThree')">
									<div class="li_num num_three"><span>۳</span></div>
									<div class="li_cntnt">
										<h5>تکمیل پیچ</h5>

									</div>
								</li>

								<li class="p_li_four tablinks" onClick="openDLL(event, 'ptabFour')">
									<div class="li_num num_four"><span>۴</span></div>
									<div class="li_cntnt">
										<h5>پیش ارائه</h5>

									</div>
								</li>
								<li class="p_li_five tablinks" onClick="openDLL(event, 'ptabFive')">
									<div class="li_num  num_five"><span>۵</span></div>
									<div class="li_cntnt">
										<h5>ارائه نهایی</h5>

									</div>
								</li>

							</ul>
						</div>
						<div class="row">
							<div class="process_tab">
								<div id="ptabOne" class="ptabcontent">
									<p>
										فعالان فرهنگی شامل خالقان و توسعه‌دهندگان شخصیت، تولیدکنندگان پویانمایی،
										برنامه‌های عروسکی، بازی‌های ویدئویی، ناشران کتاب‌های تصویری و سایر مجموعه‌هایی
										که در حوزه طراحی شخصیت و شخصیت‌پردازی می توانند در قالب تیم های چند نفره در این
										رویداد شرکت نمایند. ثبت نام تیم ها با تکمیل اطلاعات شرکت کنندگان به صورت کامل و
										با بارگذاری مدارک مورد نیاز نهایی می‌گردد.
									</p>

									<p>
										<span>مهلت ثبت نام: 10 خرداد</span>
									</p>
								</div>
								<div id="ptabTwo" class="ptabcontent">
									<p>
										برگزاری حدود 20 ساعت دوره آموزشی برای شرکت کنندگان در رویداد، از جمله فعالیت های
										اصلی این برنامه است. محتوای این دوره ها شامل دو بخش عمومی و اختصاصی در موضوعات
										مبانی شخصیت‌پردازی، مبانی پیچینگ شخصیت، اصول مذاکره تجاری‌سازی شخصیت، اقتصاد
										شخصیت و کسب و کارهای شخصیت‌پردازی است. همچنین شرکت کنندگان امکان دسترسی به
										محتواهای آموزشی مرتبط با دوره آموزشی را از مجموعه "مدرسه بازارپردازی" جهت
										آموزش‌های تکمیلی دارند.
									</p>
									<p>
										<span>دوره آموزش: ۲۵ تا ۲۷ اردیبهشت</span>
									</p>
								</div>
								<div id="ptabThree" class="ptabcontent">
									<p>
										تیم های شرکت کننده براساس دسترسی ایجاد شده با نام کاربری خودشان می بایست نسبت به
										تکمیل پیچ اقدام نمایند. ثبت اطلاعات اولیه اثر، معرفی تیم و شخصیت های طراحی شده و
										همچنین بارگذاری مستندات تصویری مناسب از جمله فعالیت های این بخش است.
									</p>
									<p>
										<span>دوره تکمیل پیچ: ۴ تا ۱۰ خرداد</span>
									</p>
								</div>
								<div id="ptabFour" class="ptabcontent">
									<p>
										در این مرحله، تیم ها پس از گذراندن دوره های آموزشی و همچنین تکمیل پیچ و همچنین
										استفاده از مربیان رویداد ، طرح شخصیت‌پردازی خود را به صورت اولیه برای مربیان
										ارائه خواهند نمود تا نکات و موارد اصلاحی به ایشان اعلام گردد. </p>
									<p>
										<span>زمان پیش ارائه: ۱۱ خرداد</span>
									</p>
								</div>
								<div id="ptabFive" class="ptabcontent">
									<p>
										پس از برگزاری پیش ارائه و مهلتی چند روزه، زمان ارائه نهایی طرح‌های شخصیت‌پردازی
										به توسعه دهندگان کسب و کارهای فرهنگی شامل مدیران مراکز نوآوری فرهنگی،
										شتابدهنده‌های محتوایی و تهیه‌کنندگان ارشد فرا می‌رسد. </p>
									<p>
										<span>ارائه نهایی: ۱۸ خرداد</span>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="safe_sec">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="safe_title">
						<div class="fa_title">حمایت‌ها<span>حمایت‌هایی که ارائه می‌شود</span></div>
					</div>
					<div class="safe_body">
						<div class="tab">
							<div class="tab-heading mt-3">
								<button class="tablinks active" onClick="openDL(event, 'tabOne')"
									id="defaultOpen">بازاربین
								</button>
								<button class="tablinks" onClick="openDL(event, 'tabTwo')"> ارزش آفرین
								</button>
								<button class="tablinks" onClick="openDL(event, 'tabThree')">اطمینان آفرین
								</button>
								<button class="tablinks" onClick="openDL(event, 'tabFour')">بازارآفرین
								</button>
								<button class="tablinks" onClick="openDL(event, 'tabFive')">بستر آفرین
								</button>
								<button class="tablinks" onClick="openDL(event, 'tabSix')">رضایت آفرین
								</button>
							</div>
							<div id="tabOne" class="tabcontent">
								<div class="container">

									<div class="row">

										<div class="col-md-2">
											<div class="tab_img_bx">
												<img src="{{ asset('farno/img/farno-1.png') }}" alt="img">
											</div>
										</div>
										<div class="col-md-10">
											<div class="tab_cntnt_bx">
												<h4>بازار بین</h4>
												<p>
													ارائه مجموعه خدمات و حمایت‌هایی ناظر به پشتیبانی از شناخت و تحلیل
													بازار و توسعه مدل‌های کسب و کار فرهنگی مورد توجه می‌باشد.
												</p>
												<button class="buttonDetail">برخی عناوین حمایت‌ها</button>
											</div>

										</div>
									</div>
									<div class="row">
										<div class=" col-md-12">
											<div class="detial">
												<ul>
													<li class="item">خدمت تحلیل نتایج پیش‌بازاریابی (اکران محدود)</li>
													<li class="item">ارائه خدمت تولید گزارش‌های تحقیقات بازار</li>
													<li class="item"> ارائه خدمت تولید گزارش‌های ذائقه‌سنجی و بازارسنجی
													</li>
													<li class="item"> توزیع محدود پیش‌تولیدها در درگاه‌های فروش و یا
														شبکه فروش چندمنظوره</li>
												</ul>
												<div class="tab_left_side">
													<img src="{{ asset('farno/img/client6.png') }}" alt="img">
													<img src="{{ asset('farno/img/client4.png') }}" alt="img">
													<img src="{{ asset('farno/img/client8.png') }}" alt="img">
													<img src="{{ asset('farno/img/client9.png') }}" alt="img">
													<img src="{{ asset('farno/img/client7.png') }}" alt="img">
													<img src="{{ asset('farno/img/client3.png') }}" alt="img">
													<img src="{{ asset('farno/img/client2.png') }}" alt="img">

												</div>
											</div>
										</div>
									</div>

								</div>

							</div>
							<div id="tabTwo" class="tabcontent">

								<div class="container">

									<div class="row">

										<div class="col-md-2">
											<div class="tab_img_bx">
												<img src="{{ asset('farno/img/farno-2.png') }}" alt="img">
											</div>
										</div>
										<div class="col-md-10">
											<div class="tab_cntnt_bx">
												<h4>ارزش آفرین</h4>
												<p>
													ارائه مجموعه‌ای از خدمات و حمایت‌های تخصصی در توسعه ایده‌پردازی،
													بکارگیری پلتفورم‌های تخصصی، خدمات مربی‌گری و خدمات تخصصی در مرحله
													تولید محصولات و خدمات فرهنگی در این بخش انجام می‌پذیرد.
												</p>
												<button class="buttonDetail">برخی عناوین حمایت‌ها</button>
											</div>

										</div>
									</div>
									<div class="row">
										<div class=" col-md-12">
											<div class="detial">
												<ul>
													<li class="item"> خدمات مربی گری (مدیریتی/فنی/هنری)</li>
													<li class="item"> ارائه خدمت تولید اپلیکیشن‌های کتاب تعاملی</li>
													<li class="item"> استفاده از شبکه تخصصی تولید (چاپ و نشر)</li>
													<li class="item"> توسعه پلتفورم‌های تلاقی‌دهنده زمینه‌های فرهنگی
														(چاپ، نشر الکترونیکی، کتاب گویا و...)</li>
												</ul>
												<div class="tab_left_side">
													<img src="{{ asset('farno/img/client4.png') }}" alt="img">
													<img src="{{ asset('farno/img/client8.png') }}" alt="img">
													<img src="{{ asset('farno/img/client5.png') }}" alt="img">
													<img src="{{ asset('farno/img/client7.png') }}" alt="img">
													<img src="{{ asset('farno/img/client2.png') }}" alt="img">

												</div>
											</div>
										</div>
									</div>

								</div>
							</div>
							<div id="tabThree" class="tabcontent">
								<div class="container">
									<div class="row">

										<div class="col-md-2">
											<div class="tab_img_bx">
												<img src="{{ asset('farno/img/farno-3.png') }}" alt="img">
											</div>
										</div>
										<div class="col-md-10">
											<div class="tab_cntnt_bx">
												<h4>اطمینان آفرین</h4>
												<p>
													مجموعه‌ای از خدمات و حمایت‌هایی که طی آن امکان ارائه تضامین یا
													اعتبارنامه ها برای تولید کننده محصول ایجاد می شود و همچنین امکان
													بازارسازی از طریق ارائه خدمات مالی همچون لیزینگ محصولات و یا گارانتی
													فروش در این بخش صورت می پذیرد. </p>
												<button class="buttonDetail">برخی عناوین حمایت‌ها</button>
											</div>

										</div>
									</div>
									<div class="row">
										<div class=" col-md-12">
											<div class="detial">
												<ul>
													<li class="item"> ایجاد سازوکارهای اعتبار مشتریان (خدمات
														باشگاه‌داری)</li>
													<li class="item"> ایجاد سازوکار می‌نیمم گارانتی فروش</li>
													<li class="item"> صدور ضمانت توانمندی فنی</li>
													<li class="item"> صدور اعتبار نامه مالی</li>
													<li class="item"> صدور ضمانت نامه حسن انجام کار</li>
													<li class="item"> ایجاد سازوکار خرید لیزینگی محصولات فرهنگی</li>
												</ul>
												<div class="tab_left_side">
													<img src="{{ asset('farno/img/client6.png') }}" alt="img">
													<img src="{{ asset('farno/img/client8.png') }}" alt="img">
													<img src="{{ asset('farno/img/client1.png') }}" alt="img">
													<img src="{{ asset('farno/img/client7.png') }}" alt="img">
													<img src="{{ asset('farno/img/client2.png') }}" alt="img">

												</div>
											</div>
										</div>
									</div>


								</div>
							</div>
							<div id="tabFour" class="tabcontent">
								<div class="container">
									<div class="row">

										<div class="col-md-2">
											<div class="tab_img_bx">
												<img src="{{ asset('farno/img/farno-4.png') }}" alt="img">
											</div>
										</div>
										<div class="col-md-10">
											<div class="tab_cntnt_bx">
												<h4>بازار آفرین</h4>
												<p>
													حمایت از تمامی فعالیت هایی که منجر به ترویج یا تبلیغ محصولات شده و
													یا به شبکه توزیع و فروش محصولات کمک کرده و در نهایت با ایجاد محصولات
													جانبی و مکمل محصول اصلی کمک به ساخت بازار معین می نماید.
												</p>

												<button class="buttonDetail">برخی عناوین حمایت‌ها</button>
											</div>

										</div>
									</div>
									<div class="row">
										<div class=" col-md-12">
											<div class="detial">
												<ul>
													<li class="item"> ارائه خدمات تخصصی ترویجی (نوشتن نقد تخصصی/پرونده
														خبری/...)</li>
													<li class="item"> حضور محصولات فرهنگی در مسابقات و لیگ‌ها</li>
													<li class="item"> شبکه فروشگاهی چندمنظوره</li>
													<li class="item"> نمونه‌سازی محصولات جانبی و مکمل (چاپ، نشر
														الکترونیک، کتاب تعاملی، کتاب گویا)</li>
													<li class="item"> نمونه‌سازی محصولات جانبی و مکمل (تنوع برنامه‌های
														تلویزیونی)</li>
													<li class="item"> ساخت برنامه‌های تلویزیونی ترویجی و تبلیغی</li>
													<li class="item"> برگزاری مسابقات و لیگ ها برای محصولات فرهنگی</li>
												</ul>
												<div class="tab_left_side">
													<img src="{{ asset('farno/img/client4.png') }}" alt="img">
													<img src="{{ asset('farno/img/client9.png') }}" alt="img">
													<img src="{{ asset('farno/img/client6.png') }}" alt="img">
													<img src="{{ asset('farno/img/client8.png') }}" alt="img">
													<img src="{{ asset('farno/img/client3.png') }}" alt="img">
													<img src="{{ asset('farno/img/client7.png') }}" alt="img">
													<img src="{{ asset('farno/img/client2.png') }}" alt="img">

												</div>
											</div>
										</div>
									</div>


								</div>
							</div>
							<div id="tabFive" class="tabcontent">
								<div class="container">
									<div class="row">

										<div class="col-md-2">
											<div class="tab_img_bx">
												<img src="{{ asset('farno/img/farno-5.png') }}" alt="img">
											</div>
										</div>
										<div class="col-md-10">
											<div class="tab_cntnt_bx">
												<h4>بستر آفرین</h4>
												<p>
													پوشش انواع خدمات و حمایت‌هایی که بسترهای لازم برای ارتقا کیفیت
													محصولات و خدمات فرهنگی را در فرآیند تولید فراهم می‌آورد که از آن
													جمله می‌توان به بسترهای مالی- اعتباری، سرمایه‌گذاری، ثبت و صیانت از
													مالکیت معنوی، تسهیل در صدور مجوزها، زیرساخت‌های کسب و کار و توسعه
													آموزش‌های متصل به تولید اشاره کرد.
												</p>

												<button class="buttonDetail">برخی عناوین حمایت‌ها</button>
											</div>

										</div>
									</div>
									<div class="row">
										<div class=" col-md-12">
											<div class="detial">
												<ul>
													<li class="item"> ثبت مالکیت معنوی در داخل</li>
													<li class="item"> ارائه خدمات حقوقی توسعه کسب و کارهای فرهنگی</li>
													<li class="item"> ارائه خدمات اخذ مجوزهای حقوقی</li>
													<li class="item"> ارائه خدمات مربی‌گری حقوقی و قراردادی</li>
													<li class="item"> تسهیل‌گری یا صدور موقت پروانه نمایش</li>
													<li class="item"> تسهیل‌گری یا صدور موقت مجوز نشر/چاپ</li>
													<li class="item"> مشوق‌های مالی (جوایز مالی)</li>
													<li class="item"> تامین مالی (انواع تسهیلات/مشارکت حقوقی یا مدنی)
													</li>
												</ul>
												<div class="tab_left_side">
													<img src="{{ asset('farno/img/client4.png') }}" alt="img">
													<img src="{{ asset('farno/img/client5.png') }}" alt="img">
													<img src="{{ asset('farno/img/client6.png') }}" alt="img">
													<img src="{{ asset('farno/img/client8.png') }}" alt="img">
													<img src="{{ asset('farno/img/client3.png') }}" alt="img">
													<img src="{{ asset('farno/img/client7.png') }}" alt="img">
													<img src="{{ asset('farno/img/client1.png') }}" alt="img">

												</div>
											</div>
										</div>
									</div>

								</div>
							</div>
							<div id="tabSix" class="tabcontent">
								<div class="container">
									<div class="row">

										<div class="col-md-2">
											<div class="tab_img_bx">
												<img src="{{ asset('farno/img/farno-6.png') }}" alt="img">
											</div>
										</div>
										<div class="col-md-10">
											<div class="tab_cntnt_bx">
												<h4>رضایت آفرین</h4>
												<p>
													ارائه خدمات و حمایت‌هایی با هدف ساماندهی بازخوردهای مخاطبان نسبت به
													مصرف محصولات و خدمات فرهنگی و با هدف پشتیبانی از بازارسازی فرهنگی
													صورت می‌گیرد. </p>

												<button class="buttonDetail">برخی عناوین حمایت‌ها</button>
											</div>

										</div>
									</div>
									<div class="row">
										<div class=" col-md-12">
											<div class="detial">
												<ul>
													<li class="item"> بازخوردگیری از شبکه ناشران و توزیع کنندگان</li>
													<li class="item"> ارائه خدمت پیش‌بازاریابی (نشر محدود)</li>
													<li class="item"> خدمات رتبه بندی</li>
													<li class="item"> تست محصولات تصویری (اکران‌های خاص و یا پخش برای
														گروه‌های خاص)</li>
													<li class="item"> اعطای جایزه ملی به محصولات پرمخاطب</li>
													<li class="item"> بازخوردگیری از فضای تست محصولات فرهنگی</li>
												</ul>
												<div class="tab_left_side">
													<img src="{{ asset('farno/img/client4.png') }}" alt="img">
													<img src="{{ asset('farno/img/client9.png') }}" alt="img">
													<img src="{{ asset('farno/img/client6.png') }}" alt="img">
													<img src="{{ asset('farno/img/client8.png') }}" alt="img">
													<img src="{{ asset('farno/img/client3.png') }}" alt="img">
													<img src="{{ asset('farno/img/client7.png') }}" alt="img">

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
	</section>

	<section id="mentors" class="sec_style">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="title_sec">
						<div class="fa_title">منتورها<span>منتورهایی رویداد فرنو شخصیت‌پردازی</span></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<div class="mentor">
						<img src="{{ asset('farno/img/mentor1.png') }}" alt="">
						<div class="name_mentor">
							<span> ایرج طهماسب</span>
						</div>
						<div class="title_mentor">
							طراح کاراکتر کلاه قرمزی
						</div>

					</div>
				</div>
				<div class="col-md-3">
					<div class="mentor">
						<img src="{{ asset('farno/img/mentor9.png') }}" alt="">
						<div class="name_mentor">
							<span> حمید مدرسی</span>
						</div>
						<div class="title_mentor">
							 تهیه‌کننده کلاه‌قرمزی</div>

					</div>
				</div>
				<div class="col-md-3">
					<div class="mentor">
						<img src="{{ asset('farno/img/mentor3.png') }}" alt="">
						<div class="name_mentor">
							<span>حجت الله ناظری</span>
						</div>
						<div class="title_mentor">
							حوزه هنری کودک و نوجوان </div>

					</div>
				</div>
				<div class="col-md-3">
					<div class="mentor">
						<img src="{{ asset('farno/img/mentor4.png') }}" alt="">
						<div class="name_mentor">
							<span> حامد تاملی</span>
						</div>
						<div class="title_mentor">
							مرکز نوآوری بازی- یادگیری دانادل </div>

					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<div class="mentor">
						<img src="{{ asset('farno/img/mentor2.png') }}" alt="">
						<div class="name_mentor	">
							<span> حمیدرضا بحرینی</span>
						</div>
						<div class="title_mentor">
							پارک تولید محتوای دیجیتال کشور </div>

					</div>
				</div>
				<div class="col-md-3">
					<div class="mentor">
						<img src="{{ asset('farno/img/mentor5.png') }}" alt="">
						<div class="name_mentor">
							<span> حسین شیخ الاسلامی</span>
						</div>
						<div class="title_mentor">
							شتابدهنده فلافل  </div>

					</div>
				</div>
				<div class="col-md-3">
					<div class="mentor">
						<img src="{{ asset('farno/img/mentor7.png') }}" alt="">
						<div class="name_mentor">
							<span>محمد مهدی جلالیان </span>
						</div>
						<div class="title_mentor">
							مدیرعامل استودیوی کمیکا </div>

					</div>
				</div>
				<div class="col-md-3">
					<div class="mentor">
						<img src="{{ asset('farno/img/mentor8.png') }}" alt="">
						<div class="name_mentor">
							<span> محمدحسن زمان وزیری</span>
						</div>
						<div class="title_mentor">
							مدیرعامل موسسه خیبر </div>

					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="needs" class="sec_style">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="title_sec">
						<div class="fa_title">نیازمندی‌های فرهنگی<span>خود را با نیازمندی های فرهنگی تطبیق دهید</span>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="need">
						<div class="content_need">
							<div class="title_need"> ترویج و فرهنگ‌سازی مفاهیم امداد و نجات در کودکان</div>
						</div>
						<div class="company_need">
							<img src="{{ asset('farno/img/client11.png') }}" alt="">

						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="need">

						<div class="content_need">
							<div class="title_need"> ترویج و فرهنگ‌سازی تشکیل خانواده</div>
						</div>
						<div class="company_need">
							<img src="{{ asset('farno/img/client16.png') }}" alt="">
						</div>
					</div>
				</div>


				<div class="col-md-4">
					<div class="need">

						<div class="content_need">
							<div class="title_need">ترویج و فرهنگ‌سازی شخصیت‌های ریزعروسکی</div>
						</div>
						<div class="company_need">
							<img src="{{ asset('farno/img/client2.png') }}" alt="">
						</div>
					</div>
				</div>

			</div>
	</section>

	<section id="clients">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="clients_title">
						<div class="fa_title">
							<span>حامیان، همکاران و مشارکت کنندگان </span>
							<div class="down_arrow_bx"><img src="{{ asset('farno/img/down-arrow.svg') }}" alt="arrow"></div>
						</div>
						<div class="en_title"><small>مجموعه‌هایی که با فرنو همراه شدند </div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="client_hed_bx">
						<img src="{{ asset('farno/img/investor1.png') }}" alt="img">
					</div>
					<div class="client_bdy_bx">
						<ul>
							<li><a href="#"><img src="{{ asset('farno/img/client5.png') }}" alt="img"></a></li>
							<li><a href="#"><img src="{{ asset('farno/img/client9.png') }}" alt="img"></a></li>
							<li><a href="#"><img src="{{ asset('farno/img/client1.png') }}" alt="img"></a></li>
							<li><a href="#"><img src="{{ asset('farno/img/client3.png') }}" alt="img"></a></li>
							<li><a href="#"><img src="{{ asset('farno/img/client6.png') }}" alt="img"></a></li>

							<li><a href="#"><img src="{{ asset('farno/img/client7.png') }}" alt="img"></a></li>
							<li><a href="#"><img src="{{ asset('farno/img/client4.png') }}" alt="img"></a></li>
							<li><a href="#"><img src="{{ asset('farno/img/client8.png') }}" alt="img"></a></li>
							<li><a href="#"><img src="{{ asset('farno/img/client2.png') }}" alt="img"></a></li>
						</ul>

					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="client_hed_bx">
						<img src="{{ asset('farno/img/investor2.png') }}" alt="img">
					</div>
					<div class="client_bdy_bx">
						<ul>
							<li><a href="#"><img src="{{ asset('farno/img/client15.png') }}" alt="img"></a></li>
							<li><a href="#"><img src="{{ asset('farno/img/client14.png') }}" alt="img"></a></li>
							<li><a href="#"><img src="{{ asset('farno/img/client11.png') }}" alt="img"></a></li>
							<li><a href="#"><img src="{{ asset('farno/img/client16.png') }}" alt="img"></a></li>
							<li><a href="#"><img src="{{ asset('farno/img/client12.png') }}" alt="img"></a></li>

							<li><a href="#"><img src="{{ asset('farno/img/client10.png') }}" alt="img"></a></li>
							<li><a href="#"><img src="{{ asset('farno/img/client13.png') }}" alt="img"></a></li>
							<li><a href="#"><img src="{{ asset('farno/img/client7.png') }}" alt="img"></a></li>
							<li><a href="#"><img src="{{ asset('farno/img/client2.png') }}" alt="img"></a></li>
						</ul>

					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="client_hed_bx">
						<div class="client_hed_img">
							<img src="{{ asset('farno/img/investor3.png') }}" alt="img">
						</div>
					</div>
					<div class="client_bdy_bx">
						<ul>
							<li><a href="#"><img src="{{ asset('farno/img/client5.png') }}" alt="img"></a></li>
							<li><a href="#"><img src="{{ asset('farno/img/client15.png') }}" alt="img"></a></li>
							<li><a href="#"><img src="{{ asset('farno/img/client17.png') }}" alt="img"></a></li>
							<li><a href="#"><img src="{{ asset('farno/img/client18.png') }}" alt="img"></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
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


	<div class="modal fade" id="videoModal">
		<div class="modal-dialog">
			<div class="modal-content">

				<!-- Modal Header -->
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<!-- Modal body -->
				<div class="modal-body">
					<video class="embed-responsive-item" controls>
						<source src="video/video1.mp4" type="video/mp4">
						Your browser does not support the video tag.
					</video>
				</div>

			</div>
		</div>
	</div>

	<script src="{{ asset('farno/js/jquery.min.js') }}"></script>
	<script src="{{ asset('farno/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('farno/js/tabs.js') }}"></script>
	<script src="{{ asset('farno/js/scroll_nav.js') }}"></script>
	<script>
		$(document).ready(function () {
			var s = new scrollNav();
			s.init();
		});
	</script>

	<script>
		$(document).ready(function () {
			$(".open_min_mnu").click(function (e) {
				e.preventDefault();
				$(".min_mnu_bx").toggleClass("open_min");
				$("body").toggleClass("no_scroll");
			})
			$(".close_mnu").click(function () {
				$(".min_mnu_bx").removeClass("open_min");
				$("body").removeClass("no_scroll");
			})

			$(".min_mnu_bx li").click(function () {
				$(this).find(".min_sub_mnu").fadeToggle();
			})

			$(".scrollNav-links span").click(function () {
				$(this).parentsUntil("li").find(".main_sub_mnu").fadeToggle();
			})

			/*stop video*/
			$('.modal').on('hidden.bs.modal', function (e) {
				$('.modal video')[0].pause();
			});

			$(".intro_img_filter span").click(function (evnt) {
				evnt.preventDefault();
			})

			if ($(document).width() < 1199) {
				$(".logo_box img").attr('src', 'farno/img/logo.png');
			}
			else {
				$(".logo_box img").attr('src', 'farno/img/logo.png');
			}

		});
	</script>

	<script>/* scroll menu */

		$('.buttonDetail').click(function () {
			$(this).parent().parent().parent().parent().parent().find(".detial").slideToggle();
		});


		$(window).scroll(function () {


			if ($(window).scrollTop() >= 450) {
				$(".header_top").css({
					position: "fixed",
					top: "0",
					zIndex: "9",
					width: "100%",
					margin: "0",
					left: "0",
					paddingRight: "20px"
				}).addClass("bgc_change");
			}
			else {
				$(".header_top").css({
					position: "static",
					top: "auto",
					width: "auto",
					margin: "auto",
					left: "auto",
					paddingRight: "0"
				}).removeClass("bgc_change");
			}
		})
	</script>

	<script>/*-number_counter-*/
		var a = 0;
		$(window).scroll(function () {
			var oTop = $('.counter-box').offset().top - window.innerHeight;
			if (a == 0 && $(window).scrollTop() > oTop) {
				$('.counter').each(function () {
					var $this = $(this),
						countTo = $this.attr('data-count');
					$({
						countNum: $this.text()
					}).animate({
						countNum: countTo
					},

						{
							duration: 2000,
							easing: 'swing',
							step: function () {
								$this.text(Math.floor(this.countNum));
							},
							complete: function () {
								$this.text(this.countNum);
								//alert('finished');
							}

						});
				});
				a = 1;
			}

		});
	</script>
</body>

</html>
