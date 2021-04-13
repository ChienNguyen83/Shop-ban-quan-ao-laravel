 @extends('admin.layout.index')

@section('content')
 <style>

  .avata-wrapper{
  position: relative;
  height: 130px;
  width: 130px;
  /*margin: 50px auto;*/
  border-radius: 15%;
  overflow: hidden;
  box-shadow: 1px 1px 15px -5px black;
  transition: all .3s ease;
}
.avata-wrapper:hover {
  transform: scale(1.05);
    cursor: pointer;
}
   .avata-wrapper:hover .profile-pic{
        opacity: .5;
   }
     .upload-button {
    position: absolute;
    top: 0; left: 0;
    height: 100%;
    width: 100%;}
     .fa-arrow-circle-up{
      position: absolute;
      font-size: 120px;
      top: 2px;
      left: 2.5px;
      text-align: center;
      opacity: 0;
      transition: all .3s ease;
      color: #34495e;
      
    }
    .avata-wrapper:hover .fa-arrow-circle-up{
      opacity: .9;
    }
/*   .avata-wrapper{
  position: relative;
  height: 200px;
  width: 200px;
  margin: 50px auto;
  border-radius: 50%;
  overflow: hidden;
  box-shadow: 1px 1px 15px -5px black;
  transition: all .3s ease;
  &:hover{
    transform: scale(1.05);
    cursor: pointer;
  }
  &:hover .profile-pic{
    opacity: .5;
  }
  .profile-pic {
    height: 100%;
    width: 100%;
    transition: all .3s ease;
    &:after{
      font-family: FontAwesome;
      content: "\f007";
      top: 0; left: 0;
      width: 100%;
      height: 100%;
      position: absolute;
      font-size: 190px;
      background: #ecf0f1;
      color: #34495e;
      text-align: center;
    }
  }
  .upload-button {
    position: absolute;
    top: 0; left: 0;
    height: 100%;
    width: 100%;
    .fa-arrow-circle-up{
      position: absolute;
      font-size: 234px;
      top: -17px;
      left: 0;
      text-align: center;
      opacity: 0;
      transition: all .3s ease;
      color: #34495e;
    }
    &:hover .fa-arrow-circle-up{
      opacity: .9;
    }
  }
}*/
 </style>
  <hr class="badge-danger">
<form class="form-row " id="formsp1" method="POST" action="admin/sanpham/them" enctype="multipart/form-data">
  <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="form-group col-5">
    	<label for="masv">Tên Sản Phẩm</label>
    	<input id="tensp" type="text" required  class="form-control" name="tensp">
    </div>
    <div class="form-group col-3">
    	<label >Danh Mục</label>  
    	<select name="madm" class="form-control browser-default custom-select">
    		@foreach ($DanhMuc as $DanhMuc)
        	<option value="{{$DanhMuc->MaDM}}">{{$DanhMuc->TenDM}}</option>
        	@endforeach
      </select>
  </div>
  <div class="form-group col-2">
    <label >Thương Hiệu</label>  
      <select name="mancc" class="form-control browser-default custom-select">
        @foreach ($thuonghieu as $thuonghieu)
          <option value="{{$thuonghieu->MaNCC}}">{{$thuonghieu->TenNCC}}</option>
          @endforeach
      </select>
  </div>
  <div class="form-group col-2">
    
  </div>
  
  <div class="form-group col-4"  >
    <label >Ảnh Sản phẩm</label>
  <div style="display: flex;" class="col-12 row">
           <div class="avata-wrapper m-3">
            <img class="profile-pic" style="width: 100%"  src="public/fontend_lib/images/add.png" />
            <div class="upload-button">
              <i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
            </div>
            <input required  class="file-upload form-control" style="opacity: 0" type="file" name="anhnen" accept="image/*"/>
          </div>

    <div class="avata-wrapper m-3">
            <img class="profile-pic" style="width: 100%"  src="public/fontend_lib/images/add.png" />
            <div class="upload-button1">
              <i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
            </div>
            <input required  class="file-upload1 form-control" style="opacity: 0" name="anh1" type="file" accept="image/*"/>
    </div>
        <div class="avata-wrapper m-3">
            <img class="profile-pic" style="width: 100%"  src="public/fontend_lib/images/add.png" />
            <div class="upload-button2">
              <i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
            </div>
            <input required  class="file-upload2 form-control" style="opacity: 0" name="anh2" type="file" accept="image/*"/>
    </div>
        <div class="avata-wrapper m-3">
            <img class="profile-pic" style="width: 100%"   src="public/fontend_lib/images/add.png" />
            <div class="upload-button3">
              <i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
            </div>
            <input required  class="file-upload3 form-control" name="anh3" style="opacity: 0" type="file" accept="image/*"/>
    </div>
   </div>


     
   </div>
  <div class="form-group col-8 abc" ><label >Mô Tả</label><textarea id="editor1" class="ckeditor" name="mota" data-parsley-required="true" > Thêm mô tả sản phẩm....</textarea> 
  </div>
  















 
  <div class="form-group col-sm-4 m-auto"><br>
  <input type="submit" class="form-control badge-info" value="Thêm chi tiết sản phẩm" name="xlthem">
</div>

</form>
<hr><hr class="badge-danger">

<!-- <script>
  $(document).ready(function(){

    $("#themsl").click(function(){
    $("#soluong").hide();
  });

});
  
</script> -->

@endsection
@section('script')

<script>

  $(document).ready(function(){
      
           // $(".anh").change(function(){
           //     var id = $(this).data('id');
           //     $('#nut'+id).show();
           // })
var readURL = function(input) {
  // console.log(input.childNodes[5]);
  // console.log(input.childNodes[1]);
  var ipelemet = input.childNodes[5];
  var imgelemet = input.childNodes[1];
  console.log($('.profile-pic')[0]);
        if (ipelemet.files || ipelemet.files[0]) {
            var reader = new FileReader();
            console.log(ipelemet.files);
            reader.onload = function (e) {
              // console.log($(imgelemet).attr('src'));
                $(imgelemet).attr('src', e.target.result);
            }
    
            reader.readAsDataURL(ipelemet.files[0]);
        }
    }
   
    $(".avata-wrapper").on('change', function(){
        readURL(this);
    });
    
    $(".upload-button").on('click', function() {
       $(".file-upload").click();
    });
    $(".upload-button1").on('click', function() {
       $(".file-upload1").click();
    });
    $(".upload-button2").on('click', function() {
       $(".file-upload2").click();
    });
    $(".upload-button3").on('click', function() {
       $(".file-upload3").click();
    });

   // $('#formsp1').submit(function(e){
   //  e.preventDefault();
   //  var tensp = $(#'tensp').val();
   //      $.get( "{{route('getTenSP')}}", function( data ) {

   //        console.log(data);
   //        // $( ".result" ).html( data );
   //        $.inArray( tensp, data);
   //        alert( "Load was performed." );
   //      });

   // });

    
  });
</script>
@endsection