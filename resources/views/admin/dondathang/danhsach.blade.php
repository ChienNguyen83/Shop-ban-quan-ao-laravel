
@extends('admin.layout.index')

@section('content')
<div class="container-fluid">
	<div class=" alert alert-primary">
	  <h4 class="page-title">
	    <span class="page-title-icon bg-gradient-primary text-white mr-2">
	      
	    </span> Oche Shop&#160;<i class="fas fa-chevron-right" style="font-size: 18px"></i>&#160; Đơn hàng</h4>
	</div><br>


		<div class="row">
        <form action="javascript:" method="GET" class="col-md-9 grid-margin stretch-card">
        	<input hidden name="action" value="xldathang">
			<div class="card">
				<div class="card-body ">
					<button type="sub" name="dk" value="chưa duyệt" class="btn btn-primary " style="font-family: Comfortaa;">Chờ xử lý</button>
					<!-- <span class="counter counter-lg ">2</span> -->
		         	<button type="sub" name="dk" value="đã duyệt"class="btn btn-primary" style="font-family: Comfortaa;">Đã Duyệt</button>
		         	<button type="sub" name="dk" value="Hủy bỏ" class="btn btn-primary" style="font-family: Comfortaa;">Đơn Hủy</button>
		         	<button type="sub" name="dk" value="hoàn thành" class="btn btn-primary" style="font-family: Comfortaa;">Hoàn Thành</button>
		    	</div>
			</div>
		</form>
	</div>
    <br>



	<div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
		<br>
             <table class="table table-hover  text-center " >
				<thead class="badge-info">
					<tr>
						<!-- <th>STT</th> --> <th>Mã HD</th><th>Mã KH</th><th>Ngày Đặt</th><th>Tổng Tiền</th><th>Tình trạng</th><th>Chi Tiết</th><th colspan ="2" class="badge-danger"></th>
					</tr>
				</thead>
				<tbody>
			          @foreach($donhang as $dh)
						<tr>
							<td>{{$dh->MaHD}}</td>
							<td>{{$dh->MaKH}}</td>
							<td>{{$dh->NgayDat}}</td>
							<td><?php $gia = intval(($dh->TongTien)); echo number_format($gia).'<sup>
                        đ
                      </sup>'; ?></td>

							<td>{{$dh->TinhTrang}}</td>
							<td><a class="text-info" href="">ChiTiet</a></td>
							<!-- <td>{{$dh->MaHD}}</td> -->
							<!-- <td></td> -->
							<td><a class="text-info" style="margin-right: 15px;">Duyệt <i class="fas fa-check"></i> </a>
							<a class="text-info"><i class="fas fa-backspace"></i> </a></td>
															
						</tr>
		 			@endforeach
				</tbody>
			</table>
            </div><br>
          </div>
          <div class="m-auto" style="height: 200px" >
				{{$donhang->links()}}

		      		<!-- <hr>

			     	<ul class="pagination justify-content-center">
				        <li class="page-item"></li>
                     
			      	</ul> -->

                 

			</div>

      </div>

	
</div>
@endsection