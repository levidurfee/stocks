<?php namespace levidurfee\StockData;

class Import extends StockData {
    protected $files = [];
    
    public function __construct() {
        parent::__construct();
    }
    
    /**
     * Get a list of all the csv files that need to be imported
     */
    public function getFiles() {
        echo ROOT . DS . 'data' . DS . 'csv' . DS;
    }
}
