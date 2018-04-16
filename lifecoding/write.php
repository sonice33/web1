<?php 
	$conn = mysqli_connect('localhost','root','zaqwsx128');
	mysqli_select_db($conn,'opentutorials');
	$result = mysqli_query($conn,'select * from topic');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="http://localhost/lifecoding/style.css">
	<title>생활코딩</title>
</head>
<body id="target">
	<header>
		<marquee behavior="alternate" hspace="20px" vspace="30" direction="right" scrollamount="40">공지사항 : 테스트 페이지입니다.</marquee>
		<h1><a href="http://localhost/lifecoding/index.php">JavaScript</a></h1>
	</header>
	<nav>	
		<ol>
			<?php
				while ($row = mysqli_fetch_assoc($result)) {
					echo "<li><a href='http://localhost/lifecoding/index.php?id=".$row['id']."' >".$row["title"]."</li></a>";
				}
			?>
		</ol>
	</nav>
	
	<article>
		<form action="http://localhost/lifecoding/process.php" method="POST"> 
			<table>
				<tr>
					<td>제목 : </td>
					<td><input type="text" name="title"></td>
				</tr>
				<tr>
					<td>작성자 : </td>
					<td><input type="text" name="author"></td>
				</tr>
				<tr>
					<td>내용 : </td>
					<td><textarea name="desc" rows="15" cols="100"></textarea></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" ></td>
				</tr>
			</table>
		</form>
	</article>
</body>
</html>