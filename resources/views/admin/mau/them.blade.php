 @extends('admin.layout.index')

@section('content')
  <form class="form-row " method="POST" action="admin/sanpham/themmau" enctype="multipart/form-data">
	 <input type="hidden" name="_token" value="{{csrf_token()}}">

    <div class="form-group col-sm-3">
    	

    </div>
    <div class="form-group col-sm-5">
    	<label class="m-auto" for="">Thêm Màu</label>
    	<input type="text" class="form-control" name="Ten" autofocus value="" required placeholder="Nhập tên màu...">
    	<input type="submit" class="btn btn-primary mt-2 " name="themmau" value="Thêm">
    </div> 
    <div class="form-group col-sm-4"></div>
    
    <hr>	
 </form>
 <hr class=" badge-danger">
 <div class="container-fluid">
    <div class=" alert alert-primary">
      <h4 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white mr-2">
          
        </span> 0che Shop &#160;<i class="fas fa-chevron-right" style="font-size: 18px"></i>&#160; Màu</h4>
    </div><br>

    <div class="card card-body">
        <div class="row">
            <table class="table table-hover m-0 text-center" style="font-size: 13px;">
        <thead class="badge-info">
            <tr>
                <th>STT</th> <th>Tên Màu</th><th colspan ="2" class="badge-danger"></th>
            </tr>
        </thead>
        <tbody>

            <?php $i=1 ?>
            @foreach($Mau as $Mau)
            <tr>
                <td>{{$i++}}</td><td>{{$Mau->MaMau}}</td>
                <!-- <td><a href="admin/mau/sua/{{$Mau->MaMau}}"><i class="far fa-edit"></i></a></td> -->

                <td><button class="xoabtn" style="border: none;" data-id="{{$Mau->MaMau}}" data-url="{{route('XoaMau',$Mau->MaMau)}}" ><i class="fas fa-backspace"></i></button></td>
            </tr>
            @endforeach
            
          
        </tbody>
            
    </table>
        </div>
    </div>
    
</div>
@endsection
@section('script')
<script>
    
    $(document).ready(function(){
        
         $('.xoabtn').click(function(){
            var id = $(this).data('id');
            var url = $(this).attr('data-url');
            
            if (confirm("Bạn có chắc muốn xóa không?")) {
                if (confirm("Tất cả sản phẩm trong danh mục này sẽ bị Xóa?")) {
                       $.ajax({
                        type: 'post',
                        url: url,
                        data: {
                           _token: "{{ csrf_token() }}",
                          MaMau: id,
                          
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
            }
            else {

            }

         });
    });
</script>
@endsection