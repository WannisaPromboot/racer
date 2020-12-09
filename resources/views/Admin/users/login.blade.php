<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="css/style.css">

    <link rel="icon" href="Favicon.png">

    <!-- Bootstrap CSS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}">

    <title>เข้าสู่ระบบ Beautytobook</title>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);
            body{
                margin: 0;
                font-size: .9rem;
                font-weight: 400;
                line-height: 1.6;
                color: #212529;
                text-align: left;
                background-color: #f5f8fa;
            }

            .navbar-laravel
            {
                box-shadow: 0 2px 4px rgba(0,0,0,.04);
            }

            .navbar-brand , .nav-link, .my-form, .login-form
            {
                font-family: Raleway, sans-serif;
            }

            .my-form
            {
                padding-top: 1.5rem;
                padding-bottom: 1.5rem;
            }

            .my-form .row
            {
                margin-left: 0;
                margin-right: 0;
            }

            .login-form
            {
                padding-top: 1.5rem;
                padding-bottom: 1.5rem;
            }

            .login-form .row
            {
                margin-left: 0;
                margin-right: 0;
            }

            main{
                margin-top: 10%;
            }
    </style>
</head>
<body>

<main class="login-form" >
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="background-color: #41c8f5  !important;">LOGIN</div>
                    <div class="card-body">
                        <form action="{{url('checkLoginadmin')}}" method="post">
                            @csrf
                            <div class="form-group row">
                                <label for="email_address" class="col-md-4 col-form-label text-md-right" autocomplete="off">E-Mail Address</label>
                                <div class="col-md-6">
                                    <input type="text" id="email_address" class="form-control" name="email" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                <div class="col-md-6">
                                    <input type="password" id="password" class="form-control" name="password" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right"></label>
                                <div class="col-md-6 ">
                                    <div class="text-danger">{{!empty($error_mes)? $error_mes:''}}</div>
                                </div>
                            </div>
                            
{{-- 
                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <a href="#" data-toggle="modal" data-target="#myModal" style="color:#aca6a6;" class="btn btn-link">
                                        Forgot Your Password?
                                    </a>
                                </div>
                            </div> --}}

                            <div class="col-md-6 offset-md-4">
                                <button type="submit" style="background-color: #41c8f5  !important; color:black;" class="btn btn-lg btn-block">
                                    Login
                                </button>
                                {{-- <a href="#" class="btn btn-link">
                                   
                                </a> --}}
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

    
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		{{-- <form action="{{route('ForgotPassword',['User','Login_admin'])}}" method="POST"> --}}
			{{ csrf_field() }}
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Forgot Password</h5>
			</div>
			<div class="modal-body">
				<div class="form-group">
					<label>Email</label>
					<input type="email"  name="forgot_email" class="form-control" id="email" required>
				</div>
			</div>
			<div class="modal-footer">
				<button type="sumbit" class="btn  btn-primary">{{Session::get('lang')=='th'?'ยืนยัน ' :'Confirm'}}</button>
				<button type="button" class="btn btn-danger" data-dismiss="modal">{{Session::get('lang')=='th'?'ปิด' :'Close'}}</button>
			</div>
			</div>
		</form>
      </div>
      

</main>
<script src="{{ asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script> 

<script>
    var A  = "{{Session::get('success')}}";
    var B  = "{{Session::get('error')}}";
    if(A){
      Swal.fire({
            text:A,
            type: 'success'
        });
    }else if(B){
      Swal.fire({
            text:B,
            type: 'error'
        });
    }
</script>
</body>
</html>