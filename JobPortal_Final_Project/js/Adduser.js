function isvalid()
{   //get error message from span
    var flag =true;
    var idErr=document.getElementById("idErr");
    var nameErr=document.getElementById("nameErr");
    var usernameErr=document.getElementById("usernameErr");
    var passwordErr=document.getElementById("passwordErr");
    var genderErr=document.getElementById("genderErr");
    var emailErr=document.getElementById("emailErr");
    var addressErr=document.getElementById("addressErr");
    var usertypeErr=document.getElementById("usertypeErr");

    //get value from input
    var id=document.forms["adduserForm"]["id"].value;
    //get value from input
    var name=document.forms["adduserForm"]["name"].value;
    var username=document.forms["adduserForm"]["username"].value;
    var password=document.forms["adduserForm"]["password"].value;
    var gender=document.forms["adduserForm"]["gender"].value;
    var email=document.forms["adduserForm"]["email"].value;
    var address=document.forms["adduserForm"]["address"].value;
    var usertype=document.forms["adduserForm"]["usertype"].value;
    
    //clear error message
    idErr.innerHTML="";
    nameErr.innerHTML="";
    usernameErr.innerHTML="";
    passwordErr.innerHTML="";
    genderErr.innerHTML="";
    emailErr.innerHTML="";
    addressErr.innerHTML="";
    usertypeErr.innerHTML="";
   

    //value is empty or not
    if(id ==="")
     {
      idErr.innerHTML="* id required.";
     flag=false;
    }
    if(name ==="")
    {
    nameErr.innerHTML="* name required.";
    flag=false;
   }
    if(username ==="")
    {
    usernameErr.innerHTML="* user name required.";
    flag=false;
   }
   if(password ==="")
   {
   passwordErr.innerHTML="* password required.";
   flag=false;
  }
  if(gender ==="")
  {
    genderErr.innerHTML="*gender required.";
  flag=false;
  }
  if(email ==="")
  {
    emailErr.innerHTML="* email required.";
  flag=false;
  }
  if(address ==="")
  {
    addressErr.innerHTML="* address required.";
   flag=false;
  }
  if(usertype ==="")
  {
    usertypeErr.innerHTML="* usertype required.";
  flag=false;
  }             

  return flag;
}