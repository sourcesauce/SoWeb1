<?php
$conn = mysqli_connect("localhost","root","thtm1423","soweb1");
$sql = "SELECT * FROM user ORDER BY id DESC";
$result = mysqli_query($conn, $sql);
$list = '';
if($result === false){
 echo mysqli_error($conn);
}
//mysql 접속 에러 확인
if(mysqli_connect_errno()){
  printf("Cnnect failed: %s\n",mysqli_connect_error());
  exit();
}
// //반복문으로 mysqli_fetch_array의 값을 없음(false) 될 때까지 가져옴
// while($row = mysqli_fetch_array($result)){
//   $list = $list."{$row['id']},{$row['title']},{$row['created']},{$row['recommend']}";
// }


//반복문으로 mysqli_fetch_array의 값을 없음(false) 될 때까지 가져옴
while($row = mysqli_fetch_array($result)){
  //XSS(Cross site scriptiong)차단
  $escaped_title = htmlspecialchars($row['title']);

  $list = $list.
  "<tr>
    <td>{$row['id']}</td>
    <td>{$escaped_title}</td>
    <td>{$row['created']}</td>
    <td>{$row['recommend']}</td>
  </tr>";
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <?php require('lib/head.php'); ?>
  <style media="screen">
    .boradTable tr{
      height:auto;
    }
    .boradTable tr td{
      font-weight: bold;
    }
  </style>
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

        <table class="boradTable" border="0" align="center" cellpadding="0" cellspacing="0">
          <thead>
            <tr>
              <td>번호</td>
              <td>제목</td>
              <td>날짜</td>
              <td>추천</td>
            </tr>
          </thead>
          <?php
          echo $list;
          ?>
        </table>

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
