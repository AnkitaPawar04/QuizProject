<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <br>
<div class="container">
<div class="row">
<div class="col-sm-12">
<div class="panel panel-danger">
      <div class="panel-heading">Government Polytechnic Thane</div>
      <div class="panel-body">Quiz system</div>
    </div>
</div>
</div>
</div>

<div class="container">
<div class="row">
<div class="col-sm-6">
                <div class="panel panel-info">
                <div class="panel-heading"> <h4>SignUp Form</h4></div>
                <div class="panel-body">
                    <?php
                    if(isset($_GET['run']) && $_GET['run']=="success"){
                        echo "<mark>registered successfully</mark>";
                    }
                    ?>
                <form  role="form" method="post" action="signup.php" enctype="multipart/form-data">
                    <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="name" class="form-control" id="name" name="n" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="e" placeholder="Enter email" >
                    </div>
                    <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter password" >
                    </div>
                    <div class="form-group">
                    <label for="pwd">Upload your image:</label>
                    <input type="file" class="form-control" id="file" name="img">
                    </div>
                    <div class="checkbox">
                    <label><input type="checkbox" name="remember"> Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
           </div>
</div>
</div>
<div class="col-sm-6">
                <div class="panel panel-info">
                <div class="panel-heading"> <h4>Login Form</h4></div>
                <div class="panel-body">
                <?php
                    if(isset($_GET['run']) && $_GET['run']=="failed"){
                        echo "<mark>Invalid user</mark>";
                    }
                    ?>


                <form role="form" method="post" action="login.php" enctype="multipart/form-data">
                    <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="e">
                    </div>
                    <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                    </div>
                    <div class="checkbox">
                    <label><input type="checkbox" name="remember"> Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
           </div>
</div>
    </div>
</div>
</div>
</body>
</html>