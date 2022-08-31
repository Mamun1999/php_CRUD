<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
</head>

<body>


    <h1 style="text-align: center;">Register</h1>
    <div class="container my-5">
        <form action="insert.php" method="POST">
            <div class="mb-3">
                <label class="form-label">Enter name</label>
                <input type="text" name="name" class="form-control" >

            </div>

            <label class="form-label">Enter home</label>
            <input type="text" name="home" class="form-control" id="name">
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    </div>
</body>

</html>