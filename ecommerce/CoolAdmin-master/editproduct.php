<?php
include'include/header.php';
include'include/navbar.php';
include'database.php';

//Object
$updatedata=new DB_con();


?>
<?php
// Get the userid
$uproid=intval($_GET['uproid']);
$onerecord1=new DB_con();
$sql=$onerecord1->fecthpro($uproid);

while($rowpro=mysqli_fetch_array($sql))
  {
?>
<br>
<br>

<div class="container py-5">
<div class="card">
<div class="card-header">
 PRODUCT<strong>UPDATE</strong>
      </div>
  <div class="card-body card-block">
<form action="#" method="post" enctype="multipart/form-data" >
  <div class="form-group">
    <label >CATEGORY_MEN</label>
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
    <input type="text" class="form-control" value="<?php echo ($rowpro['prd_name']);?>" name="proname"id="exampleInputEmail1" placeholder="Enter product name" >
    <small class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">DESCRIPTION</label>
 <textarea type="text" class="form-control"  name="description"id="exampleInputEmail1" rows="4" cols="50" placeholder="Enter product description" >
   <?php echo ($rowpro['prd_description']);?></textarea>
    <small class="form-text text-muted"></small>
  </div> 
  <div class="form-group">
    <label for="exampleInputEmail1">PRICE</label>
    <input type="text" class="form-control" value="<?php echo($rowpro['prd_price']);?>" name="price"id="exampleInputEmail1" placeholder="Enter product price" >
    <small class="form-text text-muted"></small>
  </div> 
     
  <div class="form-group">
    <label for="exampleFormControlFile1">IMAGE-1</label>
    <input type="file" class="form-control-file"  name="image1" id="exampleFormControlFile1" >
      <span id="imageid" class="text-warning font-weight-bolder"></span><br>
                                                         <img src="../imageupload/<?php echo($rowpro['image1']);?>" width="200px">
  </div>
   <div class="form-group">
    <label for="exampleFormControlFile1">IMAGE-2</label>
    <input type="file" class="form-control-file" name="image2" id="exampleFormControlFile1" >
      <span id="imageid" class="text-warning font-weight-bolder"></span><br>
                                                         <img src="../imageupload/<?php echo($rowpro['image2']);?>" width="200px">
  </div>
     <div class="form-group">
    <label for="exampleFormControlFile1">IMAGE-3</label>
    <input type="file" class="form-control-file" name="image3" id="exampleFormControlFile1" >
      <span id="imageid" class="text-warning font-weight-bolder"></span><br>
                                                         <img src="../imageupload/<?php echo($rowpro['image3']);?>" width="200px">
  </div>
   

   <div class="modal-footer">
  <button type="submit" name="productsubmit" class="btn btn-danger">Update</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
           </div>
          </form>
                                    </div>
                                      
                                    <?php } ?>
                                    
                                </div>
                                </div>
                                
<?php include'include/footer.php';?>