<?php

function ask($question) {
    echo $question . " ";
    return trim(fgets(STDIN));
}

// Ask if user already has a database
$hasDb = strtolower(ask("Do you already have a MySQL database? (yes/no):"));

$dbHost = 'localhost';
$dbUser = ask("Enter your MySQL username:");
$dbPass = ask("Enter your MySQL password:");

if ($hasDb === 'yes') {
    $dbName = ask("Enter your existing database name:");
} else {
    $dbName = ask("Enter a name for your new database:");

    try {
        $pdo = new PDO("mysql:host=$dbHost", $dbUser, $dbPass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->exec("CREATE DATABASE `$dbName`");
        echo "✅ Database '$dbName' created successfully.\n";
    } catch (PDOException $e) {
        echo "❌ Error creating database: " . $e->getMessage() . "\n";
        exit;
    }
}

$siteName = ask("Enter your website name:");

// Generate config content
$configContent = <<<PHP
<?php
// Auto-generated config file

define('DB_HOST', '$dbHost');
define('DB_NAME', '$dbName');
define('DB_USER', '$dbUser');
define('DB_PASS', '$dbPass');
define('SITE_NAME', '$siteName');
PHP;

// Save config
file_put_contents(__DIR__ . '/../app/core/config.php', $configContent);

echo "\n✅ Configuration saved to config.php\n";
echo "🚀 You're ready to start working!\n";
