
<!DOCTYPE html>
<html>
  <head>

    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/favicon.png">
    <title>
      Welcome to FlatShop
    </title>
    <base href="{{asset('')}}"/>
    <link href="public/fontend_lib/css/bootstrap.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,500italic,100italic,100' rel='stylesheet' type='text/css'>
    <link href="public/fontend_lib/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="public/fontend_lib/css/flexslider.css" type="text/css" media="screen"/>
    <link href="public/fontend_lib/css/style.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="public/fontend_lib/fontawesome/css/all.min.css" />
    <style>
     @media screen and (max-width: 768px){
          #pre_img{     float: left;
     width: auto; 
    position: relative;
    margin-bottom: 15px;
    padding-bottom: 15px;
    border: 1px solid #e1e1e1;
    -webkit-border-radius: 10px;
    border-radius: 10px;
    display: block;
}
}

  
    </style>

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
        <div class="container">
          <div class="row">
            @foreach($sanpham as $sp)


            <div class="col-md-9">

              <div class="products-details">
                <div class="preview_image" id="pre_img">
                  <div class="preview-small" style="height: 500px;">
                    <img id="zoom_03" class="anhto"  src="{{$sp->AnhNen}}" data-zoom-image="{{$sp->AnhNen}}" alt="">
                  </div>
                  <div class="thum-image">
                    <ul id="gallery_01" class="prev-thum">
                      <li>
                        <a href="#" class="anhnho" data-image="{{$sp->AnhNen}}" data-zoom-image="{{$sp->AnhNen}}">
                          <img src="{{$sp->AnhNen}}" alt="">
                        </a>
                      </li>
                      <li>
                        <a href="#" class="anhnho" data-image="{{$sp->Anh1}}" data-zoom-image="{{$sp->Anh1}}">
                          <img src="{{$sp->Anh1}}" alt="">
                        </a>
                      </li>
                      <li>
                        <a href="#" class="anhnho" data-image="{{$sp->Anh2}}" data-zoom-image="{{$sp->Anh2}}">
                          <img src="{{$sp->Anh2}}" alt="">
                        </a>
                      </li>
                      <li>
                        <a class="anhnho" href="#" data-image="{{$sp->Anh3}}" data-zoom-image="{{$sp->Anh3}}">
                          <img src="{{$sp->Anh3}}" alt="">
                        </a>
                      </li>
       
                    </ul>
                    <a class="control-left" id="thum-prev" href="javascript:void(0);">
                      <i class="fa fa-chevron-left">
                      </i>
                    </a>
                    <a class="control-right" id="thum-next" href="javascript:void(0);">
                      <i class="fa fa-chevron-right">
                      </i>
                    </a>
                  </div>
                </div>
                <div class="products-description">
                  <input type="hidden" value="{{$sp->MaSP}}" id="MaSP">
                  <h5 class="name">
                    {{$sp->TenSP}}
                  </h5>
                <!--   <p>
                    <img alt="" src="images/star.png">
                    <a class="review_num" href="#">
                      02 Review(s)
                    </a>
                  </p> -->
                  <p>
                    Còn : 
                    <span class=" light-red">
                      {{$Tongsl}}
                    </span><span>Sản Phẩm</span>
                  </p>
                  <div class="mt-0" style=" height: 4em; overflow: hidden;">
                    <?php echo $sp->MoTa; ?>

                  </div>
                  <p>..........</p>

                  <a href="chitietsanpham/{{$sp->MaSP}}#Descrap"  class="btn btn-secondary small">Đọc tiếp....</a>
                
                  
                  <hr class="border">
                  <div class="price">

                    Gía : 
                    <span class="new_price">
                      {{$Gia}}
                      <sup>
                        vnđ
                      </sup>
                    </span>
                    <span class="old_price">
                      450.00
                      <sup>
                        $
                      </sup>
                    </span>
                  </div>
                  <hr class="border">
                  <div class="wided">
                    <div class="qty" style="width: 100%; display: flex;">
                     
                      <div style="width: 40%;margin-left: 5%;display:inline-block ;">
                    
                         <p >Màu:</p>
                        
                        @foreach($Mau as $mau)
                        <button class="mau" data-id="{{$mau}}" style="margin-top:5px; height:20px; font-size: 100%; padding:2px;border-radius: 2px;">{{$mau}}</button>

                        @endforeach
                      </div>
                      <div  style="width: 40%; display:inline-block;margin-left: 5%;">
                 
                        <p>Size:</p>

                       <div id="size">
                       
                         
                       </div>
                        
                      </div>
                     
                      <!-- <select>
                        <option>
                          1
                        </option>
                      </select> -->
                    </div>

                    <div style="margin-top: 20px; float: right;">
                            <span id="gia" style="color: red ;font-size:24px;font-weight: 400;" class="new_price">
                              
                            </span>
                          
                  </div>
                    <div class="clearfix">
                  </div>
                   <hr class="border">
                   <br>
                    <div class="button_group">
                      <button class="button" >
                        Mua Ngay
                      </button>
                      <button class="button favorite">
                        <i class="fas fa-cart-plus"></i>
                      </button>
                      <button class="button favorite">
                        <i class="far fa-heart"></i>
                      
                      </button>
                      <button class="button favorite">
                        <i class="far fa-envelope"></i>
                      </button>
                    </div>
                  </div>
                  <div class="clearfix">
                  </div>
                  <hr class="border">
                  <img src="images/share.png" alt="" class="pull-right">
                </div>
              </div>
              <div class="clearfix">
              </div>
              <div class="tab-box">
                <div id="tabnav">
                  <ul>
                    <li>
                      <a href="#Descraption" id="Descrap">
                        Mô Tả 
                      </a>
                    </li>
                    <li>
                      <a href="#Reviews">
                        Đánh Giá
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="tab-content-wrap">
                  <div class="tab-content" id="Descraption">
                    <?php echo $sp->MoTa; ?>
                  </div>
                  <div class="tab-content" id="Reviews">
                    <form>
                      <table>
                        <thead>
                          <tr>
                            <th>
                              &nbsp;
                            </th>
                            <th>
                              1 star
                            </th>
                            <th>
                              2 stars
                            </th>
                            <th>
                              3 stars
                            </th>
                            <th>
                              4 stars
                            </th>
                            <th>
                              5 stars
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              Quality
                            </td>
                            <td>
                              <input type="radio" name="quality" value="Blue"/>
                            </td>
                            <td>
                              <input type="radio" name="quality" value="">
                            </td>
                            <td>
                              <input type="radio" name="quality" value="">
                            </td>
                            <td>
                              <input type="radio" name="quality" value="">
                            </td>
                            <td>
                              <input type="radio" name="quality" value="">
                            </td>
                          </tr>
                          <tr>
                            <td>
                              Price
                            </td>
                            <td>
                              <input type="radio" name="price" value="">
                            </td>
                            <td>
                              <input type="radio" name="price" value="">
                            </td>
                            <td>
                              <input type="radio" name="price" value="">
                            </td>
                            <td>
                              <input type="radio" name="price" value="">
                            </td>
                            <td>
                              <input type="radio" name="price" value="">
                            </td>
                          </tr>
                          <tr>
                            <td>
                              Value
                            </td>
                            <td>
                              <input type="radio" name="value" value="">
                            </td>
                            <td>
                              <input type="radio" name="value" value="">
                            </td>
                            <td>
                              <input type="radio" name="value" value="">
                            </td>
                            <td>
                              <input type="radio" name="value" value="">
                            </td>
                            <td>
                              <input type="radio" name="value" value="">
                            </td>
                          </tr>
                        </tbody>
                      </table>
                      <div class="row">
                        <div class="col-md-6 col-sm-6">
                          <div class="form-row">
                            <label class="lebel-abs">
                              Your Name 
                              <strong class="red">
                                *
                              </strong>
                            </label>
                            <input type="text" name="" class="input namefild">
                          </div>
                          <div class="form-row">
                            <label class="lebel-abs">
                              Your Email 
                              <strong class="red">
                                *
                              </strong>
                            </label>
                            <input type="email" name="" class="input emailfild">
                          </div>
                          <div class="form-row">
                            <label class="lebel-abs">
                              Summary of You Review 
                              <strong class="red">
                                *
                              </strong>
                            </label>
                            <input type="text" name="" class="input summeryfild">
                          </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                          <div class="form-row">
                            <label class="lebel-abs">
                              Your Name 
                              <strong class="red">
                                *
                              </strong>
                            </label>
                            <textarea class="input textareafild" name="" rows="7" >
                            </textarea>
                          </div>
                          <div class="form-row">
                            <input type="submit" value="Submit" class="button">
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                  <div class="tab-content" >
                    <div class="review">
                      <p class="rating">
                        <i class="fa fa-star light-red">
                        </i>
                        <i class="fa fa-star light-red">
                        </i>
                        <i class="fa fa-star light-red">
                        </i>
                        <i class="fa fa-star-half-o gray">
                        </i>
                        <i class="fa fa-star-o gray">
                        </i>
                      </p>
                      <h5 class="reviewer">
                        Reviewer name
                      </h5>

                      <p class="review-date">
                        Date: 01-01-2014
                      </p>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer a eros neque. In sapien est, malesuada non interdum id, cursus vel neque.
                      </p>
                    </div>
                    <div class="review">
                      <p class="rating">
                        <i class="fa fa-star light-red">
                        </i>
                        <i class="fa fa-star light-red">
                        </i>
                        <i class="fa fa-star light-red">
                        </i>
                        <i class="fa fa-star-half-o gray">
                        </i>
                        <i class="fa fa-star-o gray">
                        </i>
                      </p>
                      <h5 class="reviewer">
                        Reviewer name
                      </h5>
                      <p class="review-date">
                        Date: 01-01-2014
                      </p>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer a eros neque. In sapien est, malesuada non interdum id, cursus vel neque.
                      </p>
                    </div>
                  </div>
                  <div class="tab-content" id="tags">
                    <div class="tag">
                      Add Tags : 
                      <input type="text" name="">
                      <input type="submit" value="Tag">
                    </div>
                  </div>
                </div>
              </div>
              <div class="clearfix">
              </div>
              <div id="productsDetails" class="hot-products">
                <h3 class="title">
                  <strong>
                    Sanr phẩm tương tự
                  </strong>
                  
                </h3>
                <div class="control">
                  <a id="prev_hot" class="prev" href="#">
                    &lt;
                  </a>
                  <a id="next_hot" class="next" href="#">
                    &gt;
                  </a>
                </div>
                <!-- <ul id="hot">
                  <li> -->
                    <div class="row">
                      @foreach ($SPCungLoai as $cl)
                      <div class="col-md-4 col-sm-4">
                        <div class="products" style="float: left;">
                         <!--  <div class="offer">
                            - %20
                          </div> -->
                          <div class="thumbnail">
                            <img src="{{$cl->AnhNen}}" alt="Product Name">
                          </div>
                          <div class="productname">
                            {{$cl->TenSP}}
                          </div>
                          <h4 class="price">
                            {{$cl->Gia}}
                          </h4>
                          <div class="button_group">
                            <a href="chitietsanpham/{{$cl->MaSP}}" class="button add-cart" type="button">
                              Xem Chi Tiết
                            </a>
                            <button class="button compare" type="button">
                              <i class="fas fa-cart-plus">
                              </i>
                            </button>
                            <button class="button wishlist" type="button">
                              <i class="far fa-heart">
                              </i>
                            </button>
                          </div>
                        </div>
                      </div>

                      @endforeach
                    </div>
               <!--    </li>

                </ul> -->
              </div>
              <div class="clearfix">
              </div>
            </div>





            @endforeach
            <div class="col-md-3">
              <div class="special-deal leftbar">
                <h4 class="title">
                  Special 
                  <strong>
                    Deals
                  </strong>
                </h4>
                <div class="special-item">
                  <div class="product-image">
                    <a href="#">
                      <img src="images/products/thum/products-01.png" alt="">
                    </a>
                  </div>
                  <div class="product-info">
                    <p>
                      Licoln Corner Unit
                    </p>
                    <h5 class="price">
                      $300.00
                    </h5>
                  </div>
                </div>
                <div class="special-item">
                  <div class="product-image">
                    <a href="#">
                      <img src="images/products/thum/products-02.png" alt="">
                    </a>
                  </div>
                  <div class="product-info">
                    <p>
                      Licoln Corner Unit
                    </p>
                    <h5 class="price">
                      $300.00
                    </h5>
                  </div>
                </div>
                <div class="special-item">
                  <div class="product-image">
                    <a href="#">
                      <img src="images/products/thum/products-03.png" alt="">
                    </a>
                  </div>
                  <div class="product-info">
                    <p>
                      Licoln Corner Unit
                    </p>
                    <h5 class="price">
                      $300.00
                    </h5>
                  </div>
                </div>
              </div>
              <div class="clearfix">
              </div>
              <div class="product-tag leftbar">
                <h3 class="title">
                  Products 
                  <strong>
                    Tags
                  </strong>
                </h3>
                <ul>
                  <li>
                    <a href="#">
                      Lincoln us
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      SDress for Girl
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Corner
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Window
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      PG
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Oscar
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Bath room
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      PSD
                    </a>
                  </li>
                </ul>
              </div>
              <div class="clearfix">
              </div>
              <div class="get-newsletter leftbar">
                <h3 class="title">
                  Get 
                  <strong>
                    newsletter
                  </strong>
                </h3>
                <p>
                  Casio G Shock Digital Dial Black.
                </p>
                <form>
                  <input class="email" type="text" name="" placeholder="Your Email...">
                  <input class="submit" type="submit" value="Submit">
                </form>
              </div>
              <div class="clearfix">
              </div>
              <div class="fbl-box leftbar">
                <h3 class="title">
                  Facebook
                </h3>
                <span class="likebutton">
                  <a href="#">
                    <img src="images/fblike.png" alt="">
                  </a>
                </span>
                <p>
                  12k people like Flat Shop.
                </p>
                <ul>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                </ul>
                <div class="fbplug">
                  <a href="#">
                    <span>
                      <img src="images/fbicon.png" alt="">
                    </span>
                    Facebook social plugin
                  </a>
                </div>
              </div>
              <div class="clearfix">
              </div>
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
    <script type="text/javascript" src="public/fontend_lib/js/jquery-1.10.2.min.js">
    </script>
    <script type="text/javascript" src="public/fontend_lib/js/bootstrap.min.js">
    </script>
    <script defer src="public/fontend_lib/js/jquery.flexslider.js">
    </script>
    <script type="text/javascript" src="public/fontend_lib/js/jquery.carouFredSel-6.2.1-packed.js">
    </script>
    <script type="text/javascript" src='public/fontend_lib/js/jquery.elevatezoom.js'>
    </script>
    <script type="text/javascript" src="public/fontend_lib/js/script.min.js" >
    </script>
    <!-- <script type="text/javascript" src="public/fontend_lib/js/jquery-3.6.0.min.js" >
    </script> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>

    <script>
        $(document).ready(function(){
          //click anh
          
            $(".anhnho").click(function(e){
              e.preventDefault();
          
              var srcAnhNho = this.childNodes[1].src;
              $('.anhto').attr('src',srcAnhNho);
                          });

          // get size
             
             $('.mau').click(function(){
                var MaMau= $(this).data('id');
                var MaSP = $('#MaSP').val();
                var url = 'ajax/getsize/'+MaSP+'/'+MaMau;
                 $.ajax({
                          url: url,
                          type: "get",
                          success: function (response) {
                               var sizelt = response.data;
                          
                          // var sizename = response.data[1].MaSize;
                          //   console.log(sizename);
                          var abc = new Array;
                           sizelt.forEach(function(item){
                              abc.push('<input class="check" onclick="check()"  data-id="'+item.DonGia+'" style="margin-right: 3px" type="radio" name="size"><label style="margin-left: 2px;padding-bottom: 2px" for="">'+item.MaSize+'</label>')
                            });
                           var str= abc.join('');
                       
                           $("#size").html(str);

                          $('.check').change(function(){
                            var gia = $(this).data('id');
                            $('#gia').html(
                                gia+
                              '<sup>vnđ</sup>'
                              );
                          });

                           
                          },
                          error: function(jqXHR, textStatus, errorThrown) {
                             console.log(textStatus, errorThrown);
                          }
                      });
             })
        
         });
       
           


    </script>
  </body>
</html>