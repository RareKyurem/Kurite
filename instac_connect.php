<?php
//COMMUNICATION INTERFACE FOR WWW.INSTACOMMENT.COM
//MAY NOT BE RE-DISTRIBUTED OR MODIFIED IN ANY WAY!
//Copyright (c) 2007 Instacomment.com
//v1.0b 28.01.2007
ob_start("ob_gzhandler");error_reporting(0);$a = $_REQUEST['instac_user'];$b = $_SERVER['REMOTE_ADDR'];$c = $_SERVER['HTTP_USER_AGENT'];$d = $_GET['z'];$e = $_GET['y'];$f = $_GET['x'];$g = $_GET['w'];$h = $_GET['v'];$m = $_GET['u'];$n = $_GET['t'];$o = $_GET['s'];$p = $_GET['r'];$q = $_GET['q'];$r = $_GET['p'];$s = $_GET['o'];$u = $_POST['n'];$l = $_GET['m'];if(get_magic_quotes_gpc()) {$f = stripslashes($f);$g = stripslashes($g);$h = stripslashes($h);$m = stripslashes($m);$u = stripslashes($u);}$f = urlencode($f);$g = urlencode($g);$h = urlencode($h);$m = urlencode($m);if($u) {$u = "m=" . urlencode($u);$v = strlen($u);} else {$v = 0;}$w = "http://www.instacomment.com/actions/$d.php?a=$e&b=$f&c=$g&d=$h&e=$m&f=$n&g=$o&h=$p&i=$q&j=$r&k=$s&l=$b&x=1.0b&y=$l&z=df32fc0b39f076ba7c908f3112d18df1";$x = ct($w, $a, $u, $c, $v);ry($x);function ct($w, $a, $u, $c, $v) {$url_p = parse_url($w);$fp = fsockopen($url_p['host'], 80, $errno, $errstr, 30);if($fp) {$head = "POST " . $url_p['path'] . "?" . $url_p['query'] . " HTTP/1.0\r\nHost: " . $url_p['host'] . "\r\nCookie: instac_user=$a\r\nContent-Type: application/x-www-form-urlencoded\r\nUser-Agent: $c\r\nContent-Length: $v\r\n\r\n$u";fputs($fp, $head);stream_set_timeout($fp, 8);while(!feof($fp)) {$x[] = fgets($fp, 4096);}fclose($fp);return $x;}}function ry($x) {while(strlen($x[0])<=2) {array_shift($x);}while(strlen($t=array_shift($x))>2) {header(substr($t, 0, -2));}for($i=0; $i<sizeof($x); $i++) {echo $x[$i];}}
?>