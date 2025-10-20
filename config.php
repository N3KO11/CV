<?php
// Konfiguracja połączenia z bazą danych
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', ''); // Domyślnie puste w XAMPP
define('DB_NAME', 'cv_database');

// Funkcja do połączenia z bazą
function getDBConnection() {
    try {
        $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        
        // Sprawdzenie połączenia
        if ($conn->connect_error) {
            throw new Exception("Błąd połączenia: " . $conn->connect_error);
        }
        
        // Ustawienie kodowania UTF-8
        $conn->set_charset("utf8mb4");
        
        return $conn;
    } catch (Exception $e) {
        die("Błąd połączenia z bazą danych: " . $e->getMessage());
    }
}

// Funkcja do pobierania danych CV
function getCVData() {
    $conn = getDBConnection();
    
    $sql = "SELECT * FROM cv ORDER BY id DESC LIMIT 1";
    $result = $conn->query($sql);
    
    if ($result && $result->num_rows > 0) {
        $data = $result->fetch_assoc();
        $conn->close();
        return $data;
    }
    
    $conn->close();
    return null;
}
?>