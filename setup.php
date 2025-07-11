<?php

function ask($question) {
    echo $question . " ";
    return trim(fgets(STDIN));
}

$dbName = ask("Enter your database name:");
$dbUser = ask("Enter your database username:");
$dbPass = ask("Enter your database password:");
$siteName = ask("Enter your website name:");

$configContent = <<<PHP
<?php
// Auto-generated config file

define('DB_HOST', 'localhost');
define('DB_NAME', '$dbName');
define('DB_USER', '$dbUser');
define('DB_PASS', '$dbPass');
define('SITE_NAME', '$siteName');
PHP;

file_put_contents(__DIR__ . '/app/core/config.php', $configContent);

echo "\nConfiguration saved to config.php\n";
echo "\run your machine and start working \n";
