<?php
require_once 'nmap.cls.php';
$n=new WebMap('/usr/local/bin/nmap');
$n->header();
echo $n;
$n->run_nmap();
$n->footer();
?>
