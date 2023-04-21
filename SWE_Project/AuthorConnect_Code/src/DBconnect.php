<?php
require_once '../DBconfig.php'; //access the login values
try {
    if (!empty($dsn)) {
        if (!empty($username)) {
            if (!empty($password)) {
                if (!empty($options)) {
                    $connection = new PDO($dsn, $username, $password, $options);
                }
            }
        }
    }
    echo 'DB successfully connected';
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
?>