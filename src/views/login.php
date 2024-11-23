<?php
require '../model/functions.php';

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $user = get_user($_POST['username'], $_POST['password']);

    if (isset($user['username'])) {
        $name = $user['username'];
        echo "<script>alert('Добро пожаловать $name!')</script>";
    } else {
        echo "<script>alert('Неверный логин или пароль')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/assets/css/style.css">
    <title>Авторизация</title>
</head>

<body>

    <header class="header">
        <a href="/" class="header_logo large">Путешествия.Ру</a>
        <nav class="header_links">
            <a href="/" class="header_link normal">Главная</a>
            <a href="/src/views/login.php" class="header_link normal">Авторизация</a>
            <a href="/src/views/register.php" class="header_link normal">Регистрация</a>
            <a href="/src/views/add.php" class="header_link normal">Добавить</a>
        </nav>
    </header>

    <form method="post" class="form">
        <h1 class="form_title large">Авторизация</h1>
        <input name="username" type="text" class="form_input" placeholder="Логин" autocomplete="off">
        <input name="password" type="text" class="form_input" placeholder="Пароль" autocomplete="off">
        <button class="form_submit normal">Войти</button>
    </form>

</body>

</html>