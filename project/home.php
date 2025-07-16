<?php
include("class/users.php");
$email=$_SESSION['email'];
$profile=new users;
$profile->user_profile($email);
//print_r($profile->data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2> Online Quiz System</h2>
  <ul class="nav nav-tabs">
    <li ><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1">Profile</a></li>
    <li style="float: right;"><a data-toggle="tab" href="#menu3">Logout</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade">
      <h3>HOME</h3>
      <center><button type="button" class="btn btn-primary" data-toggle="tab" href="#select">Start Quiz</button></center>

      <div class="col-sm-4"></div>
      <div class="col-sm-4"><br>
      <div id="select" class="tab-pane fade">
      
      <form method="post" action="questions.php">

      <center><select class="form-control"  id="" name="cat"></center>
      <option >Select Category</option>
      <option >PHP</option>
      <option >PYTHON</option>
      <option >JAVA</option>
      <option >CSS</option>
      <option >HTML</option>
   </select><br>
   <center>  <input type="submit" value="submit" class="btn btn-primary" /> </center>
   </form>
      </div>
    </div>
<div class="col-sm-4"></div>
    </div>

    <div id="menu1" class="tab-pane fade">
      <h3>Showing Profile</h3>
      <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Image</th>
      </tr>
    </thead>
    <tbody>
      <?php
    foreach($profile->data as $prof)
  {?>
      <tr>
        <td><?php echo $prof['id'];?></td>
        <td><?php echo $prof['name'];?></td>
        <td><?php echo $prof['email'];?></td>
        <td><img src="img/<?php echo $prof['img']; ?>" alt="" width="35px" height="25px" /></td>
      </tr>
      
    </tbody>
    <?php   }?>
  </table>

    </div>

    </div>
    
    <div id="menu3" class="tab-pane fade">
      <h3>Logout</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
  </div>
</body>
</html>
