<?php

include('include/DB.php'); // Inclusion de la connexion à la base de données

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$success = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération et nettoyage des données du formulaire
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $service = htmlspecialchars($_POST['service']);
    $message = htmlspecialchars($_POST['message']);
    $website = isset($_POST['website']) && $_POST['website'] === 'yes' ? htmlspecialchars($_POST['website-url']) : 'No website provided';
    $budget = htmlspecialchars($_POST['budget']);
    $file_path = '';

    // Gestion de l'upload de fichier
    if (!empty($_FILES['file-upload']['name'])) {
        $file_name = basename($_FILES['file-upload']['name']);
        $target_dir = "uploads/";
        $file_path = $target_dir . $file_name;

        // Création du répertoire cible si nécessaire
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0777, true);
        }

        // Déplacement du fichier uploadé
        if (move_uploaded_file($_FILES['file-upload']['tmp_name'], $file_path)) {
            echo "<script> alert('File uploaded successfully.')</script>";
        } else {
            echo "<script> alert('Failed to upload file.')</script>";
            $file_path = ''; // Réinitialisation si l'upload échoue
        }
    }

    // Insertion des données dans la base de données
    $sql = "INSERT INTO service_order (name, email, phone, service, message, website, budget, file_path) 
            VALUES ('$name', '$email', '$phone', '$service', '$message', '$website', '$budget', '$file_path')";

    $mail = new PHPMailer(true);

    // Exécution de la requête
    if ($conn->query($sql) === TRUE) {
        try {
            // Configuration SMTP
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'jujtsukausen@gmail.com';
            $mail->Password = 'xnqi sirq tgaw yrfj'; // Remplacez par le mot de passe réel
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            // Expéditeur et destinataire
            $senderEmail = $_POST['email']; // Utilise l'email fourni par le formulaire comme expéditeur
            $senderName = $name; // Utilise le nom fourni par le formulaire comme nom de l'expéditeur
            $mail->setFrom($senderEmail, $senderName);
            $mail->addAddress('speedx.agency987@gmail.com'); // Remplacez par le destinataire souhaité

            // Ajout de l'attachement si présent
            if (!empty($file_path)) {
                $mail->addAttachment($file_path, $_FILES['file-upload']['name']);
            }

            // Contenu de l'email
            $mail->isHTML(true);
            $mail->Subject = "New Service Order from $name";
            $mail->Body = "
                <p>You have received a new service order:</p>
                <ul>
                    <li><strong>Name:</strong> $name</li>
                    <li><strong>Email:</strong> $email</li>
                    <li><strong>Phone:</strong> $phone</li>
                    <li><strong>Service:</strong> $service</li>
                    <li><strong>Message:</strong> $message</li>
                    <li><strong>Existing Website:</strong> $website</li>
                    <li><strong>Budget:</strong> $budget</li>
                    <li><strong>File:</strong> $file_path</li>
                </ul>";

            // Envoi de l'email
            $mail->send();
            header("Location: contact.php?status=success");
            exit();

        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            header("Location: contact.php?status=error");
            exit();
        }
    } else {
        echo "Erreur : " . $conn->error;
    }
}

?>
