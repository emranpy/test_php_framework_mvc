<?php

/**
 * Trait Database
 *
 * Provides basic database connection and query execution using PDO.
 * Reads connection details from defined config constants.
 */
trait Database {

    /**
     * Establishes and returns a PDO database connection using config constants.
     *
     * @return PDO The PDO database connection instance.
     * @throws PDOException If the connection fails.
     */
    private function connect() {
        // Make sure config.php is loaded before using this trait
        // Using constants for DB connection info
        $host = defined('DB_HOST') ? DB_HOST : 'localhost';
        $db   = defined('DB_NAME') ? DB_NAME : 'mvc';
        $user = defined('DB_USER') ? DB_USER : 'root';
        $pass = defined('DB_PASS') ? DB_PASS : '';

        $dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";

        $con = new PDO($dsn, $user, $pass);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $con;
    }

    /**
     * Executes a prepared SQL query with optional bound parameters.
     *
     * @param string $sql The SQL query string with placeholders.
     * @param array $params Optional parameters to bind to the query.
     * @return PDOStatement The resulting PDOStatement after execution.
     */
    public function query($sql, $params = []) {
        $con = $this->connect();
        $stmt = $con->prepare($sql);
        $stmt->execute($params);
        return $stmt;
    }
}
