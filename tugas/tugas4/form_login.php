<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 4</title>
    
    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
   

    <style>
        body{
            background:#dedbd7 ;
        
        }
    </style>
</head>
<body>
<div class="container">

		<div class="row">
			<div class="col-md-4 offset-md-4 mt-5">

				<div class="card mt-5">
					<div class="card-title text-center mt-3">
						<h1>Login</h1>
					</div>
					<div class="card-body">
						<form  method="post">
							<div class="form-group">
								<label for="username">Email address</label>
								<input type="text" name="username" class="form-control" id="username" aria-describedby="username" placeholder="username">

							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" name="password" class="form-control" id="password" placeholder="Password">
							</div>

							<button name="proses" type="submit"  
                             class="btn btn-primary col-md-4 ">Sign</button>
						</form>
                      

					</div>
				</div>
			</div>

		</div>

	</div>
   
        
    <?php
        session_start();

        // Fungsi untuk melakukan cek login
        function cekLogin($username, $password) {
            // Ganti dengan kondisi yang sesuai dengan kebutuhan Anda
            $username_yang_diharapkan = "admin";
            $password_yang_diharapkan = "mimin";

            if ($username === $username_yang_diharapkan && $password === $password_yang_diharapkan) {
                return true; // Login berhasil
            } else {
                return false; // Login gagal
            }
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["proses"])) {
            $username = $_POST["username"];
            $password = $_POST["password"];

            if (cekLogin($username, $password)) {
                // Jika login berhasil, arahkan ke halaman admin.php
                header("Location: admin.php");
                exit;
            } else {
                echo "<br><center>Invalid Username or Password.<center>";
            }
        }
?>








    
    
</body>
</html>