<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,700&display=swap" rel="stylesheet">
<link
    href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,700&family=Nunito+Sans:opsz,wght@6..12,800&display=swap"
    rel="stylesheet">
<link rel="stylesheet" href="style.css">

<style>
    body {
        font-family: 'Ubuntu', sans-serif;
        margin: 0px 0px;
        padding: 0px 0px;
    }

    .btn {
        font-size: 18px;
        top: 5px;
        height: 40px;
        width: 210px;
        position: relative;
        background-color: rgb(0,75,73);
        border-color: transparent;
        border-radius: 20px;
        color: #e3f6ff;
        font-family: sans-serif;
        font-weight: bold;
        cursor: pointer
    }

    header {
        border: 2px solid #ffffff;
        background-color: #ffffff;
        width: 1276px;
        height: 72px;
        margin: 0px 0px;
        padding: 0px 0px;
    }

    #Logo {
        position: absolute;
        top: 25px;
        left: 353px;
        text-align: center;
        font-size: 25px;
        font-family: 'Josefin Sans', sans-serif;
        background-color: #ffffff;
        border-style: none;
    }

    #h_id {
        position: absolute;
        border-radius: 20px;
        background-color: rgb(0,75,73);
        top: 139px;
        left: 335px;
        height: 80px;
        width: 80px;
        font-size: 25px;
        text-align: center;
        line-height: 85px;
        font-family: Arial, Helvetica, sans-serif;
        font-weight: bolder;
        color: #e4eaeb;
    }

    .MidSection {
        position: relative;
        top: 75px;
        height: 632px;
        background-color: #f5f7f7;
        width: 1516px;
        background-image: url('download.png');
        /* background-image: url('15203109_698561490307812_4991432248964363354_n.jpg'); */
        background-size: cover; 
        background-repeat: no-repeat;
        background-position: center; 
    }

    .MidSection2 {
        position: relative;
        top: 75px;
        height: 430px;
        background-color: #f5f7f7
    }

    .MidSection3 {
        position: relative;
        top: 75px;
        height: 530px;
        background-color: #f5f7f7
    }

    #left_id {
        position: absolute;
        border: 2px solid rgb(0,75,73);
        border-radius: 15px;
        background-color: rgb(0,75,73);
        width: 25px;
        height: 25px;
        left: 325px;
        top: 20px;
    }


    #mid_id {
        position: absolute;
        display: inline-block;
        top: 5px;
        left: 463px;
        height: 49px;
        width: 300px;
    }

    #tagline {
        position: relative;
        left: 450px;
        top: -508px;
        display: inline;
        font-size: 40px;
        font-family: 'Josefin Sans', sans-serif;
        font-family: 'Nunito Sans', sans-serif;
        font-weight: bolder;
    }

    #description {
        position: relative;
        width: 800px;
        left: 447px;
        top: -508px;
        font-size: 18px;
        color: black;
    }

    .topbutton {
        color: #8e989c;
        font-size: 15px;
        text-decoration: none;
    }

    .navbar {
        position: relative;
        list-style-type: none;
        text-align: center;
        display: flex;
        height: 25px;
        left: 5px;
        display: inline-block;
        padding: 0px;
        margin: 0px;
        top: 15px;
        font-size: 15px;
        color: #8e989c;
        margin: 0px;
    }

    #blog_id {
        margin: 5px;
    }

    #lastsection_id {
        position: relative;
        background-color: #e4eaeb;
        height: 345px;
        margin: 0px;
        top: -20px;
        width: 1516px;
    }

    .navbar li {
        display: inline-block;
        font-size: 20px;
    }

    #right_id {
        position: absolute;
        display: inline-block;
        height: 50px;
        width: 300px;
        top: 10px;
        right: 150px;
        text-align: center;
    }

    #sidebar {
        z-index: 1;
        position: fixed;
        top: 0px;
        left: -200px;
        width: 200px;
        height: 100%;
        margin: 0px 0px;
        padding: 0px 0px;
        background-color: rgb(0,75,73);
        transition: left 1.5s;
    }


    #sidebar.active {
        left: 0px;
    }

    #sidebar #sidebar-toggle-btn {
        position: absolute;
        width: 40px;
        height: 40px;
        top:0px;
        right:-40px;
        cursor: pointer;
    }

    #sidebar #sidebar-toggle-btn span {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 100%;
        height: 5px;
        background: rgb(0,75,73);
    }

    #sidebar #sidebar-toggle-btn span:nth-child(1)
    {
        top:10%;
    }
    #sidebar #sidebar-toggle-btn span:nth-child(3)
    {
        top:90%;
    }
    #sidebar .year-buttons {
        margin: 20px 0;
    }

    #sidebar .year-buttons button {
        margin: 2px 5px;
        padding: 15px 15px;
        height: 10px;
        width: 150px;
        font-family: 'Ubuntu', sans-serif;
        border-radius: 46px;
        cursor: pointer;
        /* background: bisque; */
    }

    #sidebar .year-buttons button:hover {
        background-color: grey;
    }
    .subject-menu {
        display: none;
        margin-left: 10px;
    }

    .subject-menu.active {
        display: block;
    }
    /* #cse1
    {
        background-color: #3770ff;
    } */
   .year-button {
        background-color: bisque;
    } 
    .subject-button {
        background-color: #071952;
        color: #e3f6ff;
    } 
    #are_you_student
    {
        top: 18px;
        left: -139px;
        margin: -11px -28px;
        padding: 0px 0px;
    }
    #update_notification
    {
        top: -25px;
        left: 85px;
        margin: 13px -1px;
        padding: 0px 0px;
    }
</style>

<body>
    <div id="sidebar">
        <div id="sidebar-toggle-btn">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="year-buttons">
            <button class="year-button"><b>Year 1</b></button>
            <div class="subject-menu">
                <button class="subject-button"><b>CSE1</b></button>
                <button class="subject-button"><b>EEE1</b></button>
                <button class="subject-button"><b>MPE1</b></button>
                <button class="subject-button"><b>CEE1</b></button>
                <button class="subject-button"><b>BTM1</b></button>
            </div>
            <button class="year-button"><b>Year 2</b></button>
            <div class="subject-menu">
                <button class="subject-button"><b>CSE2</b></button>
                <button class="subject-button"><b>EEE2</b></button>
                <button class="subject-button"><b>MPE2</b></button>
                <button class="subject-button"><b>CEE2</b></button>
                <button class="subject-button"><b>BTM2</b></button>
            </div>
            <button class="year-button"><b>Year 3</b></button>
            <div class="subject-menu">
                <button class="subject-button"><b>CSE3</b></button>
                <button class="subject-button"><b>EEE3</b></button>
                <button class="subject-button"><b>MPE3</b></button>
                <button class="subject-button"><b>CEE3</b></button>
                <button class="subject-button"><b>BTM3</b></button>
            </div>
            <button class="year-button"><b>Year 4</b></button>
            <div class="subject-menu">
                <button class="subject-button"><b>CSE4</b></button>
                <button class="subject-button"><b>EEE4</b></button>
                <button class="subject-button"><b>MPE4</b></button>
                <button class="subject-button"><b>CEE4</b></button>
                <button class="subject-button"><b>BTM4</b></button>
            </div>
        </div>
    </div>
    <header class="top_class" id="top_id">
        </div>
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
            <button class="btn" id="are_you_student">See Updates</button>
            <button class="btn" id="update_notification">Update Notifications</button>
            <!-- <button class="btn" id="notifications">Update Notifications</button> -->
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
            Course Allocation System serves as a portal to automate the process of Allocation of Elective/Audit Courses
            and for Management of Courses in a convenient manner.
        </div>
        <!-- <div class="lastsection" id="lastsection_id">
        </div> -->
        <script>
              document.getElementById("sidebar-toggle-btn").addEventListener("click", function () {
                document.getElementById("sidebar").classList.toggle("active");
            });

            const yearButtons = document.querySelectorAll(".year-button");
            const subjectMenus = document.querySelectorAll(".subject-menu");

            yearButtons.forEach((yearButton, index) => {
                yearButton.addEventListener("click", () => {
                    subjectMenus.forEach((menu, i) => {
                        if (i !== index) {
                            menu.classList.remove("active");
                        }
                    });
                    subjectMenus[index].classList.toggle("active");
                });
            });

            const subjectButtons = document.querySelectorAll(".subject-button");
            subjectButtons.forEach((subjectButton) => {
                subjectButton.addEventListener("click", () => {
                    const subject = subjectButton.textContent;
                    window.location.href = `${subject.toLowerCase()}.php`;
                });
            });
        </script>
</body>

</html>