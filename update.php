<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="select *from `crud` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$password=$row['password'];
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];
$sql="update `crud` set id =$id, name='$name',email='$email',password='$password'
where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        // echo "data successfully updated";
        header('location:display.php');
    }
    else{
        die(mysqli_error($con));
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <title>Crud operation</title>
  </head>
  <body>
    <div class="container my-5">
    <form method="POST">
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" placeholder="enter your name" name="name" autocomplete="off" value=<?php echo $name;?>>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" placeholder="enter your email" name="email" autocomplete="off" value=<?php echo $email;?>>
        </div>
        <div class="form-group">
            <label>Mobile</label>
            <input type="Number" class="form-control" placeholder="enter your mobile" name="mobile"autocomplete="off" value=<?php echo $mobile;?>>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" placeholder="emter your password" name="password"autocomplete="off" value=<?php echo $password;?>>
        </div>
        <button type="submit" name="submit"class="btn btn-primary">Update</button>
    </form>
    </div>
  </body>
</html>