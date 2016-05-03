<!DOCTYPE html>
<html>
	
	<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Create Ticket</title>

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="/css/animate.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
	
  </head>
	
	<body>
		<br><br>
			<center><img src="/img/remote-staff-logo.jpg"></div></center>
		<br><br>
		
		<div class="container">
			<div class="row">
							<div class="col-md-offset-3 well col-md-6 col-xs-offset-1 col-xs-10">
								<center><h3><b>Create tickets</b></h3></center>
								<br>
								<form class="form-horizontal" role="form">
									
									<div class="form-group">
										<label class="control-label col-md-1 col-sm-1 col-xs-1"  for="email">Email:</label>
										<div class="col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10 col-xs-offset-2 col-xs-9">
											<input type="email" class="form-control topic" disabled id="email" placeholder="Enter email">
									</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-1 col-sm-1 col-xs-1" for="name">Name:</label>
										<div class="col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10 col-xs-offset-2 col-xs-9""> 
											<input type="password" class="form-control topic" disabled id="name" placeholder="Name">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-2 col-xs-2" for="dept">  Department:</label>
										<div class="col-md-offset-0 col-sm-10 col-xs-offset-0 col-xs-10""> 
											<input type="password" class="form-control topic" disabled id="name" placeholder="Department">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-1 col-sm-1 col-xs-1" for="Topic">Subject:</label>
										<div class="col-md-offset-1 col-sm-10 col-sm-offset-1 col-sm-10 col-xs-offset-2 col-xs-9">
											<select class="form-control">
												<option value="topic1">Topic1</option>
												<option value="topic2">Topic2</option>
												<option value="topic3">Topic3</option>
												<option value="topic4">Topic4</option>
											</select>
										</div>
									</div>
									<div class="form-group"> 
										<label class="control-label col-md-1 col-sm-1 col-xs-1 " for="Summary">Summary:</label>
										<div class="col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10 col-xs-12">
										<textarea class="form-control topic" rows="5" id="summary"></textarea>
										</div>
									</div>
									<div class="form-group"> 
										<div class="col-md-offset-8 col-md-2 col-sm-offset-8 col-sm-2 col-xs-offset-2 col-xs-4">
										  	<button type="submit" class="btn btn-default topic" id="submitBtn">Submit</button>
										</div>
										
										<div class="col-md-2 col-sm-2 col-xs-2">
											<button type="submit" class="btn btn-default topic" id="cancelBtn">Cancel</button>						
										</div>
									</div>
								</form>	
							</div>
						</div>	
			</div>	
		</div>
		
			
			
		
		
		
	</body>

</html>