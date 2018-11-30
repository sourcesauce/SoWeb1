<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>유저드립</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="grid_body">

    <div class="grid_body_item">
      <a id="top_a" href="index.php">So의 Web세상</a>
    </div>

    <div class="grid_body_item">
      <div class="grid_menu">
        <div class="grid_menu_item">
          <a href="main_page.php?id=userdrip">유저드립</a>
        </div>
        <div class="grid_menu_item">
          <a href="main_page.php?id=broadcasting">방송연예</a>
        </div>
        <div class="grid_menu_item">
          <a href="3.html">익명채팅</a>
        </div>
        <div class="grid_menu_item">
          <a href="bookmark.html">북마크</a>
        </div>
      </div>
    </div>


    <div class="grid_body_item">
      <?php
      echo file_get_contents("data/".$_GET['id'].".txt");
      ?>
    </div>

    <div class="grid_body_item">
      <!-- DISQUS를 이용하여 덧글창 구현 -->
      <p>
        <div id="disqus_thread"></div>
        <script>
          /**
           *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
           *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
          /*
          var disqus_config = function () {
          this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
          this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
          };
          */
          (function() { // DON'T EDIT BELOW THIS LINE
            var d = document,
              s = d.createElement('script');
            s.src = 'https://soweb1.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
          })();
        </script>
        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
      </p>
    </div>
  </div>
</body>

</html>
