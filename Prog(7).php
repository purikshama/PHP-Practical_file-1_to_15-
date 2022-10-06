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
                <h2>Enter range: </h2><br>
                <input type="number" name="num1" id="num1"><br><br>
                
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
                function Fibonacci($number){
                    if ($number == 0){
                        return 0;    
                    }
                    else if ($number == 1){
                        return 1;    
                    }
                    else{
                        return (Fibonacci($number-1) + Fibonacci($number-2));
                    }
                }
                
                $number=$_GET['num1'];
                
                for ($counter = 0; $counter < $number; $counter++){  
                    echo Fibonacci($counter),' ';
                }
            ?>
        </div>
    </div>
</body>
</html>