<?php require('../config.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gallery</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Comic+Neue:300,400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css" />
  <script src="https://kit.fontawesome.com/f3bfbc9f38.js" crossorigin="anonymous"></script>
</head>
<body>
<header>
    <nav>
        <h1>Photo Gallery</h1>
    </nav>
    <div class="line"></div>
</header>

<br>

<div class="container">
    <div class="row">

    <div class="col-sm-4">
      <img src="img/img1.png" alt="sky" class="img-fluid">
    </div><!--col-sm-->

  </div><!--row-->
</div><!--container-->

<br>

<div class="line"></div>

<footer>
    <h1>Register Photo</h1>
    <div class="container">
   
        <div style="color:white;font-size:25px;" class="div-msg" id="div-msg"></div>
        <form action="" method="POST" role="form" id="form-register" enctype="multipart/form-data">

          <div class="form-group">
              <label for="">Nome</label>
              <input type="text" class="form-control" name="name" placeholder="Nome"> 
          </div><!--form--group-->

          <div class="form-group">
              <label for="">Image</label>
              <input type="file" class="form-control" name="image"> 
          </div><!--form--group-->
            
            <button type="submit" class="btn btn-primary">Register!</button>

        </form>
    </div><!--container-->
</footer>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="js/xhttp.js"></script>
<script src="js/main.js"></script>
</body>
</html>