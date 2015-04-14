
<html>
    <head>
        <title>Registration Form</title>
    </head>
    <link href="<?=base_url('jquery-ui-1.11.2/jquery-ui.css')?>" rel="stylesheet">
    <script src="<?=base_url('jquery-ui-1.11.2/external/jquery/jquery.js')?>"></script>
    <script src="<?=base_url('jquery-ui-1.11.2/jquery-ui.js')?>"></script>
    <style>
        body 
        {
            background-image:url(<?=base_url('images/1.jpg')?>);
	        background-repeat:no-repeat;
	        background-size: cover;
            -webkit-animation-name: example; /* Chrome, Safari, Opera */
            -webkit-animation-duration: 5s; /* Chrome, Safari, Opera */
            -webkit-animation-iteration-count: infinite;
        }

        /* Chrome, Safari, Opera */
        @-webkit-keyframes example 
        {
            0%   {background-image:url(<?=base_url('images/1.jpg')?>);}
            25%  {background-image:url(<?=base_url('images/2.jpg')?>);}
            50%  {background-image:url(<?=base_url('images/3.jpg')?>);}
            100% {background-image:url(<?=base_url('images/4.jpg')?>);}
        }
        *{
            margin:0px;
            padding:0px;
            content:0px;
        }       
        .background{
        position:absolute;
        top:0px;
        left:0px;
        opacity:0.3;
        }
        .container {
        position:absolute;
        top:150px;
        left:480px;
        }

        h1 {
        text-align:center;
        font-size: 30px;
        font-weight: 700;
        text-shadow: 0 1px 4px rgba(0,0,0,.2);
        }


        form {
        position: relative;
        width: 305px;
        margin: 15px auto 0 auto;
        text-align: center;
        }

        input {
            width: 270px;
            height: 42px;
            margin-top: 25px;
            padding: 0 15px;
            background: rgba(45,45,45,.15);
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            border: 1px solid rgba(255,255,255,.15);
            -moz-box-shadow: 0 2px 3px 0 rgba(0,0,0,.1) inset;
            -webkit-box-shadow: 0 2px 3px 0 rgba(0,0,0,.1) inset;
            box-shadow: 0 2px 3px 0 rgba(0,0,0,.1) inset;
            font-size: 14px;
            color: #07F;
            text-shadow: 0 1px 2px rgba(0,0,0,.1);
            -o-transition: all .2s;
            -moz-transition: all .2s;
            -webkit-transition: all .2s;
            -ms-transition: all .2s;
        }

        input:-moz-placeholder { color: #07F; }
        input:-ms-input-placeholder { color: #07F; }
        input::-webkit-input-placeholder { color: #07F; }

        input:focus {
            outline: none;
            -moz-box-shadow:
                0 2px 3px 0 rgba(0,0,0,.1) inset,
                0 2px 7px 0 rgba(0,0,0,.2);
            -webkit-box-shadow:
                0 2px 3px 0 rgba(0,0,0,.1) inset,
                0 2px 7px 0 rgba(0,0,0,.2);
            box-shadow:
                0 2px 3px 0 rgba(0,0,0,.1) inset,
                0 2px 7px 0 rgba(0,0,0,.2);
        }

        button {
            cursor: pointer;
            width: 300px;
            height: 44px;
            margin-top: 25px;
            padding: 0;
            background: #ef4300;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            border: 1px solid #ff730e;
            -moz-box-shadow:
                0 15px 30px 0 rgba(255,255,255,.25) inset,
                0 2px 7px 0 rgba(0,0,0,.2);
            -webkit-box-shadow:
                0 15px 30px 0 rgba(255,255,255,.25) inset,
                0 2px 7px 0 rgba(0,0,0,.2);
            box-shadow:
                0 15px 30px 0 rgba(255,255,255,.25) inset,
                0 2px 7px 0 rgba(0,0,0,.2);
            font-size: 14px;
            font-weight: 700;
            color: #fff;
            text-shadow: 0 1px 2px rgba(0,0,0,.1);
            -o-transition: all .2s;
            -moz-transition: all .2s;
            -webkit-transition: all .2s;
            -ms-transition: all .2s;
        }

        button:hover {
            -moz-box-shadow:
                0 15px 30px 0 rgba(255,255,255,.15) inset,
                0 2px 7px 0 rgba(0,0,0,.2);
            -webkit-box-shadow:
                0 15px 30px 0 rgba(255,255,255,.15) inset,
                0 2px 7px 0 rgba(0,0,0,.2);
            box-shadow:
                0 15px 30px 0 rgba(255,255,255,.15) inset,
                0 2px 7px 0 rgba(0,0,0,.2);
        }

        button:active {
            -moz-box-shadow:
                0 15px 30px 0 rgba(255,255,255,.15) inset,
                0 2px 7px 0 rgba(0,0,0,.2);
            -webkit-box-shadow:
                0 15px 30px 0 rgba(255,255,255,.15) inset,
                0 2px 7px 0 rgba(0,0,0,.2);
            box-shadow:        
                0 5px 8px 0 rgba(0,0,0,.1) inset,
                0 1px 4px 0 rgba(0,0,0,.1);

            border: 0px solid #ef4300;
        }
        select{
        	margin :20px auto 0px;
        }

        #container2,#container3{
        display:none;
        }
    </style>
<body>
    <?php echo validation_errors(); ?>
    <div id="container1" class="container">
        <button id="button1" type="button">I want to login</button><br>
        <button id="button2" type="button">I want to register</button>
    </div>
    <div id="container2" class="container">
        <h1>Login</h1>
        <form action="<?=base_url('index.php/register/student')?>" method="post" name="login" id="login">
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
    </div>
    <div id="container3" class="container">
        <h1>Register</h1>
        <form action="<?=base_url('index.php/register/index')?>" method="post" id="form1">
            <input type="text" name="username" class="username" onchange="ajaxCheck(this.value)" placeholder="Username" id='username' value="<?php echo set_value('username'); ?>"><span id="show"></span>
            <input type="password" name="password" class="password" placeholder="Password" id='password1' value="<?php echo set_value('password'); ?>">
            <input type="password" name="passconf" class="password" placeholder="Type it again" id='password2' value="<?php echo set_value('passconf'); ?>">
            <input type="email" name="email" placeholder="email" value="<?php echo set_value('email'); ?>">
            <button id="register" type="submit">Register</button>
            <button class="back" type="button">Back</button>
        </form>
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
        xmlhttp.open("post","<?=site_url('index.php/register/checkUnique')?>",true);
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
   		var url="<?=base_url('index.php/register')?>"+"/"+profession;
		form.action=url;
		}
</script>
</html>
