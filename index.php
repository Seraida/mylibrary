<?php
    session_start();
    include '/OpenServer/domains/library/vendor/controllers/categories-loader.php';
?>

<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" href="/assets/css/pc.css" type="text/css" />
  <title>АИС библиотека</title>
</head>

<body>
  <header>
    <div class="logo">
      <h1>Электронная библиотека</h1>
    </div>

    <div class="sign_in">
      <?php
        $path = "profile";
        if ($_SESSION['user']['user_avatar'] == 1)
        {
          $path = $_SESSION['user']['user_id'];
        }
        if ($_SESSION['user'])
        {
          echo '
            <a href="user-profile.php"><button><p class="clip"><img src="/uploads/database/user-profile-photo/' . $path 
            . '.jpg" class="profile-icon">' . $_SESSION['user']['user_login'] . '</p></button></a>
          ';
        }
        else
        {
          echo '
          <a href="login.php"><button>Войти</button></a>
          ';
        }
      ?>
    </div>
  </header>

  <div class="main-content">
    <aside>
      <nav>
        <div>
          <?php
            foreach ($categories as $cat => $categoryNum)
            {
              echo '<div class="category"><form action="index.php" method="get"><input type="hidden" name="category" value="' . $categoryNum[0] . '">' . $categoryNum[1] . '</form></div>';
            }
          ?>
        </div>
      </nav>
    </aside>
    <section></section>
  </div>

  <footer></footer>
</body>

</html>