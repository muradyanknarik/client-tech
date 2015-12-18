<?php
$a = array(2,4,6,8);
$mins = array();
$mins[] = $a[0];
for($i = 1; $i < count($a); $i++){	
	if( abs($a[$i] - 5) == abs($mins[0] - 5) ){
		$mins[] = $a[$i];
	}else if( abs($a[$i] - 5) < abs($mins[0] - 5) ){
		$mins = array();
		$mins[] = $a[$i];
	}
}

phpinfo();
?>