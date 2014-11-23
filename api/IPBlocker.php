<?php
	class IPBlocker {
		public static function getIP() {
			return $_SERVER['REMOTE_ADDR'];
		}
		
		public static function redirectUser() {
			header('Location: http://BeaconPE.net/index.php?banned');
			die();
		}
		
		public static function blockIP($IP) {
			$userIP = $this->getIP();
			if($userIP == $IP) {
				$this->redirectUser();
			}
		}
		
		public static function acceptIP($IP) {
			$userIP = $this->getIP();
			if(!($userIP == $IP)) {
				header('Location: http://BeaconPE.net/index.php?banned');
				die();
			}
		}
	}
