<?php

if(isset($_POST['submit'])) {
    echo $_POST['name'];
    echo $_POST['age'];
}
?>

<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=Doug&age=26">Click</a>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
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