
<?php
//ハッシュ値:複雑な演算で文字列を複合不可能な文字に変換した値
// ハッシュ化した パスワード $hash (DBに記録されている文字列)
$hash = '$2y$10$KgyM/ktVvL9hLjHyvPXWJeF3FqnxsHhY9bK6KIdzsx4KUeixkSl5K';

// ↑このハッシュ値は↓この関数で作った(実行するたびに違うハッシュ値になる )
 echo password_hash("wert3333", PASSWORD_DEFAULT);


$pswd = @$_GET['pswd']; //ユーザーの入力値

//password_verify関数を使って照合する
if (password_verify( $pswd , $hash)) {
    echo '認証完了!
      <p><a href="./pswd-hash.php"> パラメータなしリロード </a>
    ' ;
} else {
    echo '<p>無効な password.';
?>

  <form>
    <input name="pswd" value='wert3333'>
    <input type="submit" value="Login">
  </form>
<?php } ?>
