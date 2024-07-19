<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <?php
        require_once('sample.php');
        require_once('init.php');
        $test_global_value = 0;
    ?>
  </head>
  <body>
    <div>
      <?php 
        echo("グローバル変数がどのように使用できるのかを検証しています。<br>");

        print( incriment_func()); 
        print( incriment_func()); 
        echo("<br>このファイル内(head)、別ファイル(init.php)で定義した変数が使用されています。つまり場所に関係せず渡すことができます。<br>
        一方で、関数ないではglobal \$変数が必要です。<br>
        ");
      ?>
      <p>サンプルファイルです。</p>
    </div>
    <a href="./login.php">loginへ</a>
  </body>
</html>
