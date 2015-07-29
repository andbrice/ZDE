<!DOCTYPE html>
<html lang="en">
	<head>
		<title>@ZDE:~$ /Contact</title>
		<meta charset="utf-8">
		
		<!--mobile first: this makes the site mobile friendly-->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!--Bootstrap files from the server, as opposed to using the ones downloaded-->
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

			<!-- jQuery library -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

			<!-- Latest compiled JavaScript -->
			<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
			
			<style>
				body, html{
					height: 100%;
				}
				
				body{
					background-color: #000;
				}
			
				.container{
					min-height: 50%;
				}
				
				#mainNavBar a{
					color: #00ff00;
					font-family: "Lucida Console", Monaco, monospace;
					font-size: 16px;
				}
				
				.zdehead{
					margin-top: -20px;
				}
				
				h1{
					font-family: "Lucida Console", Monaco, monospace;
					text-shadow: 2px 2px 2px #FFF;
					color: #009900;
					padding: 50px 50px;
				}
				
				h2{
					font-family: "Lucida Console", Monaco, monospace;
					color: #000;
					text-shadow: 1px 1px 2px #00ff00;
				}
				
				h3{
					font-family: "Lucida Console", Monaco, monospace sans-serif;
					font-size: 30px;
					color: #00ff00;
					
				}
				
				h4{
					font-family: "Lucida Console", Monaco, monospace;
					font-size: 18px;
					font-weight: bold;
				}
				
				p{
					font-family: "Lucida Console", Monaco, monospace;
					font-size: 15px;
					padding-top: 20px;
					
				}
				
				form{
					margin-top: 50px;
				}
				
				label{
					font-family: "Lucida Console", Monaco, monospace;
					font-size: 16px;
						
				}
				
				.row img{
					width: 350px;
				} 
				
				#row2{
					margin-top: 25px;
					margin-bottom: 25px;
				}
				
				#submit{
					background-color: #00ff00;
					font-family: "Lucida Console", Monaco, monospace;
					color: #000;
					font-size: 16px;
					padding: 5px 20px 5px 20px;
					font-weight: bold;
					text-align: right;
					border-style: outset;
					border-width: 2px;
				}
				footer{
					position: relative;
					clear: both;
					margin-top: -1px;
				}
				.footer ul{
						text-align: center;
						padding-top: 5px;
						
				}
				.footer li{
					display: inline;
					padding-right: 80px;
					
				}
				
				.footer a{
					color: #00ff00;
					font-family: "Lucida Console", Monaco, monospace;
					font-size: 16px;
				}
			</style>
			<script>
				function goBack() {
				    window.history.back()
				}
			</script>
	</head>
	
	<body>
		<!-- Navigation -->
		<nav class="navbar navbar-inverse">
		<div class="container-fluid">
		
			<!--logo-->
			<div class="navbar-header">
				
				<!--Button that collapses menu in mobile view-->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>	
				<img src="https://cloud.githubusercontent.com/assets/10729118/8948284/976ef3b2-3573-11e5-8df9-6c5593395f94.png" width="70">
			</div>
			
			<!-- menu items -->
			<div class="collapse navbar-collapse" id="mainNavBar">
				<ul class="nav navbar-nav">
					<li><a href="index.html">The Game</a></li>
					<li><a href="team.html">The Team</a></li>
					<li><a href="about.html">About ZDE</a></li>
					<li class="active"><a href="#">Contact TDF</a></li>
				</ul>	
			</div>
			
		</div>
		
		</nav>
		
		<div id="content" class="bs-docs-header zdehead" tableindex="-1">
				<img src="https://cloud.githubusercontent.com/assets/10729118/8948297/afb2f0e0-3573-11e5-942a-880fa6e22e6e.png" alt="ZDE Header" class="img-responsive">
		</div>
		
		<!--Body -->
		<div id="wrap" class="container">
			<h2>@ZDE:~/contact$ Success </h2> 
		
		<?php

		$error = array();
		
		if($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			if(isset($_POST['UserName']))
			{
				if(empty($_POST['UserName']))
				{
					$error['nameE'] = "<div class=\"text-danger\" style=\"font-size: 16px; font-weight: bold;\">Please enter your name! </div>";
				}
			}
			if(isset($_POST['UserEmail']))
			{
				if(empty($_POST['UserEmail']) || !filter_var($_POST['UserEmail'], FILTER_VALIDATE_EMAIL))
				{
					$error['emailE']= "<div class=\"text-danger\" style=\"font-size: 16px; font-weight: bold;\">Check your email because it aint right!</div>";
				}
			}
			if(isset($_POST['UserMessage']))
			{
				if(empty($_POST['UserMessage']))
				{
					$error['msgE'] = "<div class=\"text-danger\" style=\"font-size: 16px; font-weight: bold;\">Enter your comment!</div>";
				}
			}
			if(isset($_POST['human']))
			{
				if(empty($_POST['human']))
				{
					$error['humanE1'] = "<div class=\"text-danger\" style=\"font-size: 16px; font-weight: bold;\">Don't be Sneaky trying to avoid math....</div>";
				}
				else if(!is_numeric($_POST['human']))
				{
					$error['humanE2'] = "<div class=\"text-danger\" style=\"font-size: 16px; font-weight: bold;\">Just because you put something here, doesn't mean you are getting away with it! Hint: Try using a number :)</div>";
				}
				else if($_POST['human'] != 5)
				{
					$error['humanE3'] = "<div class=\"text-danger\" style=\"font-size: 16px; font-weight: bold;\">Please learn how to add and try again!</div>";
				}
			}
				
			
			$errorS = sizeof($error);
			if($errorS > 0)
			{
				echo "<div class='alert alert-danger' style=\"font-size: 17px; font-weight: bold; text-align: center;\">Follow the instructions and try again:</div>";
				foreach ($error as $i => $value)
				{
					echo "<center>".$error[$i]. "</center>";
				}
				echo "<br/>";
				echo "<br/>";
				echo "<input class=\"btn btn-primary\" type=\"button\" onclick=\"goBack();\" value=\"Go Back!\">";
				
			}
			else 
			{
				$name = $_POST['UserName'];
				$email = $_POST['UserEmail'];
				$msg = $_POST['UserMessage'];
				$to = 'andbrice@gmail.com';
				$subject = 'MSG From TDF ZDE';
				
				mail($to, $subject, $msg, 'From:' .$name. "@". $email);
				echo "<br/>";
				echo "<br/>";
				echo '<div class="text-success" style="font-size: 28px; text-align: center;">
							Thank you for your message '.$name .'! We have received your feedback successfully. We hope to be in touch with you soon :)</div>';
				echo "<br/>";
				echo "<br/>";
				echo '<center><img src="https://cloud.githubusercontent.com/assets/10729118/8948284/976ef3b2-3573-11e5-8df9-6c5593395f94.png" width="200"></center>';	
			}
		}
?>	
</div>
	<!--footer -->
		<footer>
			<nav class="nav navbar-inverse">
			<div class="container-fluid footer">
				<ul>
					<li><a href="index.html">The Game</a></li>
					<li><a href="team.html">The Team</a></li>
					<li><a href="about.html">About ZDE</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
						<li><a href="#">©2015 · Team TDF</a></li>
				</ul>
			</div>
			</nav>
		</footer>
	</body>
</html>
