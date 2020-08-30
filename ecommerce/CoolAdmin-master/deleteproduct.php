<?php
include'database.php';
if(isset($_GET['pid']))
    {
// Geeting deletion row id
$pid=$_GET['pid'];
$deleteproduct=new DB_con();
$sql=$deleteproduct->deletepro($pid);
if($sql)
{
// Message for successfull insertion
echo "<script>alert('Record deleted successfully');</script>";
echo "<script>window.location.href='product.php'</script>";
}
    }
?>