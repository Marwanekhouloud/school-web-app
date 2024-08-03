<?php

    function accueilPage() {
        $title = "Accueil Page";
        $topPage= './asset/files/topPageAccueil.php';
        $views = './views/accueil.php';
        require_once './views/layout.php';
    }

    function formationPage() {
        $title = "Formation Page";
        $topPage = './asset/files/topPage.php';
        $views = './views/formation.php';
        require_once './views/layout.php';
    }

    function galeriePage() {
        $title = "Galerie Page";
        $topPage = './asset/files/topPage.php';
        $views = './views/galerie.php';
        require_once './views/layout.php';
    }

    function contactPage() {
        $title = "Contact Page";
        $topPage = './asset/files/topPage.php';
        $views = './views/contact.php';
        require_once './views/layout.php';
    }

    function aProposPage() {
        $title = "A propos Page";
        $topPage = './asset/files/topPage.php';
        $views = './views/propos.php';
        require_once './views/layout.php';
    }
?>