<?php
function connect_database()
{
    $db = new PDO('sqlite:' . __DIR__ . '/mydb.sqlite');
    return $db;
}

function create_user($username, $password, $email)
{
    $db = connect_database();

    $user = $db->query("SELECT * FROM users WHERE username = '$username' OR email = '$email'");
    $result = $user->fetch(PDO::FETCH_ASSOC);

    if ($result) {
        echo "<script>alert('такой пользователь уже есть')</script>";
    } else {
        $sql = $db->prepare('INSERT INTO users(username, password, email) VALUES (:username, :password, :email)');
        $sql->execute(['username' => $username, 'password' => $password, 'email' => $email]);
        echo "<script>alert('Вы успешно зарегистрировались!')</script>";
    }
}

function get_user($username, $password)
{
    $db = connect_database();

    $user = $db->query("SELECT * FROM users WHERE username = '$username' AND password = '$password'");
    $result = $user->fetch(PDO::FETCH_ASSOC);

    return $result;
}

function create_card($name, $description, $price)
{
    $db = connect_database();

    $sql = $db->prepare('INSERT INTO cards(name, description, price) VALUES (:name, :description, :price)');
    $sql->execute(['name' => $name, 'description' => $description, 'price' => $price]);
}

function get_card($id)
{
    $db = connect_database();

    $sql = $db->prepare("SELECT * FROM cards WHERE id = :id");
    $sql->execute(['id' => $id]);
    $result = $sql->fetch(PDO::FETCH_ASSOC);

    return $result;
}

function get_all_card()
{
    $db = connect_database();

    $sql = $db->query("SELECT * FROM cards");
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);

    return $result;
}