 @extends('admin.layout.index')

@section('content')
 <style>
   .anh {
     display: inline-block;
     width: 100%;
     height: 100%;
     position: absolute;
     opacity: 0;
   }
   .borderip {
    border: 1px solid;
    padding:3px;
   }
 </style>
  <hr class="badge-danger">
  @foreach ($SanPham as $sp)
<form class="form-row " method="POST" action="admin/sanpham/sua/{$sp->MaSP}" enctype="multipart/form-data">
  <input type="hidden" name="_token" value="{{csrf_token()}}">
  
    <div class="form-group col-5">
    	<label for="masv">Tên Sản Phẩm</label>
    	<input type="text"  class="form-control" name="tensp" value="{{$sp->TenSP}}">
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
  
  <div class="form-group col-4" style=" border:1px solid black;" >
    <label >Ảnh Sản phẩm</label>
    <div style="display: flex;" class="col-12 row">
     <div class="col-6 borderip" style="position: relative;">
      <input type="file" class="form-control anh" name="anhnen">
      <img src="{{$sp->AnhNen}}" width="100%" alt="">
    </div>
     <div class="col-6 borderip"><input type="file" class="form-control anh" name="anh1" ><img src="public/{{$sp->Anh1}}" width="100%" alt=""></div>
     <div class="col-6 borderip"><input type="file" class="form-control anh" name="anh2" ><img src="public/{{$sp->Anh2}}" width="100%" alt=""></div>
     <div class="col-6 borderip"><input type="file" class="form-control anh" name="anh3" ><img src="public/{{$sp->Anh3}}" width="100%" alt=""></div>
    </div>
     
   </div>
  <div class="form-group col-8" ><label >Mô Tả</label><textarea  class="ckeditor" name="mota">{{$sp->MoTa}}</textarea> </div>
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




    <div class="form-group col-sm-4 m-auto"><br>
  <input type="submit" class="form-control badge-info" value="Cập Nhật" name="xlthem">
</div> 

 </form>








 


<hr><hr class="badge-danger">

@section('script')















<script>

    $(document).ready(function(){

           $(".input").change(function(){
               var id = $(this).data('id');
               $('#nut'+id).show();
           })
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