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
      <?php require('lib/aside.php'); ?>

      <div class="rightSection">
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
