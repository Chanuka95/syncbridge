<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Your are Loged In</h1>

    <?php echo "First name"." - ". $this->session->userdata('fname'); ?>
    <br>
    <?php echo "Last name"." - ". $this->session->userdata('lname'); ?>
    
</body>
</html>