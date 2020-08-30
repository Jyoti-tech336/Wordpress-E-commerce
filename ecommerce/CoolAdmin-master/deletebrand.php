<?php
include'database.php';
if(isset($_GET['del']))
    {
// Geeting deletion row id
$bid=$_GET['del'];
$deletedata=new DB_con();
$sql=$deletedata->deletebrand($bid);
if($sql)
{
// Message for successfull insertion
echo "<script>alert('Record deleted successfully');</script>";
echo "<script>window.location.href='brand.php'</script>";
}
    }
?>