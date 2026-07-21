<html>
    <head>
        <title>Data-Type</title>
    </head>
    <body>
       <!-- <?php 
            echo "Anu";
       ?> -->
       <?php 
        $a = 29;
        echo $a;
        echo "<br>";

        $b = 3.2;
        echo $b;
        echo "<br>";

        $c = "Anu - Engineer";
        echo $c;
        echo "<br>";

        $d = array("Anu", 1, "Tina", 2);
        echo $d[0];
        echo "<br>";
        print_r($d);
        echo "<br>";

        $e = TRUE;
        echo $e;
        echo "<br>";

        $f = null;
        echo "I'm Null_".$f;
        echo "<br>";

        // constant
        define('PI', 3.14);
        echo PI;
        echo "<br>";

        ?>

        <?php 
            define('PIE', 3.14); 
            $r = 12;
            $a=PIE*$r*$r;
            echo "Area is : ".$a;
            echo "<br>";
            $c = 2*PIE*$r;
            echo "Cricumference is : ".$c;
            echo "<br>";

            define('A',"Anu");
            echo A;
            echo "<br>";

        ?>

        <?php 
            class Student{
                public $name;
                public $age;
            }

            $s1 = new Student();
            $s1->name ="Anu";
            $s1->age = 21;

            echo "Name -> ".$s1->name;
            echo "<br>";
            echo "Age -> ".$s1->age;
            
         ?>
    </body>
</html>