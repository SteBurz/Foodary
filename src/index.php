<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css"/>    
    <title>Foodary</title>
</head>
<body>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <?php 
                    require 'functions/components/Actions.php';

                    $form = "<h1>Test</h1>";
                    $newRecipe = (object) [
                        "buttonName" => "New recipe",
                        "modal" => (object) [
                            "id" => "modalNewRecipe",
                            "title" => "Create new recipe",
                            "body" => $form,
                            "buttonName" => "Create recipe"
                        ]
                    ];
                    $action = new Actions;
                    $action->addButtonWithModal($newRecipe);
                ?>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="module" src="js/main.min.js"></script>
</body>
</html>