<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            padding:60px;
        }
        *{
            padding:0px;
            margin:0px;
            box-sizing:border-box;
        }
        .main{
            display:flex;
            justify-content:center;
            flex-wrap:wrap;
            column-gap:20px;
            row-gap:20px;
            background-color: lightgray ;
        }

        .image-holder{
            border:1px solid black;
            height:300px;
            width:300px;
            padding:10px;
        }
        .image-section{
            border:1px solid black;
            height:80%;
        }
        a{
            color:black;
            text-decoration:none;
        }
    </style>
</head>
<body>
    <a href="dashboard.php" style="position:absolute; right:50px;">Back</a>
    <div class="main">
    <!-- <img src="pictures/7.jpg" alt=""width="100px" height="100px" > -->

        <a href="view1.php?location=ALEJOS FALLS">
            <div class="image-holder">
                <div class="image-section">
                    <img src="pictures/fb_img_15582622441978862.webp" alt="" width="100%" height="100%">
                </div>
                <div class="text-section">
                    <p>ALEJOS FALLS</p>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente, consequuntur.
                    </p>
                </div>
            </div>
        </a>
        <a href="view1.php?location=Parish">
            <div class="image-holder">
            <div class="image-section">
                    <img src="pictures/parish.JPG" alt="Hello" width="100%" height="100%">
                </div>
                <div class="text-section">
                    <p>Sto. Niño Parish</p>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente, consequuntur.
                    </p>
                </div>
            </div>
        </a>
        <a href="view1.php?location=BORACAY">
            <div class="image-holder">
            <div class="image-section">
                    <img src="pictures/maxresdefault.jpg" alt="Hello" width="100%" height="100%">
                </div>
                <div class="text-section">
                    <p>BORACAY</p>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente, consequuntur.
                    </p>
                </div>
            </div>
        </a>
        <a href="view1.php?location=DIKE">
            <div class="image-holder">
            <div class="image-section">
                    <img src="pictures/BontocSouthernLeyte_01.JPG" alt="Hello" width="100%" height="100%">
                </div>
                <div class="text-section">
                    <p>DIKE</p>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente, consequuntur.
                    </p>
                </div>
            </div>
        </a>
        <a href="view1.php?location=MAGOONG">
            <div class="image-holder">
            <div class="image-section">
                    <img src="pictures/parish sod.JPG" alt="Hello" width="100%" height="100%">
                </div>
                <div class="text-section">
                    <p>MAGOONG</p>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente, consequuntur.
                    </p>
                </div>
            </div>
        </a>
        <a href="view1.php?location=CALAYUGAN">
            <div class="image-holder">
            <div class="image-section">
                    <img src="pictures/bontoclogonobg.png" alt="Hello" width="100%" height="100%">
                </div>
                <div class="text-section">
                    <p>CALAYUGAN</p>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente, consequuntur.
                    </p>
                </div>
            </div>
        </a>
    </div>
</body>
</html>