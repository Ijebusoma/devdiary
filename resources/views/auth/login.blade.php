@extends('layouts.app')

@section('content')


  <!DOCTYPE html>
  <html lang="en">
  <head>
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="Creative Sign In form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
  <!-- Custom Theme files -->
  <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
  <!-- //Custom Theme files -->
  <!-- font-awesome icons -->
  <link href="css/font-awesome.css" rel="stylesheet">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>

  <!-- //font-awesome icons -->
  <!-- web font -->
  <link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
  <!-- //web font -->
  </head>
  <body>
  	<!-- main -->
  	<div class="main-agile">

  		<div class="w3ls-signup">
  			<div class="w3ls-signup-left">
        </div>
  			<div class="w3ls-signup-right">
  				<div class="login-agileits-top">
  					<form action="{{ route('login') }}" method="post">

  						<p>Email</p>

  						<input type="email" id="email" class="name" name="email" required autofocus="">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
              @if ($errors->has('email'))
                  <span class="help-block">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif

  						<p>Password</p>
  						<input type="password" id="password" class="password" name="password" required autofocus="">

  						<input type="submit" value="Sign In">
  					</form>
  					<div class="wthree-social">
  						<h5>or</h5>
  						<div class="agileinfo-social-grids">
  							<ul>
  								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
  								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
  								<li><a href="#"><i class="fa fa-rss"></i></a></li>
  								<li><a href="#"><i class="fa fa-vk"></i></a></li>
  							</ul>
  						</div>
  					</div>
  				</div>
  			</div>
  			<div class="clear"> </div>
  		</div>
  		<!-- copyright -->
  		<div class="copyright">

  		</div>
  		<!-- //copyright -->
  	</div>
  	<!-- //main -->
  </body>
  </html>
@endsection
