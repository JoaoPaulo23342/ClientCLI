<?php

 session_start();
 include_once("connection.php");
 include_once("url.php");

 $data = $_POST;
 if(!empty($data)) {

     

     if($data['type'] === 'create') {
        $name = $data['name'];
        $amount = $data['amountDue'];
        $phone = $data['phone'];
        $cpf = $data['CPF'];
        $adress = $data['Adress'];
        $products = $data['products'];
        $observation = $data['observation'];

        $query = "INSERT INTO contacts (name, phone, CPF, adress, products, observation, AmountDue) VALUES (:name, :phone, :CPF, :Adress, :products, :observation, :amountDue)";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':CPF', $cpf);
        $stmt->bindParam(':Adress', $adress);
        $stmt->bindParam(':products', $products);
        $stmt->bindParam(':observation', $observation);
        $stmt->bindParam(':amountDue', $amount);
        try {
            $stmt->execute();
            $_SESSION['msg'] = "Contato adicionado com sucesso!";

    }   catch (PDOException $e) {
        $error = $e->getMessage();
        echo "Erro: " . $error;
        exit; // Interrompe a execução se houver erro na conexão
}
        
     }
      header("Location:". $BASE_URL . "../templates/index.php");
 } else {
    $id;
    if(!empty($_GET)) {
      $id = $_GET['id'];
}
//retorna o dado de um contato
    if(!empty($id)) {
     $query = "SELECT * FROM contacts WHERE id = :id";
     $stmt = $conn->prepare($query);
     $stmt->bindParam(':id', $id);
     $stmt->execute();
     $contact = $stmt->fetch();
}   else {
    // retorna todos os contatos do banco de dados
     $contats = [];
     $query = "SELECT * FROM contacts";
     $stmt = $conn->prepare($query);
     $stmt->execute();
     $contats = $stmt->fetchAll();
}
 }


// fechar conexão

$conn = null;

