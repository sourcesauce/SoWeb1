<?php
require ('./db_conn.php');
$sql = "SELECT * FROM user ORDER BY id DESC";
$result = mysqli_query($conn, $sql);
$list = '';

// //반복문으로 mysqli_fetch_array의 값을 없음(false) 될 때까지 가져옴
// while($row = mysqli_fetch_array($result)){
//   $list = $list."{$row['id']},{$row['title']},{$row['created']},{$row['recommend']}";
// }


//반복문으로 mysqli_fetch_array의 값을 없음(false) 될 때까지 가져옴

while($row = mysqli_fetch_array($result)){
  //XSS(Cross site scriptiong)차단
  $escaped_title = htmlspecialchars($row['title']);
  $datetime = explode(' ', $row['created']);
							$date = $datetime[0];
							$time = $datetime[1];

							if($date == Date('Y-m-d'))
								$row['created'] = $time;
							else
								$row['created'] = $date;
  $list = $list.
  "<tr>
    <td>{$row['id']}</td>
    <td><a href='./user_view.php?viewId={$row['id']}'>{$escaped_title}</a></td>
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
        <h3>유저업로드</h3>
        <h3><?php echo ($allDataNum); ?></h3> </h3>
        <table id="userTableHead" border="1" align="center" cellpadding="0" cellspacing="0">
          <colgroup>
            <col width="20">
            <col width="200">
            <col width="50">
            <col width="20">
          </colgroup>
          <thead>
            <tr>
              <th>번호</th>
              <th class="title">제목</th>
              <th class="date">날짜</th>
              <th class="hit">추천</th>
            </tr>
          </thead>
        <tbody>
          <?php
          echo $list;
          ?>
        </tbody>
        </table>
        <!-- ---------------------------------------------------------------- -->
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
