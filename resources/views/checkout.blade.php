<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
<link rel="stylesheet" href="public/fontend_lib/fontawesome/css/all.min.css" />
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
  
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
<body style="width: 80%; margin:auto">

<h2>Thanh Toán</h2>
<p>Vui lòng điền thông tin phía dưới và xác nhận đặt hàng</p>
<div class="row">
  <div class="col-50">
    <div class="container">
      <form class="form-row " method="POST" action="checkout" enctype="multipart/form-data">
   <input type="hidden" name="_token" value="{{csrf_token()}}">
     
      
        <div class="row">
          <div class="col-50">
            <h3>Thông tin người nhận</h3>
            <label for="fname"><i class="fa fa-user"></i> Họ và tên</label>
            <input value="{{$tenkh}}" type="text" id="fname" name="firstname" required placeholder="Nguyễn Văn A">
            <input type="hidden" value="{{$makh}}" name="makh">
            <label for="phone"><i class="fa fa-envelope"></i> Số điện thoại</label>
            <input type="text" id="phone" name="phone" required placeholder="0987654321">
            <!-- <label for="adr"><i class="fab fa-usps"></i>Quận/Huyện</label>
            <input type="text" id="adr" name="address" placeholder="ML">
            <label for="city"><i class="fas fa-university"></i> Tỉnh/Thành Phố</label>
            <input type="text" id="city" name="city" placeholder="Hà Nội"> -->
            <label for="state"><i class="fas fa-address-card"></i> Địa Chỉ</label>
            <input type="text" id="state" name="state" required placeholder="Số 2 ngõ 18-Nguyễn Cơ Thạch-Nam Từ Liêm- HN">

            <div class="row">
              <div class="col-50">
                <!-- <label for="state"><i class="fab fa-usps"></i>Quận/Huyện</label>
                <input type="text" id="state" name="state" placeholder="NY"> -->
              </div>
             <!--  <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001">
              </div> -->
            </div>
          </div>

<!--           <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div> -->
          
        </div>
      <!--   <label>
          <input type="checkbox" checked="checked" name="sameadr"> Đặt hàng
        </label> -->
        <input type="submit" value="Đặt hàng" class="btn">
      </form>
    </div>
  </div>
  <div class="col-50">
    <div class="container">
     
       <h4>Giỏ hàng <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>
        @if(Session::has('Cart') != null)
        {{Session::get('Cart')->totalQuanty}}</b></span></h4>
          @foreach(Session::get('Cart')->products as $item)
     
      <p><a href="#"> {{$item['productInfo']->TenSP}}</a>  <span class="price">{{$item['productInfo']->Gia}} ({{$item['quanty']}} sp)</span></p>
      
      @endforeach
      <hr>
      <p>Tổng <span class="price" style="color:black"><b>{{Session::get('Cart')->totalPrice}}</b></span></p>
      
      
      @endif
    </div>
  </div>
</div>

</body>
</html>
