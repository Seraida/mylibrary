<?php
session_start();

if (!$_SESSION['user']) {
    header('Location: login.php');
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="/assets/css/user-profile.css" type="text/css" />
    <title>Профиль читателя</title>
</head>

<body>
    <div id="container"></div>
    <header>
        <div class="logo">
            <h1><? echo 'Профиль: ' . $_SESSION['user']['user_login'] ?></h1>
        </div>

        <div>
            <a href="/vendor/controllers/quit.php"><button class="quit">Выйти</button></a>
        </div>
    </header>

    <div class="main-content">
        <aside>
            <nav>
                <ul>
                    <li><a href="index.php">На главную</a></li>
                    <li><a href="profile-edit.php">Редактирование</a></li>
                </ul>
            </nav>
        </aside>
        <section>
            <div class="contan">
                <? $filename = ($_SESSION['user']['user_avatar'] == 0) ? 'profile.jpg' : $_SESSION['user']['user_id'] . '.jpg' ?>
                <img src="/uploads/database/user-profile-photo/<? echo $filename ?>">
                <div class="user_data">
                    <div class="col"><h2><? echo $_SESSION['user']['user_name'] ?></h2></div>
                    <div class="col"><? echo $_SESSION['user']['user_role_name'] ?></div>
                    <div class="col"><? echo $_SESSION['user']['user_email'] ?></div>
                    <div class="col">Возраст: <? echo $_SESSION['user']['user_age'] ?></div>
                </div>
            </div>
            <div class="books_list">
                <div class="title1">Cписок книг</div>
            </div>
        </section>
    </div>

    <footer></footer>
</body>

</html>