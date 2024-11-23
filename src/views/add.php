<?php
require '../model/functions.php';

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    create_card($_POST['name'], $_POST['description'], $_POST['price']);
}
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/assets/css/style.css">
    <title>Добавление карточек</title>
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
        <h1 class="form_title large">Добавить карточку</h1>
        <input name="name" type="text" class="form_input" placeholder="Название" autocomplete="off">
        <input name="description" type="text" class="form_input" placeholder="Описание" autocomplete="off">
        <input name="price" type="number" class="form_input" placeholder="Цена" autocomplete="off">
        <button class="form_submit normal">Добавить</button>
    </form>

</body>

</html>