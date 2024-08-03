<?php
    include_once './controllers/routerController.php';
    
    if(isset($_GET['p'])){
        $page = $_GET['p'];

        switch ($page) {
            case 'accueil':
                accueilPage();
                break;
            case 'formation':
                formationPage();
                break;
            case 'galerie':
                galeriePage();
                break;
            case 'contact':
                contactPage();
                break;
            case 'propos':
                aProposPage();
                break;
            default :
                accueilPage();
        }
    }else {
        header("location: ?p=accueil");
    }
    
?>