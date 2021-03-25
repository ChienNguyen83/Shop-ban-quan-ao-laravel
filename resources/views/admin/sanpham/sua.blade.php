 @extends('admin.layout.index')

@section('content')
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
  
  <div class="form-group col-4" style="height: 300px; border:1px solid black;" >
    <label >Ảnh Sản phẩm</label>
     <div class="col-12"><input type="file" class="form-control" name="anhnen" ></div>
     <div class="col-4"><input type="file" class="form-control" name="anh1" ></div>
     <div class="col-4"><input type="file" class="form-control" name="anh2" ></div>
     <div class="col-4"><input type="file" class="form-control" name="anh3" ></div>

     
   </div>
  <div class="form-group col-8" ><label >Mô Tả</label><textarea  class="ckeditor" name="mota">{{$sp->MoTa}}</textarea> </div>
  @endforeach
    <div class="form-group col-sm-4 m-auto"><br>
  <input type="submit" class="form-control badge-info" value="Cập Nhật" name="xlthem">
</div> 

 </form>





 <input type="hidden" name="_token" value="{{csrf_token()}}">


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
  <form class="form-row " method="POST" id="formct" action="admin/sanpham/ajax/{{$ctsp->MaSP}}/{{$ctsp->MaMau}}/{{$ctsp->MaSize}}" enctype="multipart/form-data">
  <input type="hidden" name="_token" value="{{csrf_token()}}">
    <tr>
      <th scope="row">{{$i++}}</th>
      <td>{{$ctsp->MaMau}}</td>
      <td>{{$ctsp->MaSize}}</td>
      <td><input type="number" id="sl{{$i}}" name="soluong" placeholder="{{$ctsp->SoLuong}}" ></td>
      <td><input type="number" id="gia{{$i}}" name="gia" placeholder="{{$ctsp->DonGia}}" ></td>
      <td><input type="hidden" id="ma{{$i}}" name="masp" value="{{$ctsp->MaSP}}" ></td>
      <td><input type="hidden" id="mamau{{$i}}" name="mamau" value="{{$ctsp->MaMau}}" ></td>
      <td><input type="hidden" id="masize{{$i}}" name="masize" value="{{$ctsp->MaSize}}" ></td>
      

        <td><a><i class="fas fa-backspace"></i></a></td>
        <td><button  id="nut{{$i}}"  data-id={{$i}} class="btn btn-success btn-sm update">Lưu lại</button> </td>
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
          $(".update").click(function(e){
           
            var id = $(this).data('id');
            var sl = $("#sl"+id).val();
            var gia = $("#gia"+id).val();
            var MaSP = $("#ma"+id).val();
            var MaMau = $("#mamau"+id).val();
            var MaSize = $("#masize"+id).val();
            alert(MaSP);
            alert(MaMau);

           
// alert("admin/sanpham/ajax/"+MaSP+"/"+MaMau+"/"+MaSize);


        $.ajax({
          url: "admin/sanpham/ajax/"+MaSP+"/"+MaMau+"/"+MaSize,
          method: "POST", //send it through get method
          data: $('#formct').serialize(),
          success: function(data) {
                        alert('Lưu thành công');
          },
          error: function(xhr) {
            //Do Something to handle error
          }
          });

         e.preventdefault();











          });
    });
</script>
@endsection

@endsection