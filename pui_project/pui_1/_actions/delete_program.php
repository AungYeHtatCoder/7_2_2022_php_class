<?php 
include("../vendor/autoload.php");
use Libs\Databases\MySQL;
use Libs\Databases\ProgramTable;

$id = $_GET['id'];

$table = new ProgramTable(new MySQL());
if($table){
 $table->DeleteProgram($id);
 header("Location: ../admin/program_index.php?delsuccess=true");
} else {
 header("Location: ../admin/program_index.php?error=true");
}