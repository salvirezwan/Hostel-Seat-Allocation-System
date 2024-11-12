<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IUT Hall System</title>
</head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
<!-- <link rel="stylesheet"  href="style.css"> -->
<style>
    /* *{
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
} */
    body {
        font-family: 'Ubuntu', sans-serif;
        background-image: url('image/North_Hall,_Islamic_University_of_Technology.jpg');
        margin: 0px;
        padding: 0px;
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    header {
        border: 2px solid green;
        width: 1276px;
        height: 70px;
    }

    #left_id {
        border: 2px solid blue;
        width: 360px;
        height: 28px;
        margin: 8px;
        padding: 10px;
        text-align: center;
        font-size: 30px;
    }

    /* .mid {
        display: inline-block;
    } */

    .mid {
        border: 2px solid yellow;
        position: absolute;
        display: inline-block;
        top: 9px;
        left: 417px;
        height: 48px;
        width: 300px;
    }

    .navbar {
        list-style-type: none;
        text-align: center;
        padding: 9px 72px;
        margin: 4px 3px;
        display: flex;
        border: 2px solid violet;
        display: inline-block;
    }

    .navbar li {
        display: inline-block;
        margin-right: 10px;
        font-size: 20px;
    }

    .right {
        border: 2px solid rgb(172, 89, 172);
        position: absolute;
        display: inline-block;
        height: 9px;
        width: 300px;
        top: 9px;
        right: 49px;
        text-align: center;
        margin: 0px 50px;
        padding: 20px 24px;
    }
    .btn {
    background-color: antiquewhite;
    font-size: 18px;
    position: relative;
    top: 49px;
    left: 123px;
    width: 200px;
    border-radius: 20px;
    height: 39px;
    }
    .container
    {
        border: 2px solid black;
        width: 445px;
        height: 265px;
        margin: 11px 15px;
        padding: 10px 10px;
        position: absolute;
        top: 131px;
        left: 341px;
    }
    .form_group input {
        font-family: 'Ubuntu', sans-serif;
        font-size: 20px;
        margin: 8px 13px;
        padding: 7px 16px;
        text-align: center;
        position: relative;
        top: 24px;
        left: 53px;
        cursor: pointer;
        border-radius: 20px;
    } 
</style>

<body>
    <header class="top_class" id="top_id">
        <div class="left" id="left_id">
            HAS
        </div>
        <div class="mid" id="mid_id">
            <ul class="navbar">
                <li><a href="#">Home</a></li>
                <li><a href="#">Blog</a></li>
                <!-- <button id="signInButton">Sign In</button> -->
            </ul>
        </div>
        <!-- <div class="right" id="right_id">
            <button class="btn" id="are_you_student">Are you Student of IUT</button>
        </div> -->
        <div class="container">
            <h3>You are an authorized person. Give password please</h3>
            <form action="POST">
                <div class="form_group">
                    <input type="text" name="password" placeholder="Enter password">
                </div>
                <button class="btn">Submit</button>
            </form>
        </div>
    </header>

    <!-- <script src="script.js"></script> -->
</body>

</html>