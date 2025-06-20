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
                <table class="table" id="contacts-table">
                    <thead>
                        <tr>
                           <th scope="col">#</th>
                           <th scope="col">Nome</th> 
                           <th scope="col">Telefone</th>
                           <th scope="col">Valor a ser Pago</th>
                           <th scope="col">Produtos</th>  
                           <th scope="col">#</th> 
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($contats as $contact): ?>
                            <tr>
                                <td scope="row"><?= $contact['id'] ?></td>
                                <td><?= $contact['name'] ?></td>
                                <td><?= $contact['phone'] ?></td>
                                <td>R$ <?= number_format($contact['price'], 2, ',', '.') ?></td>
                                <td><?= $contact['products'] ?></td>
                                <td class="actions">
                                <?php endforeach; ?>
                    </tbody>
                </table>
                
            <?php else: ?>
                <p id="empty-list-text">Ainda não Há clientes, <a href="<?= $BASE_URL ?>create.php" >Clique aqui para adicionar</a></p>
            <?php endif; ?>
    </div>
<?php
    include_once("footer.php");
?>