<?php
include 'connect.php';

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];

    
   $sql="insert into `user` (name,email,mobile,password)
   values('$name','$email','$phone','$password')";
   $result=mysqli_query($conn,$sql);

        if($result){
            echo 'success';}
            else{
                die(mysqli_error($conn));
            }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   
</head>
<body>
    <div class="container">
    <form class="align-center p-5 mt-5 frm ms-5" action="#" method="POST">
          
            <div class="row">

                <div class="col-md-6">
                    <div class="form-group">
                        <i class="fa-solid fa-user"></i>
                    <input type="name" name="name"  class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter your name">
                </div>
            </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <i class="fa-solid fa-envelope"></i>
                      <input type="text" name="email"  class="form-control"  placeholder="Enter your email">
                    </div>
                </div>
            </div>
            
            <div class="row">

                <div class="col-md-6">
                    <div class="form-group">
                        <i class="fa-solid fa-phone"></i>
                      <input type="phone" name="phone"  class="form-control" id="phone" aria-describedby="emailHelp" placeholder="Enter your phone">
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="form-group">
                        <i class="fa-solid fa-phone"></i>
                      <input type="password" name="password"  class="form-control" id="password"  placeholder="Enter your password">
                    </div>
                </div>

            </div>
              
            <button type="submit" class="btn btn-primary msg" name="submit" >Add User</button>
            
          </form>
</div>
</body>
</html>