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

      <!-- 본문 -->
      <div class="rightSection">
        <h3>유저게시판</h3>
        <?php
        $conn = mysqli_connect("localhost","root","thtm1423","soweb1");
        $sql = "SELECT * FROM user";
        $result = mysqli_query($conn, $sql);
        if($result === false){
         echo mysqli_error($conn);
        }
        //mysql 접속 에러 확인
        if(mysqli_connect_errno()){
          printf("Cnnect failed: %s\n",mysqli_connect_error());
          exit();
        }
        //반복문으로 mysqli_fetch_array의 값을 없음(false) 될 때까지 가져옴
        while($row = mysqli_fetch_array($result)){
          echo '<h2>'.$row['id'].'</h2>';
          echo '<h2>'.$row['title'].'</h2>';
          echo '<h2>'.$row['description'].'</h2>';
          echo '<h2>'.$row['created'].'</h2>';
          echo '<h2>'.$row['recommend'].'</h2>';
        }
        // print_r($row);
        // echo $row['id'];
        // echo $row['title'];
        // echo $row['description'];
        // echo $row['created'];
        // echo $row['recommend'];
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
