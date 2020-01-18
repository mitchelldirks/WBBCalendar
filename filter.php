<?php
	if (date("m")==1 or date("m")==3 or date("m")==5 or date("m")==7 or date("m")==8 or date("m")==10 or date("m")==12) {
		$length=31;
	}elseif (date("m")==4 or date("m")==6 or date("m")==9 or date("m")==11) {
		$length=30;
	}elseif (date("m")==2) {
		if (date("y")%4==0) {
			$length=29;
		}else{
			$length=28;
		}
	}
?>
