<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./images/16_16.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.css"/>
    <link rel="stylesheet" href="index.html">
    <link rel="stylesheet" href="styleconnect.css">
    <title>Message</title>
</head>
<body>
    <div class="popup center">
        <div class="icon">
            <i class="fa fa-check"></i>
        </div>
        <div class="title">
            Success!
        </div>
        <div class="description">
            Your message have been sent successfully. Thanks for visiting us
        </div>
        <div class="home">
            <button onclick="window.location.href='index.html'" id="gohome">Go Home</button>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typeit/7.0.4/typeit.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
<?php
    $fn = $_POST['fn'];
    $email = $_POST['email'];
    $sub = $_POST['sub'];
    $ta = $_POST['ta'];

    $conn = new mysqli('localhost','root','','connect');
    if ($conn -> connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into names(fn,email,sub,ta) values(?,?,?,?)");
        $stmt->bind_param("ssss",$fn,$email,$sub,$ta);
        $stmt->execute();
        $conn->close();
    }
?>