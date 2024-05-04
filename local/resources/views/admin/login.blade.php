<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<style>
			.form-signin
		{
		    max-width: 330px;
		    padding: 15px;
		    margin: 0 auto;
		}
		.form-signin .form-signin-heading, .form-signin .checkbox
		{
		    margin-bottom: 10px;
		}
		.form-signin .checkbox
		{
		    font-weight: normal;
		}
		.form-signin .form-control
		{
		    position: relative;
		    font-size: 16px;
		    height: auto;
		    padding: 10px;
		    -webkit-box-sizing: border-box;
		    -moz-box-sizing: border-box;
		    box-sizing: border-box;
		}
		.form-signin .form-control:focus
		{
		    z-index: 2;
		}
		.form-signin input[type="text"]
		{
		    margin-bottom: -1px;
		    border-bottom-left-radius: 0;
		    border-bottom-right-radius: 0;
		}
		.form-signin input[type="password"]
		{
		    margin-bottom: 10px;
		    border-top-left-radius: 0;
		    border-top-right-radius: 0;
		}
		.account-wall
		{
		    margin-top: 20px;
		    padding: 40px 0px 20px 0px;
		    background-color: #f7f7f7;
		    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
		    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
		    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
		}
		.login-title
		{
		    color: #555;
		    font-size: 18px;
		    font-weight: 400;
		    display: block;
		}
		.profile-img
		{
		    width: 96px;
		    height: 96px;
		    margin: 0 auto 10px;
		    display: block;
		    -moz-border-radius: 50%;
		    -webkit-border-radius: 50%;
		    border-radius: 50%;
		}
		.need-help
		{
		    margin-top: 10px;
		}
		.new-account
		{
		    display: block;
		    margin-top: 10px;
		}


		.button-29 {
		  align-items: center;
		  appearance: none;
		  background-image: radial-gradient(100% 100% at 100% 0, #5adaff 0, #5468ff 100%);
		  border: 0;
		  border-radius: 6px;
		  box-shadow: rgba(45, 35, 66, .4) 0 2px 4px,rgba(45, 35, 66, .3) 0 7px 13px -3px,rgba(58, 65, 111, .5) 0 -3px 0 inset;
		  box-sizing: border-box;
		  color: #fff;
		  cursor: pointer;
		  display: inline-flex;
		  font-family: "JetBrains Mono",monospace;
		  height: 48px;
		  justify-content: center;
		  line-height: 1;
		  list-style: none;
		  overflow: hidden;
		  padding-left: 16px;
		  padding-right: 16px;
		  position: relative;
		  text-align: left;
		  text-decoration: none;
		  transition: box-shadow .15s,transform .15s;
		  user-select: none;
		  -webkit-user-select: none;
		  touch-action: manipulation;
		  white-space: nowrap;
		  will-change: box-shadow,transform;
		  font-size: 18px;
		}

		.button-29:focus {
		  box-shadow: #3c4fe0 0 0 0 1.5px inset, rgba(45, 35, 66, .4) 0 2px 4px, rgba(45, 35, 66, .3) 0 7px 13px -3px, #3c4fe0 0 -3px 0 inset;
		}

		.button-29:hover {
		  box-shadow: rgba(45, 35, 66, .4) 0 4px 8px, rgba(45, 35, 66, .3) 0 7px 13px -3px, #3c4fe0 0 -3px 0 inset;
		  transform: translateY(-2px);
		}

		.button-29:active {
		  box-shadow: #3c4fe0 0 3px 7px inset;
		  transform: translateY(2px);
		}

		@media (min-width: 768px) {
		  .button-36 {
		    padding: 0 2.6rem;
		  }
		}


		/* CSS */
		.button-36 {
		  background-image: linear-gradient(92.88deg, #455EB5 9.16%, #5643CC 43.89%, #673FD7 64.72%);
		  border-radius: 8px;
		  border-style: none;
		  box-sizing: border-box;
		  color: #FFFFFF;
		  cursor: pointer;
		  flex-shrink: 0;
		  font-family: "Inter UI","SF Pro Display",-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen,Ubuntu,Cantarell,"Open Sans","Helvetica Neue",sans-serif;
		  font-size: 16px;
		  font-weight: 500;
		  height: 4rem;
		  padding: 0 1.6rem;
		  text-align: center;
		  text-shadow: rgba(0, 0, 0, 0.25) 0 3px 8px;
		  transition: all .5s;
		  user-select: none;
		  -webkit-user-select: none;
		  touch-action: manipulation;
		}

		.button-36:hover {
		  box-shadow: rgba(80, 63, 205, 0.5) 0 1px 30px;
		  transition-duration: .1s;
		}

		@media (min-width: 768px) {
		  .button-36 {
		    padding: 0 2.6rem;
		  }
		}

/* CSS */

	</style>
</head>
<body style="background-image: url('public/image/bg-01.jpg'); height: 100%; background-position: center; background-repeat: no-repeat;
  background-size: cover;">
	<div class="container">
		@if(Session::has('message'))
				<script>
					alert('{{ Session::get('message') }}');
				</script>
				@endif
    <div class="row" style="margin-top: 100px;">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <div class="account-wall" style="border-radius:30px 30px 30px;">
            	            <h1 class="text-center login-title">Vui lòng sử dụng tài khoản của website để đăng nhập!</h1>
                <img class="profile-img" src="{{ url('public/image/Vista_icons_08.png') }}"
                    alt="">
                <form class="form-signin" action="{{ url('admin/admin') }}" method="post">
                	{{ csrf_field() }}
                <input type="text" class="form-control" placeholder="Username" name="username" required autofocus>
                <input type="password" class="form-control" placeholder="Password" name="pass" required>
                <button class="btn btn-lg btn-primary btn-block button-29" type="submit">
                    Sign in</button>
                <label class="checkbox pull-left">
                    <input type="checkbox" value="remember-me">
                    Remember me
                </label>
                <a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span>
                </form>
                <a href="{{ route('adminsqlkhachhang/addusers') }}" class="text-center new-account">Create an account </a>
            </div>
        </div>
    </div>
</div>
</body>
</html>