<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">   
</head>
<body style="overflow: hidden;">
    
    <div id="navbar">
        <nav style="background-color: #928EFF; height: 55px;">
            <span class="navbar-brand mb-0 h1">
                <h5 style="margin-left: 1200px; margin-top: 7px">Login</h5>
            </span>
        </nav>
    </div>
    
    <div class="card" style="width: 20rem; background: white; margin-top: 100px; margin-left: 38%;">
            <div id="user">
                <img src="img/useer.png" alt=""  style="width: 120px; height: 120px; margin-top: -60px; margin-left : 100px">
            </div>
        <div class="card-body">
            <h6 style="text-align: center;">Login To Your Account</h6>
            <!-- <form submit="return validasi()" style="margin-top: 15%;" >
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="password">
                </div>

                <button type="submit" class="btn btn-primary" style="margin-left : 100px; margin-top: 15px" onclick="validasi()">Login</button>
            </form> -->

            <form action="proseslogin.php" method="post" onSubmit="return validasi()">
            <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="emaila" aria-describedby="emailHelp">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="password">
                </div>

                <button type="submit" class="btn btn-primary" style="margin-left : 100px; margin-top: 15px" onclick="validasi()">Login</button>
		</form>
        </div>
    </div>

    <script type="text/javascript">
	function validasi() {
		var email = document.getElementById("email").value;
		var password = document.getElementById("password").value;		
		if (email != "" && password!="") {
			return true;
		}else{
			alert('email dan Password harus di isi !');
			return false;
		}
	}
 
    </script>

</body>
</html>