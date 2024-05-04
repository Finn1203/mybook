<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add user</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!------ Include the above in your HEAD tag ---------->
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<style>
		body {
		    /* background: url('https://static-communitytable.parade.com/wp-content/uploads/2014/03/rethink-target-heart-rate-number-ftr.jpg') fixed;*/
		 
		}

		*[role="form"] {
		    max-width: 530px;
		    padding: 15px;
		    margin: 0 auto;
		    border-radius: 50px;
		    background-color: #f2f2f2;
		}

		*[role="form"] h2 { 
		    font-family: 'Open Sans' , sans-serif;
		    font-size: 40px;
		    font-weight: 600;
		    color: #000000;
		    margin-top: 5%;
		    text-align: center;
		    text-transform: uppercase;
		    letter-spacing: 4px;
		}

/* CSS */
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

		/* CSS */


		/* CSS */
		.button-63 {
		  align-items: center;
		  background-image: linear-gradient(144deg,#AF40FF, #5B42F3 50%,#00DDEB);
		  border: 0;
		  border-radius: 8px;
		  box-shadow: rgba(151, 65, 252, 0.2) 0 15px 30px -5px;
		  box-sizing: border-box;
		  color: #FFFFFF;
		  display: flex;
		  font-family: Phantomsans, sans-serif;
		  font-size: 20px;
		  justify-content: center;
		  line-height: 1em;
		  max-width: 100%;
		  min-width: 140px;
		  padding: 19px 24px;
		  text-decoration: none;
		  user-select: none;
		  -webkit-user-select: none;
		  touch-action: manipulation;
		  white-space: nowrap;
		  cursor: pointer;
		}

		.button-63:active,
		.button-63:hover {
		  outline: 0;
		}

		@media (min-width: 768px) {
		  .button-63 {
		    font-size: 24px;
		    min-width: 196px;
		  }
		}
	</style>
</head>
<body style=" background-image: url('../../public/image/bg-01.jpg'); 
		    height: 100%; 
		    background-position: center; 
		    background-repeat: no-repeat;
		    background-size:cover;">
	<div class="container" style="padding-top: 100px;">
            <form class="form-horizontal" role="form" action="{{ route('adminsqlkhachhang/postkh') }}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <h2>Đăng ký</h2>
                <div class="form-group" style="border-radius:70px 70px 70px;">
                    <label for="hoten" class="col-sm-3 control-label">Họ tên:</label>
                    <div class="col-sm-9">
                        <input type="text" id="txthoten" name="txthoten" placeholder="Họ Tên" class="form-control" autofocus required="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="username" class="col-sm-3 control-label">Username:</label>
                    <div class="col-sm-9">
                        <input type="text" id="txtusername" name="txtusername" placeholder="UserName" class="form-control" autofocus required="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password:</label>
                    <div class="col-sm-9">
                        <input type="password" id="password" name="PassWord" placeholder="PassWord" class="form-control" autofocus required="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="phoneNumber" class="col-sm-3 control-label">Điện thoại:</label>
                    <div class="col-sm-9">
                        <input type="number" id="phoneNumber" placeholder="Phonenumber" name="Phonenumber" class="form-control" autofocus required="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="Địa Chỉ" class="col-sm-3 control-label">Địa chỉ:</label>
                    <div class="col-sm-9">
                        <input type="text" id="txtdiachi" name="txtdiachi" placeholder="Địa chỉ" class="form-control" autofocus required="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email:</label>
                    <div class="col-sm-9">
                        <input type="email" id="email" placeholder="Email" class="form-control" name="email" autofocus required="">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block button-63" style="width: 200px; height: 50px; margin:auto" name="cmd">Xác nhận</button>
            </form> <!-- /form -->
        </div> <!-- ./container -->
</body>
</html>