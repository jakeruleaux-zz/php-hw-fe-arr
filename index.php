<?php
    $names = array("bob", "sue", "ben", "tina", "ed", "beth", "tim", "kate");
?>
<!DOCTYPE html>
<html>
<head>
    <title>friend list</title>
</head>
<body>
    <h1>These is my peeps!</h1>
    <ul>
        <?php
            foreach ($names as $friend) {
                echo "<li>" 'my peep is' . $friend . "</li>";
            }
        ?>
    </ul>
</body>
</html>
