<?PHP
require_once"../config.php";
include "../core/BlogC.php";
$eC=new blogC();
if (isset($_GET['id'])){
	$eC->supprimerblog($_GET['id']);
}
?>