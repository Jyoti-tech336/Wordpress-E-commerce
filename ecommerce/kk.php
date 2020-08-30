<?php
include'includes/header.php';
include'includes/navbar1.php';
include'includes/navbar2.php';
include'connection.php';

?>

<div class="container-fluid mb-3">
	<div class="row">
		<div class="col-md-12 bg-light border-bottom pt-2 pb-2">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>Dresses For Women & Girls</h2>
						<ol class="breadcrumb p-0 m-0 bg-transparent">
							<li class="breadcrumb-item"><a href="index.php">Home</a></li>
							<li class="breadcrumb-item">Clothing</li>
							<li class="breadcrumb-item active">Dresses For Women & Girls</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row mb-5">
		<div class="col-md-3">
			<div class="card mb-4">
				<div class="card-header">Categories</div>
				<div class="list-group list-group-flush catlist">

                   <a href="#" class="list-group-item list-group-item-action ">Kurtas & Suits</a>
					<a href="#" class="list-group-item list-group-item-action ">Kurtis, Tunics & Tops</a>
					<a href="#" class="list-group-item list-group-item-action">Ethnic Dresses</a>
					<a href="#" class="list-group-item list-group-item-action">Leggings, Salwars & Churidars</a>
					<a href="#" class="list-group-item list-group-item-action">Skirts & Palazzos</a>
					<a href="#" class="list-group-item list-group-item-action">Sarees & Blouses</a>
					<a href="#" class="list-group-item list-group-item-action">Dress Materials</a>
					<a href="#" class="list-group-item list-group-item-action">Lehenga Cholis</a>
					<a href="#" class="list-group-item list-group-item-action">Dupattas & Shawls</a>
					<a href="#" class="list-group-item list-group-item-action">Jackets & Waistcoats</a>
				</div>
			</div>
			<div class="card">
				<div class="card-header">Filter</div>
				<div class="card-body p-1">
					<div class="card border-0 b-3">
					
						<div class="card-header p-2 bg-white" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false">
							<p class="m-0 h6">Brand</p>
						</div>
						<div class="card-body p-0 collapse show" id="collapseExample1">
						 
							<ul class="list-group list-group-flush" style="height:200px;overflow:auto;">
							<?php
                         $q2="SELECT * FROM brands ";
                                
           $exe2= mysqli_query($connection,$q2);
            while($fetch2= mysqli_fetch_array($exe2)){ ?>
								<li class="list-group-item p-2 d-flex justify-content-between align-items-center">
									<div class="custom-control custom-checkbox">
									
									
										<input type="checkbox" class="custom-control-input"  name="ids[]" value="<?php echo$fetch2['brand_name'];?>" id="<?php echo $fetch2['brand_id'];?>">
										<label class="custom-control-label" for="<?php echo $fetch2['brand_id'];?>"><?php echo $fetch2['brand_name']; ?></label>
									</div>
								
								</li><?php } ?>
								<!--<li class="list-group-item p-2 d-flex justify-content-between align-items-center">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck2">
										<label class="custom-control-label" for="customCheck1">Microsoft</label>
									</div>
									
								</li>
								<li class="list-group-item p-2 d-flex justify-content-between align-items-center">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck1">
										<label class="custom-control-label" for="customCheck1">Apple</label>
									</div>
									
								</li>
								<li class="list-group-item p-2 d-flex justify-content-between align-items-center">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck1">
										<label class="custom-control-label" for="customCheck1">Samsung</label>
									</div>
									
								</li>-->

								

							</ul>
							
						</div>
					</div>
					<script>
                    
                    
                    
                    </script>
					<div class="card border-0 b-3">
						<div class="card-header p-2 bg-white" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false">
							<p class="m-0 h6">Size</p>
						</div>
						<div class="card-body p-0 collapse show" id="collapseExample2">
							<ul class="list-group list-group-flush" style="height:200px;overflow:auto;">
								<li class="list-group-item p-2 d-flex justify-content-between align-items-center">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck">
										<label class="custom-control-label" for="customCheck">XXS</label>
									</div>
								</li>
								<li class="list-group-item p-2 d-flex justify-content-between align-items-center">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck">
										<label class="custom-control-label" for="customCheck1">XS</label>
									</div>
								</li>
								<li class="list-group-item p-2 d-flex justify-content-between align-items-center">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck">
										<label class="custom-control-label" for="customCheck1">S</label>
									</div>
								</li>
								<li class="list-group-item p-2 d-flex justify-content-between align-items-center">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck">
										<label class="custom-control-label" for="customCheck1">M</label>
									</div>
								</li>
								<li class="list-group-item p-2 d-flex justify-content-between align-items-center">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck1">
										<label class="custom-control-label" for="customCheck1">L</label>
									</div>
								</li>
								<li class="list-group-item p-2 d-flex justify-content-between align-items-center">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck1">
										<label class="custom-control-label" for="customCheck1">XL</label>
									</div>
								</li>
								<li class="list-group-item p-2 d-flex justify-content-between align-items-center">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck1">
										<label class="custom-control-label" for="customCheck1">XXL</label>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="card border-0 b-3">
						<div class="card-header p-2 bg-white" data-toggle="collapse" data-target="#collapseExample3" aria-expanded="false">
							<p class="m-0 h6">Color</p>
						</div>
						<div class="card-body p-0 collapse show" id="collapseExample3">
							<ul class="list-group list-group-flush" style="height:200px;overflow:auto;">
								<li class="list-group-item p-2 d-flex justify-content-between align-items-center">
									<div class="custom-control custom-checkbox w-100">
										<input type="checkbox" class="custom-control-input" id="customCheck1">
										<label class="custom-control-label" for="customCheck1">
											<div class="float-left p-2 mt-1 mr-1" style="background-color:#E52B50"></div>
											<span>Amaranth</span>
										</label>
									</div>
								</li>
								<li class="list-group-item p-2 d-flex justify-content-between align-items-center">
									<div class="custom-control custom-checkbox w-100">
										<input type="checkbox" class="custom-control-input" id="customCheck1">
										<label class="custom-control-label" for="customCheck1">
											<div class="float-left p-2 mt-1 mr-1" style="background-color:#FFBF00"></div>
											<span>Amber</span>
										</label>
									</div>
								</li>
								<li class="list-group-item p-2 d-flex justify-content-between align-items-center">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck1">
										<label class="custom-control-label" for="customCheck1">
											<div class="float-left p-2 mt-1 mr-1" style="background-color:#007FFF"></div>
											<span>Azure</span>
										</label>
									</div>
								</li>
								<li class="list-group-item p-2 d-flex justify-content-between align-items-center">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck1">
										<label class="custom-control-label" for="customCheck1">
											<div class="float-left p-2 mt-1 mr-1" style="background-color:#007BA7"></div>
											<span>Cerulean</span>
										</label>
									</div>
								</li>
								<li class="list-group-item p-2 d-flex justify-content-between align-items-center">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck1">
										<label class="custom-control-label" for="customCheck1">
											<div class="float-left p-2 mt-1 mr-1" style="background-color:#B87333"></div>
											<span>Copper</span>
										</label>
									</div>
								</li>
								<li class="list-group-item p-2 d-flex justify-content-between align-items-center">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck1">
										<label class="custom-control-label" for="customCheck1">
											<div class="float-left p-2 mt-1 mr-1" style="background-color:#DC143C"></div>
											<span>Crimson</span>
										</label>
									</div>
								</li>
								<li class="list-group-item p-2 d-flex justify-content-between align-items-center">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck1">
										<label class="custom-control-label" for="customCheck1">
											<div class="float-left p-2 mt-1 mr-1" style="background-color:#008000"></div>
											<span>Green</span>
										</label>
									</div>
								</li>
								<li class="list-group-item p-2 d-flex justify-content-between align-items-center">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck1">
										<label class="custom-control-label" for="customCheck1">
											<div class="float-left p-2 mt-1 mr-1" style="background-color:#808080"></div>
											<span>Gray</span>
										</label>
									</div>
								</li>
								<li class="list-group-item p-2 d-flex justify-content-between align-items-center">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck1">
										<label class="custom-control-label" for="customCheck1">
											<div class="float-left p-2 mt-1 mr-1" style="background-color:#FFD700"></div>
											<span>Gold</span>
										</label>
									</div>
								</li>
								<li class="list-group-item p-2 d-flex justify-content-between align-items-center">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck1">
										<label class="custom-control-label" for="customCheck1">
											<div class="float-left p-2 mt-1 mr-1" style="background-color:#D1E231"></div>
											<span>Pear</span>
										</label>
									</div>
								</li>
								<li class="list-group-item p-2 d-flex justify-content-between align-items-center">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck1">
										<label class="custom-control-label" for="customCheck1">
											<div class="float-left p-2 mt-1 mr-1" style="background-color:#800080"></div>
											<span>Purple</span>
										</label>
									</div>
								</li>
								<li class="list-group-item p-2 d-flex justify-content-between align-items-center">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck1">
										<label class="custom-control-label" for="customCheck1">
											<div class="float-left p-2 mt-1 mr-1" style="background-color:#C0C0C0"></div>
											<span>Silver</span>
										</label>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="card border-0 b-3">
						<div class="card-header p-2 bg-white" data-toggle="collapse" data-target="#collapseExample4" aria-expanded="false">
							<p class="m-0 h6">Price</p>
						</div>
						<div class="card-body p collapse show" id="collapseExample4">
							<div class="form-row">
								<div class="form-group col-md-6">
									<label>Min</label>
									<input class="form-control" placeholder="$0" type="number">
								</div>
								<div class="form-group text-right col-md-6">
									<label>Max</label>
									<input class="form-control" placeholder="$1,0000" type="number">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="card-footer">
					<button type="button" class="btn btn-block filter">Filter</button>
				</div>
			</div>
		</div>
		<div class="col-md-9">
			<div class="card">
				<div class="card-header">
					<div class="row">
						<div class="col-md-5">
							<div class="btn-group" role="group">
								
									
								
							</div>
						</div>
						<div class="col-md-6">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">Sort By:</span>
								</div>
								<select  name="pricerange" class="form-control" id="pricerange">
    <option value="">Price Range&nbsp;</option>
    <option value="1">Rs&nbsp;300 - 400</option>
    <option value="2">Rs&nbsp;400 - 500</option>
    <option value="3">Rs&nbsp;500- 700</option>
    <option value="4">Rs&nbsp;700 - 900</option>
    <option value="5">Rs&nbsp;900 - 1000</option>
    <option value="6">Rs&nbsp;1000 - 1500</option>
    <option value="7">Rs&nbsp;1500 - above</option>
                            </select>
                            
							</div>
						</div>
						
					</div>
				</div>
				<script>
                function myFunction() {
  location.replace("product.php")
}
                </script>
				<div class="card-body">
	<div class="row">
	
          <?php
           
          
             // include'connection.php';
       if($_POST['brandss']){

//unserialize to jquery serialize variable value
$brandis=array();

parse_str($_POST['brandss'],$brandis); //changing string into array 

//split 1st array elements
foreach($brandis as $ids)
{
$ids;
}
$brandii=implode("','",$ids); //change into comma separated value to sub array
echo "<br>";
$sql = mysql_query("SELECT * FROM product WHERE prd_brand_id IN ('$brandii')");
while($rows=mysql_fetch_array($sql)){
?>
 

 

  

		<div class="col-md-4 mb-4">
			<div class="card">
				<img class="card-img-top img-hover-zoom " onclick="myFunction()" src="image/<?php echo$rows['image1'];?>" alt="" />
				<div class="card-body">
                    <p class="h6"><?php echo $fetch['prd_name'];?><small class="text-muted"><br><?php echo $rows['small_des'];?></small></p>
                    <p class="h5 m-0"><i class="fa fa-inr fa-sm" aria-hidden="true"></i> <?php echo $rows['prd_price'];?> </p>
                  <p class="card-text"></p>
                  <a class="btn btn-outline-danger btn-sm float-left" style=" font-family: 'Roboto', sans-serif"  href="" >Add to cart</a>
                 
                   <a class="btn btn-outline-danger btn-sm float-right" style=" font-family: 'Roboto', sans-serif"  href="product.php?bid=<?php echo $fetch["prd_id"];?>" >Buy Now</a>
                </div>
			</div>
		</div> <?php }}?>
      
		<!--<div class="col-md-4 mb-4">
			<div class="card">
				<img class="card-img-top img-hover-zoom"  onclick="myFunction()" src="image/12.jpg" alt="" />
				<div class="card-body">
                  <p class="h6"><small class="text-muted">Apple</small><br>Butterflies Hand composite</p>
                    <p class="h5 m-0">$782.00 <s class="lead text-muted">$943.00</s></p>
                  <p class="card-text"></p>
                  <a   href="#"  class="btn btn-outline-danger btn-sm float-left" style=" font-family: 'Roboto', sans-serif" >Add to cart</a>
                   <a   href="#"  class="btn btn-outline-danger btn-sm float-right" style=" font-family: 'Roboto', sans-serif">Buy Now</a>
                </div>
                 
			</div>
		</div>
		<div class="col-md-4 mb-4">
			<div class="card">
				<img class="card-img-top img-hover-zoom"  onclick="myFunction()" src="image/9.jpg" alt="" />
				<div class="card-body">
                  <p class="h6"><small class="text-muted">Apple</small><br>Butterflies Hand composite</p>
                    <p class="h5 m-0">$782.00</p>
                  <p class="card-text"></p>
                  <a   href="#"  class="btn btn-outline-danger btn-sm float-left" style=" font-family: 'Roboto', sans-serif">Add to cart</a>
                   <a   href="#"  class="btn btn-outline-danger btn-sm float-right" style=" font-family: 'Roboto', sans-serif">Buy Now</a>
                </div>
                 
				
			</div>
		</div>
		<div class="col-md-4 mb-4">
			<div class="card">
				<img class="card-img-top img-hover-zoom"  onclick="myFunction()" src="image/9.jpg" alt="" />
				<div class="card-body"> 
                  <p class="h6"><small class="text-muted">Apple</small><br>Butterflies Hand composite</p>
                    <p class="h5 m-0">$782.00</p>
                  <p class="card-text"></p>
                  <a   href="#"  class="btn btn-outline-danger btn-sm float-left" style=" font-family: 'Roboto', sans-serif">Add to cart</a>
                   <a   href="#"  class="btn btn-outline-danger btn-sm float-right" style=" font-family: 'Roboto', sans-serif">Buy Now</a>
                </div>
                 
			</div>
		</div>
		<div class="col-md-4 mb-4">
			<div class="card">
				<img class="card-img-top img-hover-zoom"  onclick="myFunction()" src="image/10.jpg" alt="" />
				<div class="card-body">
                  <p class="h6"><small class="text-muted">Apple</small><br>Butterflies Hand composite</p>
                    <p class="h5 m-0">$782.00 <s class="lead text-muted">$943.00</s></p>
                  <p class="card-text"></p>
                  <a   href="#"  class="btn btn-outline-danger btn-sm float-left" style=" font-family: 'Roboto', sans-serif">Add to cart</a>
                   <a   href="#"  class="btn btn-outline-danger btn-sm float-right" style=" font-family: 'Roboto', sans-serif">Buy Now</a>
                </div>
			</div>
		</div>
		<div class="col-md-4 mb-4">
			<div class="card">
				<img class="card-img-top img-hover-zoom"  onclick="myFunction()" src="image/12.jpg" alt="" />
				<div class="card-body">
                  <p class="h6"><small class="text-muted">Apple</small><br>Butterflies Hand composite</p>
                    <p class="h5 m-0">$782.00 <s class="lead text-muted">$943.00</s></p>
                  <p class="card-text"></p>
                  <a   href="#"  class="btn btn-outline-danger btn-sm float-left" style=" font-family: 'Roboto', sans-serif">Add to cart</a>
                   <a   href="#"  class="btn btn-outline-danger btn-sm float-right" style=" font-family: 'Roboto', sans-serif">Buy Now</a>
                </div>
			</div>
		</div>
		<div class="col-md-4 mb-4">
			<div class="card">
				<img class="card-img-top img-hover-zoom"  onclick="myFunction()" src="image/12.jpg" alt="" />
				<div class="card-body">
                  <p class="h6"><small class="text-muted">Apple</small><br>Butterflies Hand composite</p>
                    <p class="h5 m-0">$782.00 <s class="lead text-muted">$943.00</s></p>
                  <p class="card-text"></p>
                  <a   href="#"  class="btn btn-outline-danger btn-sm float-left" style=" font-family: 'Roboto', sans-serif">Add to cart</a>
                   <a   href="#"  class="btn btn-outline-danger btn-sm float-right" style=" font-family: 'Roboto', sans-serif">Buy Now</a>
                </div>
			</div>
		</div>
		<div class="col-md-4 mb-4">
			<div class="card">
				<img class="card-img-top img-hover-zoom"  onclick="myFunction()" src="image/12.jpg" alt="" />
				<div class="card-body">
                  <p class="h6"><small class="text-muted">Apple</small><br>Butterflies Hand composite</p>
                    <p class="h5 m-0">$782.00 <s class="lead text-muted">$943.00</s></p>
                  <p class="card-text"></p>
                  <a   href="#"  class="btn btn-outline-danger btn-sm float-left" style=" font-family: 'Roboto', sans-serif">Add to cart</a>
                   <a   href="#"  class="btn btn-outline-danger btn-sm float-right" style=" font-family: 'Roboto', sans-serif">Buy Now</a>
                </div>
			</div>
		</div>
		<div class="col-md-4 mb-4">
			<div class="card">
				<img class="card-img-top img-hover-zoom"  onclick="myFunction()" src="image/12.jpg" alt="" />
				<div class="card-body">
                  <p class="h6"><small class="text-muted">Apple</small><br>Butterflies Hand composite</p>
                    <p class="h5 m-0">$782.00 <s class="lead text-muted">$943.00</s></p>
                  <p class="card-text"></p>
                  <a   href="#"  class="btn btn-outline-danger btn-sm float-left" style=" font-family: 'Roboto', sans-serif">Add to cart</a>
                   <a   href="#"  class="btn btn-outline-danger btn-sm float-right" style=" font-family: 'Roboto', sans-serif">Buy Now</a>
                </div>
			</div>
		</div>-->
		
		
	</div>
</div>
				<div class="card-footer p-3">
					<div class="row">
						<div class="col-md-6">
							<ul class="pagination m-0">
								<li class="page-item disabled">
									<a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
								</li>
								<li class="page-item"><a class="page-link" href="#">1</a></li>
								<li class="page-item"><a class="page-link" href="#">2</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item">
									<a class="page-link" href="#">Next</a>
								</li>
							</ul>
						</div>
						<div class="col-md-6">
							<p class="text-right mb-0 mt-1">Showing 1 to 12 of 12 (1 Pages)</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row"></div>
	<div class="row"></div>
	<div class="row"></div>
	<div class="row"></div>
	<div class="row"></div>
	<div class="row"></div>
	<div class="row"></div>
	<div class="row"></div>
	<div class="row mb-5">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-md-3">
							<i class="float-left mr-3 fa-3x fas fa-shipping-fast"></i>
							<p class="h6">Free shipping & Return <br/><small class="text-muted">For all orders over $500</small></p>
						</div>
						<div class="col-md-3">
							<i class="float-left mr-3 fa-3x fas fa-thumbs-up"></i>
							<p class="h6">Customer Protection <br/><small class="text-muted">From click to delivery.</small></p>
						</div>
						<div class="col-md-3">
							<i class="float-left mr-3 fa-3x fas fa-umbrella"></i>
							<p class="h6">Safe Payment <br/><small class="text-muted">Use world’s most secure payment methods.</small></p>
						</div>
						<div class="col-md-3">
							<i class="float-left mr-3 fa-3x fas fa-life-ring"></i>
							<p class="h6">Support 24/7 <br/><small class="text-muted">We answer for question all time</small></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</div>
<?php include'includes/footer.php';?>