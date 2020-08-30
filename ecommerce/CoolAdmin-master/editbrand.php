<?php
include'include/header.php';
include'include/navbar.php';
include'database.php';

//Object
$updatedata=new DB_con();
if(isset($_POST['brandupdate']))
{
// Get the userid
$id=intval($_GET['upid']);
// Posted Values
$bname=$_POST['updatename'];

                         
    $img = $_FILES['updateimage1']['tmp_name'];
                         $filename = rand(100,200)."_".$_FILES['updateimage1']['name'];
                        $location = "../imageupload/".$filename;
                       
     $img2 = $_FILES['updateimage2']['tmp_name'];
                         $filename2 = rand(100,200)."_".$_FILES['updateimage2']['name'];
                        $location2 = "../imageupload/".$filename2;
if(!move_uploaded_file($img,$location)){
		$err[0]="Please upload image again";
	}
if(!move_uploaded_file($img2,$location2)){
		$err[0]="Please upload image again";
	}     
//Function Calling
$sql=$updatedata->update($bname,$location,$location2,$id);
if($sql)
{
// Message for successfull insertion
echo "<script>alert('Record Update successfully');</script>";
echo "<script>window.location.href='brand.php'</script>";
}
else
{
// Message for unsuccessfull insertion
echo "<script>alert('Something went wrong. Please try again');</script>";
echo "<script>window.location.href='brand.php'</script>";
}
}

?>
<?php
// Get the userid
$upid=intval($_GET['upid']);
$onerecord=new DB_con();
$sql=$onerecord->fetchonerecord($upid);

while($row=mysqli_fetch_array($sql))
  {
?>
<br>
<br>

<div class="container py-5">
<div class="card">
<div class="card-header">
 BRAND<strong>UPDATE</strong>
      </div>
  <div class="card-body card-block">
<form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
    
                                            <div class="row form-group">
                                                <div class="col col-sm-8">
                                                    <label for="input-normal" class=" form-control-label">BRAND_NAME</label>
                                               
                                                <div class="col col-sm-8">
                                                    <input type="text" id="input-normal" value="<?php echo ($row['brand_name']);?>" name="updatename"  class="form-control">
                                                </div>
                                                </div>
                                            </div>
                                             <div class="row form-group">
                                             <div class="col col-sm-8">
                                             <label for="exampleFormControlFile1">BRAND_IMAGE</label>
                                                
                                             <input type="file" class="form-control-file" value="" name="updateimage1" id="exampleFormControlFile1" >
                                                <span id="imageid" class="text-warning font-weight-bolder"></span><br>
                                                         <img src="../imageupload/<?php echo $row['image']?>" width="200px">
                                                 </div>
                                                   </div>    
                                                   <div class="row form-group">
                                             <div class="col col-sm-8">
                                             <label for="exampleFormControlFile1">CLOTH_IMAGE</label>
                                             <input type="file" class="form-control-file" value="" name="updateimage2" id="exampleFormControlFile1" >
                                                <span id="imageid" class="text-warning font-weight-bolder"></span><br>
                                                         <img src="../imageupload/<?php echo $row['cloth_image']?>" width="200px">
                                                        </div>
                                                   </div> 
                                               <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm" name="brandupdate">
                                            <i class="fa fa-dot-circle-o"></i> Update
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