   
@if($newCart != null)



   <li>
        <div class="cart-item">
           <div class="image"><img src="public/fontend_lib/images/products/thum/products-01.png" alt=""></div>
           <div class="item-description">
              <p class="name">Lincoln chair</p>
              <p>Size: <span class="light-red">One size</span><br>Quantity: <span class="light-red">01</span></p>
           </div>
           <div class="right">
              <p class="price">$30.00</p>
              <a href="#" class="remove"><img src="images/remove.png" alt="remove"></a>
           </div>
        </div>
     </li>
     <li>
        <div class="cart-item">
           <div class="image"><img src="images/products/thum/products-02.png" alt=""></div>
           <div class="item-description">
              <p class="name">Lincoln chair</p>
              <p>Size: <span class="light-red">One size</span><br>Quantity: <span class="light-red">01</span></p>
           </div>
           <div class="right">
              <p class="price">$30.00</p>
              <a href="#" class="remove"><img src="images/remove.png" alt="remove"></a>
           </div>
        </div>
</li>
<li><span class="total">Total <strong>{{$newCart->totalPrice}}</strong></span></li>

@endif