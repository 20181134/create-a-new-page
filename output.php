<html>
<head>
  <meta charset="utf-8">
  <title>ファイル作成</title>
</head>
<body>
  <?php
  $newpage = rand();
  $page = fopen('./createdpages/'.$newpage.'.html', "w");
  $header = file_get_contents('header.txt');
  $other = file_get_contents('other.txt');
  $footer = file_get_contents('footer.txt');
  $contents = $header.$newpage.$other.$newpage.$footer;
  fwrite($page, $contents);
  fclose($page);
  if (file_exists('./createdpages/'.$newpage.'.html')) {
    echo 'ファイルを作成しました<br>';
    echo '<a href="./createdpages/'.$newpage.'.html">ファイルへ移動</a>';
  } else {
    echo 'ファイルを作成できませんでした';
  }
  echo '<br><a href="./main.php">戻る</a>';
   ?>
</body>
</html>
