<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
  

<style>


</style>

</head>
<body>
	<?php echo validation_errors(); ?>
	<div>
		<?php echo form_open('index.php/form/index'); ?>
		<p>form1</p>
		<input type='radio' name='nation' id='native' value='native'> 
		<label for="native">native</label>
		<br>
		<input type='radio' name='nation' id='international' value='international'>
		<label for="international">international</label>
		<br>
		<p>form2</p>
		<input type='radio' name='degree' id='undergraduate' value='undergraduate'> 
		<label for="undergraduate">undergraduate</label>
		<br>
		<input type='radio' name='degree' id='graduate' value='graduate'>
		<label for="graduate">graduate</label>
		<br>
		<input type="submit" value="submit">
		</form>
	</div>
</body>
</html>