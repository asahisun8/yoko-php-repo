<?php //PHP delimiter
    // echo is used to display an output
    echo "Hello World";
    echo "<p>I am a paragraph</p>";
    echo "Mary ","John"; //text are displayed using 1 echo-separated be a commma (,)

    //concatenate => to join
    echo "I am the first sentence". "The second sentence.". "The last sentence."; //texts are joined by the dot (.)

    // VARIABLE -> used to store data;
    $first_name = "John";
    $last_name = "Smith";
    $age = 21;

    echo "<p>My name is $first_name $last_name. I am $age years old.<p>";

    $str = "I am a string.";
    $int = 57;
    $float_or_double = 7.66;
    $bool = TRUE;

    //var_dump() displays the data type and the value
    var_dump($str);
    var_dump($int);
    var_dump($float_or_double);
    var_dump($bool);

    //Arithmetic operators -> used to perform arithmetical operations on numbers

    $a = 100;
    $b = 23;
    $c = 9;
    $d = 17;

    $sum = $b + $c; //Addition
    $difference = $b - $c; //Subtraction
    $product = $c * $d; //Multiplication
    $quotient = $a / $d; //Division
    $remainder = $a % $d; //Modulo -> returns only the remainder

    echo"<p>The sum of $b and $c is $sum</p>";
    echo"<p>The difference of $b and $c is $difference</p>";
    echo"<p>The product of $c and $d is $product</p>";
    echo"<p>The quotient of $a divided by $d is $quotient</p>";
    echo"<p>The remainder of $a divided by $d is $remainder</p>";

    $num1 = 10;
    $num2 = 20;
    $num3 = 30;
    $num4 = 40;
    $num5 = 50;
    $num6 = 23;
    $num7 = 16;
    $num8 = 37;
    $num9 = 83;
    $num10 = 72;

    //$num1 += $num6; //$num1 = $num1 + $num6;
    //$num2 -= $num7;  //$num2 = $num2 - $num7;
    //$num3 *= $num8;  //$num3 = $num3 * $num8;
    //$num4 /= $num9;  //$num4 = $num4 / $num9;
    //$num5 %= $num10;  //$num5 = $num5 % $num10;

    //HOMEWORK: Display the values of $num1, $num2, $num3, $num4 and $num5
    $sum1 = $num1 + $num6;
    echo "The sum is: ".$sum1."<br>";
    $difference1= $num2 - $num7;
    echo "The difference is: ".$difference1."<br>";
    $product1 = $num3 * $num8;
    echo "The product is: ".$product1."<br>";
    $quotient1 = $num4 / $num9;
    echo "The quotient is: ".$quotient1."<br>";
    $remainder1 = $num5 % $num10;
    echo "The remainder is: ".$remainder1."<br>";

    

//PHP delimiter ?>