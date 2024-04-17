<?php include ("config.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
        .container {
            display: flex;
            justify-content: center;
            margin-top: 10px;
            background-color: lightgray;
            border-radius: 30px 30px 30px 30px;

        }

        label {
            display: block;
        }

        input {
            width: 300px;
            padding: 10px;
        }

        select,
        option {
            width: 323px;
            padding: 10px;
        }

        .container form {
            border: 5px solid black;
            padding: 40px;
            border-radius: 30px 30px 30px 30px;
        }

        .form-control {
            margin-top: 10px;
        }

        button {
            width: 323px;
            padding: 10px;
            background-color:#12d400;
            border-radius: 30px 30px 30px 30px;
        }

        form {
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
        }
        h1 {
            font-family: 'Times New Roman', Times, serif;
        }
        body {
            background-image: url(pictures/BontocSouthernLeyte_01.JPG);
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
  </style>
</head>

<body>

  <div class="container">
    <form action="" method="post">
      
        <h1 >Bontoc Tourist Spot Management System</h1><br>
        <img src="pictures/bontoclogonobg.png" style="width:110px;height:110px;"><br>
        <hr>

        <!-- <h2>Login</h2> -->
        <div>
          <label for="">Username:</label>
          <input type="text" name="username" id="" placeholder="enter username">
        </div><br>
        <div>
        <label for="user">USER:</label>
          <select name="option" id="">
            <option > Select:</option>
            <option value="dashboard">User</option>
            <option value="admin">Admin</option>
          </select><br>
        </div><br>
        <div class="form-control">
                <label for="">Password</label>
                <input type="password" name="password" required type="text" placeholder="enter password">
            </div><br>
        <div>
          <button name="btn">LOGIN</button>
        </div>
        <hr>
        <p style="text-align:center;">
          No account? <br>
          <a href="register.php">Register</a>
        </p>
      
    </form>
  </div>

</body>

</html>

<?php

    if(isset($_POST['btn'])){
        $option = $_POST['option'];
        $page = $option.".php";
        header("location:$page");
    }

?>