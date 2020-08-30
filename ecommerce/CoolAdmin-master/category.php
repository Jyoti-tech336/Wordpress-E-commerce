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
  INSERT CATEGORY
</button>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <!-----------------------------------------insertcodeobject---------------------------------------------------------------------->
     <?php
// Object creation
$insertdata=new DB_con();
if(isset($_POST['catsubmit']))
{
// Posted Values
$men=$_POST['men'];

    
//Function Calling
$sqlcat=$insertdata->insertcategory($men);
 if($sqlcat)
{
// Message for successfull insertion
echo "<script>alert('Record inserted successfully');</script>";
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
<!------------------------------------------------------endofinsertcode-------------------------------------------------------->
<form action="#" method="post"  >
  <div class="form-group">
    <label for="exampleInputEmail1">MEN</label>
    <input type="text" class="form-control" name="men"id="exampleInputEmail1" placeholder="Enter man's category name">
    <small class="form-text text-muted"></small>
  </div>      
    
   
   <div class="modal-footer">
  <button type="submit" name="catsubmit" class="btn btn-danger">Save</button>
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
                                                <th>CATEGORY_ID</th>
                                                <th>MEN</th>
                                               
                                              
                                                <th>EDIT</th>
                                                <th>DELETE</th>
                                               </tr>
                                        </thead>
                                        <tbody>
<!-------------------------------------------------------fetchcodeobject------------------------------------->                                         
                                          <?php
                                     $fetchdata=new DB_con();
                                   $sqlcat=$fetchdata->fetchcategory();
                                   while($rowcat=mysqli_fetch_array($sqlcat))
                                                {
                                                           ?>
                                            <tr class="tr-shadow">
                                                <td><?php echo ($rowcat['cate_id']);?></td>
                                                <td><?php echo ($rowcat['men']);?></td>
                                              
                                                
                                                <td><button class="item" data-toggle="tooltip" data-placement="top" title="Edit"><a style="color:black" href="editcategory.php?catid=<?php echo $rowcat ['cate_id'];?>"><i class="zmdi zmdi-edit"></i></a></button></td>
                                                <td><button class="item" data-toggle="tooltip" data-placement="top" title="Delete"><a style="color:black;" href="deletecategory.php?delcat=<?php echo ($rowcat ['cate_id']);?>"><i class="zmdi zmdi-delete"></i></a></button> 
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

