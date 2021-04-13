 @extends('admin.layout.index')

@section('content')

  <form class="form-row " method="POST" action="admin/sanpham/themchitietsp" enctype="multipart/form-data">
  <input type="hidden" name="_token" value="{{csrf_token()}}">


  <div class="form-group col-12  border" id="ctsp" >
    <h2>Chi tiết loại sản phẩm</h2>
    <div class="loai">
     <h4 >Loại 1:</h4>
      <div class="btn-group col-12 row">
          <label class="mr-5">Size</label>
            @foreach ($MaSanPham  as $MaSanPham) 
             <input type="hidden" name="MaSP" value="{{$MaSanPham->MaSP}}" placeholder="{{$MaSanPham->MaSP}}">
            @endforeach
            @foreach ($Size  as $Size)
               <div class=" custom-checkbox custom-control col-1 ">
              <input type="checkbox" class="custom-control-input m-2" id="size{{$Size->MaSize}}" name="size[]" value="{{$Size->MaSize}}"  >
              <label class="custom-control-label" for="size{{$Size->MaSize}}"><h5>{{$Size->MaSize}}</h5></label>
          </div>
            @endforeach
          
          
      </div>
        <div class="btn-group col-3 row">
          <label >Màu</label>
      <select name="mau" class="form-control browser-default custom-select">
          @foreach ($Mau as $Mau)
          <option value="{{$Mau->MaMau}}">{{$Mau->MaMau}}</option>
          @endforeach
      </select>
          
      </div>
      <div class="btn-group col-3 row">
        <label >Số Lượng</label>
        <input type="number" required="Không được bỏ trống trường này" class="form-control" id="soluong" name="soluong" >
      </div>
      <div class="btn-group col-3 row">
        <label >Giá</label>
        <input type="number" required="Không được bỏ trống trường này" class="form-control" name="gia" >
      </div>
<!--       <div class="btn-group col-3 row">
        <label >.....</label><br>
        <button class="form-control bnt btn-secondary" id="themsl">Thêm số lượng</button>
      </div> -->
    </div>
    



     <div class="loai">
     <h4 >Loại 2:</h4>
      <div class="btn-group col-12 row">
          <label class="mr-5">Size</label>
         
            @foreach ($Size1  as $Size1)
               <div class=" custom-checkbox custom-control col-1 ">
              <input type="checkbox" class="custom-control-input m-2" id="size1{{$Size1->MaSize}}" name="size1[]" value="{{$Size1->MaSize}}"  >
              <label class="custom-control-label" for="size1{{$Size1->MaSize}}"><h5>{{$Size1->MaSize}}</h5></label>
              </div>
            @endforeach
          
          
      </div>
        <div class="btn-group col-3 row">
          <label >Màu</label>
      <select name="mau1" class="form-control browser-default custom-select">
          @foreach ($Mau1 as $Mau1)
          <option value="{{$Mau1->MaMau}}">{{$Mau1->MaMau}}</option>
          @endforeach
      </select>
          
      </div>
      <div class="btn-group col-3 row">
        <label >Số Lượng</label>
        <input type="number" class="form-control" name="soluong1" >
      </div>
      <div class="btn-group col-3 row">
        <label >Giá</label>
        <input type="number" class="form-control" name="gia1" >
      </div>
      
    
    </div>





         <div class="loai">
     <h4 >Loại 3:</h4>
      <div class="btn-group col-12 row">
          <label class="mr-5">Size</label>
         
            @foreach ($Size2  as $Size2)
               <div class=" custom-checkbox custom-control col-1 ">
              <input type="checkbox" class="custom-control-input m-2" id="Size2{{$Size2->MaSize}}" name="size2[]" value="{{$Size2->MaSize}}"  >
              <label class="custom-control-label" for="Size2{{$Size2->MaSize}}"><h5>{{$Size2->MaSize}}</h5></label>
              </div>
            @endforeach
          
          
      </div>
        <div class="btn-group col-3 row">
          <label >Màu</label>
                <select name="mau2" class="form-control browser-default custom-select">
          @foreach ($Mau2 as $Mau2)
          <option value="{{$Mau2->MaMau}}">{{$Mau2->MaMau}}</option>
          @endforeach
      </select>
          
      </div>
      <div class="btn-group col-3 row">
        <label >Số Lượng</label>
        <input type="number" class="form-control" name="soluong2" >
      </div>
      <div class="btn-group col-3 row">
        <label >Giá</label>
        <input type="number" class="form-control" name="gia2" >
      </div>
      
    
    </div>





     <div class="loai">
     <h4 >Loại 4:</h4>
      <div class="btn-group col-12 row">
          <label class="mr-5">Size</label>
         
            @foreach ($Size3  as $Size3)
               <div class=" custom-checkbox custom-control col-1 ">
              <input type="checkbox" class="custom-control-input m-2" id="Size3{{$Size3->MaSize}}" name="size3[]" value="{{$Size3->MaSize}}"  >
              <label class="custom-control-label" for="Size3{{$Size3->MaSize}}"><h5>{{$Size3->MaSize}}</h5></label>
              </div>
            @endforeach
          
          
      </div>
        <div class="btn-group col-3 row">
          <label >Màu</label>
                <select name="mau3" class="form-control browser-default custom-select">
          @foreach ($Mau3 as $Mau3)
          <option value="{{$Mau3->MaMau}}">{{$Mau3->MaMau}}</option>
          @endforeach
      </select>
          
      </div>
      <div class="btn-group col-3 row">
        <label >Số Lượng</label>
        <input type="number" class="form-control" name="soluong3" >
      </div>
      <div class="btn-group col-3 row">
        <label >Giá</label>
        <input type="number" class="form-control" name="gia3" >
      </div>
      
    
    </div>





     <div class="loai">
     <h4 >Loại 5:</h4>
      <div class="btn-group col-12 row">
          <label class="mr-5">Size</label>
         
            @foreach ($Size4  as $Size4)
               <div class=" custom-checkbox custom-control col-1 ">
              <input type="checkbox" class="custom-control-input m-2" id="Size4{{$Size4->MaSize}}" name="size4[]" value="{{$Size4->MaSize}}"  >
              <label class="custom-control-label" for="Size4{{$Size4->MaSize}}"><h5>{{$Size4->MaSize}}</h5></label>
              </div>
            @endforeach
          
          
      </div>
        <div class="btn-group col-3 row">
          <label >Màu</label>
                <select name="mau4" class="form-control browser-default custom-select">
          @foreach ($Mau4 as $Mau4)
          <option value="{{$Mau4->MaMau}}">{{$Mau4->MaMau}}</option>
          @endforeach
      </select>
          
      </div>
      <div class="btn-group col-3 row">
        <label >Số Lượng</label>
        <input type="number" class="form-control" name="soluong4" >
      </div>
      <div class="btn-group col-3 row">
        <label >Giá</label>
        <input type="number" class="form-control" name="gia4" >
      </div>
      
    
    </div>







  </div>













 
  <div class="form-group col-sm-4 m-auto"><br>
  <input type="submit" class="form-control badge-info" value="Thêm" name="xlthem">
</div>

</form>
<hr><hr class="badge-danger">

<!-- <script>
  $(document).ready(function(){

    $("#themsl").click(function(){
    $("#soluong").hide();
  });

});
  
</script> -->

@endsection