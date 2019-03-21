<?php
/**
 * Created by PhpStorm.
 * User: Milad
 * Date: 21/03/2019
 * Time: 06:08 AM
 */

namespace Core\Watcher;

use Composer\Script\Event;
use Composer\Installer\PackageEvent;

class Messages
{
    public static function rootPackageInstall(Event $event)
    {
        echo "Build something awesome";
    }
    public static function createProject(Event $event)
    {
        echo "Creating a Simplist project, The most simplest framework for PHP!";
    }
}