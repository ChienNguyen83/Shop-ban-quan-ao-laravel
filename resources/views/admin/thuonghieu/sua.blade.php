 @extends('admin.layout.index')

@section('content')
@foreach($thuonghieu as $thuonghieu)
  <form class="form-row " method="POST" action="admin/thuonghieu/sua/{{$thuonghieu->MaNCC}}" enctype="multipart/form-data">
	 <input type="hidden" name="_token" value="{{csrf_token()}}">

    <div class="form-group col-sm-3">
    	
    
    </div>
    <div class="form-group col-sm-5">
    	<label class="m-auto" for="">Sửa thương hiệu</label>
    	<input type="hidden" name="{{$thuonghieu->MaNCC}}">
    	
    	<input type="text" class="form-control" name="Ten"  required value="{{$thuonghieu->TenNCC}}">
    	
    	<input type="submit" class="btn btn-primary mt-2 " name="suadm" value="Cập nhật">
    </div> 
    <div class="form-group col-sm-4"></div>
    
    <hr>	
 </form>
 @endforeach
 <hr class=" badge-danger">
@endsection