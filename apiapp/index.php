<?php 
	require_once('instapi.php');
	$params = array(
		'get_code' => isset($_GET['code']) ? $_GET['code'] : ''
	
	);
	$sig = new instapi($params);
?>
<h1>Instagram Basic Display API</h1>
<hr>
<a href="<?php echo $sig->AuthorizationURL; ?>">
	Authoriz whit Instagram
</a>