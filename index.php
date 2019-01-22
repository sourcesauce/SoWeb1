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
      <?php require('lib/aside.php'); ?>

      <!-- 글 부분 -->
      <div class="rightSection">
        <p>index 페이지 입니다.</p>
        <p>총 3개의 페이지로 구성되어있고</p>
        <p>게시판, TEST, 북마크로 이루어져있습니다.</p>
      </div>

      <!-- FOOTER SECTION -->
      <?php require('lib/footer.php'); ?>
    </div>
<!-- 메인 끝 -->

</body>

</html>
