<?php 

include 'loundry/header.php';
include 'loundry/menu_klien.php';
include 'loundry/form_cari_klien.php';


if (isset($_GET['p'])) {
	$p=$_GET['p'];
}
if (!empty($p)) {
		include('loundry/'.$p).".php";
	} 	/* if $page has a value, include it */
	else {
		include('loundry/slider_klien.php');
	} 	/* otherwise, include the default page */

include 'loundry/footer.php';
 ?>