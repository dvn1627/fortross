<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Fortross</title>
	<link href="{{ asset('/css/app.css')}}" rel="stylesheet">
    <link href="{{ asset('/css/style.css')}}" rel="stylesheet">
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/functions.js')}}"></script>
</head>
<body>
	<!-- start modal -->
	<div id="modal_login" class="modal" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Log in</h4>
			</div>
			<div class="modal-body">
				<h4>Please enter you e-mail and password</h4>
				<input type="email" placeholder="E-mail" id="login_email" class="form-control"><br>
				<input type="password" placeholder="Password" id="login_pass" class="form-control">
				<div id="login-alert">

				</div>
	  		</div>
	  <div class="modal-footer">
		<button type="button" class="btn btn-default pull-right" data-dismiss="modal" id="enter_but">
			Enter
		</button>
	  </div>
	</div>
  </div>
</div>
<!-- end modal -->
<noscript><h2 class="text-center">You need turn ON JavaScript</h2></noscript>
<header>
	<div class="main-header">
		<h1><a href="{{asset('/')}}">FORT ROSS</a></h1>
		<ul>
			<li>
				About us
				<ul>
					<li><a href="{{asset('WhoWeAre')}}" class="link">Who we are</a></li>
					<li><a href="{{asset('OurStory')}}" class="link">Our story</a></li>
					<li><a href="{{asset('Team')}}" class="link">Team</a></li>
				</ul>
			</li>
			<li>
				Services
				<ul>
					<li>
						Investment
						<ul>
							<li><a href="{{asset('Execution')}}" class="link">Execution</a></li>
							<li><a href="{{asset('Advisory')}}" class="link">Advisory</a></li>
							<li><a href="{{asset('Descretery')}}" class="link">Descretery</a></li>
						</ul>
					</li>
					<li><a href="{{asset('Trading')}}" class="link">Trading</a></li>
					<li><a href="{{asset('Financing')}}" class="link">Financing</a></li>
				</ul>
			</li>
			<li><a href="{{asset('WhyFortross')}}" class="link">Why FortRoss</a></li>
			<li>
				Investment process
				<ul>
					<li><a href="{{asset('OurProcesses')}}" class="link">Our Processes</a></li>
					<li><a href="{{asset('OurPhilosophy')}}" class="link">Our philosofy</a></li>
				</ul>
			</li>
			<li><a href="{{asset('RiskManagement')}}" class="link">Risk managment</a></li>
			<li><a href="{{asset('Contacts')}}" class="link">Contacts</a></li>
		</ul>
	</div>
</header>
<main style="width:100%; max-width: 1200px; margin: 50px auto;">
	@yield('content')
</main>
<footer>

</footer>
<script src="{{asset('js/main.js')}}"></script>
</body>
</html>
