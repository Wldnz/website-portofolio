<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./image/coming-soon.png" type="image/png">
    <title>PORTOFOLIO</title>
    <link rel="stylesheet" href="index2.css">
</head>
<style>
    body{
        margin: 0;
        padding: 0;
    }
    h3{
        text-align: center;
        color: white;
    }
    img{
        position: relative;
        top: 60px;
        left:25px;
        height:60px;
    }
    p{
        position: relative;
        top: 25px;
        text-align: center;
        color: white;
    }
    #alamat{
        size: 30px;
        top: 0;
        text-align: left;
        color: white;
    }
    .main{
        margin: 50px 0 0 20px;
        display: flex;
        justify-content: space-evenly;
    }
    .container{
        display: grid;
        width: 250px;
        height: 200px;
        background-color: #7F6DAF;
        border: 0.5px solid rgb(74, 73, 73);
        border-radius: 30px;
        box-shadow: 0 10px 0 rgb(74, 73, 73);
        justify-content: center;
    }
    .alamat{
        margin: 50px 0 20px 100px;
        color: white;
        width: 400px;
        height: 200px;
    }
    #email{
        position: relative;
        top: 60px;
        left:70px;
        height:60px;
    }
    #github{
        position: relative;
        top: 60px;
        left:35px;
        height:60px;
    }
</style>
<body>
    <?php include"./template/template.php" ?>

    <h3>CONTACT ME</h3>

   <div class="alamat">
        <h2>LOCATION</h2>
        <h3 id="alamat">Jl. Tegal Rotan Raya No.9 A, Sawah Baru, Kec. Ciputat, Kota Tangerang Selatan, Banten 15412</h3>
   </div>
    <div class="main">
        <div class="container">
            <img src="./image/instagram (1).png" alt="comingsoon">
            <P>@Starfours_</P>
        </div>
        <div class="container">
            <img src="./image/discord.png" alt="comingsoon">
            <P>Starfours#0964</P>
        </div>
        <div class="container">
            <img src="./image/gmail.png" alt="comingsoon" id="email">
            <P>WildanOfficial32@gmail.com</P>
        </div>
        <div class="container">
            <img src="./image/github.png" alt="comingsoon" id="github">
            <P>Username Wildan</P>
        </div>
    </div>

</body>
</html>