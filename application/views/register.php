<!DOCTYPE html>
<html lang="en">
<head>
        <title>Registration Form</title>
</head>
    <link href="<?=base_url('jquery-ui-1.11.2/jquery-ui.css')?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>css/style.css">
    <script src="<?=base_url('jquery-ui-1.11.2/external/jquery/jquery.js')?>"></script>
    <script src="<?=base_url('jquery-ui-1.11.2/jquery-ui.js')?>"></script>
<style>
    /*body 
    {
        background-image:url(<?=base_url('images/mizzou.jpg')?>);
        background-repeat:no-repeat;
        background-size: cover;
       /* -webkit-animation-name: example; /* Chrome, Safari, Opera */
        /*-webkit-animation-duration: 5s;*/ /* Chrome, Safari, Opera */
        /*-webkit-animation-iteration-count: infinite;*/
   /* }*/

    body {
      width: 100%;
      height: 100%;
      display: block;
      position: absolute;
    }

    body::after {
      content: "";
      background-image:url(<?=base_url('images/mizzou.jpg')?>);
      background-repeat:no-repeat;
      background-size: cover;
      opacity: 0.5;
      top: 0;
      left: 0;
      bottom: 0;
      right: 0;
      position: absolute;
      z-index: -1;   
    }

    /* Chrome, Safari, Opera */
   /* @-webkit-keyframes example 
    {
        0%   {background-image:url(<?=base_url('images/1.jpg')?>);}
        25%  {background-image:url(<?=base_url('images/2.jpg')?>);}
        50%  {background-image:url(<?=base_url('images/3.jpg')?>);}
        100% {background-image:url(<?=base_url('images/4.jpg')?>);}
    }*/
</style>
<body>

    <div id="container1" class="container">
        <button id="button1" type="button">I want to login</button><br>
        <button id="button2" type="button">I want to register</button>
    </div>

    <div id="container2" class="container">
        <h1>Login</h1>
        <form action="<?=base_url('register/student')?>" method="post" name="login" id="login">
            <input type="text" name="username" class="username" placeholder="Username">
            <input type="password" name="password" class="password" placeholder="Password">
            <select name='profession' id="profession" onchange="identity()">
          		<option value="student">student</option>
         		<option value="instructor">instructor</option>
        		<option value="admin">admin</option>
            </select>
            <button id="submit" type="submit">Sign me in</button>
            <button class="back" type="button">Back</button>
        </form>
        <?php echo validation_errors('<p class="error">'); ?>
    </div>

    <div id="container3" class="container">
        <h1>Register</h1>
        <form action="<?=base_url('register/add_student')?>" method="post" id="form1">
            <input type="text" name="username" class="username" onchange="ajaxCheck(this.value)" placeholder="Username" id='username' value="<?php echo set_value('username'); ?>"><span id="show"></span>
            <input type="password" name="password" class="password" placeholder="Password" id='password1' value="<?php echo set_value('password'); ?>">
            <input type="password" name="passconf" class="password" placeholder="Type it again" id='password2' value="<?php echo set_value('passconf'); ?>">
            <input type="email" name="email" placeholder="email" value="<?php echo set_value('email'); ?>">
            <button id="register" type="submit">Register</button>
            <button class="back" type="button">Back</button>
        </form>
        <?php echo validation_errors('<p class="error">'); ?>
    </div>

</body>
<script>
	function ajaxCheck(username){
		var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("show").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("post","<?=site_url('register/checkUnique')?>",true);
 		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
 		xmlhttp.send("student_id="+username);
	}
	$(document).ready(function(){
	
		$("#button1").click(function(){
			$("#container1").css("display","none");
			$("#container2").css("display","block");
		});
       
		$("#button2").click(function(){
			$("#container1").css("display","none");
			$("#container3").css("display","block");
		});  

		$(".back").click(function(){
			$("#container2").css("display","none");
			$("#container3").css("display","none");
			$("#container1").css("display","block");
		}); 
	
	});
	function identity(){
		var option=document.getElementById('profession');
   		var form=document.forms['login'];
   		var profession=option.value;
   		var url="<?=base_url('register')?>"+"/"+profession;
		form.action=url;
		}
</script>
</html>
