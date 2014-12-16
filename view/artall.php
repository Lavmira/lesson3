<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Новости</title>
</head>
<body>
        <h1>Новости</h1>

        <?php foreach ($st as $name => $value)
        {
        echo $name . '=' .  $value;
        echo '<br />';
        }
        ?>
</body>
</html>