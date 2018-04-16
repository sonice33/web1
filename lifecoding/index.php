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
	<div id="control">
		<input type="button" value="black" onclick="document.getElementById('target').className='black' " />
		<input type="button" value="white" onclick="document.getElementById('target').className='white' " />
		<a href="http://localhost/lifecoding/write.php"><input type="button" value="글쓰기"/></a>
	</div>
	<article>
		<?php 
			if(empty($_GET['id'])===false){
				$sql = "select title,description from topic where id =".$_GET['id'];
				$result = mysqli_query($conn,$sql);
				$row = mysqli_fetch_assoc($result);
				
				echo '<h2>'.$row['title'].'</h2>';
				echo $row['description'];
			}		
		?>

		<!-- disqus start -->
		<div id="disqus_thread"></div>
		<script>
		(function() { // DON'T EDIT BELOW THIS LINE
		var d = document, s = d.createElement('script');
		s.src = 'https://sowhat33.disqus.com/embed.js';
		s.setAttribute('data-timestamp', +new Date());
		(d.head || d.body).appendChild(s);
		})();
		</script>
		<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
		<!-- disqus end -->
	</article>


	<!--Start of Tawk.to Script-->
	<script type="text/javascript">
	var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
	(function(){
	var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
	s1.async=true;
	s1.src='https://embed.tawk.to/5ac781164b401e45400e68f9/default';
	s1.charset='UTF-8';
	s1.setAttribute('crossorigin','*');
	s0.parentNode.insertBefore(s1,s0);
	})();
	</script>
	<!--End of Tawk.to Script-->
</body>
</html>