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
    public static function createProject(Event $event)
    {
        echo "\nBuild something awesome\n";
    }
    public static function rootPackageInstall(Event $event)
    {
        echo "\nCreating a Simplist project, The most simplest framework for PHP!\n";
    }
}