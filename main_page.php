<?php $topTitle = "So의 Web세상"?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>So의 Web세상</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- 상단시작 -->
    <header id="top_line">
      <a href="index.php"> <?php echo "$topTitle"; ?></a>
    </header>
    <!-- 상단 끝 -->
    <nav id="top_menu">
      <ul>
        <li><a class="menuLink" href="main_page.php?id=user">유저업로드</a></li>
        <li><a class="menuLink" href="main_page.php?id=tv">방송연예</a></li>
        <li><a class="menuLink" href="main_page.php?id=gallery">사진</a></li>
        <li><a class="menuLink" href="main_page.php">북마크</a></li>
      </ul>
    </nav>

<!-- 메인 시작 -->
    <div class="wrapper">
      <div class="left_section">
        로그인
        <p>광고</p>
        <img src="/img/luda.jpg" alt="루다짱" height="350" width="200">
      </div>

      <div class="right_section">
        <?php
          $id_result=$_GET['id'];
          echo file_get_contents("data/".$id_result.".txt"); ?>
      </div>

      <div class="footer">
        바닥입니다
      </div>
    </div>
<!-- 메인 끝 -->

</body>

</html>
