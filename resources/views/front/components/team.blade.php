 <!-- team area start -->
 <div class="team-area pd-top-115 pd-bottom-90">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="section-title text-center">
					<h5 class="sub-title double-line">{{ page('team')->title }}</h5>
					<h2 class="title">{{ page('team')->subtitle }}</h2>
					<p class="content">{!! page('team')->description !!}</p>
				</div>
			</div>
		</div>
		<div class="row">
			@foreach ($teams as $team)
				<div class="col-lg-3 col-md-6">
					<div class="single-team-inner style-1 text-center">
						<div class="thumb">
							<img src="assets/img/team/1.webp" alt="img">
							<ul class="social-media">
								<li>
									<a class="facebook" href="#">
										<i class="fab fa-facebook-f"></i>
									</a>
								</li>
								<li>
									<a class="twitter" href="#">
										<i class="fab fa-twitter"></i>
									</a>
								</li>
								<li>
									<a class="instagram" href="#">
										<i class="fab fa-instagram"></i>
									</a>
								</li>
								<li>
									<a class="youtube" href="#">
										<i class="fab fa-youtube"></i>
									</a>
								</li>
							</ul>
						</div>
						<div class="details-wrap">
							<div class="details-inner">
								<h4><a href="team-details.html">{{$team->title}}</a></h4>
								<p>{{$team->subtitle}}</p>
							</div>
						</div>
					</div>
				</div>
			@endforeach
		</div>
	</div>
</div>
<!-- team area end -->		