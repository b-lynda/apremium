<?php
// Configuration
header('Content-Type: application/json');

// Vérifier que c'est bien une requête POST
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Méthode non autorisée']);
    exit;
}

// Récupération et nettoyage des données
$prenom = isset($_POST['prenom']) ? htmlspecialchars(trim($_POST['prenom'])) : '';
$nom = isset($_POST['nom']) ? htmlspecialchars(trim($_POST['nom'])) : '';
$email = isset($_POST['email']) ? htmlspecialchars(trim($_POST['email'])) : '';
$tel = isset($_POST['tel']) ? htmlspecialchars(trim($_POST['tel'])) : '';
$service = isset($_POST['service']) ? htmlspecialchars(trim($_POST['service'])) : '';
$message = isset($_POST['message']) ? htmlspecialchars(trim($_POST['message'])) : '';

// Validation des champs obligatoires
if (empty($prenom) || empty($nom) || empty($email) || empty($tel) || empty($service) || empty($message)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Tous les champs obligatoires doivent être remplis']);
    exit;
}

// Validation de l'email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Email invalide']);
    exit;
}

// Configuration de l'email
$to = "contact@a-premium.fr"; 
$subject = "Nouvelle demande de contact - " . $service;

// Conversion du type de service en français lisible
$services = [
    'tourisme' => 'Nettoyage Tourisme',
    'syndic' => 'Gestion locative / Syndic',
    'tertiaire' => 'Tertiaire',
    'industriel' => 'Industriel',
    'desinfection' => 'Désinfection',
    'tp' => 'Travaux publics',
    'candidature' => 'Candidature'
];
$service_libelle = isset($services[$service]) ? $services[$service] : $service;

// Nom complet
$nom_complet = $prenom . ' ' . $nom;

// Corps de l'email en HTML
$body = "
<!DOCTYPE html>
<html>
<head>
    <meta charset='UTF-8'>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background: linear-gradient(135deg, #1a7e6c 0%, #244163 100%); color: white; padding: 20px; text-align: center; border-radius: 8px 8px 0 0; }
        .content { background: #f9f9f9; padding: 30px; border-radius: 0 0 8px 8px; }
        .field { margin-bottom: 20px; }
        .field-label { font-weight: bold; color: #1a7e6c; margin-bottom: 5px; }
        .field-value { background: white; padding: 10px; border-radius: 4px; border-left: 3px solid #1a7e6c; }
        .footer { text-align: center; margin-top: 20px; color: #666; font-size: 12px; }
    </style>
</head>
<body>
    <div class='container'>
        <div class='header'>
            <h2>A+ PREMIUM GROUP</h2>
            <p>Nouvelle demande de contact</p>
        </div>
        <div class='content'>
            <div class='field'>
                <div class='field-label'>Nom complet</div>
                <div class='field-value'>$nom_complet</div>
            </div>
            
            <div class='field'>
                <div class='field-label'>Email</div>
                <div class='field-value'><a href='mailto:$email'>$email</a></div>
            </div>
            
            <div class='field'>
                <div class='field-label'>Téléphone</div>
                <div class='field-value'><a href='tel:$tel'>$tel</a></div>
            </div>
            
            <div class='field'>
                <div class='field-label'>Type de prestation</div>
                <div class='field-value'>$service_libelle</div>
            </div>
            
            <div class='field'>
                <div class='field-label'>Message</div>
                <div class='field-value'>" . nl2br($message) . "</div>
            </div>
        </div>
        <div class='footer'>
            <p>Cet email a été envoyé depuis le formulaire de contact du site A PREMIUM GROUP</p>
        </div>
    </div>
</body>
</html>
";

// Headers de l'email
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
$headers .= "From: Site ANYX PREMIUM <noreply@anyxpremium.fr>\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

// Envoi de l'email
if (mail($to, $subject, $body, $headers)) {
    // Email de confirmation au client (optionnel)
    $confirmation_subject = "Confirmation de votre demande - ANYX PREMIUM";
    $confirmation_body = "
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset='UTF-8'>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
            .container { max-width: 600px; margin: 0 auto; padding: 20px; }
            .header { background: linear-gradient(135deg, #1a7e6c 0%, #244163 100%); color: white; padding: 20px; text-align: center; border-radius: 8px 8px 0 0; }
            .content { background: #f9f9f9; padding: 30px; border-radius: 0 0 8px 8px; }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'>
                <h2>ANYX PREMIUM</h2>
                <p>Merci pour votre demande !</p>
            </div>
            <div class='content'>
                <p>Bonjour <strong>$prenom $nom</strong>,</p>
                <p>Nous avons bien reçu votre demande de contact concernant : <strong>$service_libelle</strong></p>
                <p>Notre équipe vous recontactera dans les plus brefs délais, généralement sous 24h.</p>
                <p>À très bientôt !</p>
                <p><strong>L'équipe ANYX PREMIUM</strong><br>
                Grenoble & Rhône-Alpes</p>
            </div>
        </div>
    </body>
    </html>
    ";
    
    $confirmation_headers = "MIME-Version: 1.0\r\n";
    $confirmation_headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $confirmation_headers .= "From: ANYX PREMIUM <noreply@anyxpremium.fr>\r\n";
    
    // Envoyer l'email de confirmation
    mail($email, $confirmation_subject, $confirmation_body, $confirmation_headers);
    
    // Réponse JSON de succès
    echo json_encode([
        'success' => true, 
        'message' => 'Votre message a été envoyé avec succès ! Nous vous recontacterons sous 24h.'
    ]);
} else {
    http_response_code(500);
    echo json_encode([
        'success' => false, 
        'message' => 'Une erreur est survenue lors de l\'envoi. Veuillez réessayer ou nous contacter directement.'
    ]);
}
?>