<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        *{
            padding:0px;
            margin:0px;
            box-sizing:border-box;
        }
        .container {  display: grid;
            grid-template-columns: 200px ;
            grid-template-rows: 1fr 100px 100px;
            gap: 0px 0px;
            grid-auto-flow: row;
            grid-template-areas:
                "side-bar main main"
                "side-bar main main"
                "side-bar footer footer";
        }

        .side-bar {
         grid-area: side-bar;
         background-color:lightgray;
         display:flex;
         justify-content:center;
         height:800px;
         }

        .main {
            grid-area: main;
            border:1px solid black;
            background-image:url("./pictures/maxresdefault.jpg");
            display:flex;
            justify-content:center;
            text-align:center;
            position: relative;
         }

        .footer { 
            grid-area: footer;
            border:1px solid black;
            background-color:gray;
         }

        .side-bar ul {
            list-style-type: none;
            padding:0px;
            margin:0px;
        }
        .side-bar ul li{
            border:1px solid black;
            width: 150px;
            padding:10px;
            margin-top:10px;
            margin-bottom:10px;
        }
        .side-bar ul li a{
            text-decoration:none;
        }

        .main h1{
            position: absolute;
            top:200px;
        }
        h1{
            color: white;
            font-family: Sans-serif;
            font-size:75px;
        }
    </style>
</head>
<body>

<div class="container">
  <div class="side-bar">
        <ul>
            <li><a href="view.php">View Spots</a></li>
            <!-- <li><a href="">Spot Location</a></li> -->
            <!-- <li><a href="">About Us</a></li> -->
            <li><a href="index.php">Logout</a></li>
        </ul>
  </div>
  <div class="main">
    <h1><b>
        Welcome to Bontoc Tourist Spot Management System!!
        </b>
    </h1>
  </div>
<div class="footer">

</div>
</div>


</div>
    
</body>
</html>