
@extends('admin.layout.index')

@section('content')
<div class="container-fluid">
	<div class=" alert alert-primary">
	  <h4 class="page-title">
	    <span class="page-title-icon bg-gradient-primary text-white mr-2">
	      
	    </span> ADMIN - 0cheshop &#160;<i class="fas fa-chevron-right" style="font-size: 18px"></i>&#160; Danh Mục</h4>
	</div><br>

	<div class="card card-body">
		<div class="row">
			<table class="table table-hover m-0 text-center" style="font-size: 13px;">
		<thead class="badge-info">
			<tr>
				<th>STT</th> <th>Tên Danh Mục</th><th colspan ="2" class="badge-danger"></th>
			</tr>
		</thead>
		<tbody>

            <?php $i=1 ?>
			@foreach($DanhMuc as $DanhMuc)
		    <tr>
				<td>{{$i++}}</td><td>{{$DanhMuc->TenDM}}</td>
				<td><a href="admin/danhmuc/sua/{{$DanhMuc->MaDM}}"><i class="far fa-edit"></i></a></td>
				<td><a><i class="fas fa-backspace"></i></a></td>
			</tr>
	        @endforeach
			
	      
		</tbody>
			
	</table>
		</div>
	</div>
	
</div>
@endsection
