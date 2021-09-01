<?php
$url='';
if (isset($_GET['url']))
{
    $url = $_GET['url'];
}
if ($url != '')
{
    header("location: ".$url);
}
else
{
    exit('url not require!');
}
?>