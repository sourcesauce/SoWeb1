<?php
$conn = mysqli_connect("localhost","root","thtm1423","soweb1");
$sql = "
  INSERT INTO user
    (title,description,created)
    VALUES(
      '{$_POST['title']}',
      '{$_POST['description']}',
      NOW()
    )
";
$result = mysqli_query($conn,$sql);
if($result ===false){
  echo ('저장하는 과정에서 문제가 생겼습니다.');
  error_log(mysqli_error($conn));
} else{
  echo ("<script>location.href='index.php';</script>");
}
 ?>
