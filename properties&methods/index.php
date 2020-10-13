<?php
    class User {
        // properties methods
        public $username = 'bhowmik';
        public $email = 'bhowmik@gmail.com';

        public function addFriend() {
            return "$this->username added new friend";
        }
    }
    // object
    $userOne = new User();
    $userTwo = new User();

    echo $userOne->username. '<br>';
    echo $userOne->email. '<br>';
    echo $userOne->addFriend(). '<br>';

    $userTwo->username = 'biddut';
    $userTwo->email = 'biddut@gmail.com';
    
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