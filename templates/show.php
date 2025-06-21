<?php
    include_once("header.php");

?>
   <div class="container" id="view-contact-container">
    <?php include_once("backbtn.html"); ?>
    <h1 id="main-title"><?= $contact['name']?></h1>
    <p class="bold">Telefone: </p>
    <p><?= $contact['phone']?></p>
    <p class="bold">Observações: </p>
    <p><?= $contact['observation']?></p>
    <p class="bold">CPF: </p>
    <p><?= $contact['CPF']?></p>
    <p class="bold">Endereço: </p>
    <p><?= $contact['Adress']?></p>
    <p class="bold">Lista de produtos do Devedor: </p>
    <p><?= $contact['products']?></p>
    <p class="bold">Valor a Pagar: </p>
    <p><?= $contact['AmountDue']?></p>
   </div>
<?php
    include_once("footer.php");
?>