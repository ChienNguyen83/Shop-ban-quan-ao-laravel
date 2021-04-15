<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <base href="{{asset('')}}">
      <link rel="shortcut icon" href="images/favicon.png">
      <title>0che Shop</title>

      <link href="public/fontend_lib/css/bootstrap.css" rel="stylesheet">
      <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,500italic,100italic,100' rel='stylesheet' type='text/css'>
      <link href="public/fontend_lib/css/font-awesome.min.css" rel="stylesheet">
      <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen"/>
      <link href="public/fontend_lib/css/sequence-looptheme.css" rel="stylesheet" media="all"/>
     
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <link rel="stylesheet" href="public/fontend_lib/fontawesome/css/all.min.css" />
      <link href="public/fontend_lib/css/test.css" rel="stylesheet">

<!--      <style>
.shop-table table tr td.qua-col .pro-qty {
    width: 123px;
    height: 46px;
    border: 2px solid #ebebeb;
    padding: 0 15px;
    float: left;
}
.shop-table table tr td.qua-col .pro-qty .qtybtn {
    font-size: 24px;
    color: #b2b2b2;
    float: left;
    line-height: 38px;
    cursor: pointer;
    width: 18px;
}
.shop-table table tr td.qua-col .pro-qty input {
    text-align: center;
    width: 52px;
    font-size: 14px;
    font-weight: 700;
    border: none;
    color: #4c4c4c;
    line-height: 40px;
    float: left;
}
     </style> -->

     <style>
      .dec {
        float: left;
        line-height: 38px;
        width: 33%;
    font-size: 100%;
        color: #f7544a;
        cursor: pointer;

      }
      .inc {
        float: right;
        line-height: 38px;
        width: 33%;
        font-size: 100%;
        color: #f7544a;
        cursor: pointer;

      }
      .pro-qty input {
        width: 33%;
        border:none;
        text-align: center;

      }
      .pro-qty {
       border: 2px solid #ebebeb;
       width: 100%;
      }

       
     </style>

      <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script><![endif]-->
      }
   </head>
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js">
</script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js">
</script>
<![endif]-->
  </head>
  <body>
    <div class="wrapper">
      @include('layout.header')
      <div class="clearfix">
      </div>
      <div class="container_fullwidth">
        <div class="container shopping-cart">
          <div class="row">
            <div class="col-md-12" id="list-cart">
                 




              <h3 class="title">
                Giỏ Hàng
              </h3>
              <div class="clearfix">
              </div>
              <table class="shop-table">
                <thead>
                  <tr>
                    <th>
                      Hình ảnh
                    </th>
                    <th>
                      Chi tiết
                    </th>
                    <th>
                      Giá
                    </th>
                    <th>
                      Số lượng
                    </th>
                    <th>
                      Tổng Giá
                    </th>
                    <th>
                      Xóa
                    </th>
                  </tr>
                </thead>
                <tbody>
                   @if(Session::has('Cart') != null)
                   @foreach(Session::get('Cart')->products as $item)
                  <tr>
                    <td>
                      <img src="{{$item['productInfo']->AnhNen}}" alt="">
                    </td>
                    <td>
                      <div class="shop-details">
                        <div class="productname">
                          {{$item['productInfo']->TenSP}}
                        </div>
                        <p>
                          <img alt="" src="images/star.png">
                          <a class="review_num" href="#">
                            02 Review(s)
                          </a>
                        </p>
                        <!-- <div class="color-choser">
                          <span class="text">
                            Product Color : 
                          </span>
                          <ul>
                            <li>
                              <a class="black-bg " href="#">
                                black
                              </a>
                            </li>
                            <li>
                              <a class="red-bg" href="#">
                                light red
                              </a>
                            </li>
                          </ul>
                        </div> -->
                       <!--  <p>
                          Product Code : 
                          <strong class="pcode">
                            Dress 120
                          </strong>
                        </p> -->
                      </div>
                    </td>
                    <td>
                      <h5>
                        {{$item['productInfo']->Gia}}
                      </h5>
                    </td>
                    <td>
                      <!-- <select name="">
                        <option selected value="1">
                          1
                        </option>
                        <option value="1">
                          2
                        </option>
                        <option value="1">
                          3
                        </option>
                      </select> -->

                      <input type="number" style="width: 80%" data-id="{{$item['productInfo']->MaSP}}" data-gia ="{{$item['productInfo']->Gia}}" value="{{$item['quanty']}}" class="input-change">
                    </td>
                    <td>
                      <h5>
                        <strong class="red" id="tong{{$item['productInfo']->MaSP}}">
                          {{$item['price']}}
                        </strong>
                      </h5>
                    </td>
                    <td>
                      <a href="javascript:" class="xoacart" data-id = "{{$item['productInfo']->MaSP}}">
                        <img src="public/fontend_lib/images/remove.png" alt="">
                      </a>
                    </td>
                  </tr>
                  @endforeach
                  
                   @endif
                  
                </tbody>
                <tfoot>
                  <tr>
                    <td colspan="6">
                      <button class="pull-left">
                        Tiếp tục mua sắm
                      </button>
                      <button class="pull-right thanhtoan">
                        Cập nhật
                      </button>
                    </td>
                  </tr>
                </tfoot>
              </table>
              <div class="clearfix">
              </div>
              <div class="row">
                <div class="col-md-4 col-sm-6">
                  <!-- <div class="shippingbox">
                    <h5>
                      Estimate Shipping And Tax
                    </h5>
                    <form>
                      <label>
                        Select Country *
                      </label>
                      <select class="">
                        <option value="AL">
                          Alabama
                        </option>
                        <option value="AK">
                          Alaska
                        </option>
                        <option value="AZ">
                          Arizona
                        </option>
                        <option value="AR">
                          Arkansas
                        </option>
                        <option value="CA">
                          California
                        </option>
                        <option value="CO">
                          Colorado
                        </option>
                        <option value="CT">
                          Connecticut
                        </option>
                        <option value="DE">
                          Delaware
                        </option>
                        <option value="DC">
                          District Of Columbia
                        </option>
                        <option value="FL">
                          Florida
                        </option>
                        <option value="GA">
                          Georgia
                        </option>
                        <option value="HI">
                          Hawaii
                        </option>
                        <option value="ID">
                          Idaho
                        </option>
                        <option selected="" value="IL">
                          Illinois
                        </option>
                        <option value="IN">
                          Indiana
                        </option>
                        <option value="IA">
                          Iowa
                        </option>
                        <option value="KS">
                          Kansas
                        </option>
                        <option value="KY">
                          Kentucky
                        </option>
                        <option value="LA">
                          Louisiana
                        </option>
                        <option value="ME">
                          Maine
                        </option>
                        <option value="MD">
                          Maryland
                        </option>
                        <option value="MA">
                          Massachusetts
                        </option>
                        <option value="MI">
                          Michigan
                        </option>
                        <option value="MN">
                          Minnesota
                        </option>
                        <option value="MS">
                          Mississippi
                        </option>
                        <option value="MO">
                          Missouri
                        </option>
                        <option value="MT">
                          Montana
                        </option>
                        <option value="NE">
                          Nebraska
                        </option>
                        <option value="NV">
                          Nevada
                        </option>
                        <option value="NH">
                          New Hampshire
                        </option>
                        <option value="NJ">
                          New Jersey
                        </option>
                        <option value="NM">
                          New Mexico
                        </option>
                        <option value="NY">
                          New York
                        </option>
                        <option value="NC">
                          North Carolina
                        </option>
                        <option value="ND">
                          North Dakota
                        </option>
                        <option value="OH">
                          Ohio
                        </option>
                        <option value="OK">
                          Oklahoma
                        </option>
                        <option value="OR">
                          Oregon
                        </option>
                        <option value="PA">
                          Pennsylvania
                        </option>
                        <option value="RI">
                          Rhode Island
                        </option>
                        <option value="SC">
                          South Carolina
                        </option>
                        <option value="SD">
                          South Dakota
                        </option>
                        <option value="TN">
                          Tennessee
                        </option>
                        <option value="TX">
                          Texas
                        </option>
                        <option value="UT">
                          Utah
                        </option>
                        <option value="VT">
                          Vermont
                        </option>
                        <option value="VA">
                          Virginia
                        </option>
                        <option value="WA">
                          Washington
                        </option>
                        <option value="WV">
                          West Virginia
                        </option>
                        <option value="WI">
                          Wisconsin
                        </option>
                        <option value="WY">
                          Wyoming
                        </option>
                      </select>
                      <label>
                        State / Province *
                      </label>
                      <select class="">
                        <option value="AL">
                          Alabama
                        </option>
                        <option value="AK">
                          Alaska
                        </option>
                        <option value="AZ">
                          Arizona
                        </option>
                        <option value="AR">
                          Arkansas
                        </option>
                        <option value="CA">
                          California
                        </option>
                        <option value="CO">
                          Colorado
                        </option>
                        <option value="CT">
                          Connecticut
                        </option>
                        <option value="DE">
                          Delaware
                        </option>
                        <option value="DC">
                          District Of Columbia
                        </option>
                        <option value="FL">
                          Florida
                        </option>
                        <option value="GA">
                          Georgia
                        </option>
                        <option value="HI">
                          Hawaii
                        </option>
                        <option value="ID">
                          Idaho
                        </option>
                        <option selected="" value="IL">
                          Illinois
                        </option>
                        <option value="IN">
                          Indiana
                        </option>
                        <option value="IA">
                          Iowa
                        </option>
                        <option value="KS">
                          Kansas
                        </option>
                        <option value="KY">
                          Kentucky
                        </option>
                        <option value="LA">
                          Louisiana
                        </option>
                        <option value="ME">
                          Maine
                        </option>
                        <option value="MD">
                          Maryland
                        </option>
                        <option value="MA">
                          Massachusetts
                        </option>
                        <option value="MI">
                          Michigan
                        </option>
                        <option value="MN">
                          Minnesota
                        </option>
                        <option value="MS">
                          Mississippi
                        </option>
                        <option value="MO">
                          Missouri
                        </option>
                        <option value="MT">
                          Montana
                        </option>
                        <option value="NE">
                          Nebraska
                        </option>
                        <option value="NV">
                          Nevada
                        </option>
                        <option value="NH">
                          New Hampshire
                        </option>
                        <option value="NJ">
                          New Jersey
                        </option>
                        <option value="NM">
                          New Mexico
                        </option>
                        <option value="NY">
                          New York
                        </option>
                        <option value="NC">
                          North Carolina
                        </option>
                        <option value="ND">
                          North Dakota
                        </option>
                        <option value="OH">
                          Ohio
                        </option>
                        <option value="OK">
                          Oklahoma
                        </option>
                        <option value="OR">
                          Oregon
                        </option>
                        <option value="PA">
                          Pennsylvania
                        </option>
                        <option value="RI">
                          Rhode Island
                        </option>
                        <option value="SC">
                          South Carolina
                        </option>
                        <option value="SD">
                          South Dakota
                        </option>
                        <option value="TN">
                          Tennessee
                        </option>
                        <option value="TX">
                          Texas
                        </option>
                        <option value="UT">
                          Utah
                        </option>
                        <option value="VT">
                          Vermont
                        </option>
                        <option value="VA">
                          Virginia
                        </option>
                        <option value="WA">
                          Washington
                        </option>
                        <option value="WV">
                          West Virginia
                        </option>
                        <option value="WI">
                          Wisconsin
                        </option>
                        <option value="WY">
                          Wyoming
                        </option>
                      </select>
                      <label>
                        Zip / Post Code *
                      </label>
                      <select class="">
                        <option value="AL">
                          Alabama
                        </option>
                        <option value="AK">
                          Alaska
                        </option>
                        <option value="AZ">
                          Arizona
                        </option>
                        <option value="AR">
                          Arkansas
                        </option>
                        <option value="CA">
                          California
                        </option>
                        <option value="CO">
                          Colorado
                        </option>
                        <option value="CT">
                          Connecticut
                        </option>
                        <option value="DE">
                          Delaware
                        </option>
                        <option value="DC">
                          District Of Columbia
                        </option>
                        <option value="FL">
                          Florida
                        </option>
                        <option value="GA">
                          Georgia
                        </option>
                        <option value="HI">
                          Hawaii
                        </option>
                        <option value="ID">
                          Idaho
                        </option>
                        <option selected="" value="IL">
                          Illinois
                        </option>
                        <option value="IN">
                          Indiana
                        </option>
                        <option value="IA">
                          Iowa
                        </option>
                        <option value="KS">
                          Kansas
                        </option>
                        <option value="KY">
                          Kentucky
                        </option>
                        <option value="LA">
                          Louisiana
                        </option>
                        <option value="ME">
                          Maine
                        </option>
                        <option value="MD">
                          Maryland
                        </option>
                        <option value="MA">
                          Massachusetts
                        </option>
                        <option value="MI">
                          Michigan
                        </option>
                        <option value="MN">
                          Minnesota
                        </option>
                        <option value="MS">
                          Mississippi
                        </option>
                        <option value="MO">
                          Missouri
                        </option>
                        <option value="MT">
                          Montana
                        </option>
                        <option value="NE">
                          Nebraska
                        </option>
                        <option value="NV">
                          Nevada
                        </option>
                        <option value="NH">
                          New Hampshire
                        </option>
                        <option value="NJ">
                          New Jersey
                        </option>
                        <option value="NM">
                          New Mexico
                        </option>
                        <option value="NY">
                          New York
                        </option>
                        <option value="NC">
                          North Carolina
                        </option>
                        <option value="ND">
                          North Dakota
                        </option>
                        <option value="OH">
                          Ohio
                        </option>
                        <option value="OK">
                          Oklahoma
                        </option>
                        <option value="OR">
                          Oregon
                        </option>
                        <option value="PA">
                          Pennsylvania
                        </option>
                        <option value="RI">
                          Rhode Island
                        </option>
                        <option value="SC">
                          South Carolina
                        </option>
                        <option value="SD">
                          South Dakota
                        </option>
                        <option value="TN">
                          Tennessee
                        </option>
                        <option value="TX">
                          Texas
                        </option>
                        <option value="UT">
                          Utah
                        </option>
                        <option value="VT">
                          Vermont
                        </option>
                        <option value="VA">
                          Virginia
                        </option>
                        <option value="WA">
                          Washington
                        </option>
                        <option value="WV">
                          West Virginia
                        </option>
                        <option value="WI">
                          Wisconsin
                        </option>
                        <option value="WY">
                          Wyoming
                        </option>
                      </select>
                      <div class="clearfix">
                      </div>
                      <button>
                        Get A Qoute
                      </button>
                    </form>
                  </div> -->
                </div>
                <div class="col-md-4 col-sm-6">
                 <!--  <div class="shippingbox">
                    <h5>
                      Discount Codes
                    </h5>
                    <form>
                      <label>
                        Enter your coupon code if you have one
                      </label>
                      <input type="text" name="">
                      <div class="clearfix">
                      </div>
                      <button>
                        Get A Qoute
                      </button>
                    </form>
                  </div> -->
                </div>
                <div class="col-md-4 col-sm-6" id="tinhtien">
                  <div class="shippingbox">
                    @if(Session::has('Cart') != null)
                    <div class="subtotal">
                      <h5 style="font-size: 100%">
                        Tổng Số lượng :
                      </h5>
                      <span>
                        {{Session::get('Cart')->totalQuanty}}
                      </span>
                    </div>
                      
                    <div class="grandtotal">
                      <h5>
                        Tổng tiền
                      </h5>
                      <span>
                        {{Session::get('Cart')->totalPrice}}
                      </span>
                    </div>
                    @endif
                    <button style="float: right;">
                      Đặt hàng
                    </button>
                  </div>
                </div>
              </div>












<!-- <span style="color:red"></span> -->

            </div>
          </div>
          <div class="clearfix">
          </div>
        </div>
      </div>
      <div class="clearfix">
      </div>
     @include ('layout.footer')
    </div>
    <!-- Bootstrap core JavaScript==================================================-->
    <script type="text/javascript" src="public/fontend_lib/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="public/fontend_lib/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="public/fontend_lib/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="public/fontend_lib/js/jquery.sequence-min.js"></script>
    <script type="text/javascript" src="public/fontend_lib/js/jquery.carouFredSel-6.2.1-packed.js"></script>
    <script defer src="public/fontend_lib/js/jquery.flexslider.js"></script>
    <script type="text/javascript" src="public/fontend_lib/js/script.min.js" ></script>
    <script>
      $(document).ready(function(){
           $('.option-cart').hide();
           //  id="list-cart"
           $('.xoacart').click(function(){
              var MaSP = $(this).data("id");
              alert(MaSP);
              var url = 'deletecartitem-list/'+ MaSP;

              
                    $.ajax({
                    type: 'GET', //THIS NEEDS TO BE GET
                    url: url,

                    success: function (response) {
                       // console.log(response);
                       // $('#list-cart').empty();
                       // $('#list-cart').html(response);
                       location.reload();
                       // var quanty = $('#total-quanty').val();
                      
                       // $('#cart_no').text($('#total-quanty').val());
                       
                    },
                    error: function() { 
                         // console.log(data);
                    }
                });
           });

           $('.input-change').change(function(){
              var sl = $(this).val();
              var gia = $(this).data('gia');

              var tong = sl*gia;
              var id = $(this).data('id');
               // alert(id);

               // var aa = ;
               // alert(aa);
              $("#tong"+id).text(tong);
              $('#tinhtien div .subtotal').hide();
              // $('#tinhtien div .grandtotal span').text('Cập nhật để xem giá');
              $('#tinhtien div').html('<div style="height:108px"><span  style="color:red;">Cập nhật để xem giá và số lượng</span></div>');
              

           });

           $('.thanhtoan').click(function(){
                var list = [];
                $('.input-change').each(function(){
                  var element = {key:$(this).data('id'),value:$(this).val()}
                  list.push(element);
                });

                console.log(list);
              var url = 'updateCart'
                $.ajax({
                    type: 'post', //THIS NEEDS TO BE GET
                    url: url,
                    data: {
                              _token: "{{ csrf_token() }}",
                               data: list,
                                          
                                        },

                    success: function (response) {
                       console.log(response);
                       // $('#list-cart').empty();
                       // $('#list-cart').html(response);
                       location.reload();

                       
                       
                    },
                    error: function() { 
                         // console.log(data);
                    }
                });

           });
      });
    </script>
  </body>
</html>