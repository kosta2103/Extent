<?php

    $edit = @$_GET['edit'];
    if($edit == '1') 
    {
        $_SESSION["editable"] = true;
    }
    else
    {
        $_SESSION["editable"] = false;
    }


?>