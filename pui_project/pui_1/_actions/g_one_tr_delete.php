<?php 
include("../vendor/autoload.php");
use Libs\Databases\MySQL;
use Libs\Databases\TrInfoTable;

$id = $_GET['id'];
$table = new TrInfoTable(new MySQL());
$delete_tr_info = $table->DeleteTrInfo($id);
if($delete_tr_info){
 header("Location: ../admin/tr_info_index.php?delsuccess=true");
} else {
 header("Location: ../admin/g_one_tr_index.php?error=true");
}