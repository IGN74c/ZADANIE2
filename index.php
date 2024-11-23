<?php require './src/model/functions.php' ?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/assets/css/style.css">
    <title>Главная</title>
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

    <section class="cards">
        <?php foreach (get_all_card() as $value): ?>
            <article class="cards_card">
                <h2 class="cards_name medium">Название: <?= $value['name'] ?></h2>
                <p class="cards_price normal">Цена: <?= $value['price'] ?></p>
                <p class="cards_description normal">Описание: <?= $value['description'] ?></p>
            </article>
        <?php endforeach ?>
    </section>

</body>

</html>