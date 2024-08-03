    <?php
        $menuItems = [
            'accueil' => 'Accueil',
            'formation' => 'Formation',
            'propos' => 'A Propos',
            'galerie' => 'Galerie',
            'contact' => 'Contact'
        ];

        function isActive($para){
            $url = $_GET['p'];
            return $para === $url;
        }
    ?>

    <header class="header-area container">
        <div class="icon-list" id="icon-list">
            <svg width="30px" height="30px" stroke-width="1.2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#400000"><path d="M3 5H21" stroke="#400000" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M3 12H21" stroke="#400000" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M3 19H21" stroke="#400000" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
        </div>
        <ul class="list-menu">

            <?php foreach ($menuItems as $para => $title): ?>
                <a href="?p=<?= $para; ?>">
                    <li id="<?php echo isActive($para) ? 'active-li' : ''; ?>"><?= $title; ?></li>
                </a>
            <?php endforeach; ?>

        </ul>
        <ul class="list-icon">
            <a href="https://www.facebook.com/Polyvalence.fans/?fref=ts">
                <li>
                    <svg width="25px" height="25px" stroke-width="1.2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#400000"><path d="M21 8V16C21 18.7614 18.7614 21 16 21H8C5.23858 21 3 18.7614 3 16V8C3 5.23858 5.23858 3 8 3H16C18.7614 3 21 5.23858 21 8Z" stroke="#400000" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M11 21C11 18 11 15 11 12C11 9.8125 11.5 8 15 8" stroke="#400000" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M9 13H11H15" stroke="#400000" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                </li>
            </a>
            <a href="">
                <li>
                    <svg width="25px" height="25px" stroke-width="1.2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#400000"><path d="M15.5475 8.30327C14.6407 7.49361 13.4329 7 12.1089 7C9.28696 7 7 9.23899 7 12C7 14.761 9.28696 17 12.1089 17C15.5781 17 16.86 14.4296 17 12.4167H12.841" stroke="#400000" stroke-width="1.2"></path><path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#400000" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                </li>
            </a>
            <a href="">
                <li>
                    <svg width="25px" height="25px" stroke-width="1.2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#400000"><path d="M14 12L10.5 14V10L14 12Z" fill="#400000" stroke="#400000" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M2 12.7075V11.2924C2 8.39705 2 6.94939 2.90549 6.01792C3.81099 5.08645 5.23656 5.04613 8.08769 4.96549C9.43873 4.92728 10.8188 4.8999 12 4.8999C13.1812 4.8999 14.5613 4.92728 15.9123 4.96549C18.7634 5.04613 20.189 5.08645 21.0945 6.01792C22 6.94939 22 8.39705 22 11.2924V12.7075C22 15.6028 22 17.0505 21.0945 17.9819C20.189 18.9134 18.7635 18.9537 15.9124 19.0344C14.5613 19.0726 13.1812 19.1 12 19.1C10.8188 19.1 9.43867 19.0726 8.0876 19.0344C5.23651 18.9537 3.81097 18.9134 2.90548 17.9819C2 17.0505 2 15.6028 2 12.7075Z" stroke="#400000" stroke-width="1.2"></path></svg>
                </li>
            </a>
        </ul>
    </header>
    
    <ul id="menu-mobile" class="container list-menu-mobile">
        <?php foreach ($menuItems as $para => $title): ?>
            <a href="?p=<?= $para; ?>">
                <li id="<?php echo isActive($para) ? 'active-li' : ''; ?>"><?= $title; ?></li>
            </a>
        <?php endforeach; ?>
    </ul>