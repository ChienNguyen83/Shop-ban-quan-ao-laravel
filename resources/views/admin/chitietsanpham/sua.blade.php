 @extends('admin.layout.index')

@section('content')
@foreach ($ctsp as $ctsp)

  <form class="form-row " method="POST" action="admin/sanpham/sua/ctsp/{{$ctsp->MaSP}}/{{$ctsp->MaSize}}/{{$ctsp->MaMau}}" enctype="multipart/form-data">
	 <input type="hidden" name="_token" value="{{csrf_token()}}">

   
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
    
 
    <tr>
      <th scope="row"></th>
      <td>{{$ctsp->MaMau}}</td>
      <td>
        @foreach ($size1 as $size1)
        <div class=" custom-checkbox custom-control col-1 ">
         <input type="checkbox" class="custom-control-input m-2" checked id="size{{$size1->MaSize}}" name="size[]" value="{{$size1->MaSize}}"  >
              <label class="custom-control-label"><h5>{{$size1->MaSize}}</h5></label>
        </div>
        @endforeach
        @foreach ($arr as $arr)
           <div class=" custom-checkbox custom-control col-1 ">
         <input type="checkbox" class="custom-control-input m-2"  id="size{{$arr}}" name="size[]" value="{{$arr}}"  >
              <label class="custom-control-label" for="size{{$arr}}"><h5>{{$arr}}</h5></label>
        </div>
        @endforeach

      </td>
      <td>{{$ctsp->SoLuong}}</td>
      <td>{{$ctsp->DonGia}}</td>
              <td class="ml-2"><a href="admin/sanpham/sua/ctsp/{{$ctsp->MaSP}}
/{{$ctsp->MaSize}}/{{$ctsp->MaMau}}"><i class="far fa-edit"></i></a></td>
        <td><a><i class="fas fa-backspace"></i></a></td>
    </tr>


  </tbody>
</table>


    
   
    <div class="form-group col-sm-5">	
    	<input type="submit" class="btn btn-primary mt-2 " name="suadm" value="Cập nhật">
    </div> 
    <div class="form-group col-sm-4"></div>
    
    <hr>	
 </form>




    @endforeach
@endsection