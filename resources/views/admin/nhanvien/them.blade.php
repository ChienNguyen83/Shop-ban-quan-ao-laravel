 @extends('admin.layout.index')

@section('content')
  <form class="form-row " method="GET" action="danhmuc/xuly.php" enctype="multipart/form-data">
	 <div class="form-group col-sm-4"></div><input hidden name="madm" value="">
    <div class="form-group col-sm-3"><label class="m-auto" for="">Tên Danh Mục</label>
    	<input type="text" class="form-control" name="tendm" autofocus value=""></div>
    <div class="form-group col-sm-5"></div> <div class="form-group col-sm-4"></div>
    <div class="form-group col-sm-3"><label for="masv">&emsp;</label><input type="submit" class="form-control badge-info" name="suadm" value="Thêm"></div>
    <hr>	
 </form><hr class=" badge-danger">
@endsection