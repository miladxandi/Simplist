<?php
/**
 * Created by PhpStorm.
 * User: farva
 * Date: 04/02/2018
 * Time: 03:24 PM
 */

namespace View\View\Shared;


use Core\Configurations\Routing;

class MainLayouts
{
    public static function _Header()
    {
        include "Main/_HeaderLayout".Routing::$FileExtension;
    }
    public static function _Menu()
    {
        include "Main/_MenuLayout".Routing::$FileExtension;
    }
    public static function _Footer()
    {
        include "Main/_FooterLayout".Routing::$FileExtension;
    }
}
class PanelLayouts
{
    public static function _Header()
    {
        include "Panel/_HeaderLayout".Routing::$FileExtension;

    }
    public static function _Menu()
    {
        include "Panel/_MenuLayout".Routing::$FileExtension;

    }
    public static function _Footer()
    {
        include "Panel/_FooterLayout".Routing::$FileExtension;

    }
}