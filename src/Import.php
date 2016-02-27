<?php namespace levidurfee\StockData;

class Import extends StockData {
    protected $files = [];
    
    public function __construct() {
        parent::__construct();
    }
    
    public function importFiles() {
        # Loop through each file
        for($i=0;$i<count($this->files);$i++) {
            # Get the content of the file
            $file = ROOT . DS . 'data' . DS . 'csv' . DS . $this->files[$i];
            #echo "Loading file: " . $file . "\r\n";
            $fileData = file_get_contents($file);
            # Get the lines in the file
            $lines = explode("\n", $fileData);
            $lines = array_slice($lines, 1);
            for($x=0;$x<count($lines);$x++) {
                if(strlen($lines[$x]) < 2) {
                    continue;
                }
                # Explode the CSV lines into variables
                list($symbol, $cDate, $open, $high, $low, $close, $volume) = explode(',', $lines[$x]);
                echo $symbol . "\r\n";
            }
        }
    }
    
    /**
     * Get a list of all the csv files that need to be imported
     */
    public function getFiles() {
        $csvDir = ROOT . DS . 'data' . DS . 'csv' . DS;
        $files = scandir($csvDir);
        $this->files = array_slice($files, 2);
        return $this;
    }
}
