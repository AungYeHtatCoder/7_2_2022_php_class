<?php 
include("../../libs/config.php");
include("../../libs/database.php");
include("../../date_function.php");
include("../../libs/ItemTable.php");
//$db = new database();
$table = new ItemTable();
// update item
$data = [
    $_POST['item_name']
];
$update = $table->update_item($id, $data);
if ($update) {
    header("Location: ../admin/dashboard.php?msg= Item updated ...");
}else {
    echo "Item did not updated";
}