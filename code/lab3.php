<?php
session_start();
// <!-- 1.Регулярные выражения. -->

// <!-- пункт a -->
echo '1.Регулярные выражения<br>';
$regexp = '/a.{2}b/';
$str='ahb acb aeb aeeb adcb axeb';
$matches = [];
$count = preg_match_all($regexp, $str, $matches);
print_r($matches);
echo "<br>";
echo "<br>";

//  пункт b 

$regexp = '/\d+/';
$str = 'a1b2c3';
echo $str . ' -> ';
$result = preg_replace_callback(
    $regexp,
    function ($matches) {
        foreach ($matches as &$item) {
            $item = $item ** 3;
        }
        return $matches[0];
    },
    $str
);
echo $result . '<br>';
echo "<br>";

// 2.Форма сессии и куки
// пункт a


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>reg exp and file work</title>
</head>
<body>
<form method="POST">
    <label>
<textarea name="textToParse"
          placeholder="INput some text"
          rows="5" cols="40"></textarea>
    </label>
    <input type="submit" name="getWordsAndSyms" value="text treatment ">
</form>
</body>
</html>

<?php
if ($_POST['getWordsAndSyms']) {
    if ($_POST['textToParse']) {
        $_SESSION['textInfo'] = str_word_count($_POST['textToParse'],
                0) . ' Words<br>';
        
        $_SESSION['textInfo'] .= strlen($_POST['textToParse']) . ' Symbols<br>';
        
    } else {
        $_SESSION['textInfo'] = 'No text';
    }
}
echo $_SESSION['textInfo'];