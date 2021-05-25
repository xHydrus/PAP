<?php
    switch  ($pagina){
        case 'Home':
            include "Components/carrosel.php";
            include "Components/card.php";
        break;
        case 'Sobre-Nos':
            include "Components/carrosel.php";
        break;
        case 'Projetos':
            include "Components/projetos.php";
        break;
        case 'Contactos':
            include "Components/Contactos.php";
        break;
        case 'login':
            include "login.php";
        default: break;
    }
?>