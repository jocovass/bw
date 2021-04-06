<?php get_header(); ?>

<main>
	<!-- SECTION -->
	<section class="container-fluid position-relative overflow-hidden" id="parallax-1">
		<div class="row">
			<div class="full-height-div">
				<div class="banner-background" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/banner/banner-background.jpg);"></div>
				<div class="table-container">
					<div class="centre-content">
						<div class="container">
							<div class="row position-relative banner-content">
								<div class="col-12 col-md-9 col-lg-9 col-xl-6">
									<h1 class="display-3 text-secondary reveal-up">
										Liverpool's #1 Digital <span class="text-accent d-inline-block">Marketing Agency</span>
									</h1>
									<p class="text-secondary fs-6 reveal-up">From our office in Crosby, Liverpool we plan, create and deliver beautiful websites & bespoke marketing campaigns which achieve the results our partners are looking for.</p>
									<div class="d-flex align-items-center mb-4 reveal-up">
										<div class="d-flex justify-content-center align-items-center banner-svg">
											<img class="img-fluid shopify" src="<?php bloginfo('template_directory'); ?>/assets/images/banner/shopify.svg" alt="Shopify icon">
										</div>
										<div class="d-flex justify-content-center align-items-center banner-svg">
											<img class="img-fluid google" src="<?php bloginfo('template_directory'); ?>/assets/images/banner/google.svg" alt="Google icon">
										</div>
										<div class="d-flex justify-content-center align-items-center banner-svg">
											<img class="img-fluid wordpress" src="<?php bloginfo('template_directory'); ?>/assets/images/banner/wordpress.svg" alt="Wordpress icon">
										</div>
										<div class="d-flex justify-content-center align-items-center banner-svg">
											<img class="img-fluid bigcommerce" src="<?php bloginfo('template_directory'); ?>/assets/images/banner/bigcommerce.svg" alt="Bigcommerce icon">
										</div>
									</div>
									<a href="#">
										<button class="btn bg-accent text-light reveal-up" style="padding: .4rem 1.7rem; border-radius: 100px;">
											Find Out
										</button>
									</a>
								</div>

								<div class="reveal-right d-none d-md-block banner-person" data-trigger="parallax-1" data-scroll-speed="-100">
									<img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/images/banner/banner-person.png" alt="a guy taking selfie">
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- SECTION -->
	<section class="work container-fluid position-relative">
		<div class="row">
			<div class="full-height-div">
				<div class="work-backgrounds">
					<!-- <div class="lazy" data-bg="lazy.jpg"></div> -->
					<div class="work-background work-background--active" data-case="1" style="background-image: url(<?php bloginfo('template_directory') ?>/assets/images/case-study/pow8r.jpg)"></div>
					<div class="case-study-lazy work-background" data-case="2" data-bg="<?php bloginfo('template_directory') ?>/assets/images/case-study/lyon.jpg"></div>
					<div class="case-study-lazy work-background" data-case="3" data-bg="<?php bloginfo('template_directory') ?>/assets/images/case-study/brown-turner-ross.jpg"></div>
					<div class="case-study-lazy work-background" data-case="4" data-bg="<?php bloginfo('template_directory') ?>/assets/images/case-study/guy-with-laptop.jpg"></div>
				</div>
				<div class="table-container">
					<div class="centre-content">
						<div class="container">
							<div class="row position-relative">
								<div class="work-content col-12 col-md-7 col-lg-6 col-xl-6 overflow-hidden">
									<div data-case="1" class="slidein-content slidein-content--active">
										<small class="h6 text-primary">Case Studies</small>
										<h2 class="display-3 text-primary">POW8R Branding & Website Design</h2>
										<p class="text-primary fs-6">Branding and Subscription Website created for the fitness and lifestyle brand POW8R.</p>
										<a href="#">
											<button class="btn bg-accent text-light" style="padding: .4rem 1.7rem; border-radius: 100px;">
												View Case
											</button>
										</a>
									</div>
									<div data-case="2" class="slidein-content">
										<small class="h6 text-primary">Case Studies</small>
										<h2 class="display-3 text-primary">POW8R Branding & Website Design</h2>
										<p class="text-primary fs-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, inventore?</p>
										<a href="#">
											<button class="btn bg-accent text-light" style="padding: .4rem 1.7rem; border-radius: 100px;">
												View Case
											</button>
										</a>
									</div>
									<div data-case="3" class="slidein-content">
										<small class="h6 text-primary">Case Studies</small>
										<h2 class="display-3 text-primary">POW8R Branding & Website Design</h2>
										<p class="text-primary fs-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, inventore?</p>
										<a href="#">
											<button class="btn bg-accent text-light" style="padding: .4rem 1.7rem; border-radius: 100px;">
												View Case
											</button>
										</a>
									</div>
									<div data-case="4" class="slidein-content">
										<small class="h6 text-primary">Case Studies</small>
										<h2 class="display-3 text-primary">POW8R Branding & Website Design</h2>
										<p class="text-primary fs-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, inventore?</p>
										<a href="#">
											<button class="btn bg-accent text-light" style="padding: .4rem 1.7rem; border-radius: 100px;">
												View Case
											</button>
										</a>
									</div>
								</div>
							</div>
							<div class="slider-container">

								<!-- NEW SLIDER -->
								<div class="glide case-studies-glide">
									<div class="glide__track" data-glide-el="track">
										<ul class="glide__slides">
											<li class="glide__slide glide__slide--thumbnail" data-case="1"><img data-sizes="200" class="lazy-img img-fluid" data-src="<?php bloginfo('template_directory') ?>/assets/images/case-study/thumbnail/pow8r.jpg" alt="Brown turner ross logo"></li>
											<!-- <li class="glide__slide "><img class="img-fluid" src="<?php bloginfo('template_directory') ?>/assets/images/case-study/thumbnail/exotic.jpg" alt=""></li> -->
											<li class="glide__slide glide__slide--thumbnail" data-case="2"><img data-sizes="200" class="lazy-img img-fluid" data-src="<?php bloginfo('template_directory') ?>/assets/images/case-study/thumbnail/lyon.jpg" alt=""></li>
											<li class="glide__slide glide__slide--thumbnail" data-case="3"><img data-sizes="200" class="lazy-img img-fluid" data-src="<?php bloginfo('template_directory') ?>/assets/images/case-study/thumbnail/brown-turner-ross.jpg" alt=""></li>
											<li class="glide__slide glide__slide--thumbnail" data-case="4"><img data-sizes="200" class="lazy-img img-fluid" data-src="<?php bloginfo('template_directory') ?>/assets/images/case-study/thumbnail/guy-with-laptop.jpg" alt=""></li>
											<li class="glide__slide "><img data-sizes="200" class="lazy-img img-fluid" data-src="<?php bloginfo('template_directory') ?>/assets/images/case-study/thumbnail/.png" alt=""></li>
											<li class="glide__slide "><img data-sizes="200" class="lazy-img img-fluid" data-src="<?php bloginfo('template_directory') ?>/assets/images/case-study/thumbnail/lyon.jpg" alt=""></li>
											<li class="glide__slide "><img data-sizes="200" class="lazy-img img-fluid" data-src="<?php bloginfo('template_directory') ?>/assets/images/case-study/thumbnail/brown-turner-ross.jpg" alt=""></li>
											<li class="glide__slide "><img data-sizes="200" class="lazy-img img-fluid" data-src="<?php bloginfo('template_directory') ?>/assets/images/case-study/thumbnail/guy-with-laptop.jpg" alt=""></li>
											<li class="glide__slide "><img data-sizes="200" class="lazy-img img-fluid" data-src="<?php bloginfo('template_directory') ?>/assets/images/case-study/thumbnail/.png" alt=""></li>
											<li class="glide__slide "><img data-sizes="200" class="lazy-img img-fluid" data-src="<?php bloginfo('template_directory') ?>/assets/images/case-study/thumbnail/lyon.jpg" alt=""></li>
											<li class="glide__slide "><img data-sizes="200" class="lazy-img img-fluid" data-src="<?php bloginfo('template_directory') ?>/assets/images/case-study/thumbnail/brown-turner-ross.jpg" alt=""></li>
											<li class="glide__slide "><img data-sizes="200" class="lazy-img img-fluid" data-src="<?php bloginfo('template_directory') ?>/assets/images/case-study/thumbnail/guy-with-laptop.jpg" alt=""></li>
											<li class="glide__slide "><img data-sizes="200" class="lazy-img img-fluid" data-src="<?php bloginfo('template_directory') ?>/assets/images/case-study/thumbnail/.png" alt=""></li>
										</ul>
									</div>

									<div class="glide__arrows" data-glide-el="controls">
										<button class="glide__arrow glide__arrow--left" data-glide-dir="<"><span>&#8592;</span></button>
										<button class="glide__arrow glide__arrow--right" data-glide-dir=">"><span>&rarr;</span></button>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>

				<svg class="section-cutout-bottom light-svg" width="100%" height="50px" viewBox="0 0 100 200" preserveAspectRatio="none">
					<g>
						<polygon class="fill-secondary-dark" points="100 0, 200 0,0 200,100 200"></polygon>
					</g>
				</svg>
			</div>
		</div>
	</section>

	<!-- SECTION -->
	<section class="marketing container-fluid position-relative bg-light">
		<div class="row">
			<div class="full-height-div" style="min-height: 5vh;">
				<div class="table-container" style="min-height: 50vh;">
					<div class="centre-content">
						<div class="container">
							<div class="row">
								<div class="col-12">
									<h2 class="display-3 text-secondary">
										We Start <span class="text-accent d-inline-block">With You</span>
									</h2>
								</div>
							</div>
							<div class="row">
								<div class="col-12 col-md-6 col-lg-6 col-xl-6">
									<p class="text-secondary fs-6 reveal-up">Having a strong, consistent and engaging brand across all of your digital platforms is essential, so much so that it can generate over 20% more leads and conversions!.</p>
									<p class="text-secondary fs-6 reveal-up">As a full-service digital marketing agency, we’ll work with you to craft a digital marketing strategy that will add value to your business while staying true to your brand and your values.</p>
								</div>
								<div class="col-12 col-md-6 col-lg-6 col-xl-6">
									<p class="text-secondary fs-6 reveal-up">Having a team who work in the same office means we collaborate to deliver a cohesive, eye-catching and profitable plan that will put you in front of the right people at the right time.</p>
									<p class="text-secondary fs-6 reveal-up">Our in-house , Liverpool based digital marketing team have over 20 years’ experience and use all the latest tech to keep on top of your campaigns and offer real-time reporting to make sure your campaigns are fully optimised and reaching your target audience.</p>
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<a href="#">
										<button class="btn bg-accent text-light reveal-up" style="padding: .4rem 1.7rem; border-radius: 100px;">
											Start Your Marketing
										</button>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- SECTION -->
	<section class="clients">
		<div class="container pt-5 overflow-hidden">
			<h2 class="display-6 text-secondary text-center">Some Of Our Cilents</h2>

			<div class="glide client-logos-glide" style="width: calc(100% - 20px); margin: auto;">
				<div class="glide__track" data-glide-el="track" style="width: 100%;">
					<ul class="glide__slides">
						<li class="glide__slide"><img class="lazy-img client-logo" data-sizes="100" data-src="<?php bloginfo('template_directory') ?>/assets/images/client-logo/brown-turner-ross.png" alt="Brown turner ross logo"></li>
						<li class="glide__slide"><img class="lazy-img client-logo" data-src="<?php bloginfo('template_directory') ?>/assets/images/client-logo/kinkss.png" alt=""></li>
						<li class="glide__slide"><img class="lazy-img client-logo" data-sizes="100" data-src="<?php bloginfo('template_directory') ?>/assets/images/client-logo/sjs-legal.png" alt=""></li>
						<li class="glide__slide"><img class="lazy-img client-logo" data-sizes="100" data-src="<?php bloginfo('template_directory') ?>/assets/images/client-logo/beauty-barn.png" alt=""></li>
						<li class="glide__slide"><img class="lazy-img client-logo" data-sizes="100" data-src="<?php bloginfo('template_directory') ?>/assets/images/client-logo/k-cycles.png" alt=""></li>
						<li class="glide__slide"><img class="lazy-img client-logo" data-sizes="100" data-src="<?php bloginfo('template_directory') ?>/assets/images/client-logo/listed-digital.png" alt=""></li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<!-- SECTION -->
	<section class="team container-fluid position-relative bg-secondary-dark">

		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2 class="display-3 text-primary reveal-up">
						Why Choose <span class="text-accent d-inline-block">Blaze Media?</span>
					</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-md-6 col-lg-6 col-xl-6">
					<p class="text-primary fs-6 reveal-up">If you want a digital marketing team that delivers campaigns which are bang on trend, gives you access to the latest tools and tech to stay ahead of your competitors and delivers outstanding results time and time again then you need Blaze Media.</p>
					<p class="text-primary fs-6 reveal-up">Whether you’re just starting off, looking for a rebrand or even a social media facelift, our team have the knowledge, passion and expertise to deliver a creative, engaging campaign that works.</p>
				</div>
				<div class="col-12 col-md-6 col-lg-6 col-xl-6">
					<p class="text-primary fs-6 reveal-up">If you’re looking for a digital agency who cares about the performance of your business and will give honest advice on where best to spend your money then contact us today…we can tell you exactly what is and isn’t currently working for your business online and plan a strategy to help get you, customers fast!</p>
					<p class="text-primary fs-6 reveal-up">Our bespoke marketing campaigns generated over 20,000 leads for our customers in 2019 and we are on target to double that in 2020!</p>
					<p class="text-primary fs-6 reveal-up">As a full-service agency, we are experts in all forms of digital media and analytics.</p>
				</div>
			</div>
		</div>

		<div class="team-image"><img class="lazy-img img-fluid" data-sizes="400" data-src="<?php bloginfo('template_directory'); ?>/assets/images/team.png" alt="This is our team"></div>

		<svg class="section-cutout-bottom light-svg" width="100%" height="50px" viewBox="0 0 100 200" preserveAspectRatio="none">
			<g>
				<polygon class="fill-secondary-dark" points="100 0, 200 0,0 200,100 200"></polygon>
			</g>
		</svg>
	</section>

	<!-- SECTION -->
	<section class="design container-fluid position-relative bg-light">
		<div class="container">
			<div class="row align-items-center">
				<div class="col col-12 col-md-6 col-lg-6 col-xl-6">
					<h2 class="display-3 text-secondary reveal-up">Website Design</h2>
					<p class="text-secondary fs-6 reveal-up">Once we’ve established what you want from your website and how you want it to look and function, our designers will create a design outline to make sure we’re on the right track.</p>
					<p class="text-secondary fs-6 reveal-up">As soon as you’re happy with the design, your personal project manager will give the go ahead for the main build to begin and you’ll be kept up to date as we go.</p>
					<p class="text-secondary fs-6 reveal-up">After quality checks and page speed tests, we’ll walk you through the final design before signing off and going live using our UK based servers which give excellent speed and 99.9% uptime.</p>
					<p class="text-secondary fs-6 reveal-up">And as a ‘Mobile First’ web design, your new website will look beautiful across all your customers’ devices.</p>
					<a href="#">
						<button class="btn bg-accent text-light reveal-up" style="padding: .4rem 1.7rem; border-radius: 100px;">
							Find Out About
						</button>
					</a>
				</div>
				<div class="col col-12 col-md-6 col-lg-6 col-xl-6 ">
					<div class="design-image">
						<img class="lazy-img img-fluid" data-sizes="400" data-src="<?php bloginfo('template_directory') ?>/assets/images/design.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- SECTION -->
	<section class="social container-fluid position-relative bg-secondary-dark">

		<svg class="section-cutout-top dark-svg" width="100%" height="50px" viewBox="0 0 100 200" preserveAspectRatio="none">
			<g>
				<polygon class="fill-secondary-dark" points="100 0, 200 0,0 200,100 200"></polygon>
			</g>
		</svg>
		<div class="container">
			<div class="row align-items-center">
				<div class="col-12 col-md-6 col-lg-6 col-xl-6 order-1 order-md-2 mb-5">
					<h2 class="display-3 text-primary reveal-up"><span class="text-accent d-inline-block">Social Media</span> Ad Creation & Management</h2>
					<p class="text-primary fs-6 reveal-up">The first step in any journey with us begins with us getting to know your business from the inside out and learning not just about your industry and your competitors, but about your customers; their needs, aspirations and pain points so we can tailor your ads to them.</p>
					<p class="text-primary fs-6 reveal-up">From here, we use our ‘avatar builder’ to distinguish the many Facebook targeting options we can use when creating ad campaigns – ensuring the right people are seeing the ads that are relevant to them. </p>
					<p class="text-primary fs-6 reveal-up">Our team create, manage, optimise and test all ad creations – essentially, we track every element of the campaign to make sure it’s working as it should and constantly test and tweak to make the most impact.</p>
					<a href="#">
						<button class="btn bg-accent text-light reveal-up" style="padding: .4rem 1.7rem; border-radius: 100px;">
							Fire Up Your
						</button>
					</a>
				</div>
				<div class="col-12 col-md-6 col-lg-6 col-xl-6 order-2 order-md-1">
					<div class="social-image text-center">
						<img class="lazy-img img-fluid" data-sizes="400" data-src="<?php bloginfo('template_directory') ?>/assets/images/social.png" alt="">
					</div>
				</div>
			</div>
		</div>

		<svg class="section-cutout-bottom-left dark-svg" width="100%" height="50px" viewBox="0 0 100 200" preserveAspectRatio="none">
			<g>
				<polygon class="fill-secondary-dark" points="0,100 0, 0 100, 0"></polygon>
			</g>
		</svg>
	</section>

	<!-- SECTION -->
	<section class="seo container-fluid position-relative bg-light">
		<div class="container">
			<div class="row align-items-center">
				<div class="col col-12 col-md-6 col-lg-6 col-xl-6">
					<h2 class="display-3 text-secondary reveal-up"><span class="text-accent d-inline-block">Search Engin</span> Optimization (Seo)</h2>
					<p class="text-secondary fs-6 reveal-up">SEO is an essential component of any digital marketing campaign because it allows and encourages search engines (Google) to understand your website and its content.</p>
					<p class="text-secondary fs-6 reveal-up">The first task is a full SEO audit, our experts will analyse your site, complete an audit and come up with a detailed plan to help you increase your visibility.</p>
					<p class="text-secondary fs-6 reveal-up">We will optimise your site, make the relevant changes on page to impact the amount of traffic coming from your site from organic traffic.</p>
					<p class="text-secondary fs-6 reveal-up">Google Search Console (GSC) will also be installed and set up to your analytics account so we will not only be able to see what search terms drive traffic to your site organically, but where areas of opportunity lie to capture more traffic and also see the impact from our work.</p>
					<a href="#">
						<button class="btn bg-accent text-light reveal-up" style="padding: .4rem 1.7rem; border-radius: 100px;">
							Get Seen By
						</button>
					</a>
				</div>
				<div class="col-12 col-md-6 col-lg-6 col-xl-6">
					<div class="seo-image">
						<img class="lazy-img img-fluid" data-sizes="300" data-src="<?php bloginfo('template_directory') ?>/assets/images/seo-image.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- SECTION -->
	<section class="testimonial container-fluid position-relative bg-secondary-dark">
		<svg class="section-cutout-top dark-svg" width="100%" height="50px" viewBox="0 0 100 200" preserveAspectRatio="none">
			<g>
				<polygon class="fill-secondary-dark" points="100 0, 200 0,0 200,100 200"></polygon>
			</g>
		</svg>
		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-12 col-md-5 col-lg-5 col-xl-5 offset-sm-0 offset-xl-1 order-1 order-md-2 mb-5">
					<h3 class="text-primary display-3"> Here's what our clients have <span class="text-accent">said about us</span></h3>
				</div>
				<div class="col-12 col-md-5 col-lg-6 col-xl-5 offset-lg-0 offset-xl-1 order-2 order-md-1">

					<div class="glide testimonials-glide" style="width: calc(100% - 10px); margin: auto;">
						<div class="glide__track" data-glide-el="track" style="width: 100%;">
							<div class="glide__slides">
								<div class="glide__slide">
									<h3 class="display-6 text-primary">Title Of The Testimonial 1</h3>
									<p class="text-primary fs-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
									<p class="text-primary fs-6 testimonial-author">Client Name</p>
								</div>

								<div class="glide__slide">
									<h3 class="display-6 text-primary">Title Of The Testimonial 2</h3>
									<p class="text-primary fs-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
									<p class="text-primary fs-6 testimonial-author">Client Name</p>
								</div>

								<div class="glide__slide">
									<h3 class="display-6 text-primary">Title Of The Testimonial 3</h3>
									<p class="text-primary fs-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
									<p class="text-primary fs-6 testimonial-author">Client Name</p>
								</div>
							</div>
						</div>

						<div class="glide__bullets" data-glide-el="controls[nav]">
							<button class="glide__bullet" data-glide-dir="=0" data-label="First slider button"></button>
							<button class="glide__bullet" data-glide-dir="=1" data-label="Second slider button"></button>
							<button class="glide__bullet" data-glide-dir="=2" data-label="Third slider button"></button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<svg class="section-cutout-bottom-left dark-svg" width="100%" height="50px" viewBox="0 0 100 200" preserveAspectRatio="none">
			<g>
				<polygon class="fill-secondary-dark" points="0,100 0, 0 100, 0"></polygon>
			</g>
		</svg>
	</section>

	<!-- SECTION -->
	<section class="contact-us container-fluid bg-light position-relative">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-12 col-md-6 col-lg-6 ">
					<div style="margin-bottom: 3rem; padding: 0 2rem;">
						<h2 class="display-3 text-secondary">Contact Us</h2>
						<p class="text-seconday fs-6 reveal-up">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						<a href="#">
							<button class="btn bg-accent text-light reveal-up" style="padding: .4rem 1.7rem; border-radius: 100px;">
								Contact Us Today
							</button>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="map-container">
			<img class="lazy-img img-fluid" data-sizes="300" data-src="<?php bloginfo('template_directory') ?>/assets/images/map.jpg" alt="">
		</div>
	</section>

</main>

<?php get_footer(); ?>
