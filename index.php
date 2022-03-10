<?php
require __DIR__ . '/vendor/autoload.php';

use Cowsayphp\Farm;

header('Content-Type: text/plain');

$cowMsg = "Set a message for the cow by adding ?cow=<message here> to the URL";
$whaleMsg = "Set a message for the whale by adding ?whale=<message here> to the URL";
if(isset($_GET['cow']) && $_GET['cow'] != '') {
	$cowMsg = htmlspecialchars($_GET['cow']);
}
if(isset($_GET['whale']) && $_GET['whale'] != '') {
    $whaleMsg = htmlspecialchars($_GET['whale']);
}

$cow = Farm::create(\Cowsayphp\Farm\Cow::class);
echo $cow->say($cowMsg);

$whale = Farm::create(\Cowsayphp\Farm\Whale::class);
echo $whale->say($whaleMsg);
