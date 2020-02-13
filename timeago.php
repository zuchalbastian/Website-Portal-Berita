<?php
		function timeAgo($timestamp){
				
			$times = strtotime($timestamp);
			
			$time = time() - $times;
			
			if ($time < 60)
			return ( $time > 1 ) ? $time . ' seconds' : 'a second';
			elseif ($time < 3600) {
				$tmp = floor($time / 60);
				return ($tmp > 1) ? $tmp . ' minutes' : ' a minute';
			}
			elseif ($time < 86400) {
				$tmp = floor($time / 3600);
				return ($tmp > 1) ? $tmp . ' hours' : ' a hour';
			}
			elseif ($time < 2592000) {
				$tmp = floor($time / 86400);
				return ($tmp > 1) ? $tmp . ' days' : ' a day';
			}
			elseif ($time < 946080000) {
				$tmp = floor($time / 2592000);
				return ($tmp > 1) ? $tmp . ' months' : ' a month';
			}
			else {
				$tmp = floor($time / 946080000);
				return ($tmp > 1) ? $tmp . ' years' : ' a year';
			}
		}
	?>
