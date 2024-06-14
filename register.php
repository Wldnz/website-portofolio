

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<style>
    *{
        font-family: Arial, Helvetica, sans-serif;
        margin: 0;
        padding: 0;
    }
    body{
        background-color: blueviolet;
    }

    .container{
        padding: 15px;
        margin: auto;
        width: 400px;
        height: 700px;
        background-color: white;
        box-shadow: 25px 20px 0 grey;
    }
    .isi{
        margin: 180px 0 100px 0;
    }
    input{
        margin:10px 30px 10px 20px;
        background-color: white;
        color: black;
        width: 250px;
        height: 30px;
        border: 2px solid black;
        border-radius: 10px;
        text-align: center;
    }

    #email{
        margin-left: 50px;
    }

    button{
        width: 180px;
        height: 40px;
        position: relative;
        top: 30px;
        left: 20px;
        border: 2px solid white;
        border-radius: 15px;
        background-color: blueviolet;
        color: white;
    }

</style>
<body>

   <form action="" method="post">
        <div class="container">
        <!-- <?= $current_messgae ?> -->
            <h3> REGISTER </h3>
                
                <label for="username">Username : </label>
                <input type="text" name="username" placeholder="Username" minlength="3" maxlength="16" id="username" required>
                <label for="password">Password : </label>
                <input type="password" name="password" placeholder="password" minlength="8" maxlength="16" id="password" required>
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" placeholder="name@address.com" required>
                <button type="submit" name="register">REGISTER</button>    
                <button type="submit" name="login">LOGIN</button>    
        </div>
   </form>

</body>
</html>