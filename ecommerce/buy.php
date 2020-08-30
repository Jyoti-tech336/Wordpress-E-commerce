<?php 
include'includes/header.php';

include'includes/navbar2.php';
?>
<br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
    @import url('https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700');

body{
 background: rgb(241,242,233);
background: linear-gradient(90deg, rgba(241,242,233,0) 0%, rgba(217,238,242,0.5830707282913166) 47%, rgba(233,221,223,0.7903536414565826) 100%);
  font-family: 'Roboto Condensed', sans-serif;
  color: #262626;
 
}
.container{
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}
@media (min-width: 1200px)
{
  .container{
    max-width: 1140px;
  }
}
.d-flex{
  display: flex;
  flex-direction: row;
  background: #f6f6f6;
  border-radius: 0 0 5px 5px;
  padding: 25px;
}
form{
  flex: 4;
}
.Yorder{
  flex: 2;
}
.title{
  background: -webkit-gradient(linear, left top, right bottom, color-stop(0,#db0429), color-stop(100,#2b0209));
  background: -moz-linear-gradient(top left, #db0429 0%, #2b0209 100%);
  background: -ms-linear-gradient(top left, #db0429 0%, #2b0209 100%);
  background: -o-linear-gradient(top left, #db0429 0%, #2b0209 100%);
  background: linear-gradient(to bottom right, #db0429 0%, #2b0209 100%);
  border-radius:5px 5px 0 0 ;
  padding: 20px;
  color: #f6f6f6;
}
h2{
  margin: 0;
  padding-left: 15px; 
}
.required{
  color: red;
}
label, table{
  display: block;
  margin: 15px;
}
label>span{
  
  width: 25%;
  margin-top: 12px;
  padding-right: 10px;
}
input[type="text"], input[type="tel"], input[type="email"], select
{
  width: 70%;
  height: 30px;
  padding: 5px 10px;
  margin-bottom: 10px;
  border: 1px solid #dadada;
  color: #888;
}
select{
  width: 72%;
  height: 45px;
  padding: 5px 10px;
  margin-bottom: 10px;
}
.Yorder{
  margin-top: 15px;
  height: 600px;
  padding: 20px;
  border: 1px solid #dadada;
}
table{
  margin: 0;
  padding: 0;
}
th{
  border-bottom: 1px solid #dadada;
  padding: 10px 0;
}
tr>td:nth-child(1){
  text-align: left;
  color: #2d2d2a;
}
tr>td:nth-child(2){
  text-align: right;
  color: #52ad9c;
}
td{
  border-bottom: 1px solid #dadada;
  padding: 25px 25px 25px 0;
}

p{
  display: block;
  color: #888;
  margin: 0;
  padding-left: 25px;
}
.Yorder>div{
  padding: 15px 0; 
}

button{
  width: 100%;
  margin-top: 10px;
  padding: 10px;
  border: none;
  border-radius: 30px;
  background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(237,20,57,1) 47%, rgba(255,0,82,1) 100%); color: white;;
  color: #fff;
  font-size: 15px;
  font-weight: bold;
}
button:hover{
  cursor: pointer;
  background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(237,20,57,1) 47%, rgba(255,0,82,1) 100%); color: white;;
}
        .row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
    </style>
</head>
<body>
    

<div class="container">
  <div class="title">
      <h2 style="color:white">Product Order Form</h2>
  </div>
<div class="d-flex">
  <form action="" method="">
    <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="John M. Doe" class="form-control">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com" class="form-control">
            <label for="adr"><i class="fa fa-address-card-o"></i>Street Address</label>
              <textarea type="text" id="adr" name="address" placeholder="House number and street name" class="form-control"></textarea>
            <label></label>
   &nbsp;&nbsp;
      <input type="text" name="apartment" placeholder="Apartment, suite, unit etc. (optional)" class="form-control">
    
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="New York" class="form-control">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="NY" class="form-control" >
              </div>
              <div class="col-50">
                <label for="zip">Postcode / ZIP </label>
                <input type="text" id="zip" name="zip" placeholder="10001" class="form-control">
              </div>
              <div class="col-50">
                <label for="phone">Phone  </label>
                <input type="text" id="phone" name="phone" placeholder="+91" class="form-control">
              </div>
            </div>
          </div>
      </div>
  </form>
  &nbsp; &nbsp; &nbsp; &nbsp;
  <div class="Yorder">
    <table>
      <tr>
        <th colspan="2">Your order</th>
      </tr>
      <tr>
        <td>Product Name x 2(Qty)</td>
        <td>$88.00</td>
      </tr>
      <tr>
        <td>Subtotal</td>
        <td>$88.00</td>
      </tr>
      <tr>
        <td>Shipping</td>
        <td>Free shipping</td>
      </tr>
    </table><br>
    <div>
      <input type="radio" name="dbt" value="dbt" checked> Direct Bank Transfer
    </div>
    <p>
        Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.
    </p>
    <div>
      <input type="radio" name="dbt" value="cd"> Cash on Delivery
    </div>
    <div>
      <input type="radio" name="dbt" value="cd"> Paypal <span>
      <img src="https://www.logolynx.com/images/logolynx/c3/c36093ca9fb6c250f74d319550acac4d.jpeg" alt="" width="50">
      </span>
    </div>
    <button type="button">Place Order</button>
  </div><!-- Yorder -->
 </div>
</div>
</body>
</html>
