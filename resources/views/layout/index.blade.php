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

      <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script><![endif]-->
   </head>
   <body id="home">
    
      @include('layout.header')
      <div class="container_fullwidth">
         <div class="container">
            <div class="row">
               <div class="col-md-12" id="type1">
                  @yield('homecontent')
               </div>
            </div>
         </div>
        <div class="container" id="type2">
          <div class="row">
            <div class="col-md-3">
               @include('layout.menu')
            </div>
            <div class="col-md-9">
               @yield('body_content')
            </div>
          </div>
          <div class="clearfix">
          </div>
        </div>
      </div>


         @include ('layout.footer')
      
      <!-- Bootstrap core JavaScript==================================================-->
	  <script type="text/javascript" src="public/fontend_lib/js/jquery-1.10.2.min.js"></script>
	  <script type="text/javascript" src="public/fontend_lib/js/jquery.easing.1.3.js"></script>
	  <script type="text/javascript" src="public/fontend_lib/js/bootstrap.min.js"></script>
	  <script type="text/javascript" src="public/fontend_lib/js/jquery.sequence-min.js"></script>
	  <script type="text/javascript" src="public/fontend_lib/js/jquery.carouFredSel-6.2.1-packed.js"></script>
	  <script defer src="public/fontend_lib/js/jquery.flexslider.js"></script>
	  <script type="text/javascript" src="public/fontend_lib/js/script.min.js" ></script>
@yield('script')
@yield('script1')
     <script type="text/javascript">
      $(document).ready(function(){
                // $('.cart-icon').click(function(e){
                //   e.preventDefault();
                //   $('.option-cart-item').toggle();
                // });
 
                var sTimeOut = setTimeout(function () {
                $('.danhmuc').click(function(){
                   var id= $(this).data('id');
                   // alert(id);
                   $.ajax({
                    type: 'GET', //THIS NEEDS TO BE GET
                    url: 'ajax/danhmuc/sanpham/'+ id,
                    success: function (response) {
                       // console.log(response.data);
                       var arr = response.data.data;
                       
                       // console.log(arr);
                       var tongsp = arr.length;
                       var sosp1trang = 12;
                       var sotrang = Math.ceil(tongsp/sosp1trang);
                       // alert(sotrang);
                       var gia = response.gia;
                     //   var trang = new Array();
                     // for (var i = 0; i = sotrang; i++) {
                     //      trang.push('<button class="btn btn-success">'+i+'</button>');
                     //      alert(i);
                         
                     // }
                     //  $('.pager').html(trang);
                       var arr1 = new Array();
                      // alert(arr[1]['TenSP']);
                      for (var i = arr.length - 1; i >= 0; i--) {
                        
                        // alert(arr[i]['DonGia']);
                        // alert(gia[i]);
                       
                        arr1.push('<div class="col-md-4 col-sm-6"><div class="products"><div class="thumbnail"><a href="#"><img style="height:100%" src="'+arr[i]['AnhNen']+'" alt="Product Name"></a></div> <div class="productname">'+arr[i]['TenSP']+'</div><h4 class="price">$'+gia[i]+'</h4><div class="button_group"><button class="button add-cart" type="button"> Add To Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button></div></div>');
                        // alert(arr1);
                        $('#sanpham').html(
                              arr1
                           );
                              
                      }
                       
                        // $("#data").append(data);
                        // alert(response.data);
                    },
                    error: function() { 
                         // console.log(data);
                    }
                });
                  
          });

                   $('.thuonghieu').click(function(){
                   var id= $(this).data('id');
                   // alert(id);
                   $.ajax({
                    type: 'GET', //THIS NEEDS TO BE GET
                    url: 'ajax/thuonghieu/sanpham/'+ id,
                    success: function (response) {
                       // console.log(response.data);
                       var arr = response.data;
                       // alert(arr);
                       var gia = response.gia;
                       var arr1 = new Array();
                      // alert(arr[1]['TenSP']);
                      for (var i = arr.length - 1; i >= 0; i--) {
                        
                        // alert(arr[i]['DonGia']);
                        // alert(gia[i]);
                       
                        arr1.push('<div class="col-md-4 col-sm-6"><div class="products"><div class="thumbnail"><a href="#"><img style="height:100%" src="public/'+arr[i]['AnhNen']+'" alt="Product Name"></a></div> <div class="productname">'+arr[i]['TenSP']+'</div><h4 class="price">$'+gia[i]+'</h4><div class="button_group"><button class="button add-cart" type="button"> Add To Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button></div></div>');
                        
                        $('#sanpham').html(

                              arr1
                           );
                              
                      }
                       
                        // $("#data").append(data);
                        // alert(response.data);
                    },
                    error: function() { 
                         // console.log(data);
                    }
                });
                  
          });



      }, 1000);



});
     </script>
     
   </body>
</html>