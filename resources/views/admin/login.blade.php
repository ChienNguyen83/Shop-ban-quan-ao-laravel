<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>OChe Shop - Admin</title>
  <meta name="csrf_token" content="{{ csrf_token() }}" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <script type="text/javascript">
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>

  <title>Oche Shop - Dashboard</title>
  <base href="{{asset('')}}">
  <!-- Custom fonts for this admin_backend/template-->

  <link href="public/admin_backend/template/webroot/font/Font Awesome/css/all.min.css" rel="stylesheet" type="text/css">
   <link href="public/admin_backend/template/mdi/css/materialdesignicons.min.css" rel="stylesheet">
  <link href="admin_backend/template/cssfont.css" rel="stylesheet">


  <link href="public/admin_backend/template/css/sb-admin-2.min.css" rel="stylesheet">
  <link href="public/admin_backend/template/bootstrap/mdb.lite.min.css" rel="stylesheet">
  <link rel="stylesheet" href="public/admin_backend/template/style.css">
  <script src="public/admin_backend/template/webroot/jquery/jquery.js"></script>

</head>

<body class="bg-gradient-primary">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block ">
                  <img src="../webroot/img/1.jpg" width="500" alt="">
              </div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                  
                    <br><br>
                    <h1 class="h4 text-gray-900 mb-4">Xin Chào!</h1>
                  </div>
                  <form class="user" action="{{route('postLogin')}}" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" name="email" placeholder="Enter Login Name..." required autofocus>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="pass">
                    </div>
                   <?php 
                     $error = Session::get('error');
                            if ($error) {
                              echo $error;
                              Session::put('error',null);
                            }

                    ?>
                  <hr>
                    <button type="submit" name="login" class="btn  btn-primary  btn-block"> Login </button>
                    <hr>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
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
</html>
