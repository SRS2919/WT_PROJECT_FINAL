<?php
 $cname="";
$err_cname="";
$ctitle="";
$err_ctitle="";
$jlocation="";
$err_jlocation="";
$jsalary="";
$err_jsalary="";
$jsq="";
$err_jsq="";
$experi="";
$err_experi="";



 
 
$hasError=false;
 
if($_SERVER["REQUEST_METHOD"]=="POST")
	
	{
		 
   
    if(empty($_POST["cname"]))
   {
	  $hasError=true; 
	  $err_cname="*Enter The Company Name";
   }
   elseif(strlen($_POST["cname"])<2)
   {
	  $hasError=true;  
	  $err_cname="*User name Must be at least 2 characters";
   }
   else
   {
	 $cname=$_POST["cname"];  
	 
   }
   
   
   			
		if(empty($_POST["ctitle"]))
   {
	  $hasError=true; 
	  $err_ctitle ="*Enter The Job Title";
   }
   else
   {
	 $ctitle =$_POST["ctitle"];  
   }
   
   
   			
		if(empty($_POST["jlocation"]))
   {
	  $hasError=true; 
	  $err_jlocation ="*Enter The Location";
   }
   else
   {
	 $jlocation =$_POST["jlocation"];  
   }
   
   
		if(empty($_POST["jsalary"]))
   {
	  $hasError=true; 
	  $err_jsalary="*salary required";
   }
    elseif(is_numeric($_POST["jsalary"])==false){
                $err_jsalary="*Please enter digit";
            }
   else
   {
	 $jsalary=$_POST["jsalary"];  
   }
   
   
   		
		if(empty($_POST["jsq"]))
   {
	  $hasError=true; 
	  $err_jsq ="* JobSeeker Qualification needed";
   }
   else
   {
	 $jsq =$_POST["jsq"];  
   }
   
   
   		
		if(empty($_POST["experi"]))
   {
	  $hasError=true; 
	  $err_experi ="*Enter Your Job Experiences";
   }
   else
   {
	 $experi =$_POST["experi"];  
   }
     
   
   
if(!$hasError)
{
 
 echo $_POST["cname"]."<br>";
 echo $_POST["ctitle"]."<br>";	
 echo $_POST["jlocation"]."<br>";
 echo $_POST["jsalary"]."<br>";
 echo $_POST["jsq"]."<br>";
 echo $_POST["experi"]."<br>";	
					 
					 
					 
					
}
 
}	

?>


<html>
<head>
    <title>Company Job Detail Form</title>
</head>
<body>
<fieldset>
<legend><h2>Company Job Detail Form</h2></legend>
<form action="" method="post">
<table>
 				
                   <tr>
                    <td align="right" ><span>Company Name</span></td>
                    <td>: <input type="text" name="cname">
					<span style="color:red"><?php echo $err_cname; ?></span>
					</td>
					</tr>
					
					
					  <tr>
                    <td align="right" ><span>Job Title</span></td>
                    <td>: <input type="text" name="ctitle">
					<span style="color:red"><?php echo $err_ctitle; ?></span>
					</td>
					</tr>
					
					
					  <tr>
                    <td align="right" ><span>Job Location</span></td>
                    <td>: <input type="text" name="jlocation">
					<span style="color:red"><?php echo $err_jlocation; ?></span>
					</td>
					</tr>
					
					
					  <tr>
                    <td align="right" ><span>Job Salary</span></td>
                    <td>: <input type="text" name="jsalary">
					<span style="color:red"><?php echo $err_jsalary; ?></span>
					</td>
					</tr>
					
					
					  <tr>
                    <td align="right" ><span>JobSeekerQualification</span></td>
                    <td>: <input type="text" name="jsq">
					<span style="color:red"><?php echo $err_jsq; ?></span>
					</td>
					</tr>
					
					
					  <tr>
                    <td align="right" ><span>Experience</span></td>
                    <td>: <input type="text" name="experi">
					<span style="color:red"><?php echo $err_experi; ?></span>
					</td>
					</tr>
                
					<tr>
						<td align="right"><input type="submit" placeholder="Login" name="Login" ></td>
				</tr>

 </table>
 </form>
        
</fieldset>
   

</body>
</html>