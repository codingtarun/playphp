<?php

/**
 * 
 * Variables : Container that holds data , whcih can be accessed later.
 * Rules for declaring variables : 
 * 1. Prefix with a $ sign.
 * 2. Must start with a letter or an underscore.
 * 3. Can not start with a number.
 * 4. Can only contain letters, numbers and underscores.
 * 5. Are case senstive i.e $Name is not equal to $name.
 *  
 * 
 * Naming convention : 
 * 1. $under_score : preferred internaly by developing PHP.
 * 2. $camelCase : preffered
 * 3. $PascalCase
 * 4. $lowecase
 */

$title = "PHP : PHP Hypertext Preprocessor"; // declaring & storing value to variable.

/**
 * Datatypes : PHP is a loosly typed langauge i.e we don't need to define data type.
 * Data types supported by the PHP are : 
 * 1. String :  Sequence of characters.
 * 2. Integer : Whole Number. It can be positive or negitive.
 * 3. Float : Number with a decimal point.
 * 4. Boolean : true/false.
 * 5. Array : Holds multiple values.
 * 6. Object : Collection of properties & methods.
 * 7. null : Variable with no value.
 * 8. Resource : Files stored in the server. $file = fopen('fileName.txt','r');
 * 
 * 
 */

/**
 * 
 * String Concatination : joinin two or mroe string togeather using a dot(.) notation.
 * ex : 
 * echo "my name is "$fName." ".$lName;
 * 
 */

/**
 * Type casting (Explicit conversion): When we manually change the data type from one type to another.
 * 
 * Type juggling (Implicit conversion): When PHP itself tries to convert one data type to another data type. It sometime can result in unexpected behaviour.
 * 
 */

$num1 = 10;
$num2 = 100;
$num3 = '300';

$bool1 = true;
$bool2 = false;

$sum1 = $num1 + $num2;
$sum2 = $num2 + $num3; // implicit conversion / type casting done by PHP.
$sum3 = $num1 . $num3; // implicit conversion
$sum4 = 5 + $bool1; // implicit conversion (true converted to 1)




var_dump($sum1);
echo "<br>";
var_dump($sum2);
echo "<br>";
var_dump($sum3);
echo "<br>";
var_dump($sum4);
echo "<br>";

/**
 * 
 * Arithmatic operators  : Allow us to perform basic arithmatic operations.
 * 1. Addition : +
 * 2. Subtration : -
 * 3. Multiplication : *
 * 4. Division : /
 * 5. Modulo : %
 * 6. Exponential : ** 
 * 
 * 
 * Assignment Operators : Assiging value to a variable.
 * 1. Basic Assignment : = 
 * 2. Arithmetic assignment : += , -= , *= , /= , %= , **= 
 * 3. Bitwise assignment Operators : &= , |= , ^= , <<= , >>=
 * 4. String Cncatination : .=
 * 5. Null coalese : ??=  ex $a ??= $b => assigns $b if $a is null.
 */


/**
 * String functions : PHP inbuild functions used to manipulate a given string.
 */

$name = "Tarun Chauhan";

echo  strlen($name);
echo "<br>";
echo strpos($name, 'Chauhan');
echo "<br>";
echo $name[4]; // he string is acting like an array.
echo "<br>";


echo date('Y');
echo "<br>";
echo date('Y', 936345600);
echo "<br>";
echo date('Y', strtotime('1990-09-01'));
echo "<br>";
echo date('m');
echo "<br>";
echo date('d-m-Y');
echo "<br>";



/**
 *  Arrays : Holds multiple pieces of data , same or different data type , in a single variable.
 * 
 */

$arrayList = ['one', 1, true, 12.34, null];
dd($arrayList);

// add element to array 

$arrayList[5] = "A new data added to Array"; // if length is known

dd($arrayList);

$arrayList[] = 101; // adding item to end of array

dd($arrayList);

// Update an item 

$arrayList[3] = "New data at 3";

dd($arrayList);

// remove item 

unset($arrayList[3]); // index + data both will be gone

dd($arrayList);




var_dump($title); // dumps the data & data type information to the screen.
echo "<br>";
echo gettype($title); // display the data type and one of few function in PHP which uses camelCase.

// Dump & die function 

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    echo "<br>";
    //die();
}



?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title><?php echo $title; ?></title>
</head>

<body>
    <div class="container-fluid">
        <h1><?php echo "PHP Basics"; ?></h1>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>