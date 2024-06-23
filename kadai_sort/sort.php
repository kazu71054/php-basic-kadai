<!DOCTYPE html>
<html lang="ja">
  <head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
  </head>

  </head>

<body>
    <p>
        <?php
        $nums = [15,4,18,23,10];

        function sort_2way($array,$order) {
          if($order){
            echo "昇順にソートします<br>";
            asort($array);
            foreach($array as $key => $val){
              echo $val . '<br>';
            }
          } else {
            echo"降順にソートします<br>";
            arsort($array);
            foreach($array as $key => $val){
              echo $val . '<br>';
            }
          }
        }

        //表示形式
        sort_2way($nums, TRUE);
        sort_2way($nums, FALSE);
        
        ?>
    </p>
</body>
</html>