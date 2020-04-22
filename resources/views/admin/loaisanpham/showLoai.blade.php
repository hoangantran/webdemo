<!DOCTYPE html>
<html>
<head>
	<title>Admin - Quản Lí Loại Sản Phẩm</title>
	<link rel="stylesheet" type="text/css" href="../../template/css/adminForm.css">
</head>
<body>
		<div class="admin-form">
		<div class="admin-tittle">
			<div><h2>A D M I N</h2><i><h3>CONTROL PAGE</h3></i></div>
		</div>
		<div class="admin-content">
			<div class="admin-content-left">
				<div class="admin-content-left-child">
					<button><a href="../users/quanliusers" style="text-decoration-line: none"><b>QUẢN LÍ USERS</b></a></button>
					<button><a href="quanliloai" style="text-decoration-line: none"><b>QUẢN LÍ CATALOG</b></a></button>
					<button><a href="quanlisanpham" style="text-decoration-line: none"><b>QUẢN LÍ PRODUCT</b></a></button>
				</div>
			</div>
			<div class="admin-content-right">
				<div class="admin-content-right-top">
					<div class="insert-button">
						<button><a href="insert" style="text-decoration-line: none"><b>Thêm Loại</b></a></button>
					</div>
				</div>
				<div class="admin-content-right-middle">
					<h3>CATA LIST</h3>
				</div>
				<div class="admin-content-right-bottom">
					<table border="">
						<tr>
							<td>ID Loại</td>
							<td>Tên Loại</td>
							<td colspan="2">Chức năng</td>
						</tr>
						@foreach($loaisp as $loai)
						<tr>
							<td> {{ $loai->id }} </td>
							<td>{{ $loai->tenloaisp }}</td>
							<td><a href="delete/{{$loai->id}}"><button>Xóa</button></a></td>
							<td><a href="update/{{$loai->id}}"><button>Sửa</button></a></td>
						</tr>
						@endforeach
					</table>
				</div>
			</div>
		</div>
	</div>
</body>
</html>