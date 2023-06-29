<?php
    // $_SESSION gegevens opslaan die je overal in programma kan gebruiken. Gegevens zijn persoonlijk
    /* 
        session_start() altijd als eerste na <?php voor html

        open vanaf start pagina!!

        page_1.php
        session_start();
        $page=1;
        $_SESSION['page'] = $page;

        header(header: 'Location: page_2.php');
        exit();

        page_2.php
        session_start();
        $page=2;
        echo $page;

        echo 'Afkomstig van: ' . $_SESSION['page'];

        page_3.php
        session_start();
        $page=3;
        $_SESSION['page'] = $page;

        header(header: 'Location: page_2.php');
        exit();
        
    */
    
    // Databases
    /* 
        try -catch jaar 2
        PDO = php data object
        
    */
