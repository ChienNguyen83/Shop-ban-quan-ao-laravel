
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="csrf_token" content="{{ csrf_token() }}" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script type="text/javascript">
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>

  <title>SB Admin 2 - Dashboard</title>
  <base href="{{asset('')}}">
  <!-- Custom fonts for this admin_backend/template-->

  <link href="public/admin_backend/template/webroot/font/Font Awesome/css/all.min.css" rel="stylesheet" type="text/css">
   <link href="public/admin_backend/template/mdi/css/materialdesignicons.min.css" rel="stylesheet">
  <link href="admin_backend/template/cssfont.css" rel="stylesheet">


  <link href="public/admin_backend/template/css/sb-admin-2.min.css" rel="stylesheet">
  <link href="public/admin_backend/template/bootstrap/mdb.lite.min.css" rel="stylesheet">
  <link rel="stylesheet" href="public/admin_backend/template/style.css">
  <script src="public/admin_backend/template/webroot/jquery/jquery.js"></script>
<?php 
  // if (isset($_SESSION['admin'])) {
  //     $nv=$_SESSION['admin'];}
?> 

</head>
<body>


     @include('admin.layout.header')

    <div class="body_main">
       <div class="container-fluid">
         <div class="row">
           <div class="col-sm-2 menu">
      
                 @include('admin.layout.menu')

           </div>

           <div class="col-sm-10 content ml-3">
               @yield('content')
           </div>
           
         </div>

       </div>
      
    </div>



 
</body>
<!-- </body> -->
  <!-- Bootstrap core JavaScript-->
  <script src="public/admin_backend/template/vendor/jquery/jquery.min.js"></script>
  <script src="public/admin_backend/template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="public/admin_backend/template/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="public/admin_backend/template/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
 <!--  <script src="admin_backend/template/vendor/chart.js/Chart.min.js"></script> -->

  <!-- Page level custom scripts -->
<!--   <script src="admin_backend/template/js/demo/chart-area-demo.js"></script>
  <script src="admin_backend/template/js/demo/chart-pie-demo.js"></script> -->
  <script src="public/admin_backend/template/ckeditor/ckeditor.js"></script>

  @yield('script')



</html>
