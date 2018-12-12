<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <?php require('lib/head.php'); ?>
</head>

<body>
  <!-- nav,logo 위치 -->
  <?php require('lib/top.php'); ?>


<!-- 메인 시작 -->
    <div class="wrapper">
      <!-- 로그인,광고 -->
      <div class="left_section">
        <form class="" action="login_test.php" method="POST">
          <input type="text" placeholder="id" name="id" value="">
          <input type="text" placeholder="pw" name="pw" value="">
          <input type="submit" value="로그인하기">
        </form>

        <p>광고</p>
        <img src="/img/luda.jpg" alt="루다짱" height="350" width="200">
      </div>
      <!-- 글 부분 -->
      <div class="right_section">
        <p>index 페이지 입니다.</p>
        <p>총 4개의 페이지로 구성되어있고</p>
        <p>유저드립, 방송연예, 익명채팅, 북마크로 이루어져있습니다.</p>
      </div>

      <!-- FOOTER SECTION -->
      <?php require('lib/footer.php'); ?>
    </div>
<!-- 메인 끝 -->

</body>

</html>
