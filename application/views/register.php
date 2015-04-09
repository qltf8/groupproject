<?php
 header("Access-Control-Allow-Origin: http://applicationportal-se2015groupl.rhcloud.com/index.php");
?>
<html>
<head>
<title>My Form</title>
</head>

<body>

<?php echo validation_errors(); ?>

<?php echo form_open('index.php/register'); ?>
<div id="container1" class="container">
<button id="button1" type="button">I want to login</button><br>
<button id="button2" type="button">I want to register</button>
</div>
<h5>Username</h5>
<input type="text" name="username" id="username" value="<?php echo set_value('username'); ?>" size="50" onkeyup="ajaxCheck(this.value)">
<span id="show"></span>
<h5>Password</h5>
<input type="password" name="password" value="<?php echo set_value('password'); ?>" size="50" />

<h5>Password Confirm</h5>
<input type="password" name="passconf" value="<?php echo set_value('passconf'); ?>" size="50" />

<h5>Email Address</h5>
<input type="text" name="email" value="<?php echo set_value('email'); ?>" size="50" />

<h5>nation</h5>
<input type="radio" name="nation" value="native"> native<br>
<input type="radio" name="nation" value="international"> international<br>

<div><input type="submit" value="Submit" /></div>

</form>
<img src="<?php echo base_url('images/mizzou.jpg'); ?>" alt="image">
</body>
<script>
	function ajaxCheck(username){
		var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("show").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("post","<?=site_url('index.php/register/checkUnique')?>",true);
 		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
 		xmlhttp.send("student_id="+username);
	}
</script>
</html>
