<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program 1</title>
    <style>
        *{
            margin: 0;
        }
        #input{
            bacground-color:white;
            float: left;
            width: 50%;
            height: 100vh;
            color:black;
            box-sizing: border-box;
            padding: 10px;
        }
        #H1{
            color: white;
            font-size:48px;
            text-align: center;
        }
        #output{
            background-color:rgb(31, 28, 28);
            float: left;
            width: 50%;
            height: 100vh;
            color: white;
            box-sizing: border-box;
            padding: 10px;
        }
        #H2{
            color: black;
            font-size:48px;
            text-align: center;
        }
        #goback{
            padding:10px;
            background-color:black;
            color:white;
            text-decoration:none;
            border-radius:10px;
            box-shadow: 2px 2px 5px grey;
        }
        #goback:hover{
            background-color:rgb(31, 28, 28);
        }
    </style>
</head>
<body>
    <div id="container">
        <div id="input">
            <div id="H1" style="background-color:rgb(31, 28, 28);">
                INPUT
            </div>
            <br><br>
            <form method="get">
                <h2>Number 1: </h2><br>
                <input type="number" name="num1" id="num1"><br><br>
                
                <h2>Number 1: </h2><br>
                <input type="number" name="num2" id="num2"><br><br>
                
                <h2>Number 1: </h2><br>
                <input type="number" name="num3" id="num3"><br><br>
                
                <button type="submit">Calculate</button>
                <br><br><br>
                <div id="back">
                    <a href="index.html" id="goback"> GO TO INDEX </a>
                </div>
            </form>
        </div>
        <div id="output">
            <div id="H2" style="background-color:white;">
                OUTPUT
            </div>
            <br><br>
            <?php
                $a=$_GET['num1'];
                $b=$_GET['num2'];
                $c=$_GET['num3'];

                if ($a == $b && $b == $c) {
                    echo "The Given Triangle is equilateral";
                }
                elseif($a == $b || $b == $c || $c == $a){
                    echo "The given Triangle is isosceles";
                }
                else{
                    echo "The given Triangle is scalene";
                }
                
            ?>
        </div>
    </div>
</body>
</html>