<?php

class User {
    //Properties are attributes that belong to a class
    //Public accessed anywhere
    //Private accessed only inside the class
    //Protected accessed only inside the class and inheriting classes
    public $name;
    public $email;
    public $password;

    //A Constructor is method that runs when an object is created
    public function __construct($name, $email, $password) {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    //A Method
    function set_name($name) {
        $this->name = $name;
    }

    function get_name() {
        return $this->name;
    }
}

$user1 = new User("Doug", "DougMDev@outlook.com", "1224305");
$user2 = new User("Karolina", "Karolina@gmail.com", "239445959");

echo $user1->name;
echo "<br>";
echo $user2->name;
echo "<br>";

//Inheritance

class Employee extends User {
    public function __construct($name, $email, $password, $title)
    {
        parent::__construct($name, $email, $password);
        $this->title = $title;
    }

    public function get_title() {
        return $this->title;
    }
}

$empl1 = new Employee("Brad", "BradDev@superwork.com", "2132399", "Sen. Dev");

echo $empl1->name;
echo "<br>";
echo $empl1->get_title();

?>