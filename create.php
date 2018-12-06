<?php
file_put_contents('user_data/'.$_POST['title'],$_POST['descrition']);
header('Location: /index.php?id=user');
 ?>
