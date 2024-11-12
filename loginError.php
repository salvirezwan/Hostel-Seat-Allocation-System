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
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,700&family=Nunito+Sans:opsz,wght@6..12,800&display=swap" rel="stylesheet">
<link rel="stylesheet"  href="style.css">
<style>
    /* *{
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
} */
.MidSection2{
      position: relative;
      top: 75px;
      height: 640px;
      width: 1516px;
      background-color: #f5f7f7;
      background-image: url("IMG20211207134435.jpg");
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
}

.loginSection{
    position: relative;
    font-size: 40px;
    display: inline;
    top: 50px;
    left: 193px;
    text-align: center;
    font-family: 'Josefin Sans', sans-serif;
    font-family: 'Nunito Sans', sans-serif;
    font-weight: bolder;
    color: rgb(0,75,73);
}

#Sign_in{
    position: relative;
    width: 179px;
    background-color: rgb(0,75,73);
    color: white;
    border-style:outset;
    border-color: rgba(0, 0, 0, 0.223);
    border-radius: 20px;
}

#left_id {
    position: absolute;
    border: 2px solid rgb(0,75,73);
    border-radius: 15px;
    background-color: rgb(0,75,73);
    width: 25px;
    height: 25px;
    left: 150px;
    top: 20px;
}

#submit_id{
    position: relative;
    top: 100px;
    width: 220px;
    left: 155px;
    height: 30px;
    text-align: center;
    font-size: 18px;
    position: relative;
    background-color: rgb(0,75,73);
    border-color: transparent;
    border-radius: 20px;
    color: #e3f6ff;
    font-family: sans-serif;
    font-weight: bold;
}

.container {
    width: 34%;
    height: 327px;
    border-radius: 2px;
    position: absolute;
    top: 160px;
    left: 32.5%;
    background-color: #e4eaeb;
    border-radius: 30px;
    border: 5px solid rgb(0,75,73);
}

.form_group input {
    font-family: 'Ubuntu', sans-serif;
    font-size: 20px;
    width: 378px;
    height: 38px;
    text-align: center;
    position: relative;
    top: 80px;
    left: 64px;
    cursor: pointer;
    border-radius: 20px;
    border: 1px;
    border-color: #6d7476;
    border-style: dotted;
    margin: 5px;
}
</style>

<body>
    <header class="top_class" id="top_id">
        <div class="left" id="left_id">
        </div>
        <button class="btnLogo" id="Logo">
            Hall:IUT
        </button>
        <div class="mid" id="mid_id">
            <ul class="navbar">
                <li><a href="#" class="topbutton">News</a></li>
                <li><a href="#" class="topbutton" id="blog_id">Resources</a></li>
            </ul>
        </div>
        <div class="right" id="right_id">
            <button class="btn" id="Sign_in"><b>Sign Up</b></button>
        </div>
        <div class="MidSection2" id="MidSection2_id">
        </div>
        <div class="container" id="container_id">
            <!-- <h2>Please give your credentials</h2> -->
            <form method="POST" action="loginAction.php">
                <div class="loginSection" id="loginSecId">
                    LOGIN
                </div>
                <div class="form_group">
                    <input type="text" name="email_id" placeholder="Email ID">
                </div>
                <div class="form_group">
                    <input type="password" name="password" placeholder="Password">
                </div>
                <input type="submit" name="enter" value="Verify" id="submit_id">
            </form>
        </div>
    </header>

    <!-- <script src="script.js"></script> -->
    <script src="home.js"></script>
    <script src="signed_up.js"></script>
    <script>alert('Invalid username or password')</script>
</body>

</html>