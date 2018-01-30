<?php
namespace Model\Repository\MainFunction;


class AssetsLoader
{


    //Use these class to have more better desipline



    private $BaseUrl;
    public function __construct(bool $MainAssets=true, bool $CustomAssets=false,string $CustomAssetsValue="localhost")
    {
        $this->BaseUrl="../../../..";
//        if ($MainAssets==true && $CustomAssets==false)
//        {
//            echo '<link rel="stylesheet" href="../../../Style/Main/main.css">
//        <script src="../../../Script/Main/main.js"></script>';
//        }
//        else if ($MainAssets==true && $CustomAssets==true)
//        {
//            echo '<link rel="stylesheet" href="../../../Style/Main/main.css">
//        <script src="../../../Script/Main/main.js"></script>'.$CustomAssetsValue.'';
//        }
//        else if($MainAssets==false && $CustomAssets==true)
//        {
//            echo $CustomAssetsValue;
//        }
//        else
//        {
//
//        }
    }
    public function Loader($Extension,$Name,$UniqueUrl=null,$Local=false,$UniqueType=null)
    {
        if ($UniqueUrl==null)
        {
            if ($Extension=="js")
            {
                echo '<script src="'.$this->BaseUrl."/Script"."/".$Name.".".$Extension.'"></script>';
            }
            else if($Extension=="css")
            {
                echo '<link rel="stylesheet" type="text/css" href="'. $this->BaseUrl."/Style"."/".$Name.".".$Extension  .'">';
            }
            else if($Extension=="png"||$Extension=="jpg"||$Extension=="jpeg"||$Extension=="ico")
            {
                echo '<img src="'. $this->BaseUrl."/Content"."/".$Name.".".$Extension  .'" alt="">';
            }
        }
        else
        {
            if ($UniqueType!=null)
            {
                if ($Local==true)
                {
                    if ($Extension=="js")
                    {
                        echo '<script src="'.$this->BaseUrl.$UniqueType."/Script"."/".$Name.".".$Extension.'"></script>';
                    }
                    else if($Extension=="css")
                    {
                        echo '<link rel="stylesheet" type="text/css" href="'. $this->BaseUrl.$UniqueType."/Style"."/".$Name.".".$Extension  .'">';
                    }
                    else if($Extension=="png"||$Extension=="jpg"||$Extension=="jpeg"||$Extension=="ico")
                    {
                        echo '<img src="'. $this->BaseUrl.$UniqueType."/Content"."/".$Name.".".$Extension  .'" alt="">';
                    }
                }
                else
                {
                    echo '<link href="'.$UniqueUrl."/".$Name.".".$UniqueType.'">';
                }
            }
            else
            {
                if ($Extension=="js")
                {
                    echo '<script src="'.$UniqueUrl."/".$Name.".".$Extension.'"></script>';
                }
                else if($Extension=="css")
                {
                    echo '<link rel="stylesheet" type="text/css" href="'.$UniqueUrl."/".$Name.".".$Extension.'">';
                }
                else if($Extension=="png"||$Extension=="jpg"||$Extension=="jpeg"||$Extension=="ico")
                {
                    echo '<img src=""'.$UniqueUrl."/".$Name.".".$Extension.'" alt="">';
                }
            }
        }
    }
}