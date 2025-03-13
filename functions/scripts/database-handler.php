<?php 
$_PATH = '/projects/thefacebook/functions/';
require_once $_SERVER['DOCUMENT_ROOT'].$_PATH.'scripts/content.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/projects/thefacebook/vendor/autoload.php';

use Dotenv\Dotenv;

class DatabaseHandler {
    
    private static $pdo = null;
    private function __construct() {}

    public static function getConnection() {
        if (self::$pdo == null) {

            $dotenv = Dotenv::createImmutable('/opt/lampp/secure/');
            $dotenv->load();

            try {
                self::$pdo = new PDO("mysql:host=".$_ENV["SERVER"].";dbname=".$_ENV["DATABASE"]."", $_ENV["USERNAME"], $_ENV["PASSWORD"]);
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Database connection failed:\n ".$e->getMessage());
            }
            
            return self::$pdo;
        }
    }
}
class SQLHandler {


    public static function TEST_getTables() {
        $pdo = DatabaseHandler::getConnection();

        $test = $pdo->query("SHOW TABLES");
        
        $tables = $test->fetchAll(PDO::FETCH_COLUMN);
        print_r($tables);
    }
}
?>