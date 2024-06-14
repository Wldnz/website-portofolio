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
        top: 30px;
        height:130px;
    }
    p{
        position: relative;
        top: 15px;
        text-align: center;
        color: white;
    }
    .main{
        margin: 50px 0 0 20px;
        display: flex;
        justify-content: space-evenly;
    }
    .container{
        display: grid;
        width: 220px;
        height: 200px;
        background-color: #7F6DAF;
        border: 0.5px solid rgb(74, 73, 73);
        border-radius: 40px;
        box-shadow: 0 10px 0 rgb(74, 73, 73);
        justify-content: center;
    }
</style>
<body>
    <?php include"./template/template.php" ?>

    <h3>ABOUT SKILL</h3>


    <div class="main">
        <div class="container">
            <img src="./image/image web.png" alt="comingsoon">
            <P> Web Development</P>
        </div>
        <div class="container">
            <img src="./image/game-development.png" alt="comingsoon">
            <P>Game Development</P>
        </div>
        <div class="container">
            <img src="./image/coming-soon.png" alt="comingsoon">
            <P>Coming Soon !</P>
        </div>
    </div>
    <div class="main">
        <div class="container">
            <img src="./image/coming-soon.png" alt="comingsoon">
            <P>Coming Soon !</P>
        </div>
        <div class="container">
            <img src="./image/coming-soon.png" alt="comingsoon">
            <P>Coming Soon !</P>
        </div>
        <div class="container">
            <img src="./image/coming-soon.png" alt="comingsoon">
            <P>Coming Soon !</P>
        </div>
    </div>

</body>
</html>