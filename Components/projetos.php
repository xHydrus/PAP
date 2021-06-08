<?php 
$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "pap";

$connect = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if($connect === false) {
    die("Conexão falhou: ".mysqli_connect_error());
}
?> 


 <?php 

        $sql = "SELECT * FROM projetos";
        $result = mysqli_query($connect, $sql);

        
    while($dados = mysqli_fetch_array($result)){ 
    ?>

<div class="box">
      <div class="card cartaprojeto">
        <div class="imagem">
            <img src="./Images/<?php echo $dados['img'] ?>" alt="images">
        </div>
        <div class="detalhes">
            <h2><?php echo $dados['dadoempresa']?><br><span><?php echo $dados['tipo']?></span></h2>
        </div>
      </div>
  </div>

<?php }?>