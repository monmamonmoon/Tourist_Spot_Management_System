<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            display:flex;
            justify-content:center;
            margin-top:70px;
        }

        .table-holder{
            border:1px solid black;
            width:700px;
        }

        table{
            width:100%;
            text-align:center;
            border-collapse:collapse;
        }

        table thead{
            background-color:black;
            color:white;
        }

        table th{
            padding:10px;
        }

        table td{
            padding:10px;
        }

        .btn{
            text-decoration:none;
            padding:5px 10px;
        }

        .update{
            background-color:green;
        }

        .delete{
            background-color:red;
        }

        tr{
            margin-top:5px;
        }
        
    </style>
</head>
<body>
    <a href="index.php" style="position:absolute; right:50px;">LOGOUT</a>
    <center>
        <h1>Welcolme Admin</h1>
    </center>
    <div class="container">
        <div class="table-holder">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>USERNAME</th>
                        <th>PASSWORD</th>
                        <th colspan='2'>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>MOnteza</td>
                        <td>123</td>
                        <td ><a href="update.php" class="btn update ">Update</a></td>
                        <td ><a href="delete.php" class="btn delete">Delete</a></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>MOnteza</td>
                        <td>123</td>
                        <td ><a href="update.php" class="btn update ">Update</a></td>
                        <td ><a href="delete.php" class="btn delete">Delete</a></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>MOnteza</td>
                        <td>123</td>
                        <td ><a href="update.php" class="btn update ">Update</a></td>
                        <td ><a href="delete.php" class="btn delete">Delete</a></td>
                    </tr>
                    
                   
                </tbody>
            </table>
        </div>
    </div>
    
</body>
</html>