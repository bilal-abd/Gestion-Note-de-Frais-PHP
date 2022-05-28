<?php 
   session_start();
   if (!isset($_SESSION['username']) && !isset($_SESSION['id'])) {   ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head><br>
<body>
      <div class="container d-flex justify-content-center align-items-center"
      style="min-height: 100vh">
      	<form class="border shadow p-3 rounded"
      	      action="php/check-login.php" 
      	      method="post" 
      	      style="width: 450px;">
      	      <h1 class="text-center p-3">Connexion</h1>
      	      <?php if (isset($_GET['error'])) { ?>
      	      <div class="alert alert-danger" role="alert">
				  <?=$_GET['error']?>
			  </div>
			  <?php } ?>
		  <div class="mb-3">
		    <label for="username" class="form-label">Pseudo</label>
		    <input type="text" 
		           class="form-control" 
		           name="username" 
		           id="username">
		  </div>
		  <div class="mb-3">
		    <label for="password" class="form-label">Mot de passe</label>
		    <input type="password" name="password" class="form-control" id="password">
		  </div>
		  <div class="mb-1">
		    <label class="form-label">Se connecter en tant que :</label>
		  </div>
		  <select class="form-select mb-3" name="role" 
		          aria-label="Default select example">
			  <option selected value="user">Visiteur</option>
			  <option value="admin">Comptable</option>
		  </select><br>
		 
		  <center><button type="submit" class="btn btn-primary">
			  Se connecter </button></center><br>
		</form>
      </div>
</body>
</html>
<?php }else{
	header("Location: home.php");
} ?>