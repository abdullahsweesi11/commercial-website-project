<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        header('Location: ../home.html');
        print_r($_POST);
        if(!empty($_POST['check_list'])) {
            foreach($_POST['check_list'] as $check) {
                    echo $check; //echoes the value set in the HTML form for each checked checkbox.
                                 //so, if I were to check 1, 3, and 5 it would echo value 1, value 3, value 5.
                                 //in your case, it would echo whatever $row['Report ID'] is equivalent to.
            };
        };
    ?>
</body>
</html>