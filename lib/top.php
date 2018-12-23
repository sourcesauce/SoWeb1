<?php $topTitle = "So의 Web세상"?>
<!-- 상단시작 -->
<header id="top_line">
  <a href="index.php"> <?php echo "$topTitle"; ?></a>
</header>
<!-- 상단 끝 -->
<nav id="top_menu">
  <ul>
    <!-- <script>
      var menuName = {'유저업로드','방송연예','사진','북마크'};
      var menuData = {'user','tv','gallery','bookmark'};
      document.write('<li><a class="menuLink" href="user.php">유저업로드</a></li>');
      document.write('<li><a class="menuLink" href="tv.php">방송연예</a></li>');
      document.write('<li><a class="menuLink" href="gallery.php">사진</a></li>');
      document.write('<li><a class="menuLink" href="bookmark.php">북마크</a></li>');
      var i = 0;
      while(i<menuName.length){
        document.write('<li><a class="menuLink" href="test.php">'+menuName[i]+'</a></li>');
        i++;
      }
      <a class="menuLink" href="menuData[i].php">menuName[i]
    </script> -->
    <li><a class="menuLink" href="user.php">유저업로드</a></li>
    <li><a class="menuLink" href="tv.php">방송연예</a></li>
    <li><a class="menuLink" href="gallery.php">사진</a></li>
    <li><a class="menuLink" href="bookmark.php">북마크</a></li>
  </ul>
</nav>
