<?php namespace webaltrenativa\views;

include "models/user.php";

$user = new \webaltrenativa\models.User(1, "Sandi", 25, "40932740");

?>

<div>
    <p>
        Username: 
        <?php
            echo ($user->username);
        ?>
    </p>
    <p>
        Age:
        <?php
            echo ($user->age);
        ?>
    </p>
</div>