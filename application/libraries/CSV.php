<?php defined('BASEPATH') or exit('No direct script access allowed');

class CSV
{


  /**
   * Import entire CSV file.
   *
   * @param $file_path Path to CSV file
   * @return array|false  returns array of rows (first element is header row), or false if file could not be opened.
   */
    public function process_csv($file_path)
    {
        // Ensure all flavours of line endings (including Mac format)
        // are processed correctly.
        ini_set('auto_detect_line_endings', true);

        $fh = fopen($file_path, 'r');
        if (! $fh) {
            return false;
        }

        while ($line = fgetcsv($fh)) {
            if ($line != [null]) { // Ignore empty lines
        $lines[] = $line; //Load up all the lines in an array for manipulation
            }
        }

        fclose($fh);

        return $lines;
    }
}
