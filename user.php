<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <?php require('lib/head.php'); ?>
  <?php
  $conn = mysqli_connect("localhost","root","thtm1423","soweb1");

  $result = mysqli_query($conn, $sql);
  if($result === false){
   echo mysqli_error($conn);
  }
  //mysql 접속 에러 확인
  if(mysqli_connect_errno()){
    printf("Cnnect failed: %s\n",mysqli_connect_error());
    exit();
  }
  ?>
</head>

<body>
  <?php require('lib/top.php'); ?>

<!-- 메인 시작 -->
    <div class="wrapper">
      <!-- 로그인,광고 -->
      <?php require('lib/aside.php'); ?>

      <!-- 본문 -->
      <div class="rightSection">
        <h3>유저게시판</h3>
        <?php

         ?>

        <div class="writeButton">
          <a href="write.php">글 작성</a>
        </div>
      </div>

      <!-- FOOTER SECTION -->
      <?php require('lib/footer.php'); ?>
    </div>
<!-- 메인 끝 -->

</body>

</html>
