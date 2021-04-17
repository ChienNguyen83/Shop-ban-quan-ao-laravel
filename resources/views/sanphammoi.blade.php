       

@extends('layout.index')
@section('body_content')
              <div class="banner">
                <div class="bannerslide" id="bannerslide">
                  <ul class="slides">
                    <li>
                      <a href="javascript:">
                        <img src="public/fontend_lib/images/banner-01.jpg" alt=""/>
                      </a>
                    </li>
                    <li>
                      <a href="javascript:">
                        <img src="public/fontend_lib/images/banner-02.jpg" alt=""/>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="clearfix">
              </div>
              <div class="products-grid">
                <div class="toolbar">
                  <div class="sorter">
                    <div class="view-mode">
                      <a href="productlitst.html" class="list">
                        List
                      </a>
                      <a href="javascript:" class="grid active">
                        Grid
                      </a>
                    </div>
                    <div class="sort-by">
                      Sort by : 
                      <select name="" >
                        <option value="Default" selected>
                          Default
                        </option>
                        <option value="Name">
                          Name
                        </option>
                        <option value="Price">
                          Price
                        </option>
                      </select>
                    </div>
                    <div class="limiter">
                      Show : 
                      <select name="" >
                        <option value="3" selected>
                          3
                        </option>
                        <option value="6">
                          6
                        </option>
                        <option value="9">
                          9
                        </option>
                      </select>
                    </div>
                  </div>
                  <div class="pager">
                    <a href="javascript:" class="prev-page">
                      <i class="fa fa-angle-left">
                      </i>
                    </a>
                    <a href="javascript:" class="active">
                      1
                    </a>
                    <a href="javascript:">
                      2
                    </a>
                    <a href="javascript:">
                      3
                    </a>
                    <a href="javascript:" class="next-page">
                      <i class="fa fa-angle-right">
                      </i>
                    </a>
                  </div>
                </div>
                <div class="clearfix">
                </div>
                <div class="row" id="sanpham">
                  @foreach ($sp as $sp)
                  <div class="col-md-4 col-sm-6">
                    <div class="products">
                      <div class="thumbnail">
                        <a href="details.html">
                          <img style="width: 85%;height: 275px;margin-top: -45px;" src="{{$sp->AnhNen}}" alt="Product Name">
                        </a>
                      </div>
                      <div class="productname">
                        {{$sp->TenSP}}
                      </div>
                      <h4 class="price">
                        <?php $gia = intval(($sp->Gia)); echo number_format($gia).'<sup>
                        đ
                      </sup>'; ?>
                      </h4>
                      <div class="button_group">
                        <a href="chitietsanpham/{{$sp->MaSP}}"><button class="button add-cart" type="button">Xem Chi Tiết</button></a>
                        <a href="javascript:" class="button compare addCart" data-id ="{{$sp->MaSP}}" type="button"><i class="fas fa-cart-plus"></i></a>
                        <button class="button wishlist" type="button">
                          <i class="far fa-heart">
                          </i>
                        </button>
                      </div>
                    </div>
                  </div>
                 @endforeach


                </div>
                <div class="clearfix">
                </div>
                <div class="toolbar">
                  <div class="sorter bottom">
                    <div class="view-mode">
                      <a href="productlitst.html" class="list">
                        List
                      </a>
                      <a href="javascript:" class="grid active">
                        Grid
                      </a>
                    </div>
                    <div class="sort-by">
                      Sort by : 
                      <select name="">
                        <option value="Default" selected>
                          Default
                        </option>
                        <option value="Name">
                          Name
                        </option>
                        <option value="
<strong>
#
</strong>
">
  Price
                        </option>
                      </select>
                    </div>
                    <div class="limiter">
                      Show : 
                      <select name="" >
                        <option value="3" selected>
                          3
                        </option>
                        <option value="6">
                          6
                        </option>
                        <option value="9">
                          9
                        </option>
                      </select>
                    </div>
                  </div>
                  <div class="pager">
                    <!-- <a href="javascript:" class="prev-page">
                      <i class="fa fa-angle-left">
                      </i>
                    </a>
                    <a href="javascript:" class="active">
                      1
                    </a>
                    <a href="javascript:">
                      2
                    </a>
                    <a href="javascript:">
                      3
                    </a>
                    <a href="javascript:" class="next-page">
                      <i class="fa fa-angle-right">
                      </i>
                    </a> -->

                  </div>
                </div>
                <div class="clearfix">
                </div>
              </div>
@endsection
@section ('script1')


   <script>
      $(document).ready(function(){
 
         $('.addCart').click(function(){
               var MaSP = $(this).data('id');
               alert("Thêm thành công");

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
      });
   </script>
@endsection 