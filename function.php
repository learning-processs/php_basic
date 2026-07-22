<!DOCTYPE html>
    <head>
        <title>Function-PHP</title>
    </head>
    <body>
        <center>
            <?php 
                function display(){
                    echo "This is function Code";
                }

                display();
                echo "<br>";
                echo "End program";
                echo "<br>";

            ?>

            <?php 
                function sum($a , $b){
                    $sum = $a + $b;
                    echo "Sum of Two Number : " . $sum;
                }

                sum(22, 33);
                echo "<br>";
                sum(11, 33);
                echo "<br>";
                sum(99, 33);
                echo "<br>";

                function sumOfThree($a , $b, $c){
                    $sum = $a + $b + $c;
                    echo "Sum of Three Number : " . $sum;
                }
                sumOfThree(22, 33, 33);
                echo "<br>";
            ?>

            <?php
                function printVal(...$a){  // var arg  concept
                    foreach($a as $m){
                        echo $m . "<br>";
                    }
                }
                
                printVal(22, 33, 33);
                echo "<br>";


                function printSum(...$a){
                    $sum = 0;
                    foreach($a As $m){
                        $sum = $sum + $m; 
                    }
                    echo "sum is : ". $sum;
                }

                printSum(22, 44, 66,77);
                echo "<br>";
             ?>


            <?php 
                function factorial($n){
                    $f = 1;
                    while($n != 0){
                        $f = $f*$n;
                        $n--;
                    }
                    return $f;
                }

                $m = factorial(5);
                echo "Factorial is :" . $m;
                echo "<br>";



                function show($a , $b){ // call by value
                    $a = $a + 100;
                    $b = $b + 200;
                }

                $a = 50;
                $b = 60;

                show($a, $b);
                echo $a . " " . $b;
                echo "<br>";

                // Output -> 50 , 60 No change


                function show2(&$a , &$b){ // call by reference
                    $a = $a + 100;
                    $b = $b + 200;
                }

                $a = 50;
                $b = 60;

                show2($a, $b);
                echo $a . " " . $b;
                echo "<br>";
                // Output -> 150 , 260 No change



                function swap(&$a , &$b){
                    $a = $a + $b;
                    $b = $a - $b;
                    $a = $a - $b;
                }
                $a = 1;
                $b = 3;
                echo "Before Swapping : " . $a . " " . $b;
                echo "<br>";
                swap($a , $b);
                echo "After Swapping : " . $a . " " . $b;
                echo "<br>";

             ?>
        </center>
    </body>
</html>