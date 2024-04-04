<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<link rel="stylesheet" href="home/css/form.css">
    <title>Login Page|E-Product</title>
  </head>
  <body>

	
	<div class="container d-flex justify-content-center align-items-center min-vh-100">
		<div class="row border rounded-5 p-3 bg-white shadow box-area">
			<div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" >

				<div class="featured-image">
					<img src="home/login_image/login.jpg" class="img_fluid" width="250px">
				</div>
				<p class="text-black fs-2" style="font-family: 'Courier New', Courier, monospace;">Be Verified</p>

			</div>

			<div class="col-md-6 right-box" >
				<div class="row align-items-center">
					<div class="header-text mb-3">
						<p>Hello Again</p>
						<p>We are happy to have you back....</p>
					</div>

					@if(session()->has('fail'))
						<div class="text-danger confirm">{{session()->get('fail')}}</div>
					@endif

					<!-- @if(session()->has('notckeck'))
						<div class="text-danger failed">{{session()->get('notckeck')}}</div>
					@endif -->

						<form action="" method="post" enctype="multipart/form-data" >

							@csrf
							<div class="input-group mb-3">
								<input type="text" name="email" class="form-control form-control-lg bg-light fs-6" value="{{ old('email')}}" placeholder="Enter Email Address">
								<span  class="text-danger error_message"></span>
							</div>
						
							<div class="input-group mb-1">
								<input type="text" name="password" class="form-control form-control-lg bg-light fs-6" value="{{ old('password')}}" placeholder="Enter Password">
								<span class="text-danger error_message"></span>
							</div>

							<div class="input-group mb-5 d-flex justify-content-between ">
								<div class="check-box">
									<input type="checkbox" name="checkbox" class="form-check-input" id="fontchech">
									<label for="form-check" class="form-check-label text-secondary mx-1" ><small>Remember Me</small></label>
								</div>

								<div class="forgot">
									<small><a href="">Forgot Password?</a></small>
								</div>
							</div>

							<div class="input-group mb-3">
								<button class="btn btn-lg btn-primary w-100 fs-6" type="submit" name="submit">Login</button>
							</div>
							<div class="input-group mb-3">
								<button class="btn btn-lg w-100 fs-6" style="background-color: #e3e2de;" ><img src="home/login_image/google.png" style="width: 20px;" class="me-2" ><a href=""></a><small>Sign in with Google</small></button>
							</div>
							<div class="row">
								<small>Don't have account? <a href="" target="_blank">Sign Up</a></small>
							</div>

						
					
				</div>
			</div>
		</div>
	</div>
		
	<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

	<script>

		setTimeout(function () {
			
			$(".error_message").fadeOut(2000);
			$(".failed").fadeOut(2000);
			$('.confirm').fadeOut(2000);
		},2000);

	</script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
  </body>
</html>