 @extends('admin.layout.index')

@section('content')
  <hr class="badge-danger">
<form class="form-row " method="POST" action="admin/sanpham/them" enctype="multipart/form-data">
  <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="form-group col-5">
    	<label for="masv">Tên Sản Phẩm</label>
    	<input type="text"  class="form-control" name="tensp">
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
  <div class="form-group col-8" ><label >Mô Tả</label><textarea class="ckeditor" name="mota"></textarea> </div>
  















 
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