<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"><script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1,
    shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,300&display=swap" rel="stylesheet">
	<style>
		*{
			margin:0;
			padding:0;
		}
		body{
		background: url(img/10.jpg);
		font-family: 'Poppins',sans-serif;

		}
		.login-box{
			background:rgba(0,0,0,.5);
			width:350px;
			height:395px;
			margin-top:130px;
			color:white;
			border-radius:30px;
			margin-left:106px;
		}
		.user{
			width:95px;
			height:94px;
			border-radius:61px;
			position:absolute;
			top:84px;
			right:625px;
			overflow:hidden;
			color:pink;

		}
		.sign{
    	    font-size: 20px;
            text-align: center;
            font-family: sans-serif;
            letter-spacing: 1px;
        }
        .form-group{
		    padding-left:20px;
		    width:96%;
		    margin-top: 20px;
		}
		.form-group input{
            border-radius: 25px;
            background: linear-gradient(to right,#e2d7d7,#e6cece);
        }
        label{
			font-size: 16px;
            margin-left: 12px;
            font-family: inherit;
		}
		.btn{
		    margin-left: 104px;
            font-size: 18px;
            width: 34%;
        }
        .mb{
	        margin-top: 7px;
            font-size: 15px;
        }
        .mb-1{
		    text-align: right;
            margin-top: -21px;
	    }
	     a {
		    text-decoration: none;
            color: #f1e0e0;
            margin-top: 2px;
            font-size: 14px
	    }
	    .account{
	        text-align:center;
	    }
	   .dont{
		    font-size: 15px;
            margin-top: 19px;
	    }
	    .register{
	        font-size: 16px;
            color: aqua;
        }
        @media(max-width:1097px){
			.login-box{
				width:100%!important;
				margin-left:0px!important;

			}
			.user{
				top:87px!important;
				right:513px!important;
			}
			.btn {
                margin-left: 148px!important;
	            }
		}
		@media(max-width:1028px){
			.login-box{
				width:100%!important;
				margin-left:0px!important;

			}
			.user{
				top:87px!important;
				right:468px!important;
			}
            .btn {
                margin-left: 148px!important;
	            }
		}
		
		@media(max-width:1023px){
			.login-box{
				width:100%!important;
				margin-left:0px!important;

			}
			.user{
				top:86px!important;
				right:334px!important;
			}
			.btn {
                margin-left: 104px!important;
	            }
		}
		@media(max-width:766px){
			.login-box{
				width:100%!important;
				margin-left:0px!important;
			}
			.user{
				top:86px!important;
				right:161px!important;
			}
			
		}
		@media(max-width:600px){
			.login-box{
				width:100%!important;
				margin-left:0px!important;
			}
			.user{
				top:86px!important;
				right:146px!important;
			}
			
		}
		@media(max-width:320px){
			.login-box{
				width:100%!important;
				margin-left:0px!important;
			}
			.user{
				top:86px!important;
				right:114px!important;
			}
			.mb{
				font-size:11px;}
			a{font-size:11px;}

		}
	
	</style>
</head>
<body>
    <section>
	 <!--start container-->
	    <div class="container">
	    	<div class="row">
	    		<div class="col-sm-3">
	    		</div>
	    		<div class="col-sm-6">
                    <div class="login-page">
                    	<img src="img/logo2.jpg" class="user">
                        <div class="login-box">
                    		<br>
                    		<br>
                    		<h1 class="sign">Sign in to your account</h1>
                    		<form method="post" action="login.php">
                    			<div class="form-group">
                    				<label>Email</label>
                    				<input type="text" name="email" placeholder="enter email" class="form-control">
                    			</div>
                    			
                    			<div class="form-group">
                    				<label>Password</label>
                    				<input type="password" name="password" placeholder="enter password" class="form-control">
                    				<div class="mb">
                    				<input type="checkbox" value="Remember me"> Remember me</div>
                    				<div class="mb-1">
                                      <a href="">forgot my password?</a>
                    				
                    			</div>
                    			</div>

                    			<br>
                    			<input type="submit" name="" value="SIGN IN" class="btn btn-danger" style="border-radius:6px">
                    			<div class="account">
                    				<h6 class="dont">Don't have an account?<a href="admin/registraction.php" class="register"> Register</a></h6>
                    			</div>
                    		</form>
                    	</div>
                    </div>
	    		</div>
	    		<div class="col-sm-3">
	    		</div>
	    	</div>
	    </div>

	<!--end container-->
    </section>

</body>
</html>