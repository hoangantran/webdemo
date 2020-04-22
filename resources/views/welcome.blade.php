<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>website demo</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link href="template/css/style_home.css" rel="stylesheet" type="text/css" />
</head>
<link rel="stylesheet" type="text/css" href="template/css/homecss.css">
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="logo">
        <h1><a href="home" style="color: orange">Furniture<span>shop</span> <small>Make Beautify Your House</small></a></h1>
      </div>
      <div class="menu_nav">
        <ul>
          <li class="active"><a href="home"><b>HOME</b></a></li>
          <!-- Ktra neu chua dang nhap thì xuat hien Login -->
          @if(!isset($user))
                <li><a href="login">Đăng Nhập</a></li>
          @endif
          <!-- Ktra neu dang nhap roi thi xuat hien Logout -->
          @if(isset($user))
                <li><a href="logout">Đăng Xuất</a></li>
                <li style="; text-align: center;"><a href="inforUser/{{ $user->id }}">
                  Trang Cá Nhân
                </a></li>
                <li><a href="user/repass/{{ $user->id }}">Đổi Mật Khẩu</a></li> 
          @endif
        </ul>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="hbg">
    
  </div>
  <div class="content"> 
    <div class="content_resize">
      <!-- content left -->
      <div class="maincontent">
          <div class="main_product">
            <div class="image_product">
              <img src="template/images/chair_01.jpg">
            </div>
            <div class="info_product">
              <div class="info_child_name"><h2>Ghế gỗ Land of Galaxy</h2></div>
              <div class="info_child_price"><h3>Giá: 700.000 VND</h3>
              <a href="3" style="text-decoration: none;"><button><b>Chi Tiết</b></button></a></div>
            </div>
          </div>

           <div class="main_product">
            <div class="image_product">
              <img src="template/images/chair_02.jpg">
            </div>
            <div class="info_product">
              <div class="info_child_name"><h2>Ghế gỗ Cổ Đại</h2></div>
              <div class="info_child_price"><h3>Giá: 1.699.000 VND</h3>
              <a href="3" style="text-decoration: none;"><button><b>Chi Tiết</b></button></a></div>
            </div>
          </div>

          <!-- <div class="main_product">
            <div class="image_product">
              <img src="template/images/table_01.jpg">
            </div>
            <div class="info_product">
              <div class="info_child_name"><h2><i>Tủ Dominis's</i></h2></div>
              <div class="info_child_price"><h3>Giá: 2.099.000 VND</h3>
              <button><a href="3" style="text-decoration: none;">Chi Tiết</a></button></div>
            </div>
          </div> -->
      </div>
      <!------------------------------------------->
      <div class="sidebar">
        <div class="searchform">
          <!-- search form--------------------->
          <form id="formsearch" name="formsearch" method="post" action="#">
            <span>
            <input name="editbox_search" class="editbox_search" id="editbox_search" maxlength="80" value="Search our ste:" type="text" />
            </span>
            <input name="button_search" src="template/images/home_img/search_btn.gif" class="button_search" type="image" />
          </form>
        </div>
        <!-- right menu---------------------------->
        <div class="gadget">
          <h2 class="star"><span>Danh Mục</span></h2>
          <div class="clr"></div>
          <ul class="sb_menu">
            @foreach($loaisp as $loai)
            <li><h3><a href="catalog/{{ $loai->id_loaisp }}">{{ $loai->tenloaisp }}</a></h3></li>
            @endforeach
          </ul>
        </div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="footer">
    <div class="footer_resize">
      <p class="lf">&copy; Copyright <a href="#">MyWebSite</a>.</p>
      <p class="rf">Layout by Free <a href="http://www.freewebsitetemplatez.com/">Website Templates</a></p>
      <div class="clr"></div>
    </div>
  </div>
</div>
</body>
</html>
