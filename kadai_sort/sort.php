<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // ここにコードを書いていく
        function sortAndPrint(array $arr, string $order = "asc") {
          if ($order === "asc") {
             sort($arr); // 昇順ソート
          } elseif ($order === "desc") {
             rsort($arr); // 降順ソート
          }

        // 1行ずつ出力
         foreach ($arr as $value) {
           echo $value . "\n";
         }
       }

       // 使用例
        $nums = [15, 4, 18, 23, 10];

     echo "昇順ソート:\n";
     sortAndPrint($nums, "asc");

     echo "\n降順ソート:\n";
     sortAndPrint($nums, "desc");

        ?>
    </p>
</body>

</html>