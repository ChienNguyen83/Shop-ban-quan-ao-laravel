 @extends('admin.layout.index')

@section('content')
  <hr class="badge-danger">
<form class="form-row " method="POST" action="" enctype="multipart/form-data">
    <div class="form-group col-2">
    	<label for="masv">Tên Sản Phẩm</label>
    	<input type="text" required class="form-control" name="tensp">
    </div>
    <div class="form-group col-3">
    	<label >Danh Mục</label>  
    	<select name="madm" class="form-control browser-default custom-select">
    		@foreach ($DanhMuc as $danhmuc)
        	<option value="">{{$danhmuc->TenDM}}</option>
        	@endforeach
      </select>
  </div>

</form>
<hr><hr class="badge-danger">


@endsection