<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    



<?php



  include('connect.php'); 
  $id=$_GET['updateid'];
  $sql="Select * from users where id=$id ";

  $result=mysqli_query($conn,$sql);
  $row=mysqli_fetch_assoc($result);
  
    $name=$row['name'];
    $home=$row['home'];
    
  


$id=$_GET['updateid'];

    if(isset($_POST['update'])){

        $name=$_POST['name'];
        $home=$_POST['home'];

        $sql="Update users set id='$id',
        name='$name', home='$home' where id=$id";
        $result=mysqli_query($conn, $sql);

        if($result){
           
             header('location: display.php');
        }
        else{
            die(mysqli_error($conn));
        }
    }

?>

<h1 style="text-align: center;">Update</h1>
    <div class="container my-5">
        <form action="" method="POST">
            <div class="mb-3">
                <label class="form-label">Enter name</label>
                <input type="text" name="name" class="form-control"value="<?php echo $name?>" >

            </div>
  
            <label class="form-label">Enter home</label>
            <input type="text" name="home" class="form-control"value="<?php echo $home?>" id="name">
            <button type="submit" name="update" class="btn btn-primary">Update</button>
        </form>
    </div>

    </div>
</body>
</html>