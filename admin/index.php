<?php
	require '../api/IPBlocker.php';
        $IPBlocker = new IPBlocker();
        $IP = array('68.100.171.85', '107.161.127.124', 'yet.another.ip');
	$IPBlocker->acceptIP($IP);
	

	echo '<h3>Hello Staff!</h3>';
?>
