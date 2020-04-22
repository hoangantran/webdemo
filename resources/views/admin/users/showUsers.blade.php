<!DOCTYPE html>
<html>
<head>
	<title>Admin - Quản Lí Users</title>
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
					<button><a href="quanliusers" style="text-decoration-line: none"><b>QUẢN LÍ USERs</b></a></button>
					<button><a href="../loaisanpham/quanliloai" style="text-decoration-line: none"><b>QUẢN LÍ CATALOG</b></a></button>
					<button><a href="admin/sanpham/quanlisanpham" style="text-decoration-line: none"><b>QUẢN LÍ PRODUCT</b></a></button>
				</div>
			</div>
			<div class="admin-content-right">
				<div class="admin-content-right-top">
					<div class="insert-button">
						<button><a href="insert" style="text-decoration-line: none"><b>Thêm User</b></a></button>
					</div>
					<div class="search-button">
						<form action="search" method="post">
							{{csrf_field ()}}
							<input type="hidden" name="_token" value="{{csrf_token()}}";>
							<input type="text" name="tukhoa" placeholder="Nhập Username cần tìm">
							<input type="submit" value="Search">
						</form>
					</div>
				</div>
				<div class="admin-content-right-middle">
					<h3>USER  LIST</h3>
				</div>
				<div class="admin-content-right-bottom">
					<table border="">
						<tr>
							<td>ID</td>
							<td>Tên</td>
							<td>UserName</td>
							<td>PassWord</td>
							<td>Email</td>
							<td colspan="2">Chức năng</td>
						</tr>
						@foreach($users as $user)
						<tr>
							<td> {{ $user->id }} </td>
							<td>{{ $user->name }}</td>
							<td>{{ $user->username }}</td>
							<td>{{ $user->password }}</td>
							<td>{{ $user->email }}</td>
							<td><a href="delete/{{$user->id}}"><button>Xóa</button></a></td>
							<td><a href="update/{{$user->id}}"><button>Sửa</button></a></td>
						</tr>
						@endforeach
					</table>
				</div>
			</div>
		</div>
	</div>
</body>
</html>