 @extends('admin.layout.index')

@section('content')
  <form class="form-row " method="POST" action="admin/danhmuc/them" enctype="multipart/form-data">
	 <input type="hidden" name="_token" value="{{csrf_token()}}">

    <div class="form-group col-sm-3">
    	

    </div>
    <div class="form-group col-sm-5">
    	<label class="m-auto" for="">Thêm Danh Mục</label>
    	<input type="text" class="form-control" name="Ten" autofocus value="" required placeholder="Nhập tên danh mục...">
    	<input type="submit" class="btn btn-primary mt-2 " name="suadm" value="Thêm">
    </div> 
    <div class="form-group col-sm-4"></div>
    
    <hr>	
 </form><hr class=" badge-danger">
@endsection