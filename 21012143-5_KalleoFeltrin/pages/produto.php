<?php 
include './dados/produtos.php';
include './function/real.php';

if(isset($_GET["id"]) && !empty($_GET["id"])) {
    $id = $_GET["id"];
} else {
  return 0;
}

foreach($produto as $value) {
  if($value["id"] == $id) {
  ?>    
    <div class="produto">
      <div class="marmita">
          <h1 class="h1s"><?=$value['nome']?></h1><br>
          <p id="valor"><?=BRL($value['valor'])?></p><br>   
          <p>Tipo: <?=$value['tipo']?></p><br>
          <p>Peso: <?=$value['peso']?></p><br>
          <p><?=$value['descricao']?></p>
          <p>Contato: (11) 99999-9999</p>
      </div>  
      <div class="marmita-imagem">
          <img src="<?=$value['imagem']?>" style="height:550px; border-radius: 10%;">              
      </div> 
    </div>
<?php
   }    
  }    
?>