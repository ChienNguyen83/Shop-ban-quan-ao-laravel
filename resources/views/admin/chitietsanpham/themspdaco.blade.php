 @extends('admin.layout.index')


@section('content')

  <form class="form-row" id="formthemctsp" method="POST" action="admin/sanpham/themchitietsp" enctype="multipart/form-data">
  <input type="hidden" name="_token" value="{{csrf_token()}}">


  <div class="form-group col-12  border" id="ctsp" >
    <h2>Thêm loại sản phẩm mới</h2>
    <div class="loai">

      <div class="btn-group col-12 row">
          
            @foreach ($MaSanPham  as $MaSanPham) 
             <input type="hidden" name="MaSP" value="{{$MaSanPham->MaSP}}" id="MaSP" placeholder="{{$MaSanPham->MaSP}}">
            @endforeach

          </div>
           
          
          
      </div>
        <div class="btn-group col-3 row">
          <label class="mr-5">Mau</label>
      <select name="mau" class="form-control browser-default custom-select" id="mau">
          <option id="chonmau" value="faile">Chọn Màu</option>
          @foreach ($Mau as $Mau) 
          <option value="{{$Mau->MaMau}}">{{$Mau->MaMau}}</option>
          @endforeach
       </select>
          
      </div>
      <div class="btn-group col-3 row">
        <label >Số Lượng</label>
        <input type="number" required class="form-control" id="soluong" name="soluong" >
      </div>
      <div class="btn-group col-3 row">
        <label >Giá</label>
        <input type="number" required class="form-control" name="gia" >
      </div>
      <br>
      <hr>
      <label class="mr-5">Size:</label>
      <div id="Masize" class="btn-group col-12 row"></div>
<!--       <div class="btn-group col-3 row">
        <label >.....</label><br>
        <button class="form-control bnt btn-secondary" id="themsl">Thêm số lượng</button>
      </div> -->
    </div>
    








 
  <div class="form-group col-sm-4 m-auto"><br>
  <input type="submit" class="form-control badge-info" value="Thêm" name="xlthem">
</div>

</form>
<hr><hr class="badge-danger">



@endsection
@section('script')
   <script>
      $(document).ready(function(){

         $('#mau').change(function(){
          var MaMau = $(this).val();
          var MaSP = $('#MaSP').val();
          $.get('admin/sanpham/ajax/'+MaSP+'/'+MaMau, function(data){
                    $('#Masize').html(data);
          });

         });

         $('#formthemctsp').submit(function(e){
           var MaMau = $('#mau').val();
           if (MaMau == 'faile') {
            alert('Bạn chưa chọn màu');
            e.preventDefault();
           }
         });
      });
   </script>

@endsection