<?php session_start();
if(!isset($_SESSION['login']) && empty($_SESSION['login'])){
header("location:index.php"); }

function translate($word){

$dictionary = array('A' => 'Y', 'B' => 'P', 'C' => 'L', 'D' => 'T', 'E' => 'A', 'F' => 'V', 'G' => 'K', 'H' => 'R', 'I' => 'E',
'J' => 'Z', 'K' => 'G', 'L' => 'M', 'M' => 'S', 'N' => 'H', 'O' => 'U', 'P' => 'B', 'Q' => 'X', 'R' => 'N',
'S' => 'C', 'T' => 'D', 'U' => 'I', 'V' => 'J', 'W' => 'F', 'X' => 'Q', 'Y' => 'O', 'Z' => 'W');

$word=strtoupper($word);
$array = str_split($word);
foreach($array as $letter) { echo $dictionary[$letter]; }

}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Le Translator</title>
</head>

<body>
<h1>Al-Bhed translator</h1>
Welcome <?php echo $_SESSION['login']; ?>! <a href="logout.php">Logout</a>
<p><form method="GET">
	<label>Word to translate: </label><input type="text" name="word" autofocus="autofocus"/>
	<input type="submit" value="Translate"/>
</form></p>
<p align=center>
<?php
if(isset($_GET['word']) && !empty($_GET['word'])) {
	echo "The translated word for ".$_GET['word']." is "; translate($_GET['word']);
}
?>
</p>
</body>
</html>
