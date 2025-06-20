<?php
    include_once("header.php");

?>
    <div class="container">
        <?php if(isset($printMsg) && $printMsg != ""): ?>
            <p id="msg"> <?= $printMsg ?></p>
            <?php endif; ?>
            </div>
            <h1 id="main-title">Meus Clientes</h1>
            <?php if(count($contats) > 0): ?>
                <p>TEM CONTATOS</p>
            <?php else: ?>
                <p id="empty-list-text">Ainda não Há clientes, <a href="<?= $BASE_URL ?>create.php" >Clique aqui para adicionar</a></p>
            <?php endif; ?>
    </div>
<?php
    include_once("footer.php");
?>