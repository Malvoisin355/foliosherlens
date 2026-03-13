<?php
// Configuration de l'email
$to = "malvoisinranelfils@email.com"; // Remplacez par votre email réel
$subject = "Nouveau message depuis le portfolio";

// Récupération des données du formulaire
$name = htmlspecialchars($_POST['name'] ?? '');
$email = htmlspecialchars($_POST['email'] ?? '');
$subject_form = htmlspecialchars($_POST['subject'] ?? '');
$message = htmlspecialchars($_POST['message'] ?? '');

// Validation basique
if (empty($name) || empty($email) || empty($message)) {
    echo json_encode(['success' => false, 'message' => 'Tous les champs sont requis.']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'message' => 'Adresse email invalide.']);
    exit;
}

// Construction du message
$body = "Nom: $name\n";
$body .= "Email: $email\n";
$body .= "Sujet: $subject_form\n\n";
$body .= "Message:\n$message\n";

// En-têtes
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Envoi de l'email
if (mail($to, $subject, $body, $headers)) {
    echo json_encode(['success' => true, 'message' => 'Message envoyé avec succès !']);
} else {
    echo json_encode(['success' => false, 'message' => 'Erreur lors de l\'envoi du message.']);
}
?>