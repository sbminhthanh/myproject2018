<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
  
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">        
        <li class="header">MAIN MENU</li>
        
        {{--  Tin tức  --}}
        <li class="treeview">
          <a href="##">
            <i class="fa fa-edit"></i> <span>Tin tức</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="treeview">
              <a href="##"><i class="fa fa-circle-o"></i> Thể loại 
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li>
                  <a href="admin/news/category/list"><i class="fa fa-caret-right"></i> Danh sách </a>
                </li>
                <li>
                  <a href="admin/news/category/add"><i class="fa fa-caret-right"></i> Thêm </a>
                </li>
              </ul>
            </li>
            <li class="treeview">
              <a href="##"><i class="fa fa-circle-o"></i> Bài viết
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li>
                  <a href="admin/news/news/list"><i class="fa fa-caret-right"></i> Danh sách </a>
                </li>
                <li>
                  <a href="admin/news/news/add"><i class="fa fa-caret-right"></i> Thêm </a>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        {{--  End Tin tức  --}}
        {{--  Sản phẩm  --}}
        <li class="treeview">
          <a>
            <i class="fa fa-flask"></i> <span>Sản phẩm</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="treeview">
              <a href="##"><i class="fa fa-circle-o"></i> Danh mục 
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="admin/product/category/list"><i class="fa fa-caret-right"></i> Danh sách </a></li>
                <li class="treeview">
                  <a href="admin/product/category/add"><i class="fa fa-caret-right"></i> Thêm </a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="##"><i class="fa fa-circle-o"></i> Sản phẩm
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="admin/product/product/list"><i class="fa fa-caret-right"></i> Danh sách </a></li>
                <li class="treeview">
                  <a href="admin/product/product/add"><i class="fa fa-caret-right"></i> Thêm </a></li>
              </ul>
            </li>
           
          </ul>
          
        </li>
        {{--  End Sản phẩm --}}
        {{--  Tài khoản  --}}
        <li class="treeview">
          <a>
            <i class="fa fa-users"></i> <span>Tài khoản</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="treeview">
              <a href="##"><i class="fa fa-circle-o"></i> Quyền
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="admin/user/access/list"><i class="fa fa-caret-right"></i> Danh sách </a></li>
                <li class="treeview">
                  <a href="admin/user/access/add"><i class="fa fa-caret-right"></i> Thêm </a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="##"><i class="fa fa-circle-o"></i> Tài khoản
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="admin/user/account/list"><i class="fa fa-caret-right"></i> Danh sách </a></li>
                <li class="treeview">
                  <a href="admin/user/account/list"><i class="fa fa-caret-right"></i> Thêm </a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="##"><i class="fa fa-circle-o"></i> Chặn cấm
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="##"><i class="fa fa-caret-right"></i> Danh sách </a></li>
                <li class="treeview">
                  <a href="##"><i class="fa fa-caret-right"></i> Thêm </a></li>
              </ul>
            </li>
          </ul>
        </li>
        {{--  End Tài khoản --}}    
        {{--  Hình ảnh  --}}
        <li class="treeview">
          <a>
            <i class="fa fa-image"></i> <span>Hình ảnh</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li>
              <a  href="admin/gallery/gallery/list"><i class="fa fa-caret-right"></i> Danh sách </a>             
            </li>
            <li >
              <a href="admin/gallery/photo/list"><i class="fa fa-caret-right"></i> Thêm </a>
            </li>
          </ul>
        </li>
        {{--  End Hình ảnh --}}    
           
        {{--  Giỏ hàng  --}}
        <li class="treeview">
          <a>
            <i class="fa fa-shopping-basket"></i> <span>Đặt hàng</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="treeview">
              <a href="##"><i class="fa fa-circle-o"></i> Danh sách
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="##"><i class="fa fa-caret-right"></i> Danh sách </a></li>
                <li class="treeview">
                  <a href="##"><i class="fa fa-caret-right"></i> Thêm </a></li>
              </ul>
            </li>
          </ul>
        </li>
        {{--  End Giỏ hàng --}}     
      </ul>

      <ul class="sidebar-menu" data-widget="tree">        
        <li class="header">CONFIG</li>
        <li class="treeview">
          <a>
            <i class="fa fa-gears"></i> <span>Cấu hình website</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="treeview">
              <a href="##"><i class="fa fa-caret-right"></i> Thông tin liên hệ </a>
            </li>
            <li class="treeview">
              <a href="##"><i class="fa fa-caret-right"></i> Thiết lập </a>
            </li>
          </ul>
        </li>
        <li class="treeview">
          <a>
            <i class="fa fa-windows"></i> <span>Giao diện</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="treeview">
              <a href="##"><i class="fa fa-caret-right"></i> Menu </a>
            </li>
            <li class="treeview">
              <a href="##"><i class="fa fa-caret-right"></i> Thiết lập </a>
            </li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
    <div class="sidebar-footer">
		<!-- item-->
		<a href="#" class="link" data-toggle="tooltip" title="" data-original-title="Settings"><i class="fa fa-cog fa-spin"></i></a>
		<!-- item-->
		<a href="#" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="fa fa-envelope"></i></a>
		<!-- item-->
		<a href="#" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="fa fa-power-off"></i></a>
	  </div>
</aside>