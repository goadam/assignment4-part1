<html>
<head>
<title>json php</title>
</head>
<body>

<?php
class myClass{
	public $type;
	public $parameters = array();
}
	$json = new myClass();
	
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		$json->type = "POST";
		if(empty($_REQUEST)) {
		$json->parameters = "null";
		} else {
			foreach($_REQUEST as $key => $val) {
				$json->parameters[$key] = $val;
			}
		}
	} else {
		$json->type = "GET";
		if(empty($_REQUEST) == 0) {
		$json->parameters = "null";
		} else {
			foreach($_REQUEST as $key => $val) {
				$json->parameters[$key] = $val;
			}
		}
	}
	
	echo json_encode($json);
?>

</table>
</body>
</html>