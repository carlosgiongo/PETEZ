<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        define('CSS_PATH',"./src/css");
        define('JS_PATH',"./src/js");
        define('IMG_PATH',"./src/img");
        define('SRC_PATH',"./src");
        if(empty($title)){
            $title = "Artigos para seu PET";
        }
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="OwO">
    <title>PETEZ | <?php echo $title ?></title>
    <link rel="shortcut icon" href="<?= IMG_PATH ?>/paw_petez.svg" type="image/x-icon">
    <link rel="stylesheet" href="<?= CSS_PATH ?>/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">            
</head>
<header>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="area-pesquisar">
                    
                </div>
            </div>
        </div>
    </div>
</header>