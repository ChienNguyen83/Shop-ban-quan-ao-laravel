 <div class="form-group col-2"><label >Mã Thương Hiệu</label>   <select name="mancc" class="form-control browser-default custom-select">
    <?php $sql2="select * from nhacc"; $rs2=mysqli_query($conn,$sql2); while ($row2=mysqli_fetch_array($rs2)) { ?> 
        <option value="<?php echo $row2['MaNCC']; ?>"><?php echo $row2['MaNCC'].' - '.$row2['TenNCC']; ?></option>
      <?php } ?></select></div>

  <div class="form-group col-2"><label >Đơn Giá</label><input type="text" class="form-control" name="dongia" ></div>
  <div class="form-group col-4"><label >Ảnh Nền</label> <input type="file" class="form-control" name="anhnen" ></div>
  <div class="form-group col-8"><label >Mô Tả</label><textarea class="form-control" name="mota"></textarea> </div>
  <div class="form-group col-12  border " >
    <label >Size :</label><br>
      <div class="btn-group col-12 row">
        <?php $sql_size="select * from size"; $rs_size=mysqli_query($conn,$sql_size); while ($kq_size=mysqli_fetch_array($rs_size)) { ?>
          <div class=" custom-checkbox custom-control col-1 ">
              <input type="checkbox" class="custom-control-input" id="<?php echo $kq_size['MaSize']; ?>" name="size[]" value="<?php echo $kq_size['MaSize'];?>"  >
              <label class="custom-control-label" for="<?php echo $kq_size['MaSize']; ?>"><h5><?php echo $kq_size['MaSize']; ?></h5></label>
          </div>
        <?php } ?>
    </div>
  </div>
  <div class=" col-12  border " >
    <label >Màu :</label>
     <div class="form-group  " >
      <div class="btn-group  col-12 m-auto row">
        <?php $sql_mau="select * from mau"; $rs_mau=mysqli_query($conn,$sql_mau); while ($kq_mau=mysqli_fetch_array($rs_mau)) { ?>
          <div class=" custom-checkbox custom-control col-2 ">
              <input type="checkbox" class="custom-control-input" id="<?php echo $kq_mau['MaMau']; ?>" name="mau[]" value="<?php echo $kq_mau['MaMau']; ?>" <?php if($kq_mau['MaMau']==='none'){ echo "checked";  }?>>
              <label class="custom-control-label" for="<?php echo $kq_mau['MaMau']; ?>"><h5><?php echo $kq_mau['MaMau']; ?></h5></label>
          </div>
        <?php } ?>
    </div>
  </div>
  </div>

<div class="form-group col-sm-6 m-auto"><br>
  <input type="submit" class="form-control badge-info" value="Thêm" name="xlthem">
</div>
