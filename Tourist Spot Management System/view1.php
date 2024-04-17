<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .main{
            height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            position: relative;
            margin-top:100px;
        }

        .image-holder{
            border:1px solid black;
            height:700px;
            width:900px;
        }

        .image-section{
            height:70%;
            border:1px solid black;
        }
    
        .button{
            text-decoration:none;
            position: absolute;
            right:100px;
            top:50px;
        }

    </style>
</head>
<body >
    <a href="view.php" class="button">BACK</a>

    <div class="main">
        <div class="image-holder">
            <div class="image-section">
            </div>
            <div class="text-section">
            <p><?php $location = $_GET['location']; echo "<h1>$location</h1>";?></p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum laborum voluptatem corporis cum voluptates impedit quae voluptate, ea sed, quaerat dicta dolore aliquam, expedita excepturi labore. In temporibus odit blanditiis praesentium quaerat assumenda, cum esse impedit odio. Debitis, ex! Nostrum, nobis cupiditate omnis consequuntur modi aperiam libero architecto voluptates qui.</p>
            </div>
            
        </div>

    </div>
    
</body>
</html>