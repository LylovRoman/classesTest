<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Тест классов</title>
</head>
<body>
    <?php
        include_once('Classes/SessionShell.php');
        include_once('Classes/File.php');

        $session = (new SessionShell())->set('session', $_SESSION['session'] += 1)->get('session');
        echo $session;
    ?>
</body>
</html>