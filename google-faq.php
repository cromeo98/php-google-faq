<!-- Riscrivere questa pagina del sito google https://policies.google.com/faq.
Ci sono diverse domande con relative risposte.
Gestire il “Database” e la visualizzazione di queste domande e risposte con PHP. -->
<?php

    $nav_items = [
        'Introduzione',
        'Norme sulla privacy',
        'Termini di servizio',
        'Tecnologie',
        'Domande frequenti'
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link to bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- link to my css -->
    <link rel="stylesheet" href="style/style.css">
    <!-- link to Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- link to google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet"> 
    <title>Document</title>
</head>
<body>

    <header>

        <div class="ms_header-container ms_red-bord">

            <div class="ms_top-header ms_blu-bord clearfix">

                <div class="ms_red-bord float-start">        
                    <img id="logo" src="imgs/logo.png" alt="google logo" class="align-middle">
                    <h1 class="d-inline-block align-middle">Privacy e termini</h1>   
                </div>

                <div class="ms_red-bord float-end">        
                    <i class="fas fa-th"></i>
                    <div class="ms_user-costomized-icon d-inline-block">C</div>
                </div>

            </div>

            <div class="ms_bottom-header ms_blu-bord">

                <nav class="ms_red-bord">

                    <ul>
                        <?php foreach($nav_items as $item){ ?>
                            <li class="d-inline-block"> <?php echo $item ?> </li>
                        <?php } ?>    
                    </ul>

                </nav>

            </div>

        </div>

    </header>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</body>
</html>