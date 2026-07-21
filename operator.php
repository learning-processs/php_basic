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
         ?>
    </body>
</html>