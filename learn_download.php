<?php



if (isset($_GET['filename']) && basename($_GET['filename']) == $_GET['filename']) {
    $filename = $_GET['filename'];
} else {
    $filename = NULL;
}
$err = '<p>Sorry, the file you are requesting is unavailable.</p>';
if (!$filename) {
     echo $err;
    } else {
        $path = ''.$filename;
// check that file exists and is readable
        if (file_exists($path) && is_readable($path)) {
            // get the file size and send the http headers
            $size = filesize($path);
            header('Content-Type: application/octet-stream');
            header('Content-Length: '.$size);
            header('Content-Disposition: attachment; filename='.$filename);
            header('Content-Transfer-Encoding: binary');
            // open the file in binary read-only mode
            // display the error messages if the file can´t be opened
            $file = @ fopen($path, 'rb');
            if ($file) {
                // stream the file and exit the xscript when complete
                fpassthru($file);
                exit;
            } else {
                echo $err;
            }
        } else {
            echo $err;
        }
    }

    
?>
