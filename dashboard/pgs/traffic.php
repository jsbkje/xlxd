<?php

if (!isset($_GET['iface'])) {
	 if (isset($VNStat['Interfaces'][0]['Address'])) {
	 		$_GET['iface'] = $VNStat['Interfaces'][0]['Address'];
	 }
	 else {
	 	  $_GET['iface'] = "";
	 }
}
else {
	 $f = false;
	 $i = 0;
	 while ($i < count($VNStat['Interfaces']) && (!$f)) {
	 	  if ($_GET['iface'] == $VNStat['Interfaces'][$i]['Address']) {
	 	  	 $f = true;
	 	  }
	 	  $i++;
	 }
	 if (!$f) {
	 	  $_GET['iface'] = "";
	 }
}
?>
<object data="<?php echo $CallingHome['MyDashBoardURL']; ?>:8081" width="100%" height="900">
    <embed src="<?php echo $CallingHome['MyDashBoardURL']; ?>:8081" width="100%" height="900"> </embed>
    Error: Embedded data could not be displayed.
</object>
 <?php

if (!isset($_GET['iface'])) {
	 if (isset($VNStat['Interfaces'][0]['Address'])) {
	 		$_GET['iface'] = $VNStat['Interfaces'][0]['Address'];
	 }
	 else {
	 	  $_GET['iface'] = "";
	 }
}
else {
	 $f = false;
	 $i = 0;
	 while ($i < count($VNStat['Interfaces']) && (!$f)) {
	 	  if ($_GET['iface'] == $VNStat['Interfaces'][$i]['Address']) {
	 	  	 $f = true;
	 	  }
	 	  $i++;
	 }
	 if (!$f) {
	 	  $_GET['iface'] = "";
	 }
}
?>
