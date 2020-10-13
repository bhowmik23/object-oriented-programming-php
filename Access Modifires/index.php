<?php
    class User {
        // properties methods
        public $username;
        private $email;

        public function __construct($username, $email) {
            // $this->username = 'bhowmik';
            // $this->email = 'bhowmik@gmail.com';

            $this->username = $username;
            $this->email = $email;
        }

        public function addFriend() {
            return "$this->email added new friend";
        }
    }
    // object
    $userOne = new User('bhowmik', 'bhowmik@gmail.com');
    $userTwo = new User('bappi', 'bappi@gmail.com');

    // $userOne->email = 3; // can't access email outside class when it is private

    // can't access email outside class when it is private
    // echo $userOne->email. '<br>';
    // echo $userTwo->email. '<br>';

    echo $userOne->addFriend();


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