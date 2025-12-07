<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données
    $nom = htmlspecialchars($_POST['nom']);
    $email = htmlspecialchars($_POST['email']);
    $tel = htmlspecialchars($_POST['tel']);
    $service = htmlspecialchars($_POST['service']);
    $ville = htmlspecialchars($_POST['ville']);
    $message = htmlspecialchars($_POST['message']);
    
    // Email de destination
    $to = "contact@a-premium.fr";
    $subject = "Nouvelle demande - " . $service;
    
    // Corps de l'email
    $body = "
    Nouvelle demande de :
    
    Nom: $nom
    Email: $email
    Téléphone: $tel
    Service: $service
    Ville: $ville
    
    Message:
    $message
    ";
    
    // Headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    
    // Envoi
    if (mail($to, $subject, $body, $headers)) {
        echo json_encode(['success' => true, 'message' => 'Message envoyé avec succès!']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Erreur lors de l\'envoi.']);
    }
}
?>