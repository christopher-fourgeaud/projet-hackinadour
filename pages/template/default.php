<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="contenu de la description">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Contrail+One" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- ////////////////////// BALISE TITLE/////////////////////////// -->
    <title>InsPyr</title>
</head>
<body>
    <div class="container">
    <!--////////////// INCLUDE DU HEADER  //////////////-->
        <?php include("header.php") ?>
    </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <!-- <hr> -->
                </div>
            </div>
    <!--/////////////// INCLUDE DU CONTENU DE LA PAGE PAR L'INDEX.PHP /////////////////////////////////-->
        
    <?= $content ?>
    </div>
    <!--////////////////// INCLUDE DU FOOTER AFIN DE PAS LE REPETER SUR CHAQUE PAGES //////////////////-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>