<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1c</title>

    <style>
        .container {
            display: flex;
        }

        .kotak {
            width: 200px;
            height: 200px;
            background-color: #5085CF;
            position: relative;
            border: 1px solid;
        }

        .text {
            position: absolute;
            font-size: 50px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: gold;
        }
    </style>

</head>

<body>
    <div class="container">
        <div class="kotak">
            <div class="text">1</div>
        </div>
    </div>

    <div class="container">
        <div class="kotak">
            <div class="text">2</div>
        </div>
        <div class="kotak">
            <div class="text">2</div>
        </div>
    </div>

    <div class="container">
        <div class="kotak">
            <div class="text">3</div>
        </div>
        <div class="kotak">
            <div class="text">3</div>
        </div>
        <div class="kotak">
            <div class="text">3</div>
        </div>
    </div>

</body>

</html>