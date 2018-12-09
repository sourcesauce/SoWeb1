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
          <!-- TEST -->
          <iframe width="560" height="315" src="https://www.youtube.com/embed/4D7zDAln58c" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          <p>
            <strong>방송연예 페이지 입니다.</strong>
          </p>
      </div>

      <div class="footer">
        바닥입니다
      </div>
    </div>
<!-- 메인 끝 -->

</body>

</html>
