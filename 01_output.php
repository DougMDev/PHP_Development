<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Outputs!</title>
</head>
<body>
    <h1>Hello World</h1>
    <?php
        /* Output for strings, numbers and floats */
        echo 'Hello to you too!';
        echo 123;
        echo 999.5;

        /*Print_r - Prints single values and arrays */
        print_r([1, 2, 3, 4, 5, 6]);

        /*var_dump() Returns more information - used for debugging */
        var_dump('Hello my name is Bob');
        var_dump(true);

        /*var_export() Similar to Var_dump() Outputs a string "" are included*/
        var_export("Hello Bob, my name is Jane!"); 

        /* You can use php within HTML tags */
    ?>
    <h2><?php echo 'Welcome To PHP land';?></h2>
    <h2><?="This is the Same Thing";?></h2>
</body>
</html>