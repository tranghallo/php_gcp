<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" />
    <title>PHP example</title>
</head>

<body>
<div class="container">

    <h1>First PHP example</h1>
    <form action="simpleform.php" method="post">
        Your name: <input type="text" name="yourname" class="form-control" /> <br />
        <input type="submit" value="Submit" class="btn btn-primary" />
    </form>

    <?php
    $str = "Hello world";
    if (isset($_POST['yourname']))
        $str = "You've entered ". $_POST['yourname'];
    echo "<div style='font-style:italic; color:green'> $str </div>" ;
    ?>

</div>
</body>
</html>