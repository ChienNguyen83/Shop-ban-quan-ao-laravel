              <div class="category leftbar">
                <h3 class="title">
                  Danh Mục
                </h3>
                <ul id="danhmuc">
                  <!--                   <li>
                    <a href="javascript:">
                      Men
                    </a>
                  </li> -->
                </ul>
              </div>
                <div class="clearfix">
              </div>
              <div class="branch leftbar">
                <h3 class="title">
                  Thương Hiệu
                </h3>
                <ul id="thuonghieu">

                </ul>
              </div>
              <div class="clearfix">
              </div>
              <div class="price-filter leftbar">
                <h3 class="title">
                  Price
                </h3>
                <form class="pricing">
                  <label>
                    $ 
                    <input type="number">
                  </label>
                  <span class="separate">
                    - 
                  </span>
                  <label>
                    $ 
                    <input type="number">
                  </label>
                  <input type="submit" value="Go">
                </form>
              </div>
              <div class="clearfix">
              </div>
<!--               <div class="clolr-filter leftbar">
                <h3 class="title">
                  Color
                </h3>
                <ul>
                  <li>
                    <a href="javascript:" class="red-bg">
                      light red
                    </a>
                  </li>
                  <li>
                    <a href="javascript:" class=" yellow-bg">
                      yellow"
                    </a>
                  </li>
                  <li>
                    <a href="javascript:" class="black-bg ">
                      black
                    </a>
                  </li>
                  <li>
                    <a href="javascript:" class="pink-bg">
                      pink
                    </a>
                  </li>
                  <li>
                    <a href="javascript:" class="dkpink-bg">
                      dkpink
                    </a>
                  </li>
                  <li>
                    <a href="javascript:" class="chocolate-bg">
                      chocolate
                    </a>
                  </li>
                  <li>
                    <a href="javascript:" class="orange-bg">
                      orange-bg
                    </a>
                  </li>
                  <li>
                    <a href="javascript:" class="off-white-bg">
                      off-white
                    </a>
                  </li>
                  <li>
                    <a href="javascript:" class="extra-lightgreen-bg">
                      extra-lightgreen
                    </a>
                  </li>
                  <li>
                    <a href="javascript:" class="lightgreen-bg">
                      lightgreen
                    </a>
                  </li>
                  <li>
                    <a href="javascript:" class="biscuit-bg">
                      biscuit
                    </a>
                  </li>
                  <li>
                    <a href="javascript:" class="chocolatelight-bg">
                      chocolatelight
                    </a>
                  </li>
                </ul>
              </div> -->
              <div class="clearfix">
              </div>
<!--               <div class="product-tag leftbar">
                <h3 class="title">
                  Products 
                  <strong>
                    Tags
                  </strong>
                </h3>
                <ul>
                  <li>
                    <a href="javascript:">
                      Lincoln us
                    </a>
                  </li>
                  <li>
                    <a href="javascript:">
                      SDress for Girl
                    </a>
                  </li>
                  <li>
                    <a href="javascript:">
                      Corner
                    </a>
                  </li>
                  <li>
                    <a href="javascript:">
                      Window
                    </a>
                  </li>
                  <li>
                    <a href="javascript:">
                      PG
                    </a>
                  </li>
                  <li>
                    <a href="javascript:">
                      Oscar
                    </a>
                  </li>
                  <li>
                    <a href="javascript:">
                      Bath room
                    </a>
                  </li>
                  <li>
                    <a href="javascript:">
                      PSD
                    </a>
                  </li>
                </ul>
              </div> -->
<!--               <div class="clearfix">
              </div>
              <div class="others leftbar">
                <h3 class="title">
                  Others
                </h3>
              </div>
              <div class="clearfix">
              </div>
              <div class="others leftbar">
                <h3 class="title">
                  Others
                </h3>
              </div> -->
              <div class="clearfix">
              </div>
              <div class="fbl-box leftbar">
                <h3 class="title">
                  Facebook
                </h3>
                <span class="likebutton">
                  <a href="javascript:">
                    <img src="public/fontend_lib/images/fblike.png" alt="">
                  </a>
                </span>
                <p>
                  12k people like 0che Shop.
                </p>
                <ul>
                  <li>
                    <a href="javascript:">
                    </a>
                  </li>
                  <li>
                    <a href="javascript:">
                    </a>
                  </li>
                  <li>
                    <a href="javascript:">
                    </a>
                  </li>
                  <li>
                    <a href="javascript:">
                    </a>
                  </li>
                  <li>
                    <a href="javascript:">
                    </a>
                  </li>
                  <li>
                    <a href="javascript:">
                    </a>
                  </li>
                  <li>
                    <a href="javascript:">
                    </a>
                  </li>
                  <li>
                    <a href="javascript:">
                    </a>
                  </li>
                </ul>
                <div class="fbplug">
                  <a href="javascript:">
                    <span>
                      <img src="public/fontend_lib/images/fbicon.png" alt="">
                    </span>
                    Facebook social plugin
                  </a>
                </div>
              </div>
              <div class="clearfix">
              </div>
              <div class="leftbanner">
                <img src="public/fontend_lib/images/banner-small-01.png" alt="">
              </div>


              @section('script')
                   <script type="text/javascript">

      $(document).ready(function(){
         



   $.get('ajax/danhmuc', function(data){
                    $('#danhmuc').html(data);
          });
          $.get('ajax/thuonghieu', function(data){
                    $('#thuonghieu').html(data);
          });






        
       




           });
     </script>

              @endsection