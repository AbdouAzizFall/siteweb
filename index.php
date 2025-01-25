<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de vente en ligne</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

</head>
<body>
    <?php
    require_once('connexion.php');
    require_once('header.php');

    if(isset($_GET['page'])){
        switch ($_GET['page']) {
            case 'admin':
                require_once('gestion\admin.php');
                break;
            case 'client':
                require_once('gestion\client.php');
                break;
            case 'categorie':
                require_once('gestion\categorie.php');
                break;
            case 'produit':
                require_once('gestion\produit.php');
                break;
            case 'commande':
                require_once('gestion\commande.php');
                break;
            
            
            default:
                # code...
                break;
        }
    }
    


    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>