<!-- Footer ==== -->
			<footer class="footer"
				style="background-image:url(images/background/footer.jpg);">
				<!-- Footer Top -->
				<div class="footer-top">
					<div class="container">
						<div class="row">
							<div class="col-xl-3 col-lg-3 col-md-6">
								<div class="widget widget_info">
									<div class="footer-logo">
										<a href="index-2.html"><img src="{{ asset('Front/assets/images/logo.png') }}" alt></a>
									</div>
									<div class="ft-contact">
										<p>At Aagam Hospital, we are committed to delivering high quality
											healthcare with a personal touch.</p>

									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-3 col-md-6">
								<div class="widget footer_widget ml-50">
									<h3 class="footer-title">Quick Links</h3>
									<ul>
										<li><a href="{{ route('FrontAboutus') }}"><span>About Us</span></a></li>
										<li><a href="#"><span> Ortho Services</span></a></li>
										<li><a href="#"><span> Pediatric Services</span></a></li>

										<li><a href="{{ route('FrontContact') }}"><span>Contact us</span></a></li>
									</ul>
								</div>
							</div>
							<div class="col-xl-3 col-lg-3 col-md-6">
								<div class="widget footer_widget">
									<h3 class="footer-title">Our Services</h3>
									<ul>
									    <?php $iCounter=0; ?>
									 @foreach($orthoServices as $service)
									 @if($iCounter < 7)
                                                        <li>
                                                            <a href="{{ route('FrontServiceWork', ['id' => $service->serviceId]) }}">
                                                                <span>{{ $service->serviceName }}</span>
                                                            </a>
                                                        </li>
                                                        @endif
                                                        <?php $iCounter++ ?>
                                                    @endforeach
                                                    
                                                    </ul>
									<!--<ul>-->
									<!--	<li><a href="{{ route('FrontChildgrowth') }}"><span>Child Growth & Development-->
									<!--				Monitoring</span></a></li>-->
									<!--	<li><a href="{{ route('FrontVaccination') }}"><span>Vaccinations / Immunization-->
									<!--				Services</span></a></li>-->
									<!--	<li><a href="{{ route('FrontNutrition') }}"><span>Pediatric Nutrition & Diet-->
									<!--				Guidance</span></a></li>-->
									<!--	<li><a href="{{ route('FrontHipreplacement') }}"><span>Hip Replacement Surgery</span></a></li>-->
									<!--	<li><a href="{{ route('FrontKneereplacement') }}"><span>Knee Replacement</span></a></li>-->
									<!--	<li><a href="{{ route('FrontTraumasurgery') }}"><span>Fracture & Trauma Care</span></a></li>-->
									<!--</ul>-->
								</div>
							</div>
							<div class="col-xl-3 col-lg-3 col-md-6">
								<div class="widget widget_form">
									<h3 class="footer-title">Locate Us</h3>
									<div>
										<ul>
											<li>
												<i class="las la-2x la-phone"></i> +91 9727754621
											</li>
											<li>
												<i class="las la-2x  la-envelope"></i> contact@aagamhospital.com
											</li>
											<li>
												<i class="las la-2x la-map-marker"></i> 302, Titanium City Center
												Mall, Besides Sachin Tower, 100' Anandnagar road, Satellite,
												Ahmedabad-380015
											</li>
										</ul>
									</div>
									<div class="footer-social-link">
										<ul>
											<li><a target="_blank" href="https://www.facebook.com/"><i
														class="lab la-2x la-facebook"></i></a></li>
											<li><a target="_blank" href="https://api.whatsapp.com/send?phone=91https://api.whatsapp.com/send?phone=919727754621"><i
														class="lab la-2x la-whatsapp"></i></a></li>
											<li><a target="_blank" href="https://www.instagram.com/"><i
														class="lab la-2x la-instagram"></i></a></li>
											<li><a target="_blank" href="https://www.linkedin.com/"><i
														class="lab la-2x la-linkedin"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- footer bottom -->
				<div class="container">
					<div class="footer-bottom">
						<div class="row">
							<div class="col-12 text-center">
								<p class="copyright-text">Copyright © 2025 Aagam Hospital</p>
							</div>
						</div>
					</div>
				</div>
				<!-- footer-shape -->
				<!--<img class="pt-img1 animate-wave" src="{{ asset('Front/assets/images/shap/wave-blue.png') }}"-->
				<!--	alt>-->
				<!--<img class="pt-img2 animate1" src="{{ asset('Front/assets/images/shap/circle-dots.png') }}" alt>-->
				<!--<img class="pt-img3 animate-rotate" src="{{ asset('Front/assets/images/shap/plus-blue.png') }}"-->
				<!--	alt>-->
				<!--<img class="pt-img4 animate-wave" src="{{ asset('Front/assets/images/shap/wave-blue.png') }}"-->
				<!--	alt>-->
			</footer>
			<!-- Footer END ==== -->
			<button class="back-to-top fa fa-chevron-up" style="display: inline-block;"></button>