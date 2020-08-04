<?php// require '../header.php'; ?>
<!--<link rel="stylesheet" href="style.css">-->

<?php
//$pdo=new PDO('mysql:host=localhost;dbname=ito_shop2;charset=utf8','keiichi_ito','Wert3333-');
//↑ローカル用

$pdo=new PDO('mysql:host=mysql1.php.xdomain.ne.jp;dbname=tpka4_shop2;charset=utf8','tpka4_ito','atc4mdyl2');//サーバー公開用

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//      all.phpからconnect.phpに改名(7/28)

?>
<?php require_once '../footer.php';
//厳格　読めないと停止する

//　　include_once '../footer.php';
//インクルード:ゆるい　読めなくても続行する

?>