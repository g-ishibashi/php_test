<?php

echo '<pre>';
var_dump($_POST);
echo '</pre>';

// スーパーグローバル変数 php 9種類
// 連想配列

?>

<!DOCTYPE html>
<meta charset="utf-8">
<head></head>
<body>

<form method="POST" action="input.php">
名前
<input type="text" name="name"></input>
<br>
<input type="checkbox" name="sports[]" value="野球">野球
<input type="checkbox" name="sports[]" value="サッカー">サッカー
<input type="checkbox" name="sports[]" value="バスケ">バスケ

<input type="submit" value="送信" >

</form>


</body>
</html>
