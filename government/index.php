<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Home Page</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="header">
	<div id="topmenu">
		<ul>
			
			
		</ul>
	</div>
	<div id="logo">
		<h1><a href="#">EDUCATIONAL WEBSITE</a></h1>
		<h2><a href="#">Government polytechnic, Dhule</a></h2>
  </div>
</div>
<div id="menu">
	<ul>
		
        <li><a href="download.php" title="">Course Material</a></li>
        <li><a href="comment.php" title="">Forum</a></li>
        <li><a href="about.html" title="">About Us</a></li>
        <li><a href="contact.html" id="topmenu2" accesskey="2" title="">Contact</a></li>
	
	</ul>
</div>
<div id="content">
	<div id="main">
		<div id="welcome">
			<h2>NOTICE BOARD...</h2>
<?php
$cn=mysql_connect("localhost","root");
mysql_select_db("notes",$cn);
$sql="select * from notice order by ndate desc";
$result=mysql_query($sql,$cn);
$i=4;
while($i>=1)
{
$row=mysql_fetch_array($result);
echo "$row[0], $row[1]<br><br>";
$i=$i-1;
}
echo "<a href=noticedis.php> view all </a>";
?>			
<p>&nbsp</p>
            
		</div>
		<div id="example">
			<h1>Mission</h1>
		  <p>To import highest quality education to the students to build their capacity and enhancing their skills to make them globally compeyitive computer engineers.</p><hr />
		  <blockquote>&nbsp;</blockquote>
		  <h1>VISION</h1>
			<p>A Premier Institute as a dynamic entity contributing in Human Resource Development.</p><hr />
			
	  </div>
  </div>
	<div id="sidebar">
		<div id="login" class="boxed">
			<h2 class="title">sTAFF LOGIN</h2>
			<div class="content">
				<form id="form1" method="post" action="login.php">
					<fieldset>
					<legend>Sign-In</legend>
					<label for="inputtext1">User ID:</label>
					<input id="inputtext1" type="text" name="inputtext1" value="" />
					<label for="inputtext2">Password:</label>
					<input id="inputtext2" type="password" name="inputtext2" value="" />
					<input id="inputsubmit1" type="submit" name="inputsubmit1" value="Sign In" />
					<p><a href="admin.php">New User?</a></p>
					</fieldset>
				</form>
			</div>
		</div>
		<div id="updates" class="boxed">
			<h2 class="title">BRANCHES:</h2>
<div class="content">
				<ul>
					<li>
						<h3>COMPUTER ENGINEERING</h3>
					
					</li>
				
		        <h3>MECHANICAL ENGINEERING</h3>
                
		        	<li>
						<h3>CIVIL ENGINEERING</h3>
						
					</li>
					<li>
						<h3>ELECTRICAL ENGINEERING</h3>
						
					</li>
				<li>
						<h3>AUTOMOBILE ENGINEERING</h3>
						
					</li>
		        </ul>
          </div>
		</div>
		<div id="partners" class="boxed">
			<h2 class="title">we offers</h2>
			<div class="content">
				<ul>
					<li>Syllabus</li>
					<li>Notes</li>
					<li>E-Books</li>
					<li>Question Paper</li>
					<li>Model Answer Paper</li>
					<li>Assignment</li>
					<li>Source Codes</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div id="footer">
	<p id="legal">Department Of Computer Engineering:Designed By Aarti Sharma, Priyanka Akhade, Shweta Pawar, Pratiksha Sarode</p>
	
</div>
</body>
</html>
