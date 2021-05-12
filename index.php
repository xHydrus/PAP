<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <?php include "Links/head.php";?>
</head>
<?php include "PreLoader/script.php"; ?>
<body>
    <div>
        <!--include "PreLoader/Loader.php";-->
        <?php include "HeaderFooter/Nav.php";?>
        <?php if(isset($_GET['pagina'])){
				$pagina=$_GET['pagina'];
			}else{
				$pagina="";
			}
			include "navdynamic.php";?>
        <?php include "HeaderFooter/Footer.php";?>
    </div>
</body>
</html>
