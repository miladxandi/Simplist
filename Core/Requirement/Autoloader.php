<?php
function autoload($Class)
{
    $ClassNameSpacePath = str_replace("\\","/","$Class");

	$ClassPath= "..".DIRECTORY_SEPARATOR.$ClassNameSpacePath.'.php';
    if ((file_exists($ClassPath) && is_readable($ClassPath)))
    {
        include $ClassPath;
    }
    else
    {
        echo "The $ClassPath does not exist.";
    }
}

spl_autoload_register("autoload");