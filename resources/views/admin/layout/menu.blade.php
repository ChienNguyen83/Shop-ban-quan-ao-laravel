<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" style="height: 100%">
      <br>
      <!-- Sidebar - Brand -->
      <!-- <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div> -->

      <!-- Divider -->
      <!-- <hr class="sidebar-divider my-0"> -->

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="mdi mdi-home menu-icon"></i>
          <span>Oche Shop</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>
      <!-- Nav Item - Charts -->
      <?php
        // $sql="SELECT * FROM `hoadon` WHERE `TinhTrang` = 'chưa duyệt'";
        // $rs=mysqli_query($conn,$sql);
        //  $dem=mysqli_num_rows($rs);
      ?> 
      <li class="nav-item">
        <a class="nav-link" href="admin/donhang/danhsach">
          <i class="mdi mdi-format-list-bulleted menu-icon"></i>
          <span>Đơn Đặt Hàng <sup style="border-radius: 10px;" class="badge-danger "> <!-- &#160;  -->
            <?php 
          // echo $dem 
          ?> 
        <!-- &#160;</sup></span></a> -->
      </li>
      <!-- Nav Item - Charts -->
       <?php
        // $sql="SELECT * FROM `hoadon` WHERE NgayGiao is not null and TinhTrang='Đã duyệt' ORDER BY NgayGiao ASc";
        // $rs=mysqli_query($conn,$sql); 
        // $dem=mysqli_num_rows($rs);
      ?> 
     <!--  <li class="nav-item">
        <a class="nav-link" href="?action=giaohang">
          <i class="mdi mdi-car"></i>
          <span>Giao Hàng <sup style="border-radius: 10px;" class="badge-danger "> &#160;
            <?php 
            // echo $dem
             ?>
             &#160;</sup></span></a>
          

      </li> -->
      <!-- Nav Item - Pages Collapse Menu -->
   <!--    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="mdi mdi-dns"></i>
          <span>Kho Hàng</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="?action=kho&view=xemdh">Xem đơn hàng</a>
            <a class="collapse-item" href="?action=kho&view=nhapkho">Xuất / Nhập kho</a>
            <a class="collapse-item" href="?action=kho&view=nhatky">Nhật ký Nhập Kho</a>
            <a class="collapse-item" href="?action=kho&view=nhatkyx">Nhật ký Xuất Kho</a>
          </div>
        </div>
      </li> -->

      <!-- Nav Item - Utilities Collapse Menu -->
      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Utilities</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Utilities:</h6>
            <a class="collapse-item" href="utilities-color.html">Colors</a>
            <a class="collapse-item" href="utilities-border.html">Borders</a>
            <a class="collapse-item" href="utilities-animation.html">Animations</a>
            <a class="collapse-item" href="utilities-other.html">Other</a>
          </div>
        </div>
      </li> -->

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Manage
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Danh Mục</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header"></h6>
            <a class="collapse-item" href="admin/danhmuc/danhsach">Danh Sách</a>
            <a class="collapse-item" href="admin/danhmuc/them">Thêm</a> 
           <!-- <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
           <div class="collapse-divider"></div>
           <h6 class="collapse-header">Other Pages:</h6>
           <a class="collapse-item" href="404.html">404 Page</a>
           <a class="collapse-item" href="blank.html">Blank Page</a> -->
          </div>
        </div>
      </li>



     <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages0" aria-expanded="true" aria-controls="collapsePages">
          <i class="far fa-copyright"></i>
          <span>Thương hiệu</span>
        </a>
        <div id="collapsePages0" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header"></h6>
            <a class="collapse-item" href="admin/thuonghieu/danhsach">Danh Sách</a>
            <a class="collapse-item" href="admin/thuonghieu/them">Thêm</a> 
           <!-- <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
           <div class="collapse-divider"></div>
           <h6 class="collapse-header">Other Pages:</h6>
           <a class="collapse-item" href="404.html">404 Page</a>
           <a class="collapse-item" href="blank.html">Blank Page</a> -->
          </div>
        </div>
      </li>



      <li class="nav-item">
        <a class="nav-link collapsed" href="javascript:" data-toggle="collapse" data-target="#collapsePages1" aria-expanded="true" aria-controls="collapsePages1">
         <i class="fas fa-fw fa-table"></i>
          <span>Sản Phẩm</span>
        </a>
        <div id="collapsePages1" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header"></h6>
            <a class="collapse-item" href="admin/sanpham/danhsach">Danh Sách</a>
            <a class="collapse-item" href="admin/sanpham/them">Thêm</a>
            <a class="collapse-item" href="admin/sanpham/themmau">Thêm màu</a> 
          </div>
        </div>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="javascript:">
          <i class="fas fa-atom"></i>
          <span>Khuyến Mãi</span></a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="javascript:">
          <i class="fas fa-atom"></i>
          <span>Doanh Thu</span></a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="javascript:">
          <i class="fas fa-atom"></i>
          <span>Quản lý nhân viên</span></a>
      </li> 
      <hr class="sidebar-divider d-none d-md-block">

    </ul>