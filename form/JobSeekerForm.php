 <?php
$name="";
$err_name=""; 
$password="";
$err_password=""; 
$email="";
$err_email="";
$code="";
$err_code="";
$number="";
$err_number="";
$add="";
$err_add="";
$gender="";
$err_gender="";
$FileUpload="";
$err_FileUpload="";
 
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
   
  
   
    
		if(empty($_POST["password"]))
   {
	  $hasError=true; 
	  $err_password="*password required";
   }
   else
   {
	 $bio=$_POST["password"];  
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
   
	 
   
 
   
   
   
   if(!isset($_POST["gender"]))
   {
	 $hasError=true;   
	$err_gender="*gender name required"; 
   }
   else
   {
	 $gender=$_POST["gender"];   
   }
   
 
   
		if(empty($_POST["FileUpload"]))
   {
	  $hasError=true; 
	  $err_FileUpload="*File required";
   }
   else
   {
	 $FileUpload=$_POST["FileUpload"];  
   }
    
   
   
if(!$hasError)
{
echo $_POST["name"]."<br>";	
echo $_POST["password"]."<br>";	
echo $_POST["email"]."<br>";	
echo $_POST["code"]."<br>";	
echo $_POST["number"]."<br>";	
echo $_POST["add"]."<br>";	
echo $_POST["gender"]."<br>";
echo $_POST["FileUpload"]."<br>";
echo $_POST["submit"]."<br>";
}

 
}	

?>


<html>
<head>
    <title>Job Seeker Form</title>
</head>
<body bgcolor="#717D7E">
<fieldset>
<legend><h2>Job Seeker Form</h2></legend>
<form action="" method="post">
<table>
 

                <tr>
                    <td align="right" ><span>Name</span></td>
                    <td>: <input type="text" name="name">
					<span style="color:red"><?php echo $err_name; ?></span>
					</td>
                   
                </tr>
				 
                <tr>
                    <td align="right"  ><span>Password</span></td>
                    <td>: <input type="password" name="password"> 
				 <span style="color:red"><?php echo $err_password; ?></span>
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
 
                
							  
                <tr>
						<td align="right"><span>Gender</span></td>
						<td>:<input type="radio" value="Male" name="gender">Male<input type="radio" value="Female" name="gender">Female
                          <span style="color:red"><?php echo $err_gender; ?></span> </td>
				</tr>

                  
                <tr>
                  <td align="right"><input type="file" name="FileUpload" id="FileUpload"> </td>
                </tr>
			 
					<tr>
						<td align="right"><input type="submit" name="submit" ><span style="color:red"><?php echo $err_FileUpload; ?></span></td>
				</tr>




 </table>
 </form>
        
</fieldset>
   

</body>
</html>