<?php

if(isset($_POST['submit'])) {
    $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
    $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_SPECIAL_CHARS);
    echo "Your name is ${name} and you are ${age} years old!";
}
?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <div>
        <label for="name">Name: </label>
        <input type="text" name="name"></input>
    </div>
    <div>
        <label for="age">Age: </label>
        <input type="text" name="age"></input>
    </div>
    <input type="submit" name="submit" value="Submit"></input>
</form>