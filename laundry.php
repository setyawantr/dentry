<?php 
include 'loundry/header.php';
include 'loundry/menu_laundry.php';
include 'loundry/form_cari_laundry.php';


if (isset($_GET['p'])) {
	$p=$_GET['p'];
}
if (!empty($p)) {
		include('loundry/'.$p).".php";
	} 	/* if $page has a value, include it */
	else {
		include('loundry/transaksi_laundry.php');
	} 	/* otherwise, include the default page */

include 'loundry/footer.php';
 ?>