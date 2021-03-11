
@extends('admin.layout.index')

@section('content')
<div class="container-fluid">
	<div class=" alert alert-primary">
	  <h4 class="page-title">
	    <span class="page-title-icon bg-gradient-primary text-white mr-2">
	      
	    </span> ADMIN - ONI SHOES &#160;<i class="fas fa-chevron-right" style="font-size: 18px"></i>&#160; Thương Hiệu</h4>
	</div><br>

	<div class="card card-body">
		<div class="row">
			<table class="table table-hover m-0 text-center" style="font-size: 13px;">
		<thead class="badge-info">
			<tr>
				<th>STT</th> <th>Tên Thương Hiệu</th><th colspan ="2" class="badge-danger"></th>
			</tr>
		</thead>
		<tbody>

            <?php $i=1 ?>
			@foreach($thuonghieu as $thuonghieu)
		    <tr>
				<td>{{$i++}}</td><td>{{$thuonghieu->TenNCC}}</td>
				<td><a href="admin/thuonghieu/sua/{{$thuonghieu->MaNCC}}"><i class="far fa-edit"></i></a></td>
				<td><a><i class="fas fa-backspace"></i></a></td>
			</tr>
	        @endforeach
			
	      
		</tbody>
			
	</table>
		</div>
	</div>
	
</div>
@endsection
