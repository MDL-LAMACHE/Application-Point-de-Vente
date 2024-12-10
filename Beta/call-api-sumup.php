<?php
// Configuration de l'API SumUp
define('SUMUP_CLIENT_ID', getenv('SUMUP_CLIENT_ID'));
define('SUMUP_CLIENT_SECRET', getenv('SUMUP_CLIENT_SECRET'));
define('SUMUP_ACCESS_TOKEN', getenv('SUMUP_ACCESS_TOKEN')); // Obtenu via OAuth

define('SUMUP_API_URL', getenv('SUMUP_API_URL')); // URL de base de l'API SumUp
/**
 * Vérifie l'état d'un paiement via l'API SumUp
 * @param string $transactionCode Code unique de la transaction générée par le terminal
 * @return string Statut du paiement (PAID, FAILED, PENDING, etc.)
 */
function checkPaymentStatus($transactionCode)
{
    // Préparation de la requête cURL
    $curl = curl_init();

    curl_setopt_array($curl, [
        CURLOPT_URL => SUMUP_API_URL . "/transactions/$transactionCode", // Endpoint pour vérifier une transaction
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER => [
            'Authorization: Bearer ' . SUMUP_ACCESS_TOKEN,
            'Content-Type: application/json'
        ]
    ]);

    // Exécution de la requête
    $response = curl_exec($curl);
    $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

    // Gestion des erreurs
    if (curl_errno($curl)) {
        return 'Erreur cURL : ' . curl_error($curl);
    }

    curl_close($curl);

    // Vérification du statut de la requête HTTP
    if ($httpCode !== 200) {
        return "Erreur API : code HTTP $httpCode. Réponse : $response";
    }

    // Analyse de la réponse JSON
    $data = json_decode($response, true);

    if (isset($data['status'])) {
        return $data['status']; // Retourne le statut (PAID, FAILED, PENDING, etc.)
    } else {
        return "Statut introuvable dans la réponse API.";
    }
}

// Exemple d'utilisation
$transactionCode = "1234567890"; // Code généré par ton terminal physique
$status = checkPaymentStatus($transactionCode);

echo "Le statut du paiement est : $status";
?>
