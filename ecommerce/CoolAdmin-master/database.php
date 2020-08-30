<?php

//session_start();
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'ecommerce');
class DB_con
{
function __construct()
{
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
$this->dbh=$con;
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
}
/////////////////////////////////////////insert////////////////////////////////////////////////////////////////////////////////////////////////
    //Data Insertion Function
	public function insert($name,$location,$location2)
	{
	$ret=mysqli_query($this->dbh,"insert into brands(brand_name,image,cloth_image) values('$name','$location','$location2')");
       
	return $ret;
	}
   
    //data category insert code
    public function insertcategory($men)
    {
        $ret1=mysqli_query($this->dbh,"insert into category(men) values('$men')");
        return $ret1;
    }
    
    public function insertproduct($cat1,$cat2,$brand,$name, $smaldec,$description,$feature,$material,$price,$location1,$location2,$location3)
    {
        $ret2=mysqli_query($this->dbh,"insert into product (`prd_cat_id`,`cloth_idd`,`prd_brand_id`, `prd_name`,`small_des`, `prd_description`, `features`, `material_care`,`prd_price`, `image1`, `image2`, `image3`,`created`)values('$cat1','$cat2','$brand','$name','$smaldec','$description','$feature','$material','$price','$location1','$location2','$location3',NOW())");
        return $ret2;
    }
    
    public function insertslider($slidername, $location8)
    {
        $ret3=mysqli_query($this->dbh,"insert into slider(slider_name,slider_image)values('$slidername',' $location8')");
        return $ret3;
    }
    /////////////////////////////////////////fetch////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Data read Function
public function fetchdata()
	{
	$result=mysqli_query($this->dbh,"select * from brands");
	return $result;
	}
   
    //DATA CATEGORY READ FUNCTION
    public function fetchcategory()
    {
        $result1=mysqli_query($this->dbh,"select * from category");
            return $result1;
    }
    
    
    public function fecthproduct()
    {
        $result2=mysqli_query($this->dbh,"select * from product");
        return $result2;
    }
    
     public function clothtype()
    {
        $result3=mysqli_query($this->dbh,"select * from cloth_type");
            return $result3;
    }
    
    public function slider()
    {
        $result4=mysqli_query($this->dbh,"select * from slider");
        return $result4;
    }
    
    /////////////////////////////////////////////////read record////////////////////////////////////////////////////////////////////////////////
    
    //Data one record read Function
public function fetchonerecord($upid)
	{
	$oneresult=mysqli_query($this->dbh,"select * from brands where brand_id=$upid");
	return $oneresult;
	}
  
    public function fecthcate($catid)
    {
        $catresult=mysqli_query($this->dbh,"select * from category where cate_id='$catid'");
        return $catresult;
    }
    
    public function fecthpro($uproid)
    {
        $oneresult1=mysqli_query($this->dbh,"select * from product where prd_id='$uproid'");
        return $oneresult1;
    }
    
    public function sliderfecth($sid)
    {
        $sresult=mysqli_query($this->dbh,"select * from slider where slider_id='$sid'");
        return $sresult;
    }
    
    
    
    /////////////////////////////////////////update////////////////////////////////////////////////////////////////////////////////////////////////
    
    
    //Data updation Function
public function update($bname,$location,$location2,$id)
	{
	$updaterecord=mysqli_query($this->dbh,"update  brands set brand_name='$bname',image='$location',cloth_image='$location2' where brand_id='$id' ");
	return $updaterecord;
	}
  
    public function categoryupdate($men,$catid)
    {
        $catupdate=mysqli_query($this->dbh,"update category set men='$men' where cate_id='$catid'");
        return $catupdate;
    }
    
    
    /////////////////////////////////////////delete////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Data Deletion function Function
public function deletebrand($bid)
	{
	$deleterecord=mysqli_query($this->dbh,"delete from brands where brand_id=$bid");
	return $deleterecord;
	}
   
    //data category delete function
    public function deletecate($cid)
    {
        $deleterecord1=mysqli_query($this->dbh,"delete from category where cate_id='$cid'");
        return $deleterecord1;
    }
    public function deletepro($pid)
    {
        $deleterecord2=mysqli_query($this->dbh,"delete from product where prd_id='$pid'");
        return $deleterecord2;
    }
    
    
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 
}



?>