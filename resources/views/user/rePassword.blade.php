<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../../css/util.css">
	<link rel="stylesheet" type="text/css" href="../../css/main.css">
</head>
<body>
	<div class="container-login100">
		<div class="wrap-login100 p-t-85 p-b-20">
			<form action="../repass/{{ $user->id }}" method="post" class="login100-form validate-form">
				{{csrf_field ()}}
				<span class="login100-form-title p-b-70">
					Thay Đổi Mật Khẩu	
				</span>
				{{ $error or ''}}
				<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Enter username">
					<input class="input100" type="password" name="repassword">
					<span class="focus-input100" data-placeholder="Mật khẩu mới"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
					<input class="input100" type="password" name="repassword">
					<span class="focus-input100" data-placeholder="Nhập lại Mật Khẩu"></span>
				</div>

				<div class="container-login100-form-btn">
					<button class="login100-form-btn">
						Đổi Mật Khẩu
					</button>
				</div>
			</form>
		</div>
	</div>
</body>
</html>