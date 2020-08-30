<?php
include'database.php';
if(isset($_GET['delcat']))
    {
// Geeting deletion row id
$cid=$_GET['delcat'];
$deletedata=new DB_con();
$sql=$deletedata->deletecate($cid);
if($sql)
{
// Message for successfull insertion
echo "<script>alert('Record deleted successfully');</script>";
echo "<script>window.location.href='category.php'</script>";
}
    }
?>