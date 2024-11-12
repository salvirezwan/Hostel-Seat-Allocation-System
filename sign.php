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
    #lastsection_id{
    position: relative;
    background-color: #e4eaeb;
    height: 345px;
    width: 1516px;
    margin: 0px;
    top: -20px;
}
.MidSection {
    position: relative;
    top: 75px;
    height: 616px;
    width: 1516px;
    background-color: #f5f7f7;
    background-image: url("IMG20211207134204.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
}

#tagline{
    position: relative;
    left: 330px;
    top: -468px;
    display: inline;
    font-size: 40px;
    font-family: 'Josefin Sans', sans-serif;
    font-family: 'Nunito Sans', sans-serif;
    font-weight: bolder;
}

#description{
    position: relative;
    width: 800px;
    left: 331px;
    top: -472px;
    font-size: 18px;
    color: darkcyan;
}

#h_id{
    position: absolute;
    border-radius: 20px;
    background-color: rgb(0,75,73);
    top: 160px;
    left: 238px;
    height: 80px;
    width: 80px;
    font-size: 25px;
    text-align: center;
    line-height: 85px;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: bolder;
    color: #e4eaeb;
}
#left_id {
      position: absolute;
      border: 2px solid rgb(0, 75, 73);
      border-radius: 15px;
      background-color: rgb(0, 75, 73);
      width: 25px;
      height: 25px;
      left: 150px;
      top: 20px;
    }
    #Log_in{
    position: relative;
    width: 110px;
    border-radius: 20px;
    background: rgb(0, 75, 73);
}

#Sign_in{
    position: relative;
    width: 110px;
    background-color: rgb(0, 75, 73);
    color: white;
    border-style:outset;
    border-color: rgba(0, 0, 0, 0.223);
    border-radius: 20px;
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
            <button class="btn" id="Log_in">Log In</button>
            <button class="btn" id="Sign_in">Sign Up</button>
        </div>
        <div class="MidSection" id="MidSection_id">
        </div>
        <div class="H" id="h_id">
            H
        </div>
        <div class="HallAllocate" id="tagline">
            HALL ALLOCATION SYSTEM
        </div>
        <div class="HallAllocate" id="description">
            <b>Hall Allocation System serves as a portal to automate the process of<br> Allocation of Elective/Audit Courses and for Management of Courses <br>in a convenient manner.</b>
        </div>
        <div class="lastsection" id="lastsection_id">
        </div>
    </header>

    <script src="logged_in.js"></script>
    <script src="signed_up.js"></script>
    <script src="home.js"></script>
</body>
</html>