<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <?php require('lib/head.php'); ?>
</head>

<body>
  <?php require('lib/top.php'); ?>

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
          echo file_get_contents("data/".$board_result.".txt");
          ?>
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

      <!-- FOOTER SECTION -->
      <?php require('lib/footer.php'); ?>
    </div>
<!-- 메인 끝 -->

</body>

</html>
