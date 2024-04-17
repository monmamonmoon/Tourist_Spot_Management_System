<?php include ("config.php") ?>
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
            margin-top: 100px;
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
            background-color: #12d400;
            border-radius: 30px 30px 30px 30px;
        }

        form {
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
        }
        h1 {
            /* margin-top: -50px; */
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
            <h1>Bontoc Tourist Spot Management System</h1>
            <img src="pictures/bontoclogonobg.png" alt="" style="width:110px;height:110px;">

            <div class="form-control">
                <label for="">Username:</label>
                <input name="username" required type="text" placeholder="enter username">
            </div>

            <div class="form-control">
                <label for="">Password</label>
                <input type="password" name="password" required type="text" placeholder="enter password">
            </div>
            <div class="form-control">
                <button name="btn">Register</button>
            </div>

            <p>Login instead <a href="index.php">Click here</a></p>
            <a href="index.php">Back</a>
        </form>
    </div>
</body>

</html>

<?php

function get_last_date($option)
{
    include ("config.php");
    $sql = "select * from $option order by id desc limit 1";
    $res = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($res);
    print_r($data['date']);
}


if (isset ($_POST['btn'])) {
    $name = $_POST['name'];
    $course = $_POST['user'];
    $option = $_POST['option'];
    $date = date('password');


    if ($option == 'user') {
        $sql = "INSERT INTO $option(full_name,course) VALUES('$name','$course')";
        mysqli_query($conn, $sql);

        echo "<script>aleret('You have been inserted...')</script>";
    }
}

?>