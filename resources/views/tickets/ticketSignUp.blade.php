<!DOCTYPE html>
<html>

<head>
{{ URL::asset('assets/css/bootstrap.min.css') }}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tickets Sign Up</title>

	<link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="/css/animate.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
</head>

<body class="white-bg">
	<br>

    <div class="col-md-offset-3 col-md-6">
        <img src="Pictures/remote-staff-logo.jpg" class="img-responsive">
		<br>
	</div>

    <div class="middle-box text-center loginscreen   animated fadeInDown">
    	<div>         
        	<form class="m-t" role="form" action="">
        		
            	<div class="form-group">
                    <input type="text" class="form-control" placeholder="Name" name="uname"required="">
                </div>
                
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email" name="email" required="">
                </div>
                
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" name="password" required="">
                </div>
                
				<div class="form-group">
                    <input type="password" class="form-control" placeholder="Department" name="dept" required="">
                </div>
                
                <button type="submit" class="btn btn-primary block full-width m-b">Register</button>

                <p class="text-muted text-center"><small>Already have an account?</small></p>
                
                <a class="btn btn-sm btn-white btn-block" href="/tickets/login">Login</a>
            </form>
            
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="js/plugins/iCheck/icheck.min.js"></script>
    
</body>

</html>
