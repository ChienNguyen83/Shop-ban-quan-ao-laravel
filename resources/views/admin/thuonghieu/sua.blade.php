 @extends('admin.layout.index')

@section('content')
@foreach($danhmuc as $danhmuc)
  <form class="form-row " method="POST" action="admin/danhmuc/sua/{{$danhmuc->MaDM}}" enctype="multipart/form-data">
	 <input type="hidden" name="_token" value="{{csrf_token()}}">

    <div class="form-group col-sm-3">
    	
    
    </div>
    <div class="form-group col-sm-5">
    	<label class="m-auto" for="">Sửa Danh Mục</label>
    	<input type="hidden" name="{{$danhmuc->MaDM}}">
    	
    	<input type="text" class="form-control" name="Ten"  required value="{{$danhmuc->TenDM}}">
    	
    	<input type="submit" class="btn btn-primary mt-2 " name="suadm" value="Cập nhật">
    </div> 
    <div class="form-group col-sm-4"></div>
    
    <hr>	
 </form>
 @endforeach
 <hr class=" badge-danger">
@endsection