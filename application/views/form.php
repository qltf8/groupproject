<html>
	<head>
		<title>Application Form Page</title>
		<style>
			input{
			margin: 10px;
			}	

			.container {
		    position:absolute;
		    top:150px;
		    left:480px;
		    }
		</style>
	</head>
	<body>
		<?php echo validation_errors(); ?>
		<div id="container1" class="container">
			<form action="#" method="POST">
				First Name: <br>
				<input type="text" name="fname">
				<br>
				
				Last Name: <br>
				<input type="text" name="lname">
				<br>
				
				ID:<br>
				<input type="text" name="id">
				<br>
				
				GPA:<br>
				<input type="text" name="gpa">
				<br>If undergraduate, indicate program and level:<br>
				<input type="text" name="program">
				<input type="text" name="level">
				<br>
				
				If graduate: <br>
				MS:
				<input type="text" name="MS">
				PhD:
				<input type="text" name="PhD">
				Advisor's Name:
				<input type="text" name="advisor">
				<br>
				
				Phone Number:<br>
				<input type="text" name="phonenumber">
				<br>
				
				Mizzou email address:<br>
				<input type="text" name="email">
				<br>
				
				Anticipated graduation date:<br>
				<input type="text" name="grad date">
				<br>
				
				Course(s) You Are Currently Teaching:<br>
				<input type="text" name="teaching">
				<br>
				
				Course(s) You Have Previously Taught:<br>
				<input type="text" name="taught">
				<br>
				
				Course(s) You Would Like to Teach:<br>
				<input type="text" name="teach">
				<br>
				
				Other Places You Work:<br>
				<input type="text" name="work">
				<br>
				
				SPEAK/OPT score, if applicable:<br>
				<input type="text" name="SPEAK">
				<br>
				
				Semester of last test:<br>
				<input type="text" name="test">
				<br>
				
				<input type="submit" name="submit">
			</form>
		</div>
	</body>
</html>