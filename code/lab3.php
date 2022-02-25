
<!-- 1.Регулярные выражения. -->

<!-- пункт a -->
<?php
echo '1.Регулярные выражения<br>';
$regexp = '/a.{2}b/';
$str='ahb acb aeb aeeb adcb axeb';
$matches = [];
$count = preg_match_all($regexp, $str, $matches);
print_r($matches);
echo "<br>";
echo "<br>";

// <!-- пункт b -->

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


