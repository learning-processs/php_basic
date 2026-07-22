<!DOCTYPE html>
    <head>
        <title>PHP - Operator</title>
    </head>
    <body>
        <?php 

        // Arithmetic Operator - +, - , * , / , % , **

            echo "Addition = " . 10+10;
            echo "<br>";

            echo "Subtraction = ". 10-10;
            echo "<br>";

            echo "Multiplication = ". 10*10;
            echo "<br>";

            echo "Division = ". 10/10;
            echo "<br>";

             echo "Modulo = ". 10%10;
            echo "<br>";

            echo "Power = " . 2**10;
            echo "<br>";

        // Relational Operator(T/F) - > , < , >= , <= , ==, !=, !==, ===, <>
            echo "Relational Operator";
            $a = 50;
            $b = 15;

            echo ($a == $b); //T
            echo ($a === $b); //F
            echo "<br>";

            echo ($a != $b); //T
            echo "<br>";
            echo ($a !== $b); //F
            echo "<br>";

            echo "SpaceShip Operator -> " . ($a <=> $b);

        // Increament and Decreament Operator
           $a = 50;
           ++$a;

           $a++;

            $b;
            ++$b;

           $b++;
           echo "<br>";

           // Logical Operator : && ->AND ; || -> OR ; NOT -> !

           $a = 1;
           $b = 20;
           echo $a;
           echo $b;

           if($a AND $b){
                echo "Hello";
           }else{
                echo "Hii";
           }

           echo "<br>";
           if(++$a > 50 || ++$b > 5){
                echo "Hello Friends <br>";
           }else{
                echo "Hiii <br>";
           }

           echo $a;
           echo "<br>";
           echo $b;
           echo "<br>";


           //String Operator -> . , .=(concat + assignment)

           $z = 100;
           $x = "Hello";
           $x .= $z;
           echo "Value of x : " . $x;
           echo "<br>";
           echo "Value of Z : ". $z;
           echo "<br>";


            // Conditional Assignment Operator
            $n = 50;
            $m = 10;

            $str = $n > $m ? "First No is Greater" : "Second No is Greater";
            echo $str;
            echo "<br>";

         ?>
    </body>
</html>