<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
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
  <?php require('lib/head.php'); ?>
</head>

<body>
  <?php require('lib/top.php'); ?>

<!-- 메인 시작 -->
    <div class="wrapper">
      <!-- 로그인,광고 -->
      <?php require('lib/aside.php'); ?>

      <div class="rightSection">
          <!-- 글쓰기 -->
          <form action="create.php" method="post">
            <table width="990" border="0" align="center" cellpadding="0" cellspacing="0">
              <thead>
                <tr>
                  <th class="writeLeft">제목</th>
                  <td class="writeRight"><input type="text" name="title" placeholder="제목" size="60"></td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th class="writeLeft">본문</th>
                  <td class="writeRight"><textarea name="description" rows="8" cols="80" placeholder="본문"></textarea></td>
                </tr>
              </tbody>
            </table>
              <br/>
            <table align="center" border="0">
              <tr>
                <td width="80"><input class="writeResult" type="submit" value="글쓰기"></td>
                <td width="80"><a class="writeResult" href="index.php">목록으로</a></td>
              </tr>
            </table>
          </form>
      </div>

      <!-- FOOTER SECTION -->
      <?php require('lib/footer.php'); ?>
    </div>
<!-- 메인 끝 -->

</body>

</html>
