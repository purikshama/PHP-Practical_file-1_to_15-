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
                <h2>Enter the string: </h2><br>
                <input type="text" name="num1" id="num1" value="Develop & Empower Individuals"><br><br>
                
                <button type="submit">Count</button>
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
                
                function isVowel($ch){
                    $ch = strtoupper($ch);
                    return ($ch =='A' || $ch =='E' ||
                            $ch =='I' || $ch =='O' ||
                            $ch =='U');
                }
                
                function countVowels($str){
                    $count = 0;
                    for ($i = 0; $i < strlen($str); $i++)
                        if (isVowel($str[$i]))
                            ++$count;
                    return $count;
                }
                
                $str=$_GET['num1'];
                echo countVowels($str) . "\n";
            ?>
        </div>
    </div>
</body>
</html>