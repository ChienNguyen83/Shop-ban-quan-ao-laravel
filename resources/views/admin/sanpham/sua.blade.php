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
 </style>
  <hr class="badge-danger">
  @foreach ($SanPham as $sp)
<form class="form-row " method="POST" action="admin/sanpham/sua/{{$sp->MaSP}}" enctype="multipart/form-data">
  <input type="hidden" name="_token" value="{{csrf_token()}}">
  
    <div class="form-group col-5">
    	<label for="masv">Tên Sản Phẩm</label>
    	<input type="text"  class="form-control" name="tensp" value="{{$sp->TenSP}}">
    </div>
    <div class="form-group col-3">
    	<label >Danh Mục</label>  
    	<select name="madm" class="form-control browser-default custom-select">
    		@foreach ($DanhMucOfSP as $key => $DanhMuc)
        	<option value="{{$DanhMuc['MaDM']}}">{{$DanhMuc['TenDM']}}</option>
        @endforeach
        @foreach ($DanhMucKhac as $key => $value)
          <option value="{{$value['MaDM']}}">{{$value['TenDM']}}</option>
        @endforeach
    		
      </select>
  </div>
  <div class="form-group col-2">
    <label >Thương Hiệu</label>  
      <select name="mancc" class="form-control browser-default custom-select">
    @foreach ($ThuongHieuofSP as $key => $ThuongHieu)
          <option value="{{$ThuongHieu['MaTH']}}">{{$ThuongHieu['TenTH']}}</option>
        @endforeach
        @foreach ($ThuongHieuKhac as $key => $value)
          <option value="{{$value['MaTH']}}">{{$value['TenTH']}}</option>
        @endforeach
        
      </select>
  </div>
  <div class="form-group col-2">
    
  </div>
  
  <div class="form-group col-4">
    <label >Ảnh Sản phẩm</label>






<div style="display: flex;" class="col-12 row">
           
           <div class="avata-wrapper m-2 ml-4">
            <img class="profile-pic" style="width: 100%"  src="{{$sp->AnhNen}}" />
            <div class="upload-button">
              <i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
            </div>
            <input class="file-upload form-control" style="opacity: 0" type="file" name="anhnen" accept="image/*"/>
            <span style="z-index: 3">Ảnh Nền</span>
          </div>

    <div class="avata-wrapper m-2">
            <img class="profile-pic" style="width: 100%"  src="{{$sp->Anh1}}" />
            <div class="upload-button1">
              <i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
            </div>
            <input class="file-upload1 form-control" style="opacity: 0" name="anh1" type="file" accept="image/*"/>
    </div>
        <div class="avata-wrapper m-2 ml-4">
            <img class="profile-pic" style="width: 100%"  src="{{$sp->Anh2}}" />
            <div class="upload-button2">
              <i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
            </div>
            <input class="file-upload2 form-control" style="opacity: 0" name="anh2" type="file" accept="image/*"/>
    </div>
        <div class="avata-wrapper m-2">
            <img class="profile-pic" style="width: 100%"   src="{{$sp->Anh3}}" />
            <div class="upload-button3">
              <i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
            </div>
            <input class="file-upload3 form-control" name="anh3" style="opacity: 0" type="file" accept="image/*"/>
    </div>
   </div>


     
   </div>
  <div class="form-group col-8" ><label >Mô Tả</label><textarea  class="ckeditor" name="mota">{{$sp->MoTa}}</textarea> </div>
      <div class="form-group col-sm-4 m-auto"><br>
  <input type="submit" class="form-control badge-info" value="Cập Nhật" name="xlthem">
</div> 

 </form>
  @endforeach


  <div class="form-group col-12  border" id="ctsp" >
  	<div class="row">
  	<div class="form-group col-9">
  		<h2 class="col-8 row">Chi tiết loại sản phẩm</h2>
  	</div>
  	@foreach ($SanPham1 as $sp1)
  	<div class="form-group col-3">
  		<a href="admin/sanpham/themspdaco/{{$sp1->MaSP}}">Thêm loại sản phẩm</a>
  		
  		

  	</div>
  	  @endforeach
  	</div>

    



<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Loại</th>
      <th scope="col">Màu</th>
      <th scope="col">Size</th>
      <th scope="col">Số lượng</th>
      <th scope="col">Giá</th>
      <th scope="col" class="bg-danger"></th>
      <th scope="col" class="bg-danger"></th>
    </tr>
  </thead>
  <tbody> 

    <?php $i=1; ?>
    @foreach ($ctsp as $ctsp)
  <form class="form-row formct" method="POST" id="formct{{$i}}" data-url="{{ route('jsonTest') }}" data-id="{{$i}}"  action="" enctype="multipart/form-data">
     
    <tr>
      <th scope="row">{{$i}}</th>
      <td>{{$ctsp->MaMau}}</td>
      <td>{{$ctsp->MaSize}}</td>
      <td><input type="number" class="input" id="soluong{{$i}}" data-id="{{$i}}" placeholder="{{$ctsp->SoLuong}}" ></td>
      <td><input type="number" class="input" id="gia{{$i}}" data-id="{{$i}}" placeholder="{{$ctsp->DonGia}}" ></td>
      <td><input type="hidden"  id ="masp{{$i}}" value="{{$ctsp->MaSP}}" ></td>
      <td><input type="hidden" id="mamau{{$i}}" value="{{$ctsp->MaMau}}" ></td>
      <td><input type="hidden" id="masize{{$i}}"  value="{{$ctsp->MaSize}}" ></td>
      <td><a><i class="fas fa-backspace"></i></a></td>
      <td><button  id="nut{{$i++}}" type="submit" style="display: none;" class="btn btn-success btn-sm update">Lưu lại</button> </td>

    </tr>
  </form>
    @endforeach
<!--     <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr> -->
  </tbody>
</table>














  </div>













 


<hr><hr class="badge-danger">

@section('script')















<script>

    $(document).ready(function(){

           $(".input").change(function(){
               var id = $(this).data('id');
               $('#nut'+id).show();
           })

          //Xử lý ảnh
var readURL = function(input) {
  // console.log(input.childNodes[5]);
  // console.log(input.childNodes[1]);
  var ipelemet = input.childNodes[5];
  var imgelemet = input.childNodes[1];
  console.log(imgelemet);
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


           //update giá và số lượng
           $(".update").click(function () {
               submitForm();
               $(this).hide();
           })

          function submitForm (){
                  
                     $(".formct").submit(function(e){
                     e.preventDefault();
                      var id = $(this).data('id');
                      var sl = $("#soluong"+id).val();
                      var gia = $("#gia"+id).val();
                      var MaMau = $("#mamau"+id).val();
                      var MaSP = $("#masp"+id).val();
                      var MaSize = $("#masize"+id).val();
                      if (gia && sl ) {
                                      var url = $(this).attr('data-url');
                   
                                $.ajax({
                                        type: 'post',
                                        url: url,
                                        data: {
                                           _token: "{{ csrf_token() }}",
                                          MaMau: MaMau,
                                          MaSize: MaSize,
                                          MaSP: MaSP,
                                          DonGia: gia,
                                          MaSize:MaSize,
                                          SoLuong:sl,
                                          
                                        },
                                        success: function(response) {
                                          $("#soluong"+id).attr("placeholder", sl);
                                          console.log(response.data);
                                       

                                          
                                        },
                                        error: function (jqXHR, textStatus, errorThrown) {
                                          //xử lý lỗi tại đây
                                        }
                                      });
                      } else {
                            alert("Hãy nhập đủ giá và số lượng");
                      }
                    });



          }
           
          


    });
</script>
@endsection

@endsection