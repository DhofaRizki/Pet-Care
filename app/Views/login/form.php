<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  
</head>

<body style="background-image: url('/img/bg.jpg');">

<form method="post" action="<?=base_url('login')?>">
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
      <div class="card text-white bg-secondary mb-3">
            <div align="center" class="card-header">LOGIN</div>
            <div class="card-body">

                <input type="hidden" name="id" value="<?=$data['id']?? ''?>" >

            <div class="form-group row">
                <label for="email" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-6">
                    <input type="text" name="email" class="form-control" id="form" placeholder=""required value="<?=$data['email']?? ''?>">
                </div>
            </div>
                
            <div class="form-group row">
                <label for="katasandi" class="col-sm-3 col-form-label">Password</label>
                <div class="col-sm-6">
                    <input type="password" name="katasandi" class="form-control" id="form" placeholder="" required value="<?=$data['katasandi']?? ''?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="tingkat" class="col-sm-3 col-form-label">Tingkat</label>
                <div class="col-sm-4">
                    <select name="tingkat" class="form-control" id="form" value="<?=$data['tingkat']?? ''?>">
                        <option value="" disabled selected>-</option>
                        <option value="ADM">Admin</option>
                        <option value="PGN">Pengguna</option>
                    </select>
                </div>
            </div>

                
        <div align="center" class="card-footer">
            <button  class="btn btn-primary">
                Login
            </button>
            <br>
            <br>
            <p>New around here? Sign UP First</p>
            <div class="social-auth-links text-center mt-2 mb-3">
            <a href="/signup/form" class="btn btn-primary">
                SignUp
            </a>
        </div>
        
        </div>
      </div>
    </div>
  </div>
</div>
</form>

<!-- Bootstrap JS and Popper.js (Optional, but needed for some Bootstrap features) -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
