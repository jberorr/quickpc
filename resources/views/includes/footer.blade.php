		<!-- footer start --> 
		<footer>
			<div class="container">
				<div class="col-md-3 col-sm-6">
					<h4>Featured Service</h4>
					<ul>
						<li><a href="{{ url('create-invitation') }}">Create Invitation For Party</a></li>
						<li><a href="{{ url('2020/pre-wedding-shoot') }}">Pre-Wedding Photography</a></li>
						<li><a href="{{ url('2020/party-decoration') }}">Party Decoration</a></li>
						<li><a href="{{ url('2020/ac-service-repair') }}">AC Service & Repair</a></li>
						<li><a href="{{ url('2020/refrigerator-repair') }}">Refrigerator Repair</a></li>
						<li><a href="{{ url('2020/website-development') }}">Web Designer & Developer</a></li>
						<li><a href="{{ url('2020//plumbers') }}">Plumbers</a></li>
						<li><a href="{{ url('2020/maid-service') }}">Maid Service</a></li>
					</ul>
				</div>
				
				<div class="col-md-3 col-sm-6">
					<h4>Best Professionals</h4>
					<ul>
						<li><a href="{{ url('2020/ro-water-purifier-repair') }}">RO & Water Purifier Repair</a></li>
						<li><a href="{{ url('2020/washing-machine-repair') }}">Washing Machine Repair</li>
						<li><a href="{{ url('2020/home-deep-cleaning') }}">Home Cleaning</a></li>
						<li><a href="{{ url('2020/bartender') }}">Bartender</a></li>
						<li><a href="{{ url('2020/salon-at-home-for-women') }}">Salon At Home For Women</a></li>
						<li><a href="{{ url('2020/massage-for-men') }}">Message For Men</a></li>
						<li><a href="{{ url('2020/dj') }}">DJ</a></li> 
						<li><a href="{{ url('2020/car-wash') }}">Car Wash & Service</a></li>
					</ul>
				</div>
				
				<div class="col-md-3 col-sm-12">
					<h4>Reach Us</h4>
					<address>
					<ul>
					<li>F-265A, Phase-6, F-Block,<br/> Aya Nagar,
					New Delhi-110047</li>
					<li>Email: Support@arvice.com</li>
					<li>Call: +91 99999999</li>
					<li>Skype: info@arvice</li>
					</ul>
					</address>
				</div>
				
				<div class="col-md-3 col-sm-6">
					<h4>Drop A Mail</h4>
					<form action="{{route('post.store')}}" method="post">
					{{csrf_field()}}
						<input type="text" class="form-control input-lg" required name="name1" placeholder="Your Name">
						<input type="text" class="form-control input-lg" required name="email" placeholder="Email...">
						<input type="text" class="form-control input-lg" required name="phone" placeholder="Phone...">
						<textarea class="form-control" name="profession" placeholder="Message"></textarea>
						<button type="submit" class="btn btn-primary">Send</button>
					</form>
				</div>
				
				 
			</div>
			<div class="copy-right">
			 <p>&copy;Copyright 2021 arvice | Design By <a href="{{ route('privacy') }}">TrickuWeb</a></p>
			</div>
		</footer>
		<login-component></login-component>
		 <!-- Content Wrapper. Contains page content -->
</div>	 
		<script type="text/javascript" src="{{ asset('job-asset/js/jquery.min.js') }}"></script>
		<script src="{{ asset('job-asset/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('/js/app.js') }}"></script>
		<script type="text/javascript" src="{{ asset('job-asset/js/owl.carousel.min.js') }}"></script>
		<script src="{{ asset('job-asset/js/bootsnav.js') }}"></script>
		<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script> -->
		<script src="{{ asset('job-asset/js/main.js') }}"></script>
    </body>
</html>
 