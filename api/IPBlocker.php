<?php
session_start();
ob_start();
	
	class IPBlocker {
		public function getIP() {
			return $_SERVER['REMOTE_ADDR'];
		}
		
		public function redirectUser() {
			header('Location: http://BeaconPE.net/index.php?banned');
			die();
		}
		
		public function blockIP($IP) {
			$userIP = $this->getIP();
			if($userIP == $IP) {
				$this->redirectUser();
			}
		}
		
		public function acceptIP($IP) {
			$userIP = $this->getIP();
			if(!($userIP == $IP)) {
				header('Location: http://BeaconPE.net/index.php?banned');
				die();
			}
		}
	}