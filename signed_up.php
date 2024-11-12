<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IUT Hall System</title>
  </head>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap"
    rel="stylesheet"
  />
  <link
    href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,700&display=swap"
    rel="stylesheet"
  />
  <link
    href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,700&family=Nunito+Sans:opsz,wght@6..12,800&display=swap"
    rel="stylesheet"
  />
  <link rel="stylesheet" href="style.css" />
  <style>
    .MidSection3 {
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
    #submit_id {
      position: relative;
      top: 100px;
      width: 220px;
      left: 130px;
      height: 30px;
      text-align: center;
      font-size: 18px;
      position: relative;
      background-color: rgb(0, 75, 73);
      border-color: transparent;
      border-radius: 20px;
      color: #e3f6ff;
      font-family: sans-serif;
      font-weight: bold;
    }
    .container2 {
      border: 5px solid rgb(0, 75, 73);
      width: 31%;
      height: 400px;
      border-radius: 2px;
      position: absolute;
      top: 160px;
      left: 32.5%;
      background-color: #e4eaeb;
      border-radius: 30px;
    }
    .loginSection2 {
      position: relative;
      font-size: 40px;
      display: inline;
      top: 50px;
      left: 150px;
      text-align: center;
      font-family: "Josefin Sans", sans-serif;
      font-family: "Nunito Sans", sans-serif;
      font-weight: bolder;
      color: rgb(0, 75, 73);
    }

    .right {
      /* border: 2px solid red; */
      position: absolute;
      top: 0px;
      right: 0px;
      height: 10px;
      width: 10px;
    }

    #right_log_in_btn {
      text-align: center;
      font-size: 18px;
      position: relative;
      background-color: rgb(0, 75, 73);
      border-color: transparent;
      border-radius: 20px;
      color: #e3f6ff;
      font-family: sans-serif;
      font-weight: bold;
    }
  </style>

  <body>
    <header class="top_class" id="top_id">
      <div class="left" id="left_id">
        <!-- HAS -->
      </div>
      <button class="btnLogo" id="Logo">Hall:IUT</button>
      <div class="mid" id="mid_id">
        <ul class="navbar">
          <li><a href="#" class="topbutton">Home</a></li>
          <li><a href="#" class="topbutton" id="blog_id">Blog</a></li>
        </ul>
      </div>
      <div class="right" id="right_id">
        <button class="btn" id="right_log_in_btn">Log In</button>
      </div>
      <div class="MidSection3" id="MidSection2_id"></div>
      <div class="container2" id="container_id">
        <!-- <h2>Please give your credentials</h2> -->
        <form method="POST" action="signinAction.php">
          <div class="loginSection2" id="loginSecId">SIGN UP</div>
          <div class="form_group">
            <input type="text" name="first_name" placeholder="First Name" />
          </div>
          <div class="form_group">
            <input type="text" name="last_name" placeholder="Last Name" />
          </div>
          <div class="form_group">
            <input type="email" name="email_id" placeholder="Email ID" />
          </div>
          <div class="form_group">
            <input type="password" name="password" placeholder="Password" />
          </div>
          <div class="form_group">
            <input
              type="password"
              name="confirm_password"
              placeholder="Confirm Password"
            />
          </div>

          <input type="submit" name="submit" value="Submit" id="submit_id" />
        </form>
      </div>
    </header>

    <!-- <script src="script.js"></script> -->
    <!-- <script src="home.js"></script>
    <script src="signed_up.js"></script> -->
    <script>
      document.getElementById("right_log_in_btn").addEventListener("click", function () {
        window.location.href = "logged_in.php";
      });
    </script>
  </body>
</html>
