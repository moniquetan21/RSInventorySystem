<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Remote Staff</title>

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="/css/animate.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">

</head>

<body class="white-bg">
	<br><br>
	<center><img src="/img/remote-staff-logo.jpg"></div></center>
	<br><br><br><br>
	
    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>              
				<div class="well">
		            <form class="m-t" role="form" method="post" action="login"  >
		            	 <input type="hidden" name="_token" value="{{ csrf_token() }}">
		                <div class="form-group">
		                    <input type="email" class="form-control" placeholder="Email" name="email" required="">
		                </div>
		                <div class="form-group">
		                    <input type="password" class="form-control" placeholder="Password" name="password" required="">
		                </div>
		                <button type="submit" action="" class="btn btn-primary block full-width m-b">Login</button>
		
		                <a href="/tickets/forgotPassword"><small>Forgot password?</small></a>
		                <p class="text-muted text-center"><small>Do not have an account?</small></p>
		                <a class="btn btn-sm btn-white btn-block" href="/tickets/signUp">Create an account</a>
		            </form>
				</div>  
        	</div>
        </div>
    </div>

</body>

</html>
