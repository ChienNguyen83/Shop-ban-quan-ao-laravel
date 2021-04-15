@extends('layout.index')
@section('homecontent')
         <div class="clearfix"></div>
         <div class="hom-slider">
            <div class="container">
               <div id="sequence">
                  <div class="sequence-prev"><i class="fa fa-angle-left"></i></div>
                  <div class="sequence-next"><i class="fa fa-angle-right"></i></div>
                  <ul class="sequence-canvas">
                     <li class="animate-in">
                        <div class="flat-caption caption1 formLeft delay300 text-center"><span class="suphead">Trùm sale đậm </span></div>
                        <div class="flat-caption caption2 formLeft delay400 text-center">
                           <h1>ƯU ĐÃI KÉP</h1>
                        </div>
                        <div class="flat-caption caption3 formLeft delay500 text-center">
                           <p>Tặng ngay 1 SET ÁO ĐÔI trị giá 𝟑𝟒𝟎.𝟎𝟎𝟎𝐯𝐧𝐝<br>Với hoá đơn từ 2000K - 2999K</p>
                        </div>
                        <div class="flat-button caption4 formLeft delay600 text-center"><a class="more" href="#">Xem Chi Tiết</a></div>
                        <div class="flat-image formBottom delay200" data-duration="5" data-bottom="true"><img src="public/fontend_lib/images/slide.jpg" alt=""></div>
                     </li>
                     <li>
                        <div class="flat-caption caption2 formLeft delay400">
                           <h1>SALE BLACK FRIDAY</h1>
                        </div>
                        <div class="flat-caption caption3 formLeft delay500">
                           <h2>BÙNG NỔ ĐẠI TIỆC SALE LỚN NHẤT TRONG NĂM<br>TOÀN BỘ SẢN PHẨM 𝐆𝐈𝐀̉𝐌 𝐆𝐈𝐀́ 𝟏𝟎%-𝟓𝟎%.</h2>
                        </div>
                        <div class="flat-button caption5 formLeft delay600"><a class="more" href="#">Xem Chi Tiết</a></div>
                        <div class="flat-image formBottom delay200" data-bottom="true"><img src="public/fontend_lib/images/slide1.jpg" alt=""></div>
                     </li>
                     <li>
                        <div class="flat-caption caption2 formLeft delay400 text-center">
                           <h1>MÙA 𝐒𝐀𝐋𝐄 LỚN</h1>
                        </div>
                        <div class="flat-caption caption3 formLeft delay500 text-center">
                           <p>THÁNG 8 TRI ÂN - TÌNH THÂN THẮT CHẶT <br>Mùa tri ân, mùa bày tỏ những tình thân ngọt ngào</p>
                        </div>
                        <div class="flat-button caption4 formLeft delay600 text-center"><a class="more" href="#">Xem Chi Tiết</a></div>
                        <div class="flat-image formBottom delay200" data-bottom="true"><img src="public/fontend_lib/images/slide2.jpg" alt=""></div>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="promotion-banner">
               <div class="container">
                  <div class="row">
                     <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="promo-box"><img src="public/fontend_lib/images/promotion-01.png" alt=""></div>
                     </div>
                     <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="promo-box"><img src="public/fontend_lib/images/promotion-02.png" alt=""></div>
                     </div>
                     <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="promo-box"><img src="public/fontend_lib/images/promotion-03.png" alt=""></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="clearfix"></div>
         <div class="container_fullwidth">
            <div class="container">
               <?php $i=1; ?>
               @foreach($data as $data)
               <div class="hot-products">
                  <h3 class="title">{{$data['TenDM']}}</h3>
                  <!-- <div class="control"><a id="prev_hot" class="prev" href="#">&lt;</a><a id="next_hot" class="next" href="#">&gt;</a></div> -->
                  <ul id="hot">
                     <li>
                        <div class="row">
                           @foreach($data['SP'] as $sp)
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <!-- <div class="offer"></div> -->
                                 <div class="thumbnail"><a href="details.html"><img  style="width: 85%;height: 275px;margin-top: -45px;" src="{{$sp->AnhNen}}" alt="Product Name"></a></div>
                                 <div class="productname">{{$sp->TenSP}}</div>
                                 <h4 class="price">{{$sp->Gia}}</h4>
                                 <div class="button_group">
                                    <a href="chitietsanpham/{{$sp->MaSP}}"><button class="button add-cart" type="button">Xem Chi Tiết</button></a>
                                    <a href="javascript:" class="button compare addCart" data-id ="{{$sp->MaSP}}" type="button"><i class="fas fa-cart-plus"></i></a>
                                    <button class="button wishlist" type="button"><i class="far fa-heart"></i></button>
                                 </div>
                              </div>
                           </div>
                           @endforeach
                        </div>
                     </li>
<!--                      <li>
                        <div class="row">
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="offer">- %20</div>
                                 <div class="thumbnail"><a href="details.html"><img src="images/products/small/products-01.png" alt="Product Name"></a></div>
                                 <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                                 <h4 class="price">$451.00</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Add To Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="thumbnail"><a href="details.html"><img src="images/products/small/products-02.png" alt="Product Name"></a></div>
                                 <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                                 <h4 class="price">$451.00</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Add To Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="offer">New</div>
                                 <div class="thumbnail"><a href="details.html"><img src="images/products/small/products-03.png" alt="Product Name"></a></div>
                                 <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                                 <h4 class="price">$451.00</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Add To Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="thumbnail"><a href="details.html"><img src="images/products/small/products-04.png" alt="Product Name"></a></div>
                                 <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                                 <h4 class="price">$451.00</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Add To Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                        </div>
                     </li> -->
                  </ul>
                  <a style="float: right;font-size: 19px;margin-right:10px;color: red;" href="danhmuc/{{$data['MaDM']}}">Xem Thêm >></a>
               </div>


              <div class="clearfix"></div>
               @endforeach
               
<!--                <div class="featured-products">
                  <h3 class="title">Sản Phẩm <strong>Mới</strong></h3>
                  <div class="control"><a id="prev_featured" class="prev" href="#">&lt;</a><a id="next_featured" class="next" href="#">&gt;</a></div>
                  <ul id="featured">
                     <li>
                        <div class="row">
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="thumbnail"><a href="details.html"><img src="images/products/small/products-05.png" alt="Product Name"></a></div>
                                 <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                                 <h4 class="price">$451.00</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Add To Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                        </div>
                     </li>
                     <li>
                        <div class="row">
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="thumbnail"><a href="details.html"><img src="images/products/small/products-01.png" alt="Product Name"></a></div>
                                 <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                                 <h4 class="price">$451.00</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Add To Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="thumbnail"><a href="details.html"><img src="images/products/small/products-02.png" alt="Product Name"></a></div>
                                 <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                                 <h4 class="price">$451.00</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Add To Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="thumbnail"><a href="details.html"><img src="images/products/small/products-03.png" alt="Product Name"></a></div>
                                 <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                                 <h4 class="price">$451.00</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Add To Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="thumbnail"><a href="details.html"><img src="images/products/small/products-04.png" alt="Product Name"></a></div>
                                 <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                                 <h4 class="price">$451.00</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Add To Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                        </div>
                     </li>
                </ul>
               </div> -->
               <div class="clearfix"></div>
            </div> 
         </div>
<!--          <div class="clearfix"></div>
         <div class="featured-products">
                  <h3 class="title">Sản Phẩm <strong>Thịnh Hành</strong></h3>
                  <div class="control"><a id="prev_featured" class="prev" href="#">&lt;</a><a id="next_featured" class="next" href="#">&gt;</a></div>
                  <ul id="featured">
                     <li>
                        <div class="row">
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="thumbnail"><a href="details.html"><img src="images/products/small/products-05.png" alt="Product Name"></a></div>
                                 <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                                 <h4 class="price">$451.00</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Add To Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                        </div>
                     </li>
                  </ul>
               </div> -->
@endsection

@section ('script')


   <script>
      $(document).ready(function(){
         $('#type2').hide();
         $('.addCart').click(function(){
               var MaSP = $(this).data('id');
               alert(MaSP);

                var url = 'AddCart/'+ MaSP;
                // alert(url);

                $.ajax({
                    type: 'GET', //THIS NEEDS TO BE GET
                    url: url,

                    success: function (response) {
                       console.log(response);
                       $('#change-cart').empty();
                       $('#change-cart').html(response);
                       $('#cart_no').text($('#total-quanty').val());
                    
                       
                    },
                    error: function() { 
                         // console.log(data);
                    }
                });
            
         });
        // click vào 1 elemen sau khi load ajax
        $('#change-cart').on('click','.remove',function(){
            var id = $(this).data('id');
             var url = 'deletecartitem/'+ id;
            // alert(id);
            $.ajax({
                    type: 'GET', //THIS NEEDS TO BE GET
                    url: url,

                    success: function (response) {
                       console.log(response);
                       $('#change-cart').empty();
                       $('#change-cart').html(response);
                       // var quanty = $('#total-quanty').val();
                      
                       $('#cart_no').text($('#total-quanty').val());
                       
                    },
                    error: function() { 
                         // console.log(data);
                    }
                });
            
        });

         // $('.remove').click(function(){
         //    var id = $(this).data('id');
         //    alert(id);
         // })
      })
   </script>
@endsection 