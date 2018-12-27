<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <?php
  $conn = mysqli_connect("localhost","root","thtm1423","soweb1");
  /*$sql = "INSER INTO topic (
   title,
   description,
   created
   ) VALUES (
   'MySQL',
   'MySQL is ....',
   NOW()
   )";*/
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

          <form action="create.php" method="post">
            <table id="writeTable">
              <thead>
                <tr>
                  <th class="writeLeft">제목</th>
                  <td><input id="writeTitle" type="text" name="title" placeholder="제목"></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th class="writeLeft">본문</th>
                  <td><textarea name="description" rows="8" cols="80" placeholder="본문"></textarea></th>
                </tr>
              </tbody>
            </table>
              <tfoot>
                <tr>
                  <th class="writeLeft"> </th>
                  <td><input type="submit" value="입력"></th>
                </tr>
              </tfoot>

          </form>

      </div>

      <!-- FOOTER SECTION -->
      <?php require('lib/footer.php'); ?>
    </div>
<!-- 메인 끝 -->

</body>

</html>
