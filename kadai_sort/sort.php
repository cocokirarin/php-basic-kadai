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
        $nums = [15, 4, 18, 23, 10];

        function sort_2way($array, $order) {
    // ソートの方向に応じて標準関数を使い分ける（キーは保持しない）
    if ($order === true) {
        sort($array); // 昇順ソート（値だけをソート）
        echo "昇順ソート<br>";
    } else {
        rsort($array); // 降順ソート（値だけをソート）
        echo "降順ソート<br>";
    }

    // ソート後の配列を1行ずつ表示
    foreach ($array as $value) {
        echo $value . "<br>";
    }
    echo "<br>";
}

// 昇順ソート
sort_2way($nums, true);

// 降順ソート
sort_2way($nums, false);
        ?>
    </p>
</body>

</html>