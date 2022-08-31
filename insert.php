<?php
    include('connect.php')
    ?>


<?php

    if(isset($_POST['submit'])){

        $name=$_POST['name'];
        $home=$_POST['home'];

        $sql="Insert into users(name,home) values('$name','$home')";
        $result=mysqli_query($conn, $sql);

        if($result){
            header('location: display.php');
        }
        else{
            die(mysqli_error($conn));
        }
    }

?>