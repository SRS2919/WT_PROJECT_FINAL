 <?php
session_start();

?>
<html>
<head>
<title>Home Page</title>
<style>
.menubar{
	background-color:blue;
	padding:1% 7%;
	text-align: center;
	}
.menubar a{
	color:white;
	text-decoration:none;
	font-size:15px;
	padding:10px 20px;
	cursor:pointer;
    }	
<!--.welcome{
	background-color:#F0B27A;
	padding:1% 7%;
	text-align: center;
        }-->

</style>
</head>

<body bgcolor="#A6ACAF" background="">

<div class="menubar">

<a href="home.php">Home</a>
<a href="registration.php">Registration</a>
 
<a href="employer.php">Employer</a>
<a href="admin.php">Admin</a>
<a href="JobSeeker.php">JobSeeker</a>
<a href="news.php">News</a>
<a href="AboutUs.php">About Us</a>
<a href="ContactUs.php">Contact Us</a>


</div>
<div class="welcome">
 
 
<h1 align="center">WELCOME TO <?php echo $_SESSION["loggeduser"];?> IN OUR JOB PORTAL SYSTEM</h1>

</div>
<p>
Job portals are sites where you can promote jobs and search for resumes. They are an important part of almost every hiring procedure, and using them efficiently will interpret 
into qualified candidates for moderately low costs. So, below we have listed some benefits for both recruiters and job seekers for using job portals to find a job and promote 
job opening for the specific companies.
</p>

<br>
 
<p>
Job seekers can easily contact an extensive collection of job vacancies through job search engines, at their phase. Away from that, most job portals have filters which help users 
slight down results. This trait makes it easier for job seekers to decide on a specific career. Equally, online job search sites can help employers pace up their hiring process.
 It would be easy for recruiters or hiring managers to verify job applications online than physically scan printed resumes. Hence, job portals help them save time and endeavour.
</p>
 


 
   
 
</body>
</html>