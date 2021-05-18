<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>فرنوی شخصیت‌پردازی | قوانین و مقررات</title>

	<link rel="stylesheet" href="{{ asset('farno/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('farno/css/icomoon.css') }}">
	<link rel="stylesheet" href="{{ asset('farno/css/main.css') }}">
	<link rel="stylesheet" href="{{ asset('farno/css/landing.css') }}">
	<link rel="icon" type="image/png" href="{{ asset('farno/img/fav.png') }}"/>
</head>
<body class="scrollNavData policy_page">
	
	<header id="header" class="scrollNav-content">
		<div class="header_top">
			<div class="hdr_right_bx">
				<div class="open_min_mnu"><img class="icon-menu" src="{{ asset('img/menu.svg') }}"></img></div>
				<div class="logo_box">
					<img src="{{ asset('img/logo.png') }}" alt="logo">
				</div>
			</div>	
			<div class="hdr_lft_side">
				<div class="container">
					<div class="mnu_side">
						<div class="main_mnu_bx">
							<ul class="main_mnu_ul">
								<li><a class="scrollNav-links scrollNav-active" href="{{ url('farno-char') }}">خانه</a></li>				
								<li><a class="scrollNav-links" href="{{ url('policy') }}">قوانین و مقررات</a></li>
								<li><a class="scrollNav-links" href="#footer">درباره فرنو</a></li>
								<li><a class="scrollNav-links" href="#footer">ارتباط با ما</a></li>
							</ul>
						</div>
						<div class="min_mnu_bx">
							<span class="close_mnu">&times;</span>

							<div class="mnu_logo">
								<img src="{{ asset('img/mnu_logo.png') }}" alt="mnu_logo">
							</div>
							<ul>
								<li><a class="actv" href="#header">خانه</a></li>
<!--								<li>-->
<!--									<a href="#intro_sec">جشنواره بازارپردازی تهران <span class="icon-Arrow-&#45;&#45;Down-25"></span></a>-->
<!--									<div class="min_sub_mnu">-->
<!--										<ul>-->
<!--											<li></li>-->
<!--											<li></li>-->
<!--											<li></li>-->
<!--										</ul>-->
<!--									</div>-->
<!--								</li>-->
<!--								<li>-->
<!--									<a href="#weblog_sec">وبلاگ <span class="icon-Arrow-&#45;&#45;Down-25"></span></a>-->
<!--									<div class="min_sub_mnu">-->
<!--										<ul>-->
<!--											<li></li>-->
<!--											<li></li>-->
<!--											<li></li>-->
<!--										</ul>-->
<!--									</div>-->
<!--								</li>-->
								<li><a href="#footer">قوانین و مقررات</a></li>
								<li><a href="#footer">درباره ما</a></li>
<!--								<li><a href="#footer">تماس با ما</a></li>-->
							</ul>
						</div>
					</div>
					<div class="prof_side">
						<div class="left_mnu">
							<ul>
								<li>
									@if (Auth::check())
										<button onclick="document.location='{{ route('home') }}'">حساب کابری</button>
									@else
										<button onclick="document.location='{{ route('login') }}'">ورود/ثبت‌نام</button>
									@endif
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row header_cntnt">
				<div class="col-md-8">
					<div class="hdr_cntnt_hed">
						<img src="{{ asset('img/logo2.png') }}" alt="img">
					</div>
				</div>
				<div class="col-md-4">
				
				</div>
			</div>
		</div>
	</header>


	<section id="process_secs">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="process_title">
						<div class="fa_title">شرایط عمومی، قوانین و مقررات </div>
					</div>
					<div class="process_cntnt">
					<p style="
                    text-align: right;
                ">
                        الف) تعاریف:
                        <br>
1.	پیچینگ: همان جلسه ارائه ایده یا طرح کسب و کار است؛ پیچینگ، شیوه‌ای دقیق برای ارائه ایده، طرح یا یک محصول است که به‌صورت شفاهی و گاهی تصویری، به امید جلب مشارکت فعالان اقتصادی انجام می‌شود. 
<br>
2.	رویدادهای فرنو: رویدادهای تخصصی برای ارائه (پیچینگ) طرح‌های تخصصی در حوزه‌های مختلف صنایع فرهنگی  است. موضوعات تخصصی در رویدادهای فرنو در سال 1400 شامل شخصیت‌پردازی، بازی‌های ویدئویی و کتاب تعاملی، بازی، اسباب‌بازی و عروسک، پویانمایی و وب‌سری و نوشت‌افزار می‌شود. مهمترین هدف از برگزاری رویدادهای فرنو، بهم‌رسانی فعالان فرهنگی (صاحبان طرح‌های فرهنگی) با توسعه‌دهندگان کسب و کارهای فرهنگی جهت توسعه کسب و کارهای بازارپردازی فرهنگی (مرچندایزینگ فرهنگی) است. 
<br>
3.	صاحبان طرح: به فعالان فرهنگی شامل افراد حقیقی دارای گروه و یا شخصیت‌های حقوقی که طرح کسب و کار فرهنگیِ خود را در رویدادهای فرنو ارائه (پیچ) می‌دهند، صاحبان طرح گفته می‌شود. 
<br>
4.	توسعه‌دهندگان کسب و کارهای فرهنگی: به شخصیت‌های حقوقی که با هدف پیدا کردن فعالان فرهنگی مناسب برای توسعه کسب و کارهای فرهنگی در رویدادهای فرنو شرکت می‌کنند و صاحبان طرح (فعالان فرهنگی)، طرح‌های کسب و کار خود را برای این مجموعه در رویدادهای فرنو ارائه (پیچ) می‌نمایند. توسعه دهندگان کسب و کارهای فرهنگی شامل مراکز نوآوری فرهنگی، شتابدهنده‌های تخصصی فرهنگی و تهیه‌کنندگان ارشد می‌باشند. 
<br>
5.	کارگاه‌های آموزشی: جهت برگزاری هرچه بهتر رویدادهای فرنو، مجموعه کارگاه‌های آموزشی تدوین و آماده‌شده است که صاحبان طرح‌ها پس از ثبت نام در رویدادهای فرنو، با گذراندن فیلم‌های آموزشی، آمادگی ایشان جهت ارائه یک پیچ مناسب ارتقا پیدا می‌نماید. 
<br>
ب) شرایط عمومی:
<br>
1.	رویدادهای پیوند فرهنگی با عنوان فرنو، رویدادهای تخصصی پیچینگ در موضوعات شخصیت‌پردازی، بازی‌های ویدئویی و کتاب تعاملی، بازی، اسباب‌بازی و عروسک، پویانمایی و وب‌سری و نوشت‌افزار که به صورت ماهانه با همکاری صندوق نوآوری و شکوفایی ریاست جمهوری و بنیاد سپهر انقلاب اسلامی وابسته به سازمان تبلیغات اسلامی و در تهران برگزار می‌شود.
<br>
2.	شرکت در رویدادهای فرنو برای تمام صاحبان طرح با شخصیت حقیقی (اما دارای گروه مشخص) و یا حقوقی و برای توسعه‌دهندگان کسب و کارهای فرهنگی شامل مراکز نوآوری فرهنگی، شتابدهنده‌های تخصصی فرهنگی و تهیه‌کنندگان ارشد که دارای شخصیت حقوقی هستند، آزاد است.
<br>
3.	در رویدادهای فرنو، محدودیتی در قالب (ژانر)، تکنیک، زمان اثر، مخاطب آن، سن و ملیت ارائه‌دهندة طرح‌ها وجود ندارد. 
<br>
4.	مدت زمان ارائه هر طرح در رویدادهای فرنو 10 دقیقه خواهد بود.
<br>
5.	هزینه رفت و آمد، اسکان و سایر موارد شرکت در رویدادهای فرنو بر عهده متقاضی است.
<br>
6.	در شرایط کرونا، برگزاری رویدادهای فرنو به صورت ترکیبی (حضوری و مجازی) و با استفاده از طریق زیرساخت‌های جلسات ارائه آنلاین صورت می‌گیرد.
<br>
7.	هزینه‌ی ثبت‌نام برای صاحبان طرح و توسعه‌دهندگان کسب و کارهای فرهنگی، رایگان است.
<br>
<br>

ج) قوانین و مقررات:
<br>
1.	طرح‌هایی که حق استفاده از همه یا قسمتی از امتیاز یا حقوق معنوی آنها، تا پایان مهلت ثبت‌نام، به اشخاص ثالث واگذار شده باشد، در رویدادهای فرنو پذیرفته نخواهد شد.
<br>
2.	محتوای طرح‌های متقاضی شرکت در رویدادهای فرنو، باید تابع قوانین جمهوری اسلامی ایران باشند، بدیهی است طرح‌هایی که با نظم عمومی و ارزش‌هاي اخلاقی مغایرت داشته باشد، در رویدادهای فرنو پذیرفته نخواهد شد.
<br>
3.	طرح‌های ارسالی به رویدادهای فرنو می‌بایست محصول فکر و ایده صاحب طرح بوده و حقوق مادی و معنوی آن، متعلق به خود او باشد.
<br>
4.	اجزای طرح ارسالی اعم از عناصر روایی، دیداری و شنیداری باید متعلق به صاحبان طرح باشد؛ در صورت استفاده از آثار دیگران، ارائه مجوز رسمی، الزامی است.
<br>
5.	مسئولیت صحت اطلاعات ارائه‌شده درباره طرح، بر عهده صاحبان طرح است.
<br>
6.	صاحب طرح موظف است ارائه خود را به زبان فارسی انجام دهد.  
<br>
7.	طرح‌هایی که تا پیش از پایان مهلت مقرر، فرم ثبت‌نام آن‌ها در تارنمای رسمی رویدادهای فرنو به نشانی dalan.farhangbonyan.ir/farno  تکمیل شده باشد، برای شرکت در رویدادهای فرنو پذیرفته خواهد شد. 
<br>
8.	در صورت انصراف یا عدم شرکت در رویدادهای فرنو به هر دلیل، پس از ثبت‌نام نهایی، صاحب طرح، فرصت حضور در ارائه رویدادهای فرنو را از دست می‌دهد.
<br>
9.	تمامی صاحبان طرح بعد از ثبت‌نام، از خدمات کارگاه‌های آموزشی، برخوردار خواهند شد.
<br>
10.	به‌منظور یکسان‌سازی روند ارائه آثار، حضور در کارگاه‌های آموزشی، برای تمامی صاحبان طرح، الزامی است. 
<br>
11.	تنها افرادی که در کارگاه‌های آموزشی شرکت می‌کنند، اجازه ارائه طرح در رویدادهای فرنو را خواهند داشت.
<br>
12.	به ازای هر طرح حداکثر ۲ نفر از تیم صاحب طرح مجاز به حضور در کارگاه‌های آموزشی خواهند بود.
<br>
13.	در زمان برگزاری رویدادهای فرنو، امکانات لازم جهت ارائه مناسب، در اختیار هر صاحب طرح قرار خواهد گرفت، اما مسئولیت نحوه اجرا و محتوای ارائه شده بر عهدة خود او خواهد بود. 
<br>
14.	هرگونه تصویربرداری و عکاسی در طول برگزاری رویدادهای فرنو و کارگاه‌های آموزشی ممنوع است.
<br>
15.	رویدادهای فرنو خود را به حفظ حقوق صاحبان طرح و پاسداری از طرح‌های آنان ملزم می‌داند.
<br>
16.	 درخواست‌ها و طرح‌های ارسالی توسط کمیته انتخابی رویدادهای فرنو بررسی و حداکثر 15 طرح برتر از نظر امکان سرمایه‌پذیری، انتخاب و اعلام خواهند شد.
<br>
17.	کلیه توسعه‌دهندگان کسب و کارهای فرهنگی شامل مراکز نوآوری فرهنگی، شتابدهنده‌های تخصصی فرهنگی و تهیه‌کنندگان ارشد که متقاضی حضور در رویدادهای فرنو هستند، می‌بایست پس تکمیل مراحل ثبت نام، تصویر معرفی نامه رسمی نمایندة شرکت‌کننده در رویدادهای فرنو را در سربرگ شرکت یا سازمان مربوطه، همراه با مهر و امضا مدیرعامل شرکت یا مدیر روابط عمومی، برای دبیرخانه رویدادهای فرنو ارسال نمایند.
<br>
18.	دبیرخانه رویدادهای فرنو مجاز است، با ذکر نام صاحب اثر، نسبت به استفاده حداقلی و غیرتجاری از عناصر دیداری و شنیداری موجود در طرح‌های ارسالی به رویدادهای فرنو، برای موارد تبلیغی و اطلاع رسانی در ادوار مختلف رویدادهای فرنو اقدام نماید.
<br>
<br>

ثبت‌نام در رویدادهای فرنو به‌منزله قبول مفاد شرایط عمومی، قوانین و مقررات مندرج در این سند از طرف متقاضی است.
<br>
<br>

  متقاضی با ارسال طرح و ثبت‌نام در رویدادهای فرنو، تمامی شرایط و مقررات مذکور را می‌پذیرد. بديهي است در صورت وجود هرگونه مغايرت طرح با شرایط، قوانین و مقررات ذکر شده، حق عدم پذیرش طرح براي دبیرخانه محفوظ است. 

                    </p>
					</div>
				</div>
			</div>
		</div>
	</section>

    
	<footer id="footer" class="scrollNav-content">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="footer_logo">
						<img src="{{ asset('img/footer_lgo.png') }}" alt="img">
					</div>
					<div class="sotial_icons">
						<p>
							رویداد فرنو (رویدادهای فرهنگی نوین)، فرصت ویژه ای را برای مخاطبان تخصصی فرهنگی (licenseeها) مهیا می کند تا در یک پنل اختصاصی با حضور بهترین مجموعه تهیه کنندگان ارشد (EPها) و فعالان فرهنگی (LPها)، اولویت ها، اهداف و نیازمندی های فرهنگی و هنری خود را جهت هدایت فعالان فرهنگی (LPها) ارائه نمایند و عملا بازار آتی محصولات و خدمات فرهنگی و هنری مورد نیاز خود را از این طریق (به شیوه ارائه معکوس) تضمین نمایند.
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="contact_bx">
						<div class="contact_hed">
							<h5>اطلاعات تماس</h5>
						</div>
						<div class="contact_bdy">
							<ul>
								<li><span class="icon-Calling4"></span>&nbsp; <p>۰۲۱۸۶۰۵۴۲۱۷-۰۹۱۹۳۷۵۷۵۹۹</p> </li>
								<li><span class="icon-mail3"></span>&nbsp; <p>  farno@farhangbonyan.ir</p></li>
								<li><span class="icon-Location4"></span>&nbsp; <p>تهران، میدان‌ولیعصر، خیابان حجت دوست، پلاک ۴۷</p></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="copy_right">
						<p>کليه حقوق مادي و معنوي  محفوظ  است  </p>
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
			        <source src="{{ asset('video/video1.mp4') }}" type="video/mp4">
			        Your browser does not support the video tag.
		        </video>
		    </div>
		    
		  </div>
		</div>
	</div>

	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/tabs.js') }}"></script>
	<script src="{{ asset('js/scroll_nav.js') }}"></script>
    <script>
	    $(document).ready(function(){
	        var s = new scrollNav();
	        s.init();
	    });
    </script>

	<script>
		$(document).ready(function(){
			$(".open_min_mnu").click(function(e){
				e.preventDefault();
				$(".min_mnu_bx").toggleClass("open_min");
				$("body").toggleClass("no_scroll");
			})
			$(".close_mnu").click(function(){
				$(".min_mnu_bx").removeClass("open_min");
				$("body").removeClass("no_scroll");
			})

			$(".min_mnu_bx li").click(function(){
				$(this).find(".min_sub_mnu").fadeToggle();
			})

			$(".scrollNav-links span").click(function(){
				$(this).parentsUntil("li").find(".main_sub_mnu").fadeToggle();
			})

			/*stop video*/
			$('.modal').on('hidden.bs.modal', function (e) {
		        $('.modal video')[0].pause();
		    });

		    $(".intro_img_filter span").click(function(evnt){
		    	evnt.preventDefault();
		    })

			if($(document).width() <1199)
			{
				$(".logo_box img").attr('src' , 'img/mnu_logo.png');
			}
			else{
				$(".logo_box img").attr('src' , 'img/logo.png');
			}

		});	
	</script>
	
	<script>/* scroll menu */
        $(window).scroll(function(){
            if($(window).scrollTop() >= 450){
                $(".header_top").css({ position:"fixed" ,
					                 top:"0" ,
					                 zIndex: "9" ,
					                 width: "100%",
					                 margin:"0",
					                 left:"0",
					                 paddingRight: "20px"
					             }).addClass("bgc_change");        
            }
            else{
                $(".header_top").css({ position:"static" ,
            						 top:"auto",
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
		$(window).scroll(function() {
		  var oTop = $('.counter-box').offset().top - window.innerHeight;
		  if (a == 0 && $(window).scrollTop() > oTop) {
		    $('.counter').each(function() {
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
		          step: function() {
		            $this.text(Math.floor(this.countNum));
		          },
		          complete: function() {
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