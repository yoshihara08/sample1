<?

// $(だらー)~~~ → 変数   = → 代入  '' → シングルクォート  '~~' → 文字列リテラル
// '' と "" の違い(P67.68参照)
// PHPは必ず；をつけること！
$part = '(1)';
// ''のままだとすべて文字列になるので ""にすること
// 　　　　　　　　　　　 {} → にょろかっこ
$pageTitle = "9月17日 {$part} ";

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- ?PHP print $pageTitle; ?> これをもう少し簡単にしたのが下記表記-->
    <title><?= $pageTitle ?></title>
</head>
<body>
<form action="test0917b.php" method="POST">
あなたの名前:  <input type="text" name="yourname" placeholder="名前を入れてください"><br>
体重（kg）:  <input type="text" name="weight" ><br>
身長（ｍ）:  <input type="text" name="height" ><br>
<input type="submit" value="BMIを求める"><br>
</form>




</body>
</html>