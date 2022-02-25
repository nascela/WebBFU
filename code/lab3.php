<!-- /*
  1.Регулярные выражения.
*/ -->
<!-- пункт a -->
<?php
echo '1.Регулярные выражения<br>';
$regexp = '/a.{2}b/';
$str='ahb acb aeb aeeb adcb axeb';
$matches = [];
$count = preg_match_all($regexp, $str, $matches);
print_r($matches);