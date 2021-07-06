<?php
$cid="";
$err_cid="";

$cname="";
$err_cname="";

$cperson="";
$err_cperson="";

$add="";
$err_add="";

$city="";
$err_city="";

$email="";
$err_email="";

$number="";
$err_number="";

$awork="";
$err_awork="";

$username="";
$err_username="";

$password="";
$err_password="";

$hasError=false;
 
if($_SERVER["REQUEST_METHOD"]=="POST")
	
	{
		
		
		
	if(empty($_POST["cid"]))
   {
	  $hasError=true; 
	  $err_cid="*Enter Company ID number";
   }
    elseif(is_numeric($_POST["cid"])==false){
                $err_cid="*Please enter digit";
            }
   else
   {
	 $bio=$_POST["cid"];  
   }
   	
		
		
		
		
		if(empty($_POST["cname"]))
   {
	  $hasError=true; 
	  $err_cname="*Please Enter Company name";
   }
   elseif(strlen($_POST["cname"])<2)
   {
	  $hasError=true;  
	  $err_cname="*Name Must be at least 6 characters";
   }
   else
   {
	 $name=$_POST["cname"];  
   }
   
   
   
   
   
		if(empty($_POST["cperson"]))
   {
	  $hasError=true; 
	  $err_cperson="*Contact Person";
   }
   else
   {
	 $cperson=$_POST["cperson"];  
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
   
   
   
		if(empty($_POST["city"]))
   {
	  $hasError=true; 
	  $err_city="*Address required";
   }
   else
   {
	 $add=$_POST["city"];  
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
   
   
   
		if(empty($_POST["awork"]))
   {
	  $hasError=true; 
	  $err_awork="*Enter Area of work";
   }
   else
   {
	 $awork=$_POST["awork"];  
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
   
   
     
   
     
   
if(!$hasError)
{
	
echo $_POST["cid"]."<br>";	
echo $_POST["cname"]."<br>";
echo $_POST["cperson"]."<br>";	
echo $_POST["add"]."<br>"; 
echo $_POST["city"]."<br>"; 		
echo $_POST["email"]."<br>";   
echo $_POST["number"]."<br>";	
echo $_POST["awork"]."<br>";  
echo $_POST["username"]."<br>";	
echo $_POST["password"]."<br>";	
 
 	
 
}

 
}	

?>


<html>
<head>
    <title>Company Form</title>
</head>
<body>
<fieldset>
<legend><h2>Company Form</h2></legend>
<form action="" method="post">
<table>             
					
					<tr>
					
                    <td align="right" ><span>Company Id</span></td>
                    <td>: <input type="text" name="cid">
					<span style="color:red"><?php echo $err_cid; ?></span>
					</td>
                   
                </tr>
				
                <tr>
                    <td align="right" ><span>Company Name</span></td>
                    <td>: <input type="text" name="cname">
					<span style="color:red"><?php echo $err_cname; ?></span>
					</td>
                   
                </tr>
				
				
				 <tr>
                    <td align="right" ><span>Contact A Person</span></td>
                    <td>: <input type="text" name="cperson">
					<span style="color:red"><?php echo $err_cperson; ?></span>
					</td>
					</tr>
				
					  
                <tr>
                    <td align="right" ><span>Address</span></td>
                    <td>: <input type="text"    name="add"> 
				 	<span style="color:red"><?php echo $err_add; ?></span>
                     </td>
                </tr>
				
				
                    <tr>
                    <td align="right" ><span>City</span></td>
                    <td>: <input type="text" name="city">
					<span style="color:red"><?php echo $err_city; ?></span>
					</td>
					</tr>
				
				
				   <tr>
                <td align="right" ><span>Email</span></td>
                    <td>: <input type="text" name="email"> <span style="color:red"><?php echo $err_email; ?></span>
                   </td>
                </tr>
			 
				 
				 
				 
				  <tr>
                    <td align="right" ><span>Mobile</span></td>
                    <td>: <input type="text" name="number">
					<span style="color:red"><?php echo $err_number; ?></span>
					</td>
					</tr>
				 
				 	  
              <tr>
                    <td align="right" ><span>Area Of Work </span></td>
                    <td>: <input type="text" name="awork">
					<span style="color:red"><?php echo $err_awork; ?></span>
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
						<td align="right"><input type="submit" name="submit" ></td>
				</tr>




 </table>
 </form>
        
</fieldset>
   

</body>
</html>