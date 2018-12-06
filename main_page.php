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
        <li><a class="menuLink" href="main_page.php?board=user">유저업로드</a></li>
        <li><a class="menuLink" href="main_page.php?board=tv">방송연예</a></li>
        <li><a class="menuLink" href="main_page.php?board=gallery">사진</a></li>
        <li><a class="menuLink" href="main_page.php?board=bookmark">북마크</a></li>
      </ul>
    </nav>

<!-- 메인 시작 -->
    <div class="wrapper">
      <!-- 로그인,광고 -->
      <div class="left_section">
        <form class="" action="login_test.php" method="GET">
          <input type="text" placeholder="id" name="id" value="">
          <input type="text" placeholder="pw" name="pw" value="">
          <input type="submit" value="로그인하기">
        </form>

        <p>광고</p>
        <img src="/img/luda.jpg" alt="루다짱" height="350" width="200">
      </div>
      <div class="right_section">
        <?php
          $board_result=$_GET['board'];
          echo file_get_contents("data/".$board_result.".txt"); ?>
          <!-- TEST -->
          <form class="" action="create.php" method="post">
            <p>
              <input type="text" name="title" placeholder="제목">
            </p>
            <p>
              <textarea name="description" rows="8" cols="80" placeholder="본문"></textarea>
            </p>
            <input type="submit" value="입력">
          </form>
      </div>

      <div class="footer">
        바닥입니다
      </div>
    </div>
<!-- 메인 끝 -->

</body>

</html>
