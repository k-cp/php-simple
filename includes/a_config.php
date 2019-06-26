<?php
	switch ($_SERVER["SCRIPT_NAME"]) {
        case "/php-template/developers.php":
			$CURRENT_PAGE = "Developers";
			$PAGE_TITLE = "Developers";
			break;
        case "/php-template/websites.php":
            $CURRENT_PAGE = "Websites";
            $PAGE_TITLE = "Websites";
            break;
        default:
			$CURRENT_PAGE = "Blablasure";
			$PAGE_TITLE = "Blablasure";
	}
?>


