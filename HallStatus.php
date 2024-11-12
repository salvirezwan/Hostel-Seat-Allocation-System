<!DOCTYPE html>
<html lang="en">

<style>

.room{
    position: absolute;
    top : 30%;
    left : 20%;
}

.students{
    position: absolute;
    top : 60%;
    left : 20%;
}

</style>

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
                <!-- <button id="signInButton">Sign In</button> -->
            </ul>
        </div>
        <div class="right" id="right_id">
            <button class="btn" id="are_you_student">Student of IUT?</button>
        </div>
    <div class="room">
    <form action="addRoom.php" method="post" enctype="multipart/form-data">
        <input type="file" name="csvFile" id="csvFile">
        <input type="submit" value="Upload Rooms" name="submit">
    </form>
    <form action="addHallStudents.php" method="post" enctype="multipart/form-data">
        <input type="file" name="csvFile" id="csvFile">
        <input type="submit" value="Update Rooms" name="submit">
    </form>
    <form action="exportHall.php" method="post">
        <input type="submit" value="export CSV" name="export">
    </form>
    </div>
    </header>

    <script src="script.js"></script>
    <script src="home.js"></script>
</body>

</html>