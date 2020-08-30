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
<button type="button" class="btn btn-danger" data-toggle="modal"  data-target=".bd-example-modal-lg">
  INSERT PRODUCT
</button>
<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" >
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
$insertproductt=new DB_con();
if(isset($_POST['productsubmit']))
{
    $cat1 = $_POST['cat_id1'];
   $cat2 =  $_POST['cat_id2'];
    $brand = $_POST['brand'];
    $name = $_POST['proname'];
    $smaldec = $_POST['smalldec'];
    $description = $_POST['description'];
    $feature = $_POST['feture'];
    $material = $_POST['material'];
    $price = $_POST['price'];
    $image1 = $_FILES['image1']['tmp_name'];
   $filename1 = rand(100,200)."_".$_FILES['image1']['name'];
    $location1 = "../imageupload/".$filename1;
    
     $image2 = $_FILES['image2']['tmp_name'];
   $filename2 = rand(100,200)."_".$_FILES['image2']['name'];
    $location2 = "../imageupload/".$filename2;
    
     $image3 = $_FILES['image3']['tmp_name'];
   $filename3 = rand(100,200)."_".$_FILES['image3']['name'];
    $location3 = "../imageupload/".$filename3;
    
    if(!move_uploaded_file( $image1,$location1)){
		$err[0]="Please upload image again";
	}
if(!move_uploaded_file($image2 ,$location2)){
		$err[0]="Please upload image again";
	}
    if(!move_uploaded_file($image3 ,$location3)){
		$err[0]="Please upload image again";
	}
    
    $sqlpro = $insertproductt->insertproduct($cat1,$cat2,$brand,$name,$smaldec,$description, $feature, $material,$price,$location1,$location2,$location3);
    if(sqlpro){
      echo "<script>alert('Record inserted successfully');</script>";
echo "<script>window.location.href='product.php'</script>";  
    }
    else
{
// Message for unsuccessfull insertion
echo "<script>alert('Something went wrong. Please try again');</script>";
echo "<script>window.location.href='product.php'</script>";
}
    
}
          
       
?>
<!------------------------------------------------------endofinsertcode-------------------------------------------------------->
<form action="#" method="post" enctype="multipart/form-data" >
  <div class="form-group">
    <label >CATEGORY_TYPE</label>
       <select class=" form-control" id="cat_id" name="cat_id1">
      <?php  $fetchcategory1=new DB_con();
       $sql1=$fetchcategory1-> fetchcategory();
       while($fetch1=mysqli_fetch_array($sql1))
          {
                  ?>
    <option value="<?php echo $fetch1['cate_id']; ?>"><?php echo $fetch1['type']; ?></option>
      
        <?php } ?>
        </select>
    </div>
    
    <div class="form-group">
    <label >COLTH_TYPE</label>
       <select class=" form-control" id="cat_id2" name="cat_id2">
      <?php  $fetchcategory2=new DB_con();
       $sql2=$fetchcategory2->clothtype();
       while($fetch2=mysqli_fetch_array($sql2))
          {
                  ?>
    <option value="<?php echo $fetch2['cloth_id ']; ?>"><?php echo $fetch2['cloth']; ?></option>
      
      
        <?php } ?>
        </select>
    </div>
    
    
                                      

  <div class="form-group">
    <label >BRAND</label>
   <select class=" form-control" name="brand">
     <?php  $fetchbrand=new DB_con();
    $sql3=$fetchbrand->fetchdata();
     while($fetch1=mysqli_fetch_array($sql3))
       {
   ?>
<option value="<?php echo $fetch1['brand_id']; ?>"><?php echo $fetch1['brand_name']; ?></option>
  <?php } ?>
 </select>
 </div>
  <div class="form-group">
    <label for="exampleInputEmail1">PRODUCT_NAME</label>
    <input type="text" class="form-control" name="proname"id="exampleInputEmail1" placeholder="Enter product name" required>
    <small class="form-text text-muted"></small>
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">SMALL_DESCRIPTION</label>
    <input type="text" class="form-control" name="smalldec"id="exampleInputEmail1" placeholder="Enter product name" required>
    <small class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">DESCRIPTION</label>
      <textarea type="text" class="form-control" name="description"id="exampleInputEmail1" rows="4" cols="50" placeholder="Enter product description" required></textarea>
    <small class="form-text text-muted"></small>
  </div> 
  <div class="form-group">
    <label for="exampleInputEmail1">FEATURES</label>
      <textarea type="text" class="form-control" name="feture"id="exampleInputEmail1" rows="4" cols="50" placeholder="Enter product description" required></textarea>
    <small class="form-text text-muted"></small>
  </div> 
  <div class="form-group">
    <label for="exampleInputEmail1">MATERIAL</label>
      <textarea type="text" class="form-control" name="material"id="exampleInputEmail1" rows="4" cols="50" placeholder="Enter product description" required></textarea>
    <small class="form-text text-muted"></small>
  </div> 
  <div class="form-group">
    <label for="exampleInputEmail1">PRICE</label>
    <input type="text" class="form-control" name="price"id="exampleInputEmail1" placeholder="Enter product price" required>
    <small class="form-text text-muted"></small>
  </div> 
     
  <div class="form-group">
    <label for="exampleFormControlFile1">IMAGE-1</label>
    <input type="file" class="form-control-file" name="image1" id="exampleFormControlFile1" required>
  </div>
   <div class="form-group">
    <label for="exampleFormControlFile1">IMAGE-2</label>
    <input type="file" class="form-control-file" name="image2" id="exampleFormControlFile1" required>
  </div>
     <div class="form-group">
    <label for="exampleFormControlFile1">IMAGE-3</label>
    <input type="file" class="form-control-file" name="image3" id="exampleFormControlFile1" required>
  </div>
   <div class="modal-footer">
  <button type="submit" name="productsubmit" class="btn btn-danger">Save</button>
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
<div class="table-responsive  " style="background-color:white;" >
                                   
                                    <table class="table table-bordered" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th >PRODUCT_ID</th>
                                                <th>CATEGORY_ID</th>
                                               <th>CLOTH_ID</th>
                                                <th>BRAND_ID</th>
                                              
                                                <th>PRODUCT_NAME</th>
                                                <th>SMALL_DESCRITION</th>
                                                <th class="p-5">DESCRIPTION</th>
                                                <th>FEATURES</th>
                                                
                                                <th class="p-5"> MATERIAL & CARE</th>
                                                
                                                <th>PRICE</th>
                                                <th>IMAGE-1</th>
                                                 <th>IMAGE-2</th>
                                                  <th>IMAGE-3</th>
                                                  <th>EDIT</th>
                                                  <th>DELETE</th>
                                               </tr>
                                        </thead>
                                        <tbody>
<!-------------------------------------------------------fetchcodeobject------------------------------------->      
                                                                            
                                          <?php
                                            
                                       $fetchproduct=new DB_con();
                                    $sql=$fetchproduct->fecthproduct();
                                    while($row=mysqli_fetch_array($sql))
                                                 {
                                                           ?>
                                            <tr class="tr-shadow">
                                                <td><?php echo ($row['prd_id']);?></td>
                                                <td><?php echo ($row['prd_cat_id']);?></td>
                                               <td><?php echo ($row['cloth_idd']);?></td>
                                                  <td><?php echo ($row['prd_brand_id']);?></td>
                                                
                                                   <td><?php echo ($row['prd_name']);?></td>
                                                    <td><?php echo ($row['small_des']);?></td>
                                                    <td ><?php echo ($row['prd_description']);?></td>
                                                      <td ><?php echo ($row['features']);?></td>
                                                        <td ><?php echo ($row['material_care']);?></td>
                                                     <td><?php echo ($row['prd_price']);?></td>
                                                <td><?php echo '<img src="../imageupload/'.$row['image1'].'"width="100px;" height="100px;" alt="image">'?></td>
                                                <td><?php echo '<img src="../imageupload/'.$row['image2'].'"width="100px;" height="100px;" alt="image">'?></td>
                                                <td><?php echo '<img src="../imageupload/'.$row['image3'].'"width="100px;" height="100px;" alt="image">'?></td>
                                                <td><button class="item" data-toggle="tooltip" data-placement="top" title="Edit"><a style="color:black" href="editproduct.php?uproid=<?php echo $row ['prd_id'];?>"><i class="zmdi zmdi-edit"></i></a></button></td>
                                                <td><button class="item" data-toggle="tooltip" data-placement="top" title="Delete"><a style="color:black;" href="deleteproduct.php?pid=<?php echo ($row ['prd_id']);?>"><i class="zmdi zmdi-delete"></i></a></button> 
                                                </td>
                                                
                                            </tr>
                                            <?php
                                                   } ?>
                                           </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            
                        
<?php include'include/footer.php'; ?>

