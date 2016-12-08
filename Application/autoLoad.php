<?php

function __autoLoad($className)
{
    require_once (ROOT . "libs" . DS . $className . ".php");
}
?>
