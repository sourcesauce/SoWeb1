<?php
$conn = mysqli_connect("localhost","root","thtm1423","soweb1");

$filtered = array(
  'title' => mysqli_real_escape_string($conn,$_POST['title']),
  'description' => mysqli_real_escape_string($conn,$_POST['description'])
);

$sql = "
  INSERT INTO user
    (title,description,created)
    VALUES(
      '{$filtered['title']}',
      '{$filtered['description']}',
      NOW()
    )
";

$result = mysqli_query($conn,$sql);
if($result ===false){
  echo ('저장하는 과정에서 문제가 생겼습니다.');
  error_log(mysqli_error($conn));
} else{
  echo ("<script>location.href='user.php';</script>");
}
 ?>
