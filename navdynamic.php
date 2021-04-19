<?php
    switch  ($pagina){
        case 'Home':
            include "Components/carrosel.php";
            include "Components/card.php";
        break;
        case 'Sobre-Nos':
            include "Components/carrosel.php";
        break;
        default: break;
    }
?>