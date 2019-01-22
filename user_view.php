<?php 
    require("./db_conn.php");
    $viewId = $_GET['viewId'];

    $sql = "SELECT * FROM user WHERE id=".$viewId;
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <?php require('lib/head.php'); ?>
    <style media="screen">
    .boradTable tr{
      height:auto;
    }
    .boradTable tr td{
      font-weight: bold;
    }
    table{
        width:100%;
    }
    table th{
        padding: 5px 0 6px;
        border-top: solid 1px #999;
        border-bottom: solid 1px #b2b2b2;
        background-color: #f1f1f4;
        color: #333;
         font-weight: bold;
         line-height: 20px;
         vertical-align: top
    }
    table th a{
        color: #a4aaa9;
        background: #fff;
        border: 1px solid #a4aaa9;
        font-size: 15px;
        padding: 0px 12px;
        font-weight: bold;
        margin: 0;
        display: inline-block;
        text-decoration: none;
        text-align: right;
    }
    #viewSecondLine{
        color : black;
        text-align : right;
    }
    #viewThirdLine{
        padding-top: 1px;
        height : 500px;
        text-align : right;
    }
    table td{
        border-bottom: solid 1px #b2b2b2;
        background-color: white;
        color: #333;
    }
    </style>

    <title>Document</title>
</head>
<body>
<?php require('lib/top.php'); ?>

<!-- 메인 시작 -->
    <div class="wrapper">
      <!-- 로그인,광고 -->
      <?php require('lib/aside.php'); ?>
    
    <div class="rightSection">
        <h3>게시판</h3>
        <div>
            <table cellpadding="0" cellspacing="0">
            <colgroup>
                <col width="600"/>
                <col width="300"/>
            </colgroup>
                <tr>
                    <th><?php echo $row['title']?></th>
                    <th><a href="./user.php">목록으로</a></th>
                </tr>
                <tr>
                    <td></td>
                    <td id=viewSecondLine><?php echo "작성일 : ".$row['created']." 추천수 : ".$row['recommend']?></td>
                </tr>
                <tr>
                    <td id=viewThirdLine colspan="2">
                        <p>
                        <?php echo $row['description'] ?>
                        </p>
                    </td>
                </tr>
            </table>
        </div>
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