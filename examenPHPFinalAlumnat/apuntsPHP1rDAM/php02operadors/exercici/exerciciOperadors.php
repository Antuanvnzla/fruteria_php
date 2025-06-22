<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Exercici comparacions</title>
	<link rel="stylesheet" href="estils.css" />
</head>

<body>
    <header id="cap">
        <h1>Exercici comparacions</h1>
    </header>
    <main id="contingut">
        <?php
        //definició de les variables
        $a = 5;
        $b = 3;
        $c = -12;

        echo "<h1>Valors de les variables:</h1>";
        echo "<h2>\$a = $a , \$b = $b i \$c = $c </h2>";
        echo "<ol id=\"llista\">";
        echo "<li>\$a > 3    ";
        var_dump($a > 3);
        echo "</li>";
        echo "<li>\$a > \$c    ";
        var_dump($a > $c);
        echo "</li>";
        echo "<li>\$a < \$c    ";
        var_dump($a < $c);
        echo "</li>";
        echo "<li>\$b < \$c    ";
        var_dump($b < $c);
        echo "</li>";
        echo "<li>\$b != \$c    ";
        var_dump($b != $c);
        echo "</li>";
        echo "<li>\$a == 3     ";
        var_dump($a == 3);
        echo "</li>";
        echo "<li>\$a * \$b == 15    ";
        var_dump($a * $b == 15);
        echo "</li>";
        echo "<li>\$a * \$b == -30    ";
        var_dump($a * $b == -30);
        echo "</li>";
        echo "<li>\$c/\$b < \$a    ";
        var_dump($c / $b < $a);
        echo "</li>";
        echo "<li>\$c/\$b == -10    ";
        var_dump($c / $b == -10);
        echo "</li>";
        echo "<li>\$c/\$b == -4      ";
        var_dump($c / $b == -4);
        echo "</li>";
        echo "<li>\$a + \$b + \$c == 5    ";
        var_dump($a + $b + $c == 5);
        echo "</li>";
        echo "<li>(\$a+\$b==8)&&(\$a-\$b==2))    ";
        var_dump(($a + $b == 8) && ($a - $b == 2));
        echo "</li>";
        echo "<li>(\$a+\$b==8)||(\$a-\$b==6))    ";
        var_dump(($a + $b == 8) || ($a - $b == 6));
        echo "</li>";
        echo "<li>\$a>3 && \$b>3 && \$c<3    ";
        var_dump($a > 3 && $b > 3 && $c < 3);
        echo "</li>";
        echo "<li>\$a>3 && \$b>=3 && \$c<-3    ";
        var_dump($a > 3 && $b >= 3 && $c < -3);
        echo "</li>";
        echo "<li>'a' > 'b'||'4' < '4'    ";
        var_dump('a' > 'b' || '4' < '4');
        echo "</li>";
        echo "<li>\"php\" > \"PHP\" && false    ";
        var_dump("php" > "PHP" && false);
        echo "</li>";
        echo "</ol>";
        ?>
    </main>
    <footer id="peu">
        <p>
            IES LLuís Simarro<br />
            1r DAW<br />
            Entorns de desenvolupament<br />
        </p>
    </footer>
</body>

</html>