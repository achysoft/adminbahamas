<?php
	session_start();
	if(isset($_SESSION['login_user'])){
header("location: ../");
}
else
{
?>
<!DOCTYPE html>
<html>
<head>
	<title>ADMIN</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="../assets/css/bootstrap.css">
	<script src="../assets/js/jquery.min.js"></script>
	<link rel="stylesheet" href="../assets/css/main.css">
	<link rel="stylesheet" href="../assets/css/login.css">
</head>
<body bgcolor="#4169E1">
	<div id="main_login">
		<div class="row">
			<div class="col-md-2">
			</div>
			<div class="col-md-4 cmptr">
				<img src="../assets/img/b.png" class="pull-left" caption="d">
				<div class="panel pull-right pnldef lft">
					<sm>a</sm>
					<sm>d</sm>						
					<sm>d</sm>						
					<sm>+</sm>
					<sm class="btn-info">F12</sm>						
					<sm>@</sm>						
					<sm>del</sm>						
					<sm>F8</sm>						
					<sm>@</sm>						
					<sm>n</sm>
					<sm>j</sm>
					<sm>del</sm>						
					<sm>F3</sm>						
					<sm>@</sm>						
					<sm>h</sm>
					<sm>?</sm>
					<sm class="btn-danger">del</sm>						
					<br>
					<sm>a</sm>
					<sm>d</sm>						
					<sm>d</sm>						
					<sm>+</sm>
					<sm class="btn-info">add</sm>						
					<sm>@</sm>						
					<sm>del</sm>						
					<sm>F8</sm>						
					<sm>@</sm>						
					<sm>n</sm>
					<sm>j</sm>
					<br>
					<sm>a</sm>
					<sm>d</sm>						
					<sm>d</sm>						
					<sm>+</sm>
					<sm class="btn-primary">ins</sm>						
					<sm>@</sm>						
					<sm>@</sm>						
					<sm>n</sm>
					<sm>j</sm>
					<sm>del</sm>						
					<sm>F3</sm>						
					<sm>@</sm>						
					<sm>h</sm>
					<sm>?</sm>
					<sm class="btn-default">Home</sm>						
					<br>
					<sm>u</sm>						
					<sm>e</sm>						
					<sm>-</sm>						
					<sm>5</sm>
					<sm class="btn-success">l</sm>						
					<sm>p</sm>
					<sm>d</sm>						
					<sm>a</sm>						
					<sm>t</sm>
					<sm class="btn-warning">shift</sm>						
					<sm>a</sm>						
					<sm>t</sm>
					<sm>e</sm>						
					<sm>-</sm>						
					<sm>5</sm>
					<sm class="btn-success">enter</sm>						
					<br>
					<sm class="btn-success">ctrl</sm>						
					<sm class="glyphicon glyphicon-th-large"></sm>						
					<sm>alt</sm>
					<sm class="btn-primary">space</sm>						
					<sm>alt</sm>
					<sm class="glyphicon glyphicon-th-large"></sm>						
					<sm class="glyphicon glyphicon-list-alt"></sm>						
					<sm>ctrl</sm>						
				</div>
			</div>
			<div class="col-md-2" margin-top:40px;>
			</div>
			<div class="col-md-4">
				<div class="col-md-8 lgdef">
					<h5>ADMIN <sub>Bahamas</sub></h5>
					<form action="login.php" method="POST">
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></span>
							<input type="text" id="name" name="username" placeholder="username" class="form-control"  value="admin">
						</div>
						<br>
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></span>
							<input type="password" id="password" name="password" placeholder="**********" class="form-control" value="admin" >
						</div><br>
						<div class="input-group">
							<input type='submit' name='submit' class="btn btn-info "  value="LOGIN">
						</div><br>
					</form>
					<div class="list-group text-left ">
 						<a  class="list-group-item">VIEW APPLICATIONS| SHOW</a>
 						<a  class="list-group-item">VIEW INSTITUTION USERS| UPDATE</a>
						The ABS Online permit application system was developed by the bahamas government to expedite permit application process for researchers<br> at the same time improving the efficiency and transparency of the entire permit application process. 
 						
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="../assets/js/bootstrap.js"></script>
</body>
</html>
<?php
}
?>