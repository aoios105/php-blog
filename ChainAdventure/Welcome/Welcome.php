

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="../CSS/Core.css">
</head>
<body>
<div class="homepage-hero-module">
    <div class="video-container">
        <div class="filter"></div>
        <video autoplay loop class="fillWidth">
            <source src="../Media/Surf.mp4"
                    type="video/mp4" />Your browser does not support the video tag.
            <source src="/Users/armenbrown/PhpstormProjects/ChainAdventure/Login/Into_the_Wild/Into_the_Wild.webm"
                    type="video/webm" />Your browser does not support the video tag.
        </video>
        <div class="poster hidden">
            <img src="/Users/armenbrown/PhpstormProjects/ChainAdventure/Login/Into_the_Wild/Into_the_Wild.jpg" alt="">
        </div>
     <div class="main">
        <div class="h2">
            <h2>Welcome</h2>
        </div>

        <h1>Hi, <b><?php echo $_SESSION['username']; ?></b>. Welcome to our site.</h1>
        <p><a href="/Users/armenbrown/PhpstormProjects/ChainAdventure/Login/Login.php" class="btn btn-danger">Sign Out of Your Account</a></p>

    </div>

</body>
</html>