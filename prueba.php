<html>
<head>
</head>
<body>
<?php
$query_string = 'foo=' . urlencode($foo) . '&bar=' . urlencode($bar);
/*echo '<a href="mycgi?' . htmlentities($query_string) . '">';*/
echo $query_string;

function myUrlEncode($string) {
    $entities = array('%21', '%2A', '%27', '%28', '%29', '%3B', '%3A', '%40', '%26', '%3D', '%2B', '%24', '%2C', '%2F', '%3F', '%25', '%23', '%5B', '%5D');
    $replacements = array('!', '*', "'", "(", ")", ";", ":", "@", "&", "=", "+", "$", ",", "/", "?", "%", "#", "[", "]");
    return str_replace($entities, $replacements, urlencode($string));
}
?>
</body>
</html>
