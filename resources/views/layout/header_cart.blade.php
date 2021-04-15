   
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