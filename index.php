<?php
    // routeing
	if (!empty($_GET['page'])) {
        $page = trim(addslashes($_GET['page']));
		$path = __DIR__ . DIRECTORY_SEPARATOR . 'controllers'. DIRECTORY_SEPARATOR . $page . '-ctrl.php';
		if (is_file($path)) {
			require $path;
		}
	}
	else {
        $page = 'home';
		require __DIR__ . DIRECTORY_SEPARATOR . 'controllers' . DIRECTORY_SEPARATOR . 'home-ctrl.php';
    }
?>