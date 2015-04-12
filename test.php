<HTML> 
<HEAD> 
<style>


</style>
</HEAD> 
<BODY> 
	<form name="myForm" method="get" action="" >
		<button type="button" onclick="fun()">button</button>
	</form>
</BODY> 
<script>
	function fun(){
		var form=document.forms['myForm'];
		form.action="asd.php";
		form.submit();
	}
</script>
</HTML> 