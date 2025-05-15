<?php

require_once('Controllers/Page.php');

// switch ($_GET['url'] ?? 'home') {
//   case 'penelitian':
//     $penelitianCtrl->index();
//     break;
//   case 'penelitian-simpan':
//     $penelitianCtrl->simpan();
//     break;
//   case 'penelitian-hapus':
//     $penelitianCtrl->hapus();
//     break;
// }

if (isset($_GET['url'])) {
    $file = $_GET['url'];
} else {
    header("Location: ?url=home");
    exit();
}

$title = strtoupper($file);
$home = new Page("$title", "$file");
$home->call();

