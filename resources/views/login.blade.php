<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body style="width: 40%; margin: auto;">

<h2>0che Shop</h2>

 <form class="form-row " method="POST" action="login" enctype="multipart/form-data">
   <input type="hidden" name="_token" value="{{csrf_token()}}">
  <!-- <div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">
  </div> -->

  <div class="container" style="margin: 30px">
    <label for="uname"><b>Tên Đăng Nhập</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Mật Khẩu</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Đăng Nhập</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Nhớ tôi
    </label>

  <p style="color: red"><?php 
       $error = Session::get('errorcus');
              if ($error) {
                echo $error;
                Session::put('error',null);
              }

      ?>
      </p>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <a href="sigup"><button type="button" class="cancelbtn">Đăng kí tài khoản</button></a>
    <!-- <span class="psw">Quyên <a href="#">Mật Khẩu?</a></span> -->
    <span class="psw">Quyên <a href="#">Mật Khẩu?</a></span>
  </div>
</form>

</body>
</html>
