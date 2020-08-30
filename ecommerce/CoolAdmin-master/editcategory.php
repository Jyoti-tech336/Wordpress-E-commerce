<?php
include'include/header.php';
include'include/navbar.php';
include'database.php';

//Object
$updatecate=new DB_con();
if(isset($_POST['catupdate']))
{
// Get the userid
$catid=intval($_GET['catid']);
// Posted Values
$men=$_POST['men'];

//Function Calling
$sqlcat=$updatecate->categoryupdate($men,$catid);
if($sqlcat)
{
// Message for successfull insertion
echo "<script>alert('Record update successfully');</script>";
echo "<script>window.location.href='category.php'</script>";
}
else
{
// Message for unsuccessfull insertion
echo "<script>alert('Something went wrong. Please try again');</script>";
echo "<script>window.location.href='category.php'</script>";
}
}

?>
<?php
// Get the userid
$catid=intval($_GET['catid']);
 $catresult=new DB_con();
$sql= $catresult->fecthcate($catid);

while($row=mysqli_fetch_array($sql))
  {
?>
<br>
<br>

<div class="container py-5">
<div class="card">
<div class="card-header">
 CATEGORY<strong>UPDATE</strong>
      </div>
  <div class="card-body card-block">
<form action="" method="post" class="form-horizontal">
    
                                            <div class="row form-group">
                                                <div class="col col-sm-8">
                                                    <label for="input-normal" class=" form-control-label">MEN</label>
                                               
                                                <div class="col col-sm-8">
                                                    <input type="text" id="input-normal" value="<?php echo ($row['men']);?>" name="men"  class="form-control">
                                                </div>
                                                </div>
                                            </div>
                                              
                                                  
                                               <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm" name="catupdate">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                    </div>     
                                        </form>
                                    </div>
                                      
                                    <?php } ?>
                                    
                                </div>
                                </div>
                                
<?php include'include/footer.php';?>