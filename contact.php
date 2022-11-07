<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <title>Contact</title>
</head>
<body>
    <?php include("./assets/nav.php"); ?>

    <div class="banner-1"></div>

    <div class="container">
        <h1>Contact Us</h1>
<div class="wrap">
        <div class="form">
            <img src="img/audi-contact-logo.png" alt="logo" style="width: 100%;">

                <?php if(isset($_POST['submit']))
                {
                    $a = "Message sent successfuly";
                    echo '<div class="alert alert-success" role="alert">'.$a.'</div>';
                } ?>
                      

            <form action="#" method="POST" autocomplete="off">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Your name" required>
                
                <label for="email">E-Mail</label>
                <input type="email" id="email" name="email" placeholder="Your email" required>
                
                <label for="age">Age</label>
                <input type="number" id="age" name="age" placeholder="Your age">

                <label for="textarea"></label>
                <textarea id="textarea" cols="22" rows="10" placeholder="Write Comment Here" required></textarea>
                
                <label for="submit"></label>
                <input type="submit" value="SEND" name="submit" class="btn btn-success contact-button"></input>
            </form>
        </div>
        
</div>
    </div>

    
    <hr>

    <div class="banner-2"></div>

    <?php include("./assets/footer.php"); ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>