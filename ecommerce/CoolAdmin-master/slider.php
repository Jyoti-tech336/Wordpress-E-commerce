<?php

include'include/header.php';
include'include/navbar.php';
include'database.php';

?>

<br>
<br>
<br>
<!---------------------------------------------------model--------------------------------------------------------------------------->
<div class="container py-2">
<!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">
  INSERT POSTER
</button>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <!-----------------------------------------insertcodeobject---------------------------------------------------------------------->
       <?php
// Object creation
$insertsliderr=new DB_con();
if(isset($_POST['slidersubmit']))
{
// Posted Values
$slidername=$_POST['slidername'];
   $sliderimage = $_FILES['sliderimage']['tmp_name'];
                         $filenames = rand(100,200)."_".$_FILES['sliderimage']['name'];
                        $location8 = "../imageupload/".$filenames;
    
if(!move_uploaded_file($slidername, $location8)){
		$err[0]="Please upload image again";
	}

//Function Calling
$sql=$insertsliderr->insertslider($slidername, $location8);
 if($sql)
{
// Message for successfull insertion
echo "<script>alert('Record inserted successfully');</script>";
echo "<script>window.location.href='slider.php'</script>";
}
else
{
// Message for unsuccessfull insertion
echo "<script>alert('Something went wrong. Please try again');</script>";
echo "<script>window.location.href='slider.php'</script>";
}
}
?>
<!------------------------------------------------------endofinsertcode-------------------------------------------------------->
<form action="#" method="post" enctype="multipart/form-data" >
  <div class="form-group">
    <label for="exampleInputEmail1">SLIDER NAME</label>
    <input type="text" class="form-control" name="slidername"id="exampleInputEmail1" placeholder="Enter brand name" required>
    <small class="form-text text-muted"></small>
  </div>      
  <div class="form-group">
    <label for="exampleFormControlFile1">SLIDER IMAGE</label>
    <input type="file" class="form-control-file" name="sliderimage" id="exampleFormControlFile1" required>
  </div>
  
   <div class="modal-footer">
  <button type="submit" name="slidersubmit" class="btn btn-danger">Save</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
           </div>
          </form>
      </div>
    </div>
  </div>
</div>
</div>
<!---------------------------------------------------endofmodel---------------------------------------------------------->
<!---------------------------------------------------Startoftable---------------------------------------------------------->
<div class="table-responsive table-responsive-data2 py-3" id="dtBasicExample">
                                   
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>SLIDER_ID</th>
                                                <th>SLIDER_NAME</th>
                                                <th>SLIDER_IMAGE</th>
                                                
                                                <th>EDIT</th>
                                                <th>DELETE</th>
                                               </tr>
                                        </thead>
                                        <tbody>
<!-------------------------------------------------------fetchcodeobject------------------------------------->                                         
                                          <?php
                                       $fetchslider=new DB_con();
                                    $sql=$fetchslider->slider();
                                    while($row=mysqli_fetch_array($sql))
                                                 {
                                                           ?>
                                            <tr class="tr-shadow">
                                                <td><?php echo ($row['slider_id']);?></td>
                                                <td><?php echo ($row['slider_name']);?></td>
                                                <td><?php echo '<img src="../imageupload/'.$row['slider_image'].'"width="100px;" height="100px;" alt="image">'?></td>
                                                
                                                <td><button class="item" data-toggle="tooltip" data-placement="top" title="Edit"><a style="color:black" href="editbrand.php?upid=<?php echo $row ['brand_id'];?>"><i class="zmdi zmdi-edit"></i></a></button></td>
                                                <td><button class="item" data-toggle="tooltip" data-placement="top" title="Delete"><a style="color:black;" href="deletebrand.php?del=<?php echo ($row ['brand_id']);?>"><i class="zmdi zmdi-delete"></i></a></button> 
                                                </td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <?php
                                                   } ?>
                                           </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            
                        
<?php include'include/footer.php'; ?>

