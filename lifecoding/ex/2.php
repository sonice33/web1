<!DOCTYPE html>
<html>
<head>
	<meta charset = "utf-8" >
</head>
<body>

	<script>
		
	</script>

	<ul>
	<?php
		$list = array("1","2","3","ddd","fr");


		$j=0;
		while ($j < count($list) ){
			echo "<li>".$list[$j]."</li>";
			$j = $j + 1;
		}

		for($k=0; $k < count($list); $k++){
			echo "<li>".$list[$k]."</li>";
		}
		
	?>
	</ul>





	<input type="text" name="" id="txt"  />     <!-- onfocus="alert('입력하려구..?')" onblur="alert('어딜보는거양')"  -->
	<input type="button" name="" value="눌러방" 
	onclick="alert(document.getElementById('txt').value)" >






	<ul id="aa">
		<li>가나다</li>
		<li>마바</li>
		<li>사</li>
	</ul>
	<input type="button" name="" value="강조" onclick="document.getElementById('aa').className='em' ">

	<style type="text/css">
		.em{
			color : orange;
			font-size: 30px;
			text-decoration: line-through; 
		}
	</style>




</body>
</html>	