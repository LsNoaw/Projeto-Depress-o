<?php

include('livros.php');

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="dica.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Livros de Auto-ajuda</title>css">
</head>
<body>
  <header>
<ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="dicas.php">Livros de Auto-Ajuda</a></li>
        <li><a href="carrinho.php">Carrinho</a></li>
</ul>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Dicas.
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Livros de Auto-ajuda</title>
</head>
</body>
</html>

<div class="produtos">
 
 <?php while ($valor = mysqli_fetch_assoc($query)) {?>
 <!-- JORDAN AZUL-->

 <div class="container page-wrapper">
   <div class="page-inner">
     <div class="row">
       <div class="el-wrapper">
         <div class="box-up">
          
             <img
               class="img"
               src="<?php echo $valor['imagem']?>"alt="" />
          
             <div class="img-info">
             <div class="info-inner">
               <span class="p-name"><?php echo $valor['nome']?></span>
             </div>
             <div class="a-size">
              
             </div>
           </div>
         </div>

         <div class="box-down">
           <div class="h-bg">
             <div class="h-bg-inner"></div>
           </div>

           <a class="cart" href="#">
             <span class="price">R$</R1><?php echo $valor['preço']?></span>
             <span class="add-to-cart">
               <span class="txt">ADICIONAR AO CARRINHO</span>
             </span>
           </a>
         </div>
       </div>
     </div>
   </div>
 </div><!-- container -->
 <?php 

}; ?>

</div>
