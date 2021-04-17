
@extends('admin.layout.index')

@section('content')
<div class="container-fluid">
	<div class=" alert alert-primary">
	  <h4 class="page-title">
	    <span class="page-title-icon bg-gradient-primary text-white mr-2">
	      
	    </span> Oche Shop &#160;<i class="fas fa-chevron-right" style="font-size: 18px"></i>&#160; Sản Phẩm</h4>
	</div>
	<div class="card card-body ">
		<div class="row">
		
	<table class="table table-hover m-auto text-center" style="font-size: 13px;">
		<thead class="badge-info">
			<tr>
				<th rowspan="2">STT</th><th rowspan="2">Ảnh Nền</th> <th rowspan="2">Tên Sản Phẩm</th><th rowspan="2">Danh Mục</th><th rowspan="2">Thương hiệu</th><th>Size</th><th colspan ="2" rowspan="2" class="badge-danger"></th>
			</tr>
			<!-- <tr>
				<th><u class="navbar">
					<li>Màu</li>
					<li>Size</li>
					<li>Số Lượng</li>
					<li>Giá</li>
				</ul></th>
				
			</tr> -->
		</thead>
		<tbody>

	       <?php $i=1 ?>
	       @foreach ($SanPham as $SanPham)

			<tr id="tbsp{{$SanPham->MaSP}}">
				<td>{{$i++}}</td>
				<td><img  src="{{$SanPham->AnhNen}}" width="60" height="50"></td>
				<td>{{$SanPham->TenSP}}</td>
				<td>{{$SanPham->DanhMuc->TenDM}}</td>
				<td>{{$SanPham->ThuongHieu->TenNCC}}</td>
				<!-- <td><a href="#"></a></td> -->
				
				<td>
					
					   <!-- <table class="table table-hover m-auto text-center"> -->
					  <!--  	<tr>
					   		<th>Màu</th>
					   		<th>Size</th>
					   		<th>Số lượng</th>
					   		<th>Giá</th>
					   	</tr> -->
					   	@foreach ($SanPham->CTSP as $value)
					   	<!-- <tr>
					   		<td>{{$value->MaMau}}</td> -->
					   		{{$value->MaSize}},
					   		<!-- <td>{{$value->SoLuong}}</td>
					   		<td>{{$value->DonGia}}</td>
					   	</tr> -->
					   	@endforeach
					   <!-- </table> -->
                       
                       
                       
					
				</td>
				
				
				<td><a href="admin/sanpham/sua/{{$SanPham->MaSP}}" ><i class="far fa-edit"></i></a></td>
				<td><button data-url="{{ route('XoaSP',$SanPham->MaSP)}}" data-id="{{$SanPham->MaSP}}" class="xoabtn" style="border:none;"><i class="fas fa-backspace"></i></button></td>
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
@section('script')
<script>
	
	$(document).ready(function(){
		
         $('.xoabtn').click(function(){
         	var id = $(this).data('id');
            var url = $(this).attr('data-url')
         	if (confirm("Bạn có chắc muốn xóa Không?")) {
                       $.ajax({
                        type: 'post',
                        url: url,
                        data: {
                           _token: "{{ csrf_token() }}",
                          MaSP: id,
                          
                        },
                        success: function(response) {
                      
                          location.reload();
                          // console.log(response.data);
                       

                          
                        },
                        error: function (jqXHR, textStatus, errorThrown) {
                          //xử lý lỗi tại đây
                        }
                      });
                
         	}
         	else {

         	}

         });
	});
</script>
@endsection