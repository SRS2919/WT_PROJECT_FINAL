  <?php
$name="";
$err_name=""; 
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
$fb="";
$err_fb="";
$com="";
$err_com="";
 
 
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
   
 
		if(empty($_POST["fb"]))
   {
	  $hasError=true; 
	  $err_fb="*Enter FeedBack";
   }
   else
   {
	 $fb=$_POST["fb"];  
   }
 
 
 
		if(empty($_POST["com"]))
   {
	  $hasError=true; 
	  $err_com="*Comment";
   }
   else
   {
	 $com=$_POST["com"];  
   
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
echo $_POST["fb"]."<br>";	
echo $_POST["com"]."<br>";
 
}

 
}	

?>


<html>
<head>
    <title>FeedBack</title>
</head>
<body bgcolor="34495E ">
<fieldset>
<legend><h2>FeedBack Form</h2></legend>
<form action="" method="post">
<table>
 

                <tr>
                    <td align="right" ><span>Name</span></td>
                    <td>: <input type="text" name="name">
					<span style="color:red"><?php echo $err_name; ?></span>
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
						<td align="right"><span>FeedBack</span></td>
						<td>:<textarea name="fb"></textarea>
               <span style="color:red"><?php echo $err_fb; ?></span>
                        </td>
					</tr>
					
					
					
					
				    <tr>
                    <td align="right" ><span>Comment</span></td>
                    <td>: <input type="text" name="com">
					<span style="color:red"><?php echo $err_com; ?></span>
					</td>
					</tr>
			  



 </table>
 </form>
        
</fieldset>
   

</body>
</html>