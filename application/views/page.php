<html>
<head>
<style>

body {
background-image:url(<?=base_url('images/1.jpg')?>);
	background-repeat:no-repeat;
	background-size: cover;
    -webkit-animation-name: example; /* Chrome, Safari, Opera */
    -webkit-animation-duration: 5s; /* Chrome, Safari, Opera */
    -webkit-animation-iteration-count: infinite;
}

/* Chrome, Safari, Opera */
@-webkit-keyframes example {
     0%   {background-image:url(<?=base_url('images/1.jpg')?>);}
    25%  {background-image:url(<?=base_url('images/2.jpg')?>);}
    50%  {background-image:url(<?=base_url('images/3.jpg')?>);}
    100% {background-image:url(<?=base_url('images/4.jpg')?>);}
}

a:link {
    color: #FF0000;
}

/* visited link */
a:visited {
    color: #00FF00;
}

/* mouse over link */
a:hover {
    color: #FF00FF;
}

/* selected link */
a:active {
    color: #0000FF;
}
table{
	border-collapse:collapse;
}
table,td{
	border: 2px groove blue;
}
tr:nth-child(odd){
	background-color:yellow;
}
</style>
</head>
<body>
<form>
<table>
	<tr>
		<?php foreach($field as $head):?>
			<td><?=$head?></td>
		<?php endforeach;?>
	</tr>
	<?php foreach($content as $row):?>
		<tr>
			<?php foreach($row as $data):?>
				<td><?=$data?></td>
			<?php endforeach;?>
			<td><input type="submit" value="delete"></td>
		</tr>
	<?php endforeach;?>
</table>
<form>

<?php echo $links; ?>
</body>
</html>