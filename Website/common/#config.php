<?php
    switch ($_SERVER["SCRIPT_NAME"]) {
        case "index.html":
            $CURRENT_PAGE = "Home";
            $PAGE_TITLE = "This is Home";
            break;
        default:
            $CURRENT_PAGE = "INDEX";
            $PAGE_TITLE = "WELCOME";
    }