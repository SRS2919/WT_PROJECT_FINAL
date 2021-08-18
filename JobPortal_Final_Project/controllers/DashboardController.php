
<?php 

if(!isset($_SESSION)) 
{ 
	session_start(); 
} 
?>
<?PHP 
include 'models/db_config.php';
$total_Admin="";
$total_JobProvider="";
$total_JobSeeker="";

function getTotalAdmin()
{
    $query = "select count(id) total from users where usertype='admin'";
    $rs = get($query);
    return $rs[0];
}


function getTotalJobProvider()
{
    $query = "select count(id) total from users where usertype='jobprovider'";
    $rs = get($query);
    return $rs[0];
}

function getTotalJobSeeker()
{
    $query = "select count(id) total from users where usertype='jobseeker'";
    $rs = get($query);
    return $rs[0];
}

$total_Admin= getTotalAdmin();
$total_JobProvider=getTotalJobProvider();
$total_JobSeeker= getTotalJobSeeker();

?>