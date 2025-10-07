@extends('layouts.front')
@section('opTag')


@section('title', 'Home')

@endsection
@section('content')


<div class="page-content bg-white">

				<!-- Main Banner -->
				<div class="swiper-container hero-slide">
					<div class="swiper-wrapper">
						<div class="swiper-slide">

							<div class="main-banner"
								style="background-image:url(images/main-banner/bg1.jpg);width: 100%;">
								<div class="container inner-content">
									<div class="row align-items-center">
										<div class="col-lg-7 col-md-6 col-sm-7">
											<h6 class="title-ext text-primary">Welcome to Aagam Hospital</h6>
											<h1>Expert Orthopedic Care <br> You Can Trust</h1>
											<h3>Stronger Bones, Better Lives</h3>
											<a href="{{ route('FrontAboutus') }}" class="btn btn-secondary btn-lg shadow">Read
												More</a>
										</div>
										<div class="col-lg-5 col-md-6 col-sm-5">
											<div class="banner-img">
												<img src="{{ asset('Front/assets/images/main-banner/doctor-1.jpeg') }}" alt>
											</div>
										</div>
									</div>
								</div>
								<!--<img class="pt-img1 animate1"-->
								<!--	src="{{ asset('Front/assets/images/shap/trangle-orange.png') }}" alt>-->
								<!--<img class="pt-img2 animate2" src="{{ asset('Front/assets/images/shap/square-blue.png') }}"-->
								<!--	alt>-->
								<!--<img class="pt-img3 animate3" src="{{ asset('Front/assets/images/shap/chicle-blue-2.png') }}"-->
								<!--	alt>-->
								<!--<img class="pt-img4 animate4" src="{{ asset('Front/assets/images/shap/plus-orange.png') }}"-->
								<!--	alt>-->
								<!--<img class="pt-img5 animate-wave"-->
								<!--	src="{{ asset('Front/assets/images/shap/wave-orange.png') }}" alt>-->
							</div>
						</div>
						<div class="swiper-slide">

							<div class="main-banner"
								style="background-image:url(images/main-banner/bg1.jpg);">
								<div class="container inner-content">
									<div class="row align-items-center">
										<div class="col-lg-7 col-md-6 col-sm-7">
											<h6 class="title-ext text-primary">Welcome to Aagam Hospital</h6>
											<h1>Expert Pediatric Care <br> You Can Trust</h1>
											<h3>Caring for Little Ones with <br> Big Hearts and Medical
												Expertise</h3>
											<a href="{{ route('FrontAboutus') }}" class="btn btn-secondary btn-lg shadow">Read
												More</a>
										</div>
										<div class="col-lg-5 col-md-6 col-sm-5">
											<div class="banner-img">
												<img src="{{ asset('Front/assets/images/main-banner/doctor-2.jpeg') }}" alt>
											</div>
										</div>
									</div>
								</div>
								<!--<img class="pt-img1 animate1"-->
								<!--	src="{{ asset('Front/assets/images/shap/trangle-orange.png') }}" alt>-->
								<!--<img class="pt-img2 animate2" src="{{ asset('Front/assets/images/shap/square-blue.png') }}"-->
								<!--	alt>-->
								<!--<img class="pt-img3 animate3" src="{{ asset('Front/assets/images/shap/chicle-blue-2.png') }}"-->
								<!--	alt>-->
								<!--<img class="pt-img4 animate4" src="{{ asset('Front/assets/images/shap/plus-orange.png') }}"-->
								<!--	alt>-->
								<!--<img class="pt-img5 animate-wave"-->
								<!--	src="{{ asset('Front/assets/images/shap/wave-orange.png') }}" alt>-->
							</div>
						</div>
					</div></div>
				<!-- About us -->
				<section class="section-sp1 about-area pt-0">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-lg-6 mb-30">
								<div class="about-thumb-area">
									<ul>
										<li><img class="about-thumb1" src="{{ asset('Front/assets/images/about/pic-1.jpg') }}"
												alt></li>
										<li><img class="about-thumb2" src="{{ asset('Front/assets/images/about/pic-2.jpg') }}"
												alt></li>
										<li><img class="about-thumb3" src="{{ asset('Front/assets/images/about/pic-3.jpg') }}"
												alt></li>
										<li><div class="exp-bx">10+<span>Year Experience</span></div></li>
									</ul>
								</div>
							</div>
							<div class="col-lg-6 mb-30">
								<div class="heading-bx">
									<h6 class="title-ext text-secondary">About Us</h6>
									<h2 class="title">Dedicated to Healing Bones and Restoring Lives</h2>
									<p>At Aagam Hospital, we are committed to delivering high quality
										healthcare with a personal touch. Whether it’s helping a child take
										their first confident steps or supporting adults through advanced
										orthopaedic solutions, our focus remains on enhancing quality of life
										through expert care and empathy. With a modern infrastructure,
										advanced diagnostic tools, and a patient first approach, Aagam
										Hospital serves as a trusted healthcare destination for families.</p>
								</div>
								<div class="row">
									<div class="col-lg-6 col-sm-6 mb-30 mb-sm-20">
										<div class="feature-container feature-bx1 feature1">
											<div class="icon-md">
												<span class="icon-cell">
													<svg enable-background="new 0 0 512 512" height="85"
														viewBox="0 0 512 512" width="85"
														xmlns="http://www.w3.org/2000/svg">
														<path
															d="m509.82 327.343-21.991-27.599c-1.896-2.381-4.775-3.768-7.82-3.768h-7.712l-74.353-93.385c-1.897-2.383-4.777-3.771-7.823-3.771h-22.862v-22.765c0-19.014-15.43-34.483-34.396-34.483h-97.678v-4.552c0-28.428-23.127-51.555-51.555-51.555s-51.555 23.127-51.555 51.555v4.552h-97.678c-18.966 0-34.397 15.47-34.397 34.484v251.241c0 5.523 4.478 10 10 10h22.279c4.628 22.794 24.758 39.999 48.815 39.999s44.186-17.205 48.814-39.999h250.37c4.628 22.794 24.757 39.999 48.814 39.999s44.187-17.205 48.815-39.999h24.093c5.522 0 10-4.477 10-10v-93.722c0-2.264-.769-4.461-2.18-6.232zm-124.52-108.523 61.432 77.156h-79.474v-77.156zm-233.226-81.799c0-17.399 14.155-31.555 31.555-31.555s31.555 14.156 31.555 31.555v4.552h-63.109v-4.552zm-132.074 39.035c0-7.986 6.459-14.483 14.397-14.483h298.464c7.938 0 14.396 6.497 14.396 14.483v241.241h-217.35c-4.628-22.794-24.757-39.999-48.814-39.999s-44.187 17.205-48.815 39.999h-12.278zm61.094 281.24c-16.44 0-29.816-13.458-29.816-29.999s13.376-29.999 29.816-29.999 29.815 13.458 29.815 29.999-13.375 29.999-29.815 29.999zm347.998 0c-16.44 0-29.815-13.458-29.815-29.999s13.375-29.999 29.815-29.999 29.816 13.458 29.816 29.999-13.376 29.999-29.816 29.999zm62.908-39.999h-14.093c-4.628-22.794-24.758-39.999-48.815-39.999s-44.186 17.205-48.814 39.999h-13.02v-101.321h107.932l16.81 21.096z" />
														<path
															d="m183.629 66.808c5.522 0 10-4.477 10-10v-12.104c0-5.523-4.478-10-10-10s-10 4.477-10 10v12.104c0 5.523 4.477 10 10 10z" />
														<path
															d="m236.764 94.969c1.934 1.829 4.404 2.736 6.871 2.736 2.652 0 5.299-1.048 7.266-3.127l10.626-11.229c3.796-4.011 3.621-10.341-.391-14.137s-10.341-3.621-14.137.391l-10.626 11.229c-3.796 4.012-3.621 10.341.391 14.137z" />
														<path
															d="m116.358 94.579c1.967 2.078 4.613 3.126 7.266 3.126 2.467 0 4.938-.907 6.871-2.737 4.012-3.796 4.187-10.125.391-14.137l-10.627-11.229c-3.796-4.011-10.126-4.187-14.137-.39-4.012 3.796-4.187 10.125-.391 14.137z" />
														<path d="m90.896 216.592h184.372v113.287h-184.372z"
															fill="#b2f0fb" />
													</svg>
												</span>
											</div>
											<div class="icon-content">
												<h4 class="ttr-title">Emergency Help</h4>
											</div>
										</div>
									</div>
									<div class="col-lg-6 col-sm-6 mb-30 mb-sm-20">
										<div class="feature-container feature-bx1 feature2">
											<div class="icon-md">
												<span class="icon-cell">
													<svg enable-background="new 0 0 512 512" height="85"
														viewBox="0 0 512 512" width="85"
														xmlns="http://www.w3.org/2000/svg">
														<path
															d="m351.524 124.49h-37.907v-37.907h-44.657v37.907h-37.906v44.657h37.906v37.907h44.657v-37.907h37.907z"
															fill="#a4fcc4" />
														<path
															d="m291.289 279.415c73.114 0 132.597-59.482 132.597-132.597s-59.483-132.596-132.597-132.596-132.598 59.482-132.598 132.596 59.484 132.597 132.598 132.597zm0-245.193c62.086 0 112.597 50.511 112.597 112.597s-50.511 112.597-112.597 112.597c-62.087 0-112.598-50.511-112.598-112.597s50.511-112.597 112.598-112.597z" />
														<path
															d="m502 267.736c-32.668 0-59.245 26.577-59.245 59.245v13.605h-240.266v-19.048c0-23.625-19.221-42.846-42.846-42.846h-90.398v-17.584c0-32.668-26.577-59.245-59.245-59.245-5.522 0-10 4.478-10 10v275.914c0 5.522 4.478 10 10 10h49.245c5.522 0 10-4.478 10-10v-39.327h373.51v39.327c0 5.522 4.478 10 10 10h49.245c5.522 0 10-4.478 10-10v-210.041c0-5.522-4.478-10-10-10zm-342.356 30.957c12.598 0 22.846 10.249 22.846 22.846v19.048h-113.245v-41.894zm-110.399 179.085h-29.245v-254.623c16.812 4.434 29.245 19.77 29.245 37.954zm20-49.327v-67.864h373.51v67.864zm422.755 49.327h-29.245v-150.797c0-18.185 12.434-33.521 29.245-37.954z" />
													</svg>
												</span>
											</div>
											<div class="icon-content">
												<h4 class="ttr-title">Qualified Doctors</h4>
											</div>
										</div>
									</div>
									<div class="col-lg-6 col-sm-6 mb-30 mb-sm-20">
										<div class="feature-container feature-bx1 feature3">
											<div class="icon-md">
												<span class="icon-cell">
													<svg enable-background="new 0 0 512 512" height="85"
														viewBox="0 0 512 512" width="85"
														xmlns="http://www.w3.org/2000/svg">
														<path
															d="m397.886 191.161c-3.545-4.235-9.852-4.797-14.087-1.252-4.235 3.544-4.797 9.851-1.253 14.086 26.684 31.893 41.165 72.339 40.775 113.888-.886 94.681-79.215 172.782-174.608 174.1-48.125.666-93.326-17.479-127.401-51.087-33.708-33.246-52.272-77.526-52.272-124.685 0-59.98 30.361-115.236 81.216-147.809 51.27-32.838 79.187-66.186 93.348-111.507l2.581-8.26 2.58 8.257c9.333 29.869 25.53 55.364 49.516 77.939 4.02 3.786 10.35 3.593 14.136-.428 3.785-4.021 3.594-10.351-.429-14.136-21.713-20.438-35.736-42.471-44.133-69.341l-12.125-38.802c-1.305-4.175-5.171-7.018-9.545-7.018s-8.24 2.843-9.545 7.018l-12.126 38.807c-12.639 40.45-38.072 70.545-85.045 100.63-56.624 36.268-90.429 97.819-90.429 164.65 0 52.553 20.679 101.891 58.228 138.924 37.248 36.736 86.47 56.867 138.888 56.865.941 0 1.891-.006 2.833-.02 51.527-.712 100.087-21.236 136.733-57.792 36.664-36.573 57.12-84.914 57.6-136.118.432-46.301-15.704-91.371-45.436-126.909z" />
														<path
															d="m279.576 280.012v-29.712c0-5.523-4.478-10-10-10h-46.783c-5.522 0-10 4.477-10 10v29.712h-29.711c-5.522 0-10 4.477-10 10v46.783c0 5.523 4.478 10 10 10h29.711v29.711c0 5.523 4.478 10 10 10h46.783c5.522 0 10-4.477 10-10v-29.711h29.712c5.522 0 10-4.477 10-10v-46.783c0-5.523-4.478-10-10-10zm19.712 46.783h-29.712c-5.522 0-10 4.477-10 10v29.711h-26.783v-29.711c0-5.523-4.478-10-10-10h-29.711v-26.783h29.711c5.522 0 10-4.477 10-10v-29.712h26.783v29.712c0 5.523 4.478 10 10 10h29.712z" />
														<path
															d="m369.497 246.666c51.239-.708 92.983-42.352 93.459-93.223.313-33.486-16.989-62.983-43.266-79.911-21.598-13.914-37.772-29.46-45.4-53.873l-6.143-19.659-6.143 19.661c-7.603 24.331-23.627 39.927-45.19 53.738-26.16 16.756-43.48 45.945-43.48 79.151 0 52.43 43.18 94.848 96.163 94.116z"
															fill="#ffbdbc" />
													</svg>
												</span>
											</div>
											<div class="icon-content">
												<h4 class="ttr-title">Best Professionals</h4>
											</div>
										</div>
									</div>
									<div class="col-lg-6 col-sm-6 mb-30 mb-sm-20">
										<div class="feature-container feature-bx1 feature4">
											<div class="icon-md">
												<span class="icon-cell">
													<svg enable-background="new 0 0 512 512" height="85"
														viewBox="0 0 512 512" width="85"
														xmlns="http://www.w3.org/2000/svg">
														<path
															d="m181.049 229.112-76.87 76.971c-14.045 14.07-14.045 36.883 0 50.953l50.881 50.974c14.045 14.07 36.815 14.07 50.86 0l178.611-178.899h-203.482z"
															fill="#4c3f3d" />
														<path
															d="m495.277 81.339c-10.57-10.578-24.625-16.403-39.574-16.403-3.325 0-6.605.288-9.813.853 3.065-17.397-2.103-35.975-15.505-49.387-10.57-10.577-24.624-16.402-39.574-16.402s-29.003 5.825-39.573 16.402c-21.816 21.83-21.816 57.352 0 79.182 2.71 2.712 5.648 5.111 8.772 7.18l-18.689 18.716-52.105-52.184c-3.902-3.907-10.233-3.912-14.142-.012-3.908 3.902-3.914 10.234-.011 14.143l18.64 18.67-196.602 196.922c-17.56 17.593-17.902 46.002-1.029 64.017l-16.422 16.452c-3.896 3.903-3.896 10.226 0 14.129l12.383 12.406-88.75 88.913c-3.901 3.909-3.896 10.24.013 14.142 1.953 1.948 4.509 2.922 7.065 2.922 2.562 0 5.125-.979 7.078-2.936l88.724-88.887 12.357 12.38c1.876 1.88 4.422 2.936 7.078 2.936s5.202-1.056 7.078-2.936l16.396-16.426c8.547 8.028 19.644 12.432 31.418 12.432 12.28 0 23.825-4.79 32.506-13.487l196.588-196.91 18.617 18.648c1.953 1.956 4.515 2.935 7.077 2.935 2.557 0 5.113-.975 7.065-2.923 3.908-3.902 3.914-10.234.011-14.143l-52.155-52.24 18.732-18.758c2.054 3.126 4.453 6.09 7.198 8.836 10.57 10.577 24.624 16.402 39.573 16.402s29.003-5.825 39.574-16.402c21.817-21.831 21.817-57.352.001-79.182zm-129.892-50.8c6.792-6.796 15.822-10.539 25.426-10.539s18.635 3.743 25.427 10.539c13.407 13.416 13.997 34.875 1.773 49.001-.638.583-1.266 1.183-1.881 1.799-.616.617-1.214 1.245-1.795 1.882-6.533 5.671-14.791 8.766-23.524 8.766-9.604 0-18.634-3.743-25.427-10.54-14.025-14.035-14.025-36.873.001-50.908zm-239.787 380.799-24.74-24.786 9.327-9.344 14.287 14.313 10.454 10.473zm73.244-10.392c-4.903 4.912-11.42 7.617-18.352 7.617s-13.449-2.705-18.353-7.617l-50.881-50.975c-10.134-10.152-10.134-26.672-.001-36.823l196.578-196.898 87.616 87.767zm177.227-244.657-20.619-20.654 24.634-24.669c3.498.676 7.086 1.021 10.727 1.021 3.325 0 6.606-.288 9.813-.853-1.189 6.75-1.139 13.678.151 20.413zm105.062-9.905c-6.792 6.796-15.823 10.539-25.427 10.539s-18.635-3.743-25.427-10.539c-13.407-13.416-13.998-34.875-1.773-49.001.638-.583 1.266-1.183 1.881-1.799.617-.617 1.215-1.246 1.797-1.884 6.532-5.67 14.789-8.764 23.521-8.764 9.604 0 18.635 3.743 25.427 10.54 14.026 14.035 14.026 36.873.001 50.908z"
															fill="#4c3f3d" />
													</svg>
												</span>
											</div>
											<div class="icon-content">
												<h4 class="ttr-title">Medical Treatment</h4>
											</div>
										</div>
									</div>
								</div>
								<a href="{{ route('FrontAboutus') }}" class="btn btn-primary shadow">Read More</a>
							</div>
						</div>
					</div>
					<!--<img class="pt-img1 animate-wave" src="{{ asset('Front/assets/images/shap/wave-orange.png') }}"-->
					<!--	alt>-->
					<!--<img class="pt-img2 animate2"-->
					<!--	src="{{ asset('Front/assets/images/shap/circle-small-blue.png') }}" alt>-->
					<!--<img class="pt-img3 animate-rotate"-->
					<!--	src="{{ asset('Front/assets/images/shap/line-circle-blue.png') }}" alt>-->
					<!--<img class="pt-img4 animate-wave"-->
					<!--	src="{{ asset('Front/assets/images/shap/square-dots-orange.png') }}" alt>-->
					<!--<img class="pt-img5 animate2" src="{{ asset('Front/assets/images/shap/square-blue.png') }}" alt>-->
				</section>

				<!-- Appointment -->
				<section class="section-area account-wraper1" id="appointment">
					<div class="container-fluid">
						<div class="appointment-inner section-sp2"
							style="background-image: url(images/appointment/line-bg.png); background-repeat: no-repeat; background-position: 20px 140px;">
							<div class="container" id="appointment">
								<div class="row align-items-center">
									<div class="col-xl-5 col-lg-6 col-md-6">
										<div class="appointment-form form-wraper">
											<h3 class="title">Book Appointment</h3>
											<form action="{{ route('appointment.store') }}" method="POST">
												@csrf
												<div class="form-group">
													<select class="form-select" name="category_id" required>
														<option >Select Service</option>
														@foreach ($categories as $category)
															<option value="{{ $category->category_id }}">{{ $category->category_name }}</option>
														@endforeach
													</select>
												</div>
												<div class="form-group">
													<input type="text" class="form-control" name="name" placeholder="Your Name" required>
												</div>
												<div class="form-group">
													<input type="text"
														class="form-control"
														name="phone"
														placeholder="Phone Number"
														required
														pattern="\d{10}"
														maxlength="10"
														minlength="10"
														title="Please enter exactly 10 digits"
														oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10)">
												</div>

												<div class="form-group">
													<input type="date" class="form-control" name="appointment_date" min="{{ date('Y-m-d') }}" required>
												</div>
												<div class="col-lg-12 col-md-12 form-field form-group{{ $errors->has('captcha') ? ' has-error' : '' }}">
													<div class="d-flex align-items-center gap-2">
														<div class="captcha">
															{!! captcha_img() !!}
														</div>
														<button type="button" class="btn btn-sm btn-danger reload" id="reload">
															&#x21bb;
														</button>
													</div>
													<input id="captcha" type="text" name="captcha" class="form-control mt-2" placeholder="Enter Captcha" required>

													@if ($errors->has('captcha'))
														<span class="help-block text-danger">
															<strong>{{ $errors->first('captcha') }}</strong>
														</span>
													@endif
                                           		 </div>

												<button type="submit" class="btn btn-secondary btn-lg">Appointment Now</button>
											</form>
										</div>
									</div>
									<div class="col-xl-7 col-lg-6 col-md-6">
										<div class="appointment-thumb">
											<img src="{{ asset('Front/assets/images/appointment/mobile.png') }}" alt>
											<div class="images-group">
												<img class="img1" src="{{ asset('Front/assets/images/appointment/women.png') }}" alt>
												<img class="img2" src="{{ asset('Front/assets/images/appointment/map-pin.png') }}" alt>
												<img class="img3" src="{{ asset('Front/assets/images/appointment/setting.png') }}" alt>
												<img class="img4" src="{{ asset('Front/assets/images/appointment/check.png') }}" alt>
												<img class="img5" src="{{ asset('Front/assets/images/appointment/chat.png') }}" alt>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--<img class="pt-img1 animate1" src="{{ asset('Front/assets/images/shap/trangle-orange.png') }}"-->
							<!--	alt>-->
							<!--<img class="pt-img2 animate-wave"-->
							<!--	src="{{ asset('Front/assets/images/shap/wave-orange.png') }}" alt>-->
							<!--<img class="pt-img3 animate-wave" src="{{ asset('Front/assets/images/shap/wave-blue.png') }}"-->
							<!--	alt>-->
							<!--<img class="pt-img4 animate2" src="{{ asset('Front/assets/images/shap/circle-orange.png') }}"-->
							<!--	alt>-->
						</div>
					</div>
				</section>

				<!-- service -->
				<section class="section-area section-sp1 service-wraper">
					<div class="row align-items-center">
						<div class="col-xl-4 col-lg-7 mb-30">
							<div class="heading-bx">
								<h6 class="title-ext text-secondary">Our Services</h6>
								<h2 class="title">Comprehensive Orthopedic & Pediatric Care</h2>
								<p>Our Orthopedic and Pediatric Services are designed to provide expert
									care for musculoskeletal conditions and children's health needs.
									Whether it's treating fractures, joint pain, or developmental issues in
									children, our multidisciplinary team offers compassionate,
									patient-centered solutions. </p>
							</div>
							<a href="{{ route('FrontOrthoservices') }}" class="btn btn-secondary btn-lg shadow">All
								Services</a>
						</div>
						<div class="col-xl-8 mb-15">
							<div class="swiper-container service-slide">
								<div class="swiper-wrapper">
									{{-- Ortho Services --}}
										@foreach($limitedOrthoServices as $service)
								


										<div class="swiper-slide">
											<div class="feature-container feature-bx2 feature1">
												<div class="feature-box-xl mb-30">
													<!-- <span class="icon-cell"> -->
														<img src="{{ asset('/Services/' . $service->serviceImage) }}" alt>
													<!-- </span> -->
												</div>
												<div class="icon-content">
													<h3 class="ttr-title" style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis;">
														{{ $service->serviceName }}
													</h3>	
													

										<a href="{{ route('FrontServiceWork', ['id' => $service->serviceId]) }}" class="btn btn-primary light">
																						View More
																					</a>
												</div>
											</div>
										</div>
										@endforeach

										{{-- Pediatric Services --}}
										@foreach($limitedPediatricServices as $service)
										<div class="swiper-slide">
											<div class="feature-container feature-bx2 feature1">
												<div class="feature-box-xl mb-30">
													<!-- <span class="icon-cell"> -->
														<img src="{{ asset('/Services/' . $service->serviceImage) }}" alt>
													<!-- </span> -->
												</div>
												<div class="icon-content">
													<h3 class="ttr-title" style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis;">
														{{ $service->serviceName }}
													</h3>	
													

										<a href="{{ route('FrontServiceWork', ['id' => $service->serviceId]) }}" class="btn btn-primary light">
																						View More
																					</a>  
											</div>
											</div>
										</div>
										@endforeach

									<!-- <div class="swiper-slide">
										<div class="feature-container feature-bx2 feature1">
											<div class="feature-box-xl mb-30">
												<span class="icon-cell">
													<img src="{{ asset('Front/assets/images/icon/knee-joint.svg') }}" alt>
												</span>
											</div>
											<div class="icon-content">
												<h3 class="ttr-title">Joint Replacement </h3>
												<p>Advanced surgical solutions for hip, knee, and shoulder joint
													restoration.</p>
												<a href="{{ route('FrontOrthoservices') }}" class="btn btn-primary light">View More</a>
											</div>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="feature-container feature-bx2 feature2">
											<div class="feature-box-xl mb-20">
												<span class="icon-cell">
													<img src="{{ asset('Front/assets/images/icon/pain-injury.svg') }}" alt>
												</span>
											</div>
											<div class="icon-content">
												<h3 class="ttr-title">Sports Injury Treatment</h3>
												<p>Specialized care for sprains, strains, fractures, and ligament
													tears.</p>
												<a href="{{ route('FrontOrthoservices') }}" class="btn btn-primary light">View More</a>
											</div>
										</div>
									</div>

									<div class="swiper-slide">
										<div class="feature-container feature-bx2 feature1">
											<div class="feature-box-xl mb-20">
												<span class="icon-cell">
													<img src="{{ asset('Front/assets/images/icon/back-pain.svg') }}" alt>
												</span>
											</div>
											<div class="icon-content">
												<h3 class="ttr-title">Spine and Back Care </h3>
												<p>Non-surgical and surgical solutions for chronic back and neck
													pain.</p>
												<a href="{{ route('FrontOrthoservices') }}" class="btn btn-primary light">View More</a>
											</div>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="feature-container feature-bx2 feature2">
											<div class="feature-box-xl mb-20">
												<span class="icon-cell">
													<img src="{{ asset('Front/assets/images/icon/pediatric_orthopaedics.svg') }}" alt>
												</span>
											</div>
											<div class="icon-content">
												<h3 class="ttr-title">Pediatric Orthopedics</h3>
												<p>Gentle, expert care for bone and joint conditions in
													children.</p>
												<a href="{{ route('FrontPediatricservices') }}" class="btn btn-primary light">View More</a>
											</div>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="feature-container feature-bx2 feature3">
											<div class="feature-box-xl mb-20">
												<span class="icon-cell">
													<img src="{{ asset('Front/assets/images/icon/vaccine-svgrepo-com.svg') }}" alt>
												</span>
											</div>
											<div class="icon-content">
												<h3 class="ttr-title">Vaccinations / Immunizations</h3>
												<p>Timely protection against common childhood diseases.</p>
												<a href="{{ route('FrontVaccination') }}" class="btn btn-primary light">View More</a>
											</div>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="feature-container feature-bx2 feature3">
											<div class="feature-box-xl mb-20">
												<span class="icon-cell">
													<img src="{{ asset('Front/assets/images/icon/developmental.svg') }}" alt>
												</span>
											</div>
											<div class="icon-content">
												<h3 class="ttr-title">Developmental Screening</h3>
												<p>Monitoring milestones to detect early signs of developmental
													delays.</p>
												<a href="" class="btn btn-primary light">View More</a>
											</div>
										</div>
									</div> -->
								</div>
							</div>
						</div>
					</div>
					<!--<img class="pt-img1 animate-rotate"-->
					<!--	src="{{ asset('Front/assets/images/shap/line-circle-blue.png') }}" alt>-->
					<!--<img class="pt-img2 animate2"-->
					<!--	src="{{ asset('Front/assets/images/shap/square-dots-orange.png') }}" alt>-->
					<!--<img class="pt-img3 animate-wave" src="{{ asset('Front/assets/images/shap/wave-blue.png') }}"-->
					<!--	alt>-->
					<!--<img class="pt-img4 animate1" src="{{ asset('Front/assets/images/shap/square-rotate.png') }}"-->
					<!--	alt>-->
				</section>

				<!-- Testimonial -->
				<section class="section-area section-sp3 testimonial-wraper">
					<div class="container">
						<div class="heading-bx text-center">
							<h6 class="title-ext text-secondary">Testimonial</h6>
							<h2 class="title m-b0">See What Are The Patients <br>Saying About us</h2>
						</div>
						<div class="row align-items-center">
							<div class="row align-items-center">
								<div class="col-lg-6 text-center">
									<div class="thumb-wraper">
										<img class="bg-img" src="{{ asset('Front/assets/images/testimonials/shape.png') }}" alt>
										<ul>
											@foreach($Testimonial as $index => $testimonial)
											<li data-member="{{ $index + 1 }}">
												<a href="javascript:void(0);">
													<img src="{{ asset('/Testimonial/').'/'.$testimonial->photo}}	" alt />
												</a>
											</li>
											@endforeach
										</ul>
									</div>
								</div>

								<div class="col-lg-6">
									<div class="swiper-container testimonial-slide">
										<div class="swiper-wrapper">
											@foreach($Testimonial as $index => $testimonial)
											<div class="swiper-slide" data-rel="{{ $index + 1 }}">
												<div class="testimonial-bx">
													<div class="testimonial-content">
														<p>{{ $testimonial->description }}</p>
													</div>
													<div class="client-info">
														<h5 class="name">{{ $testimonial->name }}</h5>
														<p>Patient</p>
													</div>
													<div class="quote-icon">
														<i class="fas fa-quote-left"></i>
													</div>
												</div>
											</div>
											@endforeach
										</div>

										<div class="swiper-button-prev test-btn-prev"><i class="las la-arrow-left"></i></div>
										<div class="swiper-button-next test-btn-next"><i class="las la-arrow-right"></i></div>
										<div class="swiper-pagination"></div>
									</div>
								</div>
							</div>

							<!-- <div class="col-lg-6 text-center">
								<div class="thumb-wraper">
									<img class="bg-img" src="{{ asset('Front/assets/images/testimonials/shape.png') }}" alt>
									<ul>
										<li data-member="1"><a href="javascript:void(0);"><img
													src="{{ asset('Front/assets/images/testimonials/pic1.jpg') }}" alt /></a></li>
										<li data-member="2"><a href="javascript:void(0);"><img
													src="{{ asset('Front/assets/images/testimonials/pic2.jpg') }}" alt /></a></li>
										<li data-member="3"><a href="javascript:void(0);"><img
													src="{{ asset('Front/assets/images/testimonials/pic3.jpg') }}" alt /></a></li>
										<li data-member="4"><a href="javascript:void(0);"><img
													src="{{ asset('Front/assets/images/testimonials/pic4.jpg') }}" alt /></a></li>
										<li data-member="5"><a href="javascript:void(0);"><img
													src="{{ asset('Front/assets/images/testimonials/pic5.jpg') }}" alt /></a></li>
										<li data-member="6"><a href="javascript:void(0);"><img
													src="{{ asset('Front/assets/images/testimonials/pic6.jpg') }}" alt /></a></li>
									</ul>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="swiper-container testimonial-slide">
									<div class="swiper-wrapper">
										<div class="swiper-slide" data-rel="1">
											<div class="testimonial-bx">
												<div class="testimonial-content">
													<p> 01 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
														eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis
														ipsum suspendisse ultrices gravida. Risus commodo viverra maecena
														ssuspendisse ultrices gravida.</p>
												</div>
												<div class="client-info">
													<h5 class="name">John Deo</h5>
													<p>patient</p>
												</div>
												<div class="quote-icon">
													<i class="fas fa-quote-left"></i>
												</div>
											</div>
										</div>
										<div class="swiper-slide" data-rel="2">
											<div class="testimonial-bx">
												<div class="testimonial-content">
													<p> 02 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
														eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis
														ipsum suspendisse ultrices gravida. Risus commodo viverra maecena
														ssuspendisse ultrices gravida.</p>
												</div>
												<div class="client-info">
													<h5 class="name">John Deo</h5>
													<p>patient</p>
												</div>
												<div class="quote-icon">
													<i class="fas fa-quote-left"></i>
												</div>
											</div>
										</div>
										<div class="swiper-slide" data-rel="3">
											<div class="testimonial-bx">
												<div class="testimonial-content">
													<p> 03 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
														eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis
														ipsum suspendisse ultrices gravida. Risus commodo viverra maecena
														ssuspendisse ultrices gravida.</p>
												</div>
												<div class="client-info">
													<h5 class="name">John Deo</h5>
													<p>patient</p>
												</div>
												<div class="quote-icon">
													<i class="fas fa-quote-left"></i>
												</div>
											</div>
										</div>
										<div class="swiper-slide" data-rel="4">
											<div class="testimonial-bx">
												<div class="testimonial-content">
													<p> 04 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
														eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis
														ipsum suspendisse ultrices gravida. Risus commodo viverra maecena
														ssuspendisse ultrices gravida.</p>
												</div>
												<div class="client-info">
													<h5 class="name">John Deo</h5>
													<p>patient</p>
												</div>
												<div class="quote-icon">
													<i class="fas fa-quote-left"></i>
												</div>
											</div>
										</div>
										<div class="swiper-slide" data-rel="5">
											<div class="testimonial-bx">
												<div class="testimonial-content">
													<p> 06 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
														eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis
														ipsum suspendisse ultrices gravida. Risus commodo viverra maecena
														ssuspendisse ultrices gravida.</p>
												</div>
												<div class="client-info">
													<h5 class="name">John Deo</h5>
													<p>patient</p>
												</div>
												<div class="quote-icon">
													<i class="fas fa-quote-left"></i>
												</div>
											</div>
										</div>
										<div class="swiper-slide" data-rel="6">
											<div class="testimonial-bx">
												<div class="testimonial-content">
													<p> 06 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
														eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis
														ipsum suspendisse ultrices gravida. Risus commodo viverra maecena
														ssuspendisse ultrices gravida.</p>
												</div>
												<div class="client-info">
													<h5 class="name">John Deo</h5>
													<p>patient</p>
												</div>
												<div class="quote-icon">
													<i class="fas fa-quote-left"></i>
												</div>
											</div>
										</div>
									</div>
									<div class="swiper-button-prev test-btn-prev"><i
											class="las la-arrow-left"></i></div>
									<div class="swiper-button-next test-btn-next"><i
											class="las la-arrow-right"></i></div>
									<div class="swiper-pagination"></div>
								</div>
							</div> -->
						</div>
					</div>
					<!--<img class="pt-img1 animate1" src="{{ asset('Front/assets/images/shap/plus-orange.png') }}" alt>-->
					<!--<img class="pt-img2 animate2" src="{{ asset('Front/assets/images/shap/square-blue.png') }}" alt>-->
					<!--<img class="pt-img3 animate3" src="{{ asset('Front/assets/images/shap/circle-dots.png') }}" alt>-->
					<!--<img class="pt-img4 animate4" src="{{ asset('Front/assets/images/shap/circle-orange-2.png') }}"-->
					<!--	alt>-->
				</section>

				<!-- Blog -->
				<section class="section-area section-sp1 blog-area"
					style="background-image: url(images/background/line-bg2.png); background-position: center; background-size: cover;">
					<div class="container">
						<div class="heading-bx text-center">
							<h6 class="title-ext text-secondary">Latest News</h6>
							<h2 class="title">Our Latest News</h2>
						</div>
						<div class="swiper-container blog-slide">
							<div class="swiper-wrapper">
								@if($blogs->count())
										@foreach($blogs as $blog)
										<div class="swiper-slide">
											<div class="blog-card">
												<div class="post-media">
													<a href="{{ url('blog-details/' . $blog->id) }}">
																					<img src="{{ asset('Blog/' . $blog->blogImage) }}" alt="{{ $blog->blogTitle }}">
													</a>
												</div>
												<div class="post-info">
													<ul class="post-meta">
														<!-- <li class="author">
															<a href="javascript:void(0);">
																<img src="{{ asset('Front/assets/images/testimonials/pic1.jpg') }}" alt="">
																{{ $blog->author ?? 'Admin' }}
															</a>
														</li> -->
														<li class="date">
															<i class="far fa-calendar-alt"></i>
															{{ \Carbon\Carbon::parse($blog->created_at)->format('d M Y') }}
														</li>
													</ul>
													<h4 class="post-title" style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis;">
														<a href="{{ url('blog-details/' . $blog->blog_slug) }}">
															{{ $blog->blogTitle }}
														</a>
													</h4>
													<a href="{{ url('blog-details/' . $blog->blog_slug) }}" class="btn btn-outline-primary btn-sm">
														Read More <i class="btn-icon-bx fas fa-chevron-right"></i>
													</a>
												</div>
											</div>
										</div>
										@endforeach
									@else
										<p>No blog posts found.</p>
									@endif

								<!-- <div class="swiper-slide">
									<div class="blog-card">
										<div class="post-media">
											<a href="blog-details.html"><img
													src="{{ asset('Front/assets/images/blog/grid/pic1.jpg') }}" alt></a>
										</div>
										<div class="post-info">
											<ul class="post-meta">
												<li class="author"><a href="blog-details.html"><img
															src="{{ asset('Front/assets/images/testimonials/pic1.jpg') }}" alt> John deo</a></li>
												<li class="date"><i class="far fa-calendar-alt"></i> 21 July
													2021</li>
											</ul>
											<h5 class="post-title"><a href="blog-details.html">In this hospital
													there are special surgeon</a></h5>
											<a href="blog-details.html"
												class="btn btn-outline-primary btn-sm">Read More <i
													class="btn-icon-bx fas fa-chevron-right"></i></a>
										</div>
									</div>
								</div> -->
								<!-- <div class="swiper-slide">
									<div class="blog-card">
										<div class="post-media">
											<a href="blog-details.html"><img
													src="{{ asset('Front/assets/images/blog/grid/pic2.jpg') }}" alt></a>
										</div>
										<div class="post-info">
											<ul class="post-meta">
												<li class="author"><a href="blog-details.html"><img
															src="{{ asset('Front/assets/images/testimonials/pic2.jpg') }}" alt> Peter
														Packer</a></li>
												<li class="date"><i class="far fa-calendar-alt"></i> 20 July
													2021</li>
											</ul>
											<h5 class="post-title"><a href="blog-details.html">Can you get a
													diflucan prescription online?</a></h5>
											<a href="blog-details.html"
												class="btn btn-outline-primary btn-sm">Read More <i
													class="btn-icon-bx fas fa-chevron-right"></i></a>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="blog-card">
										<div class="post-media">
											<a href="blog-details.html"><img
													src="{{ asset('Front/assets/images/blog/grid/pic3.jpg') }}" alt></a>
										</div>
										<div class="post-info">
											<ul class="post-meta">
												<li class="author"><a href="blog-details.html"><img
															src="{{ asset('Front/assets/images/testimonials/pic3.jpg') }}" alt> Sonar
														Moyna</a></li>
												<li class="date"><i class="far fa-calendar-alt"></i> 19 July
													2021</li>
											</ul>
											<h5 class="post-title"><a href="blog-details.html">Why Is Skin
													Surgeon Considered Underrated</a></h5>
											<a href="blog-details.html"
												class="btn btn-outline-primary btn-sm">Read More <i
													class="btn-icon-bx fas fa-chevron-right"></i></a>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="blog-card">
										<div class="post-media">
											<a href="blog-details.html"><img
													src="{{ asset('Front/assets/images/blog/grid/pic4.jpg') }}" alt></a>
										</div>
										<div class="post-info">
											<ul class="post-meta">
												<li class="author"><a href="blog-details.html"><img
															src="{{ asset('Front/assets/images/testimonials/pic4.jpg') }}" alt> Kalina
														Mollika</a></li>
												<li class="date"><i class="far fa-calendar-alt"></i> 18 July
													2021</li>
											</ul>
											<h5 class="post-title"><a href="blog-details.html">Dental Care for
													Women is very important</a></h5>
											<a href="blog-details.html"
												class="btn btn-outline-primary btn-sm">Read More <i
													class="btn-icon-bx fas fa-chevron-right"></i></a>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="blog-card">
										<div class="post-media">
											<a href="blog-details.html"><img
													src="{{ asset('Front/assets/images/blog/grid/pic5.jpg') }}" alt></a>
										</div>
										<div class="post-info">
											<ul class="post-meta">
												<li class="author"><a href="blog-details.html"><img
															src="{{ asset('Front/assets/images/testimonials/pic5.jpg') }}" alt> Michel </a></li>
												<li class="date"><i class="far fa-calendar-alt"></i> 17 July
													2021</li>
											</ul>
											<h5 class="post-title"><a href="blog-details.html">Health Will Be A
													Thing Of The Past And Here's Why</a></h5>
											<a href="blog-details.html"
												class="btn btn-outline-primary btn-sm">Read More <i
													class="btn-icon-bx fas fa-chevron-right"></i></a>
										</div>
									</div>
								</div> -->
							</div>
						</div>
					</div>
					<!--<img class="pt-img1 animate1" src="{{ asset('Front/assets/images/shap/trangle-orange.png') }}"-->
					<!--	alt>-->
					<!--<img class="pt-img2 animate2"-->
					<!--	src="{{ asset('Front/assets/images/shap/square-dots-orange.png') }}" alt>-->
					<!--<img class="pt-img3 animate-rotate"-->
					<!--	src="{{ asset('Front/assets/images/shap/line-circle-blue.png') }}" alt>-->
					<!--<img class="pt-img4 animate-wave" src="{{ asset('Front/assets/images/shap/wave-blue.png') }}"-->
					<!--	alt>-->
				</section>

			</div>


@include('common.alert')

   

@endsection

@section('scripts')
   <script>
    document.addEventListener('DOMContentLoaded', function () {
        document.getElementById('reload').addEventListener('click', function () {
            fetch('{{ route('refresh.captcha') }}')
                .then(response => response.json())
                .then(data => {
                    document.querySelector('.captcha').innerHTML = data.captcha;
                });
        });
    });
</script>
@endsection