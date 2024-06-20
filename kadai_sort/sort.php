<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // 数字の代入
        $nums = array(15,4,18,23,10);
        
        // 昇順と降順それぞれのソート機能の詳細
        sort($nums, SORT_NATURAL | SORT_FLAG_CASE);
        if ($nums) {
          // 昇順（TRUE）であれば、「昇順にソートします。」と出力
          echo "昇順にソートします。<br>";

          // 昇順ソート
          sort($nums, SORT_NATURAL | SORT_FLAG_CASE);
          foreach ($nums as $num){
            echo $num . '<br>';
          };

          // 降順（FALSE）であれば、「降順にソートします。」と出力
        }else{
            echo  "降順にソートします。'<br>";
            rsort($nums, SORT_NATURAL | SORT_FLAG_CASE);
            foreach($nums as $num){
            echo $num . '<br>';
          };
        };
        ?>
    </p>
</body>

</html>