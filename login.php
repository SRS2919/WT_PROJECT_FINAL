<?php
session_start();
 $username="";
$err_username="";
$password="";
$err_password="";

$users =array("saiful"=>"1234","shohan"=>"5678","SANJIDA"=>"7364"); 

$hasError=false;
 
if($_SERVER["REQUEST_METHOD"]=="POST")
	
	{
		 
   
    if(empty($_POST["username"]))
   {
	  $hasError=true; 
	  $err_username="*user name required";
   }
   elseif(strlen($_POST["username"])<3)
   {
	  $hasError=true;  
	  $err_username="*User name Must be at least 3 characters";
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
	 $password=$_POST["password"];  
   }
   
   
if(!$hasError)
{
 
foreach($users as $u=>$p)
{
	if($username == $u && $password ==$p)
	{
		$_SESSION["loggeduser"] = $username;
		header("Location: home.php");
	}
	echo "Invalid Username or password";
	
}

}
 
}	

?>


<html>
<head>
    <title>Login Form</title>
</head>
<body>
<fieldset>
<legend><h2>Login Form</h2></legend>
<form action="" method="post">
<table>
 				
                <tr>
                    <td align="right" ><span>Username</span></td>
                    <td>: <input type="text" name="username" value="<?php echo $username;?>"><span style="color:red"><?php echo $err_username; ?></span> </td>
                </tr>

                <tr>
                    <td align="right"  ><span>Password</span></td>
                    <td>: <input type="password" name="password" value="<?php echo $password;?>"> 
				 <span style="color:red"><?php echo $err_password; ?></span>
                      </td>
                </tr>

                
					<tr>
						<td align="right"><input type="submit" value="Login" ></td>
				</tr>
				<tr><td><a href="registration.php">Registration</a></td></tr>

 </table>
 </form>
        
</fieldset>
   

</body>
</html>