<?php
    class User {
        // properties methods
        public $username;
        public $email;

        public function __construct($username, $email) {
            // $this->username = 'bhowmik';
            // $this->email = 'bhowmik@gmail.com';

            $this->username = $username;
            $this->email = $email;
        }

        public function addFriend() {
            return "$this->username added new friend";
        }
    }
    // object
    $userOne = new User('bhowmik', 'bhowmik@gmail.com');
    $userTwo = new User('bappi', 'bappi@gmail.com');

    echo $userOne->username. '<br>';
    echo $userOne->email. '<br>';
    echo $userOne->addFriend(). '<br>';
    
    echo $userTwo->email. '<br>';
    echo $userTwo->username. '<br>';
    echo $userTwo->addFriend(). '<br>';

    // print_r(get_class_vars('User'));
    // print_r(get_class_methods('User'));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>
</head>
<body>
    
</body>
</html>