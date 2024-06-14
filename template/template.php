<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    @font-face {
        font-family: oswald;
        src: url(/font/Oswald-VariableFont_wght.ttf);
    }
    body{
        margin: 0;
        padding: 0;
        background-color: #7F6DAF ;
    }
    .navbar{
        background-color: #7F6DAF;
        width: 100%;
        height: 100px;
        border-radius:30px ;
        box-shadow: 0 3px 0 rgb(74, 73, 73);
    }
    .user-icon{
        width: 70px;
        height: 70px;
        border-radius: 50px;
        background-color: grey;
        margin: 25px 0 10px 40px ;
    }
    #username{
    font-size: 25px;
    margin: 20px 0 40px 140px;
    position: relative;
    bottom: 55px;
    text-decoration: none;
    color: white;
    }

    #control-portofolio{
    font-size: 16px;
    margin: 20px 0 40px 140px;
    position: relative;
    left: 250px;
    bottom: 20px;
    text-decoration: none;
    color: white;
    }

    #control-about{
    font-size: 16px;
    margin: 20px 0 40px 140px;
    position: relative;
    left: 200px;
    bottom: 20px;
    text-decoration: none;
    color: white;
    }

    #control-contact{
    font-size: 16px;
    margin: 20px 0 40px 140px;
    position: relative;
    left: 150px;
    bottom: 20px;
    text-decoration: none;
    color: white;
    }
    #input-logout{
        width: 80px;
        height: 80px;
        background: none;
        border: none;
    }

</style>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <form action=""></form>
       <div class="user-icon" name="icon-user" type="submit">
        <form action="">
        <input type="submit" name="logout" id="input-logout" value="">
        </form>
       </div>
       <a href="index.php" id="username">Hello,USERNAME</a>
       <a href="portofolio.php" id="control-portofolio">PORTOFOLIO</a>
       <a href="about.php" id="control-about">ABOUT ME</a>
       <a href="contact.php" id="control-contact">CONTACT ME</a>
       
    </nav>
</body>
</html>