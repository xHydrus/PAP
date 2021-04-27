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
            include "Components/carrosel.php";
        break;
        case 'Contactos':
            include "Components/Contactos.php";
        break;
        default: break;
    }
?>