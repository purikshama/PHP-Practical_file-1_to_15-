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
                <h2>Matrix 1: </h2><br>
                <input type="number" name="a1" id="a1">
                <input type="number" name="a2" id="a2">
                <input type="number" name="a3" id="a3">
                <br><br>
                <input type="number" name="a4" id="a4">
                <input type="number" name="a5" id="a5">
                <input type="number" name="a6" id="a6">
                <br><br>
                <input type="number" name="a7" id="a7">
                <input type="number" name="a8" id="a8">
                <input type="number" name="a9" id="a9">
                <br><br>
                
                <h2>Matrix 2: </h2><br>
                <input type="number" name="b1" id="b1">
                <input type="number" name="b2" id="b2">
                <input type="number" name="b3" id="b3">
                <br><br>
                <input type="number" name="b4" id="b4">
                <input type="number" name="b5" id="b5">
                <input type="number" name="b6" id="b6">
                <br><br>
                <input type="number" name="b7" id="b7">
                <input type="number" name="b8" id="b8">
                <input type="number" name="b9" id="b9">
                <br><br>
                
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
                // ========================================================================
                function add(&$A, &$B, &$C){
                    $N = 3;
                    for ($i = 0; $i < $N; $i++){
                        for ($j = 0; $j < $N; $j++){
                            $C[$i][$j] = $A[$i][$j] + $B[$i][$j];  
                        }
                    }
                }
                // =========================================================================
                function sub(&$A, &$B, &$C){
                    $N = 3;
                    for ($i = 0; $i < $N; $i++){
                        for ($j = 0; $j < $N; $j++){
                            $C[$i][$j] = $A[$i][$j] - $B[$i][$j];  
                        }
                    }
                }
                // =========================================================================
                function multiply(&$A, &$B, &$C){
                    $N = 3;
                    for ($i = 0; $i < $N; $i++){
                        for ($j = 0; $j < $N; $j++){
                            $C[$i][$j] = 0;
                            for ($k = 0; $k < $N; $k++){
                                $C[$i][$j] += $A[$i][$k] * $B[$k][$j];
                            }
                        }
                    }
                }

                $a1=$_GET['a1'];
                $a2=$_GET['a2'];
                $a3=$_GET['a3'];
                $a4=$_GET['a4'];
                $a5=$_GET['a5'];
                $a6=$_GET['a6'];
                $a7=$_GET['a7'];
                $a8=$_GET['a8'];
                $a9=$_GET['a9'];

                $b1=$_GET['b1'];
                $b2=$_GET['b2'];
                $b3=$_GET['b3'];
                $b4=$_GET['b4'];
                $b5=$_GET['b5'];
                $b6=$_GET['b6'];
                $b7=$_GET['b7'];
                $b8=$_GET['b8'];
                $b9=$_GET['b9'];

                $A = array(array($a1,$a2,$a3),
                           array($a4,$a5,$a6),
                           array($a7,$a8,$a9));

                $B = array(array($b1,$b2,$b3),
                           array($b4,$b5,$b6),
                           array($b7,$b8,$b9));

                $N = 3;
                add($A, $B, $C);

                echo "addition of the two matrix ::<br>";
                for ($i = 0; $i < $N; $i++)
                {
                    for ($j = 0; $j < $N; $j++)
                    {
                        echo "[".$C[$i][$j]."]";
                        echo " ";
                    }
                    echo "<br>" ;
                }

                echo "<br><br>";
                // ====================================================================
                sub($A, $B, $C);
                
                echo "subtraction of the two matrix ::<br>";
                for ($i = 0; $i < $N; $i++)
                {
                    for ($j = 0; $j < $N; $j++)
                    {
                        echo "[".$C[$i][$j]."]";
                        echo " ";
                    }
                    echo "<br>" ;
                }

                echo "<br><br>";
                // ====================================================================
                multiply($A, $B, $C);
                
                echo "multiplication of the two matrix ::<br>";
                for ($i = 0; $i < $N; $i++)
                {
                    for ($j = 0; $j < $N; $j++)
                    {
                        echo "[".$C[$i][$j]."]";
                        echo " ";
                    }
                    echo "<br>" ;
                }
            ?>
        </div>
    </div>
</body>
</html>