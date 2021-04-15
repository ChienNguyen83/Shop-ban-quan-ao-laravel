         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-md-2 col-sm-2">
                     <div class="logo"><a href="index.html"><img src="public/fontend_lib/images/logoabc.png" alt="FlatShop"></a></div>
                  </div>
                  <div class="col-md-10 col-sm-10">
                     <div class="header_top">
                        <div class="row">
                           <div class="col-md-3">
<!--                               <ul class="option_nav">
                                 <li class="dorpdown">
                                    <a href="#">Eng</a>
                                    <ul class="subnav">
                                       <li><a href="#">Eng</a></li>
                                       <li><a href="#">Vns</a></li>
                                       <li><a href="#">Fer</a></li>
                                       <li><a href="#">Gem</a></li>
                                    </ul>
                                 </li>
                                 <li class="dorpdown">
                                    <a href="#">USD</a>
                                    <ul class="subnav">
                                       <li><a href="#">USD</a></li>
                                       <li><a href="#">UKD</a></li>
                                       <li><a href="#">FER</a></li>
                                    </ul>
                                 </li>
                              </ul> -->
                           </div>
                           <div class="col-md-6">
 <!--                              <ul class="topmenu">
                                 <li><a href="#">Giới Thiệu</a></li>
                                 <li><a href="#">Tin Tức</a></li>
                                 <li><a href="#">Dịch Vụ</a></li>
                                 <li><a href="#">Tuyển Dụng</a></li>
                                 <li><a href="#">Hỗ Trợ</a></li>
                              </ul> -->
                           </div>
                           <div class="col-md-3">
                              <ul class="usermenu">
                                 <li><a href="checkout.html" class="log">Đăng Ký</a></li>
                                 <li><a href="checkout2.html" class="reg">Đăng Nhập</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="clearfix"></div>
                     <div class="header_bottom">
                        <ul class="option">
                           <li id="search" class="search">
                              <form><input class="search-submit" type="submit" value=""><input class="search-input" placeholder="Enter your search term..." type="text" value="" name="search"></form>
                           </li>
                           <li class="option-cart listcart">
                              <a href="javascript:" onclick="" class="cart-icon">cart 
                               @if(Session::has('Cart') != null)
                                 <span class="cart_no" id="cart_no">{{Session::get('Cart')->totalQuanty}}</span>
                                 @else
                                 <span class="cart_no"></span>
                                 @endif
                              </a>
                              <ul class="option-cart-item">
                                 <div id="change-cart">
                                    @if(Session::has('Cart') != null)


                                             @foreach(Session::get('Cart')->products as $item)
                                                <li>
                                                     <div class="cart-item">
                                                        <div class="image"><img src="{{$item['productInfo']->AnhNen}}" alt=""></div>
                                                        <div class="item-description">
                                                           <p class="name">{{$item['productInfo']->TenSP}}</p>
                                                           <p>Size: <span class="light-red">One size</span><br>Số lượng <span class="light-red">{{$item['quanty']}}</span></p>
                                                        </div>
                                                        <div class="right">
                                                           <p class="price">{{$item['productInfo']->Gia}}</p>
                                                           <a href="javascript:" class="remove" data-id="{{$item['productInfo']->MaSP}}"><img src="public/fontend_lib/images/remove.png" alt="remove"></a>
                                                        </div>
                                                     </div>
                                                  </li>

                                             @endforeach
                                                 
                                             <li>
                                                <span class="total">Tổng Tiền <strong>{{Session::get('Cart')->totalPrice}}</strong></span>
                                                <input type="hidden" value="{{Session::get('Cart')->totalQuanty}}" id="total-quanty">
                                             </li>

                                             @endif
                                                                              
                                  </div>
                                 <li><a  href="cartlists"><button class="checkout" onClick="">Xem giỏ hàng</button></a></li>
                              </ul>
                           </li>
                        </ul>
                        <div class="navbar-header"><button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button></div>
                        <div class="navbar-collapse collapse">
                           <ul class="nav navbar-nav">
                              <li class="active dropdown">
                                 <a href="trangchu">Trang Chủ</a>
<!--                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Trang Chủ</a>
                                 <div class="dropdown-menu">
                                    <ul class="mega-menu-links">
                                       <li><a href="index.html">Trang Chủ</a></li>
                                       <li><a href="productlitst.html">Danh Sách Sản Phẩm</a></li>
                                       <li><a href="productgird.html">Productgird</a></li>
                                       <li><a href="details.html">Details</a></li>
                                       <li><a href="cart.html">Cart</a></li>
                                       <li><a href="checkout.html">CheckOut</a></li>
                                       <li><a href="checkout2.html">CheckOut2</a></li>
                                       <li><a href="contact.html">contact</a></li>
                                    </ul>
                                 </div> -->
                              </li>
                              <li><a href="productgird.html">Bán Chạy</a></li>
                              <li><a href="productlitst.html">Sản phẩm mới</a></li>
                              <li class="dropdown">
                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Phong Cách</a>
                                 <div class="dropdown-menu mega-menu">
                                    <div class="row">
                                       <div class="col-md-6 col-sm-6">
                                          <ul class="mega-menu-links"> 
                                             <li><a href="productgird.html">Cổ Điển (CLASSIC)</a></li>
                                             <li><a href="productgird.html">Tối Giản</a></li>
                                             <li><a href="productgird.html">Tự Do (HIPPIE)</a></li>
                                             <li><a href="productgird.html">Bohemian (BOHO)</a></li>
                                             <li><a href="productgird.html">Thể Thao (SPORTY)</a></li>
                                             <li><a href="productgird.html">PREPPY</a></li>
                                          </ul>
                                       </div>
                                       <div class="col-md-6 col-sm-6">
                                          <ul class="mega-menu-links">
                                             <li><a href="productgird.html">New</a></li>
                                             <li><a href="productgird.html">Shirts & tops</a></li>
                                             <!-- <li><a href="productgird.html">Laptop & Brie</a></li> -->
                                             <li><a href="productgird.html">Dresses</a></li>
                                             <li><a href="productgird.html">Blazers & Jackets</a></li>
                                             <li><a href="productgird.html">Shoulder Bags</a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li><a href="productgird.html">Khuyến Mãi</a></li>
                              <li><a href="contact.html">Liên Hệ</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>