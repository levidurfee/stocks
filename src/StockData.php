<?php namespace levidurfee\StockData;

/**
 * @author levi
 */
class StockData {
    protected $db;
    public function __construct() {
        $d = self::loadConfig();
        try {
            $this->db = new \PDO("mysql:host=" . $d['hostname'] . ";dbname=" 
                        . $d['database'] . ";charset=utf8", 
                        $d['username'], $d['password']);
                $this->db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
                $this->db->setAttribute(\PDO::ATTR_EMULATE_PREPARES, false);
        } catch (Exception $ex) {
            echo $ex->getMessage() . "\n";
            die();
        }
    }
    
    public static function loadConfig() {
        return include(ROOT . DS . 'config.php');
    }
}
