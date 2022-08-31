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
    include("connect.php")
    ?>

<div class=" container my-5">
<button name="submit" class="btn btn-primary">
 <a href="user.php" class="text-white">Add</a>    
</button>
</div>
    
    <div class="container">
        <div class="row justify-content-center">
            <table class="table">

                <thead>
                    <tr>

                        <th scope="col">ID</th>
                        <th scope="col">name</th>
                        <th scope="col">home</th>
                    </tr>
                </thead>


                <tbody>
                    <?php

                    $sql = "Select * from users ";
                    $result = mysqli_query($conn, $sql);

                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $id = $row['id'];
                            $name = $row['name'];
                            $home = $row['home'];

                            echo  ' <tr>
          <th scope="row">' . $id . '</th>
          <td scope="row">' . $name . '</td>
          <td scope="row">' . $home . '</td>
          <td>
          <button  class="btn btn-primary">
          <a href="update.php? updateid='.$id.'" 
          class="text-white">Update</a>    
         </button>
  
         <button  class="btn btn-primary">
          <a href="delete.php? deleteid='.$id.'" 
          class="text-white">Update</a>    
         </button>
  
         </td>
          
      
          </tr>';
                        }
                    }

                    ?>




                </tbody>
            </table>
        </div>
    </div>

</body>

</html>