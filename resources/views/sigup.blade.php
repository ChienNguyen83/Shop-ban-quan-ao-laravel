


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<base href="{{asset('')}}">


	<title>0che Shop</title>
		<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
input[type=email] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=email]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
</head>


<body style="width: 40%; margin: auto;">

<form action="sigup" style="border:1px solid #ccc" enctype="multipart/form-data" method="POST" >
   <input type="hidden" name="_token" value="{{csrf_token()}}">
  <div class="container">
    <h1>Đăng kí</h1>
    <p>Hãy điền đầy đủ thông tin phía dưới để tạo tài khoản</p>
    <hr>
    <label for="user_name"><b>Tên Đăng Nhập</b></label>
    <input type="text" placeholder="Enter UserName" name="user_name" required>
    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" required>

    <label for="cus_pass"><b>Mật Khẩu</b></label>
    <input type="password" id="pass" placeholder="Enter Password" name="cus_pass" required>

    <label for="psw-repeat"><b>Nhập lại mật khẩu</b></label>
    <input type="password" id="nhaplaipass" placeholder="Repeat Password" name="psw-repeat" required>
    
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
     
      <p style="color: red"><?php 
       $error = Session::get('errorcus');
              if ($error) {
                echo $error;
                Session::put('errorcus',null);
              }

      ?>
      </p>

    <p>Nếu đã có tài khoản <a href="login" style="color:dodgerblue">Về trang Đăng Nhập</a>.</p>

    <div class="clearfix">
      <!-- <button type="button" class="cancelbtn">Cancel</button> -->
      <button type="submit" id="dangki" class="signupbtn" style="width: 40%;margin-left: 10px">Đăng kí</button>
      <!-- <a href="login" class="signupbtn"style="width: 40%;margin-left: 10px">Về trang Đăng Nhập</a> -->
    </div>
  </div>
</form>


</body>
<script type="text/javascript" src="public/fontend_lib/js/jquery-3.6.0.min.js" ></script>
<script>
	$(document).ready(function(){
        
         $('#dangki').click(function(e){
               var pass = $('#pass').val();
               var nhaplaipass = $('#nhaplaipass').val();
         	if (pass != nhaplaipass ) {
         		alert("Mật khẩu nhập lại chưa đúng!");
         		e.preventDefault();
         	}
         });


	});
</script>
<!-- 	<script>jquery-3.6.0.min</script> -->
</html>

































