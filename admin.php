<?php
require_once 'functions.php';

// Vérifier si une action est demandée
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    $action = $_POST['action'];

    if ($action === 'toggle_maintenance') {
        $current = isMaintenanceMode();
        $newStatus = !$current;
        if (setMaintenanceMode($newStatus)) {
            $message = $newStatus ? 'Mode maintenance activé.' : 'Mode maintenance désactivé.';
            $type = 'success';
        } else {
            $message = 'Erreur lors de la modification du mode maintenance.';
            $type = 'error';
        }
    }
}

// Obtenir le statut actuel
$maintenanceActive = isMaintenanceMode();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration - Malvoisin Sherlens Ranel</title>
    <style>
        body {
            font-family: 'DM Sans', sans-serif;
            background: #f5f5f5;
            margin: 0;
            padding: 20px;
            color: #333;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #2c3e50;
            margin-bottom: 30px;
            text-align: center;
        }
        .status {
            background: #ecf0f1;
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 30px;
            text-align: center;
        }
        .status.active {
            background: #ffeaa7;
            border-left: 4px solid #d63031;
        }
        .status.inactive {
            background: #55efc4;
            border-left: 4px solid #00b894;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .btn {
            background: #3498db;
            color: white;
            padding: 12px 24px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background 0.3s;
        }
        .btn:hover {
            background: #2980b9;
        }
        .btn.danger {
            background: #e74c3c;
        }
        .btn.danger:hover {
            background: #c0392b;
        }
        .message {
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .message.success {
            background: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        .message.error {
            background: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
        .back-link {
            display: inline-block;
            margin-top: 20px;
            color: #3498db;
            text-decoration: none;
        }
        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🛠️ Administration du Site</h1>

        <?php if (isset($message)): ?>
        <div class="message <?php echo $type; ?>">
            <?php echo htmlspecialchars($message); ?>
        </div>
        <?php endif; ?>

        <div class="status <?php echo $maintenanceActive ? 'active' : 'inactive'; ?>">
            <h3>Statut du Mode Maintenance</h3>
            <p><?php echo $maintenanceActive ? '🔴 ACTIVÉ - Le site affiche la page de maintenance' : '🟢 DÉSACTIVÉ - Le site fonctionne normalement'; ?></p>
        </div>

        <form method="post">
            <input type="hidden" name="action" value="toggle_maintenance">
            <button type="submit" class="btn <?php echo $maintenanceActive ? '' : 'danger'; ?>">
                <?php echo $maintenanceActive ? 'Désactiver le mode maintenance' : 'Activer le mode maintenance'; ?>
            </button>
        </form>

        <a href="index.php" class="back-link">← Retour au site</a>
    </div>
</body>
</html>