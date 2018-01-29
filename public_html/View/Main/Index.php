
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>$Title$</title>
    <?php include "../../../Core/Requirement/Autoloader.php";
    $Object = new Core\Security\Check();
    $products =new Model\Repository\MainFunction\EIDU();
    $Files= new Model\Repository\MainFunction\AssetsLoader();
    echo $Files->Loader("css","bootstrap.min","https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css","false");
    echo $Files->Loader("css","index");
    echo $Files->Loader("js","index");
    ?>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script>
</head>
<body>
 <div>

 </div>
</body>
</html>