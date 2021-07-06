<html>
<head>
<title>Employer</title>
 <style>
.menubar{
	background-color:#40868b;
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


</style>
</head>

<body bgcolor="#A6ACAF">

<div class="menubar">

<a href="home.php">Home</a>
<a href="registration.php">Registration</a>
<a href="login.php">Login</a>
<a href="employer.php">Employer</a>
<a href="admin.php">Admin</a>
<a href="JobSeeker.php">JobSeeker</a>
<a href="news.php">News</a>
<a href="AboutUs.php">About Us</a>
<a href="ContactUs.php">Contact Us</a>


</div>
<h1>Employer</h1>
</body>
</html>
<?php
$name="";
$err_name="";
$username="";
$err_username="";
$password="";
$err_password="";
$cpassword="";
$err_cpassword="";
$email="";
$err_email="";
$code="";
$err_code="";
$number="";
$err_number="";
$add="";
$err_add="";
$day="";
$err_day="";
$month="";
$err_month="";
$year="";
$err_year="";
$gender="";
$err_gender="";
 $err_bio="";
$hasError=false;
 
if($_SERVER["REQUEST_METHOD"]=="POST")
	
	{
		if(empty($_POST["name"]))
   {
	  $hasError=true; 
	  $err_name="*name required";
   }
   elseif(strlen($_POST["name"])<6)
   {
	  $hasError=true;  
	  $err_name="*Name Must be at least 6 characters";
   }
   else
   {
	 $name=$_POST["name"];  
   }
   
    if(empty($_POST["username"]))
   {
	  $hasError=true; 
	  $err_username="*user name required";
   }
   elseif(strlen($_POST["username"])<6)
   {
	  $hasError=true;  
	  $err_username="*User name Must be at least 6 characters";
   }
   else
   {
	 $username=$_POST["username"];  
	 
   }
   
   
    
		if(empty($_POST["password"]))
   {
	  $hasError=true; 
	  $err_password="*password required";
   }
   else
   {
	 $bio=$_POST["password"];  
   }
   
   
    
		if(empty($_POST["cpassword"]))
   {
	  $hasError=true; 
	  $err_cpassword="*confirm password required";
   }
   else
   {
	 $cpassword=$_POST["cpassword"];  
   }
   
    
   
   
            if(empty($_POST["email"])){
               $err_email="*Please enter email";
            }

            else{
                $s=strpos($_POST["email"],"@");
                if($s!=false){
                    $t=strpos($_POST["email"],".", $s+1);
                    if($t!=false){
                        $email=$_POST["email"];
                    }
                    else{
                        $err_email="*Invalid email";
                    }
                }
                else{
                    $err_email="*Invalid email";
                }
            }
    
   
		if(empty($_POST["code"]))
   {
	  $hasError=true; 
	  $err_code="*code required";
   }
   
    elseif(is_numeric($_POST["code"])==false){
                $err_code="*Please enter digit";
            }
   else
   {
	 $code=$_POST["code"];  
   }
   
   
		if(empty($_POST["number"]))
   {
	  $hasError=true; 
	  $err_number="*number required";
   }
    elseif(is_numeric($_POST["number"])==false){
                $err_number="*Please enter digit";
            }
   else
   {
	 $number=$_POST["number"];  
   }
   
   
		if(empty($_POST["add"]))
   {
	  $hasError=true; 
	  $err_add="*Address required";
   }
   else
   {
	 $add=$_POST["add"];  
   }
   
	 
   
		if(empty($_POST["day"]))
   {
	  $hasError=true; 
	  $err_day="*day required";
   }
   else
   {
	 $day=$_POST["day"];  
   }
   
   
		if(empty($_POST["month"]))
   {
	  $hasError=true; 
	  $err_month="*month required";
   }
   else
   {
	 $month=$_POST["month"];  
   }
   
   
		if(empty($_POST["year"]))
   {
	  $hasError=true; 
	  $err_year="*year required";
   }
   else
   {
	 $year=$_POST["year"];  
   }
   
   
   
   if(!isset($_POST["gender"]))
   {
	 $hasError=true;   
	$err_gender="*gender name required"; 
   }
   else
   {
	 $gender=$_POST["gender"];   
   }
   
 
   
   
		if(empty($_POST["bio"]))
   {
	  $hasError=true; 
	  $err_bio="*bio required";
   }
   else
   {
	 $bio=$_POST["bio"];  
   }
   
   
if(!$hasError)
{
echo $_POST["name"]."<br>";	
echo $_POST["username"]."<br>";	
echo $_POST["password"]."<br>";	
echo $_POST["cpassword"]."<br>";	
echo $_POST["email"]."<br>";	
echo $_POST["code"]."<br>";	
echo $_POST["number"]."<br>";	
echo $_POST["add"]."<br>";	
echo $_POST["day"]."<br>";	
echo $_POST["month"]."<br>";	
echo $_POST["year"]."<br>";	
echo $_POST["gender"]."<br>";
echo $_POST["bio"]."<br>";	
echo $_POST["submit"]."<br>";
}

 
}	

?>


<html>
<head>
    <title>User Profile</title>
</head>
<body>
<fieldset>
<legend><h2>User Profile</h2></legend>
<form action="" method="post">
<table>
 

                <tr>
                    <td align="right" ><span>Name</span></td>
                    <td>: <input type="text" name="name">
					<span style="color:red"><?php echo $err_name; ?></span>
					</td>
                   
                </tr>
				
                <tr>
                    <td align="right" ><span>Username</span></td>
                    <td>: <input type="text" name="username"><span style="color:red"><?php echo $err_username; ?></span> </td>
                </tr>

                <tr>
                    <td align="right"  ><span>Password</span></td>
                    <td>: <input type="password" name="password"> 
				 <span style="color:red"><?php echo $err_password; ?></span>
                      </td>
                </tr>

                <tr>
                    <td align="right"><span>Confirm Password</span></td>
                    <td>: <input type="password" name="cpassword">
					<span style="color:red"><?php echo $err_cpassword; ?></span>
                       </td>
                </tr>

                <tr>
                <td align="right" ><span>Email</span></td>
                    <td>: <input type="text" name="email"> <span style="color:red"><?php echo $err_email; ?></span>
                   </td>
                </tr>
				
				<tr>
                        <td align="right" ><span>Phone</span></td>
                        <td>: <input type="text"  placeholder ="code" size="3" name="code">	<span style="color:red"><?php echo $err_code; ?></span> - 
							 <input type="text"  placeholder ="Number" size="9" name="number" ><span style="color:red"><?php echo $err_number; ?></span>
                         </td>
                 </tr>
				 
				  
                <tr>
                    <td align="right" ><span>Address</span></td>
                    <td>: <input type="text"    name="add"> 
				 	<span style="color:red"><?php echo $err_add; ?></span>
                     </td>
                </tr>
 
               <tr> <td align="right">Birth Date</td>
						<td>:
							<select name="day"    >
								<option>Day</option>
								
								<?php
									for($i=1;$i<=31;$i++){
										echo "<option>$i</option>";	
									}
								?>
							</select><span style="color:red"><?php echo $err_day; ?></span>
							<select name="month"  >
								<option>Month</option>
								
								<?php
								    $month = array("January","February","March","April","May","June","July","August","September","October","November","December");
									foreach($month as $v){
										echo "<option>$v</option>";
										
									}
								?>
							</select>
							<span style="color:red"><?php echo $err_month; ?></span>
                            <select name="year"  >
								<option>Year</option>
								
								<?php
									for($i=1990;$i<=2021;$i++){
										echo "<option>$i</option>";	
									}
								?>
							</select>
							 <span style="color:red"><?php echo $err_year; ?></span>
							</td>
							</tr>
							
							  
                <tr>
						<td align="right"><span>Gender</span></td>
						<td>:<input type="radio" value="Male" name="gender">Male<input type="radio" value="Female" name="gender">Female
                          <span style="color:red"><?php echo $err_gender; ?></span> </td>
				</tr>

                 
                
					<tr>	<td align="right"><span>Bio </span></td>
						<td>:<textarea name="bio"></textarea>
               <span style="color:red"><?php echo $err_bio; ?></span>
                        </td>
					</tr>
					<tr>
						<td align="right"><input type="submit" name="submit" ></td>
				</tr>




 </table>
 </form>
        
</fieldset>
   

</body>
</html>