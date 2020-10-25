<?php
/**
 * Created by PhpStorm.
 * User: Milad
 * Date: 03/11/2018
 * Time: 05:03 AM
 */

namespace Plugins\Utility;


class IO
{
    public function __construct()
    {
        return true;
    }
    public static function MakeDirectory($Folder)
    {
        try
        {
            if (!file_exists("Content/Shared/$Folder/"))
            {
                mkdir("Content/Shared/$Folder/",0400);
            }
            return true;
        }
        catch (\Exception $Ex)
        {
            return false;
        }
    }
    public static function MakeFile($Folder,$Filename = "File.txt")
    {
        try
        {
            if (!file_exists("Content/Shared/$Folder/"))
            {
                mkdir("Content/Shared/$Folder/",0400);
            }
            $fp = fopen("Content/Shared/$Folder/".$Filename, 'a+');
            fclose($fp);
            return true;
        }
        catch (\Exception $Ex)
        {
            return false;
        }
    }
    public static function Log($Folder,$Data,$Filename = "File.json")
    {
        try
        {
            if (!file_exists("Content/Shared/$Folder/"))
            {
                mkdir("Content/Shared/$Folder/",0400);
            }
            $Json = \GuzzleHttp\json_decode($Data);
            $fp = fopen("Content/Shared/$Folder/".$Filename, 'a+');
            fwrite($fp, \GuzzleHttp\json_encode($Json));
            fclose($fp);
            return true;
        }
        catch (\Exception $Ex)
        {
            return false;
        }
    }
    public static function LogLast($Folder,$Data,$Filename = "File.json")
    {
        try
        {
            if (!file_exists("Content/Shared/$Folder/"))
            {
                mkdir("Content/Shared/$Folder/",0400);
            }            $Json = \GuzzleHttp\json_decode($Data);
            $fp = fopen("Content/Shared/$Folder/".$Filename, 'a+');
            fwrite($fp, \GuzzleHttp\json_encode($Json));
            fclose($fp);
            return true;
        }
        catch (\Exception $Ex)
        {
            return false;
        }

    }
}