<?php $topTitle = "So의 Web세상"?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>So의 Web세상</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="grid_body">

    <div class="grid_body_item">
      <a id="top_a" href="index.php"> <?php echo "$topTitle"; ?></a>
    </div>

    <div class="grid_body_item">
      <div class="grid_menu">
        <div class="grid_menu_item">
          <a href="main_page.php?id=userdrip">유저드립</a>
        </div>
        <div class="grid_menu_item">
          <a href="main_page.php?id=broadcasting">방송연예</a>
        </div>
        <div class="grid_menu_item">
          <a href="3.html">익명채팅</a>
        </div>
        <div class="grid_menu_item">
          <a href="bookmark.html">북마크</a>
        </div>
      </div>
    </div>

    <div class="grid_body_item">
      <p>index 페이지 입니다.</p>
      <p>총 4개의 페이지로 구성되어있고</p>
      <p>유저드립, 방송연예, 익명채팅, 북마크로 이루어져있습니다.</p>
    </div>
  </div>

</body>

</html>
