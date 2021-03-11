
@extends('admin.layout.index')

@section('content')
<div class="container-fluid">
	<div class=" alert alert-primary">
	  <h4 class="page-title">
	    <span class="page-title-icon bg-gradient-primary text-white mr-2">
	      
	    </span> ADMIN - ONI SHOES &#160;<i class="fas fa-chevron-right" style="font-size: 18px"></i>&#160; Sản Phẩm</h4>
	</div>
	<div class="card card-body ">
		<div class="row">
		
	<table class="table table-hover m-auto text-center" style="font-size: 13px;">
		<thead class="badge-info">
			<tr>
				<th>STT</th><th>Ảnh Nền</th> <th>Tên Sản Phẩm</th><th>Danh Mục</th><th>Thương hiệu</th><th>Số lượng</th><th>Mô tả</th><th>Đơn Giá</th><th colspan ="2" class="badge-danger"></th>
			</tr>
		</thead>
		<tbody>
	       <?php $i=1 ?>
	       @foreach ($SanPham as $SanPham)

			<tr>
				<td>{{$i++}}</td>
				<td><img  src="{{$SanPham->AnhNen}}" width="60" height="50"></td>
				<td>{{$SanPham->TenSP}}</td>
				<td>{{$SanPham->TenDM()}}<</td>
				<td></td>
				<td>{{$SanPham->MoTa}}</td>
				<!-- <td><a href="#"></a></td> -->
				<td>200</td>
				<td><a href="" ><i class="far fa-edit"></i></a></td>
				<td><a href="" ><i class="fas fa-backspace"></i></a></td>
			</tr>
	      @endforeach
			
		</tbody>
	</table>
		</div>
		
		
	</div><br>
	<div class="row ">


	      	</ul>

	</div>

</div>
@endsection
