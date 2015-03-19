<?php
include "../../../include/db.php";
include "../../../include/authenticate.php";if (!checkperm("a")) {exit ("Permission denied.");}
include "../../../include/general.php";
include_once(dirname(dirname(__FILE__)) . '/lib/Mysqldump.php');

$dumpSettings = array(
    'compress' => Ifsnop\Mysqldump\Mysqldump::GZIP
);

$path = "F:/";

$dump = new Ifsnop\Mysqldump\Mysqldump($mysql_db, $mysql_username, $mysql_password, $mysql_server, 'mysql', $dumpSettings);


if (!is_writable($path)) {
    exit('Error: Path "' . $path . '" not writable!');
}

try {
    $dump->start($path . 'dump_comp.sql.gz');
} catch (Exception $ex) {
    exit ('Error: ' . $ex->getMessage());
}

