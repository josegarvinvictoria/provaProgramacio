<!doctype html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Prova OMO Jose Garvin</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="node_modules/ion-sound/js/ion.sound.js"></script>
    <link rel="stylesheet" href="estil.css" type="text/css" />

</head>

<body>
    <?php include 'connexio.php'; ?>

    <div class="container">
        <div class="row">
            <div class="col-md-5 caixa1">
                <div class="apartat1">
                    <h1 class="titol1">PROBA PROGRAMACIÓ</h1>
                    <h1 class="titol2">BASE DE DADES</h1>
                    <form id="insertar" name="insertar" method="post" action="">
                        <input class="btn btn-danger btn-circle btn-xl centrat" type="submit" name="Submit" value="NOM" id="bNom"/>
                        <input name="nom" type="text" id="nom" size="50" placeholder="Afegeix un nou nom" class=" form-control centrat"/> 
                        <input type="hidden" name="action" value="add" />
                    </form>
                </div>
                <div class="apartat2">
                    <h1 class="titol3">VIDEO YOUTUBE</h1>
                    <iframe name="zonaV" class="centrat video" width="400" height="280" src="https://www.youtube.com/embed/JNbTvInths0" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="apartat3">
                    <h1 class="titol2">SCROLL DE TEXTE</h1>
                    <marquee behavior="scroll" direction="left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc pellentesque condimentum tellus, et fermentum dolor semper at. Aenean vel rutrum lacus, id placerat diam. Sed dapibus quam a ante vestibulum, eu sollicitudin enim tincidunt.
                        Praesent vel interdum augue, nec consequat nulla. Pellentesque maximus lacinia condimentum. Praesent efficitur aliquet efficitur. Vivamus mattis sagittis imperdiet.</marquee>
                    <div id="zonaText"></div>
                </div>
            </div>
            <div class="col-md-1 caixa2"></div>
            <div class="col-md-5 caixa3">
                <h1 class="titol1">PROBA PROGRAMACIÓ</h1>

                <form method="post" action="connexio.php">
                    <button type="button" class="btn btn-circle pull-right botoDireccio" id="dreta" onclick="carregaSeg()"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    </button>

                    <button type="button" class="btn btn-circle pull-left botoDireccio" id="esquerra"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    </button>
                </form>

                <h1 class="titol4">OMO</h1>
                <h3 id="tlf">629 33 46 22</h3>
                <?php obtenirNoms(); ?>
            </div>
        </div>

    </div>
</body>

<script type="text/javascript" src="provaProgramacio.js"></script>

</html>
