@extends('layouts.home')
@section('main')
			
		<!-- Hero Area -->
		<section id="hero-area" class="hero-area">
			<!-- Slider -->
			<div class="slider-area">
				<!-- Single Slider -->
				<div class="single-slider" style="background-image:url('images/slider/slider-image1.jpg')">
					<div class="container">
						<div class="row">
							<div class="col-lg-7 col-md-6 col-12">
								<!-- Slider Text -->
								<div class="slider-text">
									<h1>الصفحة الرئيسية <br/>مسجد <span>عمر بن الخطاب</span> </h1>
									<p>قطاع غزة-مدينة غزة-تل الهوا-بجوار أبراج السعادة<br/> دورات تعليمية دينية مختلفة وحلقات تحفيظ قرآن بمناهج متنوعة،لكل الأعمار ومع معلمين موثوقين </p>
									<div class="button">
										<a href="portfolio-3-column.html" class="btn">Our Portfolio</a>
										<a href="https://www.youtube.com/watch?v=aVCCWpq-ITI" class="btn video video-popup mfp-fade"><i class="fa fa-play"></i>Play Now</a>
									</div>
								</div>
								<!--/ End Slider Text -->
							</div>
							<div class="col-lg-5 col-md-6 col-12">
								<!-- Image Gallery -->
								<div class="image-gallery">
									<div class="single-image">
										<img src=" {{ asset( 'images/slider/gallery-image1.jpg') }}" alt="#">
									</div>
									<div class="single-image two">
										<img src=" {{ asset( 'images/slider/gallery-image2.jpg') }}" alt="#">
									</div>
								</div>
								<!--/ End Image Gallery -->
							</div>
						</div>
					</div>
				</div>
				<!--/ End Single Slider -->
				@foreach($slider_sections as $sec)
				<!-- Single Slider -->
				<div class="single-slider slider-right" style="background-image:url('images/slider/slider-image2.jpg')">
					<div class="container">
						<div class="row">
							<div class="col-lg-5 col-md-6 col-12">
								<!-- Image Gallery -->
								<div class="image-gallery">
									<div class="single-image">
										<img src=" {{ asset( 'images/slider/gallery-image1.jpg') }}" alt="#">
									</div>
									<div class="single-image two">
										<img src=" {{ asset( 'images/slider/gallery-image2.jpg') }}" alt="#">
									</div>
								</div>
								<!--/ End Image Gallery -->
							</div>
							<div class="col-lg-7 col-md-6 col-12">
								<!-- Slider Text -->
								<div class="slider-text text-right">
									<h1> قسم  <span> {{ $sec->section_name }} </span>  </h1>
									<p> {{ $sec->description }} </p>
									<div class="button">
										<a href="{{route('section.details', [$sec->id])}}" class="btn">الذهاب إلى القسم</a>
										<a href="https://www.youtube.com/watch?v=-XSFIGRLdmw" class="btn video video-popup mfp-fade"><i class="fa fa-play"></i>Play Now</a>
									</div>
								</div>
								<!--/ End Slider Text -->
							</div>
						</div>
					</div>
				</div>
				<!--/ End Single Slider -->
				@endforeach
				<!-- Single Slider -->
				<div class="single-slider slider-center" style="background-image:url('images/slider/slider-image1.jpg')">
					<div class="container">
						<div class="row">
							<div class="col-lg-10 offset-lg-1 col-12">
								<!-- Slider Text -->
								<div class="slider-text text-center">
									<h1>قم بالتسجيل بالدورات والحلقات عن طريق الصفحة،لتستطيع الحصول على  <span>شهادات مصدقة من الأوقاف </span></h1>
									<p> .قم بالتسجيل في الدورة أو الحلقة التي ترغب بها عن طريق الصفحة الرئيسية لتحصل على شهادة مصدقة من الأوقاف، والعديد من الجوائز التشجيعية </p>
									<div class="button">
										<a href="about-us.html" class="btn">About Company</a>
										<a href="https://www.youtube.com/watch?v=vAs5_d3MBH0" class="btn video video-popup mfp-fade"><i class="fa fa-play"></i>Play Now</a>
									</div>
								</div>
								<!--/ End Slider Text -->
							</div>
						</div>
					</div>
				</div>
				<!--/ End Single Slider -->
			</div>
			<!--/ End Slider -->
		</section>
		<!--/ End Hero Area -->
		
		<!-- About Us -->
		<section class="about-us section">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title wow fadeInUp">
							<span class="title-bg">Radix</span>
							<h1>عن المسجد</h1>
							<p>مسجد عمر بن الخطاب في شارع الأبراج حي تل الهوا في مدينة غزة، نهتم بتخريج جيل واعي ومتدين من الشباب، نقدم دورات وحلقات مجانية وشبه مجانية لجميع الأعمار والكل مرحّب به، جوائز تشجيعية للمشاركين ذوي الدرجات العالية المتميزين، حفلات تنشيطية ودورات تثقيفية لجميع الأعمار. أطفالكم أمانة فاهتموا بتربيتهم.<p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-12 wow fadeInLeft" data-wow-delay="0.6s">
						<!-- Video -->
						<div class="about-video">
							<div class="single-video overlay">
								<a href="https://www.youtube.com/watch?v=E-2ocmhF6TA" class="video-popup mfp-fade"><i class="fa fa-play"></i></a>
								<img src=" {{ asset( 'images/gallery-4.jpg') }}" alt="#">
							</div>
						</div>
						<!--/ End Video -->
					</div>
					<div class="col-lg-6 col-12 wow fadeInRight" data-wow-delay="0.8s">
						<!-- About Content -->
						<div class="about-content">
							<h2> مجموعة مميزة من الموظفين والمتطوعين</h2>
							<p> قبل اعلان أي فعالية أو دورة يتم اختبار المدرب عدة اختبارات لقياس كفاءاته ووضعه في المكان المناسب لها</p>
							<p>نهتم باخراج قدرات الكامنة للمشاركين، ونعمل على اظهار شخصيتهم وصقلها بتعاليم الدين عن طريق فعاليات مختلفة، هناك العديد من الأقسام ونحرص على التجديد كل فترة، أما قسم حلقات التحفيظ ودورات التلاوة فهي من الأقسام الثابتة والتي نوليها الاهتمام الأكبر.</p>
							<p>نؤمن بأن الشباب هم لبنة أي مجتمع، وأن كل فرد منهم هو جوهرة كامنة فنبذل جهداً عظيماً لحفظ أماناتنا.</p>
						</div>
						<!--/ End About Content -->
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="progress-main">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.4s">
									<!-- Single Skill -->
									<div class="single-progress">
										<h4>التواصل</h4>
										<div class="progress">
											<div class="progress-bar" role="progressbar" style="width: 78%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span class="percent">78%</span></div>
										</div>
									</div>
									<!--/ End Single Skill -->
								</div>
								<div class="col-lg-6 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.6s">
									<!-- Single Skill -->
									<div class="single-progress">
										<h4>كفاءة المدربين</h4>
										<div class="progress">
											<div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span class="percent">80%</span></div>
										</div>
									</div>
									<!--/ End Single Skill -->
								</div>
								<div class="col-lg-6 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.8s">
									<!-- Single Skill -->
									<div class="single-progress">
										<h4>جدوى الفعاليات</h4>
										<div class="progress">
											<div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span class="percent">90%</span></div>
										</div>
									</div>
									<!--/ End Single Skill -->
								</div>
								<div class="col-lg-6 col-md-6 col-12 wow fadeInUp" data-wow-delay="1s">
									<!-- Single Skill -->
									<div class="single-progress">
										<h4>شهادات مصدقة</h4>
										<div class="progress">
											<div class="progress-bar" role="progressbar" style="width: 95%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span class="percent">95%</span></div>
										</div>
									</div>
									<!--/ End Single Skill -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End About Us -->
		
		<!-- Services -->
		<section id="services" class="services section">
			<div class="container">
				<div class="row">
					<div class="col-12 wow fadeInUp">
						<div class="section-title">
							<span class="title-bg">Services</span>
							<h1>خدماتنا</h1>
							<p> لدى المسجد العديد من الأقسام، منها الدعوية والارشادية والتعليمية، معظم خدماتنا مجانية أو برسوم بسيطة، نعمل مع متطوعين وموظفين، نحرص على التطور الدائم لذا نستقبل اقتراحاتكم بسعادة. <p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="service-slider">
							
							@foreach($activities_slider as $activity)
							<!-- Single Service -->
							<div class="single-service">
								<i class="fa fa-magic"></i>
								<h2><a href="{{route('activity.details',[$activity->id]) }}">{{$activity->activity_name}}</a></h2>
								<pa>{{$activity->section->section_name}}</p>
								<p>{{$activity->requirments}}</p>
							</div>
							<!-- End Single Service -->
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Services -->
		
		<!-- Fun Facts -->
		<section id="fun-facts" class="fun-facts section">
			<div class="container">	
				<div class="row">
					<div class="col-lg-5 col-12 wow fadeInLeft" data-wow-delay="0.5s">
						<div class="text-content">
							<div class="section-title">
								<h1><span>إنجازاتنا منذ بدايتنا</span></h1>
								<p>تم بناء المسجد عام 1982 ومنذ بناءه تم التركيز على القسم التعليمي والدعوي للمسجد</p>
								<a href="contact.html" class="btn primary">للتواصل</a>
							</div>
						</div>
					</div>
					<div class="col-lg-7 col-12">
						<div class="row">	
							<div class="col-lg-6 col-md-6 col-12 wow fadeIn" data-wow-delay="0.6s">
								<!-- Single Fact -->
								<div class="single-fact">
									<div class="icon"><i class="fa fa-clock-o"></i></div>
									<div class="counter">
										<p><span class="count">28</span></p>
										<h4>سنة من التقدم</h4>
									</div>
								</div>
								<!--/ End Single Fact -->
							</div>
							<div class="col-lg-6 col-md-6 col-12 wow fadeIn" data-wow-delay="0.8s">
								<!-- Single Fact -->
								<div class="single-fact">
									<div class="icon"><i class="fa fa-bullseye"></i></div>
									<div class="counter">
										<p><span class="count">1000</span></p>
										<h4>خريج حافظ للقرآن</h4>
									</div>
								</div>
								<!--/ End Single Fact -->
							</div>
							<div class="col-lg-6 col-md-6 col-12 wow fadeIn" data-wow-delay="1s">
								<!-- Single Fact -->
								<div class="single-fact">
									<div class="icon"><i class="fa fa-dollar"></i></div>
									<div class="counter">
										<p><span class="count">5741</span></p>
										<h4>دورة كاملة ناجحة</h4>
									</div>
								</div>
								<!--/ End Single Fact -->
							</div>
							<div class="col-lg-6 col-md-6 col-12 wow fadeIn" data-wow-delay="1.2s">
								<!-- Single Fact -->
								<div class="single-fact">
									<div class="icon"><i class="fa fa-trophy"></i></div>
									<div class="counter">
										<p><span class="count">32</span></p>
										<h4>جائزة في مسابقات</h4>
									</div>
								</div>
								<!--/ End Single Fact -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Fun Facts -->
	
		<!-- Portfolio -->
		<section id="portfolio" class="portfolio section">
			<div class="container">
				<div class="row">
					<div class="col-12 wow fadeInUp">
						<div class="section-title">
							<span class="title-bg">Projects</span>
							<h1>الأقسام</h1>
							<p>أقسام الخدمات التي يقدمها المسجد<p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<!-- portfolio Nav -->
						<div class="portfolio-nav">
							<ul class="tr-list list-inline" id="portfolio-menu">
								<li data-filter="*" class="cbp-filter-item active">جميع الفعاليات<div class="cbp-filter-counter"></div></li>  
								<li data-filter=".animation" class="cbp-filter-item">أقسام الفعاليات<div class="cbp-filter-counter"></div></li>
								<li data-filter=".website" class="cbp-filter-item">تواصل معنا<div class="cbp-filter-counter"></div></li>
								<li data-filter=".package" class="cbp-filter-item">صفحتي الخاصة<div class="cbp-filter-counter"></div></li>
								
							</ul>  		
						</div>
						<!--/ End portfolio Nav -->
					</div>
				</div>
				<div class="portfolio-inner">
					<div class="row">	
						<div class="col-12">	
							<div id="portfolio-item">
								<!-- Single portfolio -->
								<div class="cbp-item website animation printing">
									<div class="portfolio-single">
										<div class="portfolio-head">
											<img src=" {{ asset( 'images/portfolio/p1.jpg') }}" alt="#"/>
										</div>
										<div class="portfolio-hover">
											<h4><a href="portfolio-single.html">جميع الفعاليات</a></h4>
											<p>عرض جميع الفعاليات التي تتم في المسجد</p>
											<div class="button">
												<a href="{{ route('activities.all') }}"><i class="fa fa-link"></i></a>
											</div>
										</div>
									</div>
								</div>
								<!--/ End portfolio -->	
								<!-- Single portfolio -->
								<div class="cbp-item website package development">
									<div class="portfolio-single">
										<div class="portfolio-head">
											<img src=" {{ asset( 'images/portfolio/p2.jpg') }}" alt="#"/>
										</div>
										<div class="portfolio-hover">
											<h4><a href="portfolio-single.html">أقسام الفعاليات</a></h4>
											<p>أقسام الفعاليات التي يقدمها المسجد</p>
											<div class="button">
												<a href="https://www.youtube.com/watch?v=E-2ocmhF6TA" class="primary cbp-lightbox"><i class="fa fa-play"></i></a>
												<a href="portfolio-single.html"><i class="fa fa-link"></i></a>
											</div>
										</div>
									</div>
								</div>
								<!--/ End portfolio -->	
								<!-- Single portfolio -->
								<div class="cbp-item website animation">
									<div class="portfolio-single">
										<div class="portfolio-head">
											<img src=" {{ asset( 'images/portfolio/p3.jpg') }}" alt="#"/>
										</div>
										<div class="portfolio-hover">
											<h4><a href="portfolio-single.html">صفحتي الخاصة</a></h4>
											<p>اعرض صفحتي والفعاليات التي تم التسجيل بها</p>
											<div class="button">
												<a class="primary" data-fancybox="gallery" href="images/portfolio/p3.jpg') }}"><i class="fa fa-search"></i></a>
												<a href="portfolio-single.html"><i class="fa fa-link"></i></a>
											</div>
										</div>
									</div>
								</div>
								<!--/ End portfolio -->	
								<!-- Single portfolio -->
								<div class="cbp-item development printing">
									<div class="portfolio-single">
										<div class="portfolio-head">
											<img src=" {{ asset( 'images/portfolio/p4.jpg') }}" alt="#"/>
										</div>
										<div class="portfolio-hover">
											<h4><a href="portfolio-single.html">تواصل معنا</a></h4>
											<p>عرض طرق التواصل وارسال اقتراحات للمشرفين</p>
											<div class="button">
												<a href="https://www.youtube.com/watch?v=E-2ocmhF6TA" class="primary cbp-lightbox"><i class="fa fa-play"></i></a>
												<a href="portfolio-single.html"><i class="fa fa-link"></i></a>
											</div>
										</div>
									</div>
								</div>
								<!--/ End portfolio -->	
								
							</div>
						</div>
						<div class="col-12">
							<div class="button">
								<a class="btn primary" href="portfolio-3-column.html">More Portfolio</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End portfolio -->
		
		<!-- Call To Action -->
		<section class="call-to-action section" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-12 wow fadeInUp">
						<div class="call-to-main">
							<h2>We have 35+ Years of experiences for creating creative website project.</h2>
							<p>Maecenas sapien erat, porta non porttitor non, dignissim et enim. Aenean ac enim feugiat, facilisis arcu vehicula, consequat sem. Cras et vulputate nisi, ac dignissim mi. Etiam laoreet</p>
							<a href="contact.html" class="btn">Buy This Theme</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Call To Action -->
		
		<!-- Blogs Area -->
		<section class="blogs-main section">
			<div class="container">
				<div class="row">
					<div class="col-12 wow fadeInUp">
						<div class="section-title">
							<span class="title-bg">News</span>
							<h1>Latest Blogs</h1>
							<p>Sed lorem enim, faucibus at erat eget, laoreet tincidunt tortor. Ut sed mi nec ligula bibendum aliquam. Sed scelerisque maximus magna, a vehicula turpis Proin<p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="row blog-slider">
							<div class="col-lg-4 col-12">
								<!-- Single Blog -->
								<div class="single-blog">
									<div class="blog-head">
										<img src=" {{ asset( 'images/blogs/blog1.jpg') }}" alt="#">
									</div>
									<div class="blog-bottom">
										<div class="blog-inner">
											<h4><a href="blog-single.html">Recognizing the need is the primary</a></h4>
											<p>Maecenas sapien erat, porta non porttitor non, dignissim et enim. Aenean ac tincidunt tortor sedelon bond</p>
											<div class="meta">
												<span><i class="fa fa-bolt"></i><a href="#">Marketing</a></span>
												<span><i class="fa fa-calendar"></i>03 May, 2018</span>
												<span><i class="fa fa-eye"></i><a href="#">333k</a></span>
											</div>
										</div>
									</div>
								</div>
								<!-- End Single Blog -->
							</div>
							<div class="col-lg-4 col-12">
								<!-- Single Blog -->
								<div class="single-blog">
									<div class="blog-head">
										<img src=" {{ asset( 'images/blogs/blog2.jpg') }}" alt="#">
									</div>
									<div class="blog-bottom">
										<div class="blog-inner">
											<h4><a href="blog-single.html">How to grow your business with blank table!</a></h4>
											<p>Maecenas sapien erat, porta non porttitor non, dignissim et enim. Aenean ac tincidunt tortor sedelon bond</p>
											<div class="meta">
												<span><i class="fa fa-bolt"></i><a href="#">Business</a></span>
												<span><i class="fa fa-calendar"></i>28 April, 2018</span>
												<span><i class="fa fa-eye"></i><a href="#">5m</a></span>
											</div>
										</div>
									</div>
								</div>
								<!-- End Single Blog -->
							</div>
							<div class="col-lg-4 col-12">
								<!-- Single Blog -->
								<div class="single-blog">
									<div class="blog-head">
										<img src=" {{ asset( 'images/blogs/blog3.jpg') }}" alt="#">
									</div>
									<div class="blog-bottom">
										<div class="blog-inner">
											<h4><a href="blog-single.html">10 ways to improve your startup Business</a></h4>
											<p>Maecenas sapien erat, porta non porttitor non, dignissim et enim. Aenean ac tincidunt tortor sedelon bond</p>
											<div class="meta">
												<span><i class="fa fa-bolt"></i><a href="#">Brand</a></span>
												<span><i class="fa fa-calendar"></i>15 April, 2018</span>
												<span><i class="fa fa-eye"></i><a href="#">10m</a></span>
											</div>
										</div>
									</div>
								</div>
								<!-- End Single Blog -->
							</div>
							<div class="col-lg-4 col-12">
								<!-- Single Blog -->
								<div class="single-blog">
									<div class="blog-head">
										<img src=" {{ asset( 'images/blogs/blog4.jpg') }}" alt="#">
									</div>
									<div class="blog-bottom">
										<div class="blog-inner">
											<h4><a href="blog-single.html">Recognizing the need is the primary</a></h4>
											<p>Maecenas sapien erat, porta non porttitor non, dignissim et enim. Aenean ac tincidunt tortor sedelon bond</p>
											<div class="meta">
												<span><i class="fa fa-bolt"></i><a href="#">Online</a></span>
												<span><i class="fa fa-calendar"></i>25 March, 2018</span>
												<span><i class="fa fa-eye"></i><a href="#">38k</a></span>
											</div>
										</div>
									</div>
								</div>
								<!-- End Single Blog -->
							</div>
							<div class="col-lg-4 col-12">
								<!-- Single Blog -->
								<div class="single-blog">
									<div class="blog-head">
										<img src=" {{ asset( 'images/blogs/blog5.jpg') }}" alt="#">
									</div>
									<div class="blog-bottom">
										<div class="blog-inner">
											<h4><a href="blog-single.html">How to grow your business with blank table!</a></h4>
											<p>Maecenas sapien erat, porta non porttitor non, dignissim et enim. Aenean ac tincidunt tortor sedelon bond</p>
											<div class="meta">
												<span><i class="fa fa-bolt"></i><a href="#">Marketing</a></span>
												<span><i class="fa fa-calendar"></i>10 March, 2018</span>
												<span><i class="fa fa-eye"></i><a href="#">100k</a></span>
											</div>
										</div>
									</div>
								</div>
								<!-- End Single Blog -->
							</div>
							<div class="col-lg-4 col-12">
								<!-- Single Blog -->
								<div class="single-blog">
									<div class="blog-head">
										<img src=" {{ asset( 'images/blogs/blog6.jpg') }}" alt="#">
									</div>
									<div class="blog-bottom">
										<div class="blog-inner">
											<h4><a href="blog-single.html">10 ways to improve your startup Business</a></h4>
											<p>Maecenas sapien erat, porta non porttitor non, dignissim et enim. Aenean ac tincidunt tortor sedelon bond</p>
											<div class="meta">
												<span><i class="fa fa-bolt"></i><a href="#">Website</a></span>
												<span><i class="fa fa-calendar"></i>21 February, 2018</span>
												<span><i class="fa fa-eye"></i><a href="#">320k</a></span>
											</div>
										</div>
									</div>
								</div>
								<!-- End Single Blog -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Blogs Area -->
		
		<!-- Partners -->
		<section id="partners" class="partners section">
			<div class="container">
				<div class="row">
					<div class="col-12 wow fadeInUp">
						<div class="section-title">
							<span class="title-bg">Clients</span>
							<h1>Our Partners</h1>
							<p>Sed lorem enim, faucibus at erat eget, laoreet tincidunt tortor. Ut sed mi nec ligula bibendum aliquam. Sed scelerisque maximus magna, a vehicula turpis Proin<p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="partners-inner">
							<div class="row no-gutters">
								<!-- Single Partner -->
								<div class="col-lg-2 col-md-3 col-12">
									<div class="single-partner">
										<a href="#" target="_blank"><img src=" {{ asset( 'images/partner-1.png') }}" alt="#"></a>
									</div>
								</div>
								<!--/ End Single Partner -->
								<!-- Single Partner -->
								<div class="col-lg-2 col-md-3 col-12">
									<div class="single-partner">
										<a href="#" target="_blank"><img src=" {{ asset( 'images/partner-2.png') }}" alt="#"></a>
									</div>
								</div>
								<!--/ End Single Partner -->
								<!-- Single Partner -->
								<div class="col-lg-2 col-md-3 col-12">
									<div class="single-partner">
										<a href="#" target="_blank"><img src=" {{ asset( 'images/partner-3.png') }}" alt="#"></a>
									</div>
								</div>
								<!--/ End Single Partner -->
								<!-- Single Partner -->
								<div class="col-lg-2 col-md-3 col-12">
									<div class="single-partner">
										<a href="#" target="_blank"><img src=" {{ asset( 'images/partner-4.png') }}" alt="#"></a>
									</div>
								</div>
								<!--/ End Single Partner -->
								<!-- Single Partner -->
								<div class="col-lg-2 col-md-3 col-12">
									<div class="single-partner">
										<a href="#" target="_blank"><img src=" {{ asset( 'images/partner-5.png') }}" alt="#"></a>
									</div>
								</div>
								<!--/ End Single Partner -->
								<!-- Single Partner -->
								<div class="col-lg-2 col-md-3 col-12">
									<div class="single-partner">
										<a href="#" target="_blank"><img src=" {{ asset( 'images/partner-6.png') }}" alt="#"></a>
									</div>
								</div>
								<!--/ End Single Partner -->
								<!-- Single Partner -->
								<div class="col-lg-2 col-md-3 col-12">
									<div class="single-partner">
										<a href="#" target="_blank"><img src=" {{ asset( 'images/partner-7.png') }}" alt="#"></a>
									</div>
								</div>
								<!--/ End Single Partner -->
								<!-- Single Partner -->
								<div class="col-lg-2 col-md-3 col-12">
									<div class="single-partner">
										<a href="#" target="_blank"><img src=" {{ asset( 'images/partner-8.png') }}" alt="#"></a>
									</div>
								</div>
								<!--/ End Single Partner -->
								<!-- Single Partner -->
								<div class="col-lg-2 col-md-3 col-12">
									<div class="single-partner">
										<a href="#" target="_blank"><img src=" {{ asset( 'images/partner-5.png') }}" alt="#"></a>
									</div>
								</div>
								<!--/ End Single Partner -->
								<!-- Single Partner -->
								<div class="col-lg-2 col-md-3 col-12">
									<div class="single-partner">
										<a href="#" target="_blank"><img src=" {{ asset( 'images/partner-6.png') }}" alt="#"></a>
									</div>
								</div>
								<!--/ End Single Partner -->
								<!-- Single Partner -->
								<div class="col-lg-2 col-md-3 col-12">
									<div class="single-partner">
										<a href="#" target="_blank"><img src=" {{ asset( 'images/partner-7.png') }}" alt="#"></a>
									</div>
								</div>
								<!--/ End Single Partner -->
								<!-- Single Partner -->
								<div class="col-lg-2 col-md-3 col-12">
									<div class="single-partner">
										<a href="#" target="_blank"><img src=" {{ asset( 'images/partner-3.png') }}" alt="#"></a>
									</div>
								</div>
								<!--/ End Single Partner -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Partners -->
@endsection