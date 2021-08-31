<?php

class DBbackup
{
    public $suffix;
    public $dirs;
    protected $dbInstance;
    public function __construct()
    {
        $db_host    = 'localhost';
        $db_user    = 'root';
        $db_pass    = '';
        $db_database  = 'asmeer';
        try {
            $this->dbInstance = new PDO('mysql:host=' . $db_host . ';dbname=' . $db_database, $db_user, $db_pass);
        } catch (Exception $e) {
            die("Error " . $e->getMessage());
        }
        $this->suffix = date('Ymd_His');
    }

    public function backup($tables = '*')
    {

        $path = 'C:/mediation_backup/';

        // Save the SQL script to a backup file
        //    $output = $path  . 'database_backup_' . time() . '.sql';

        $output = "-- database backup - " . date('Y-m-d H:i:s') . PHP_EOL;
        $output .= "SET NAMES utf8;" . PHP_EOL;
        $output .= "SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';" . PHP_EOL;
        $output .= "SET foreign_key_checks = 0;" . PHP_EOL;
        $output .= "SET AUTOCOMMIT = 0;" . PHP_EOL;
        $output .= "START TRANSACTION;" . PHP_EOL;
        //get all table names
        if ($tables == '*') {
            $tables = [];
            $query = $this->dbInstance->prepare('SHOW TABLES');
            $query->execute();
            while ($row = $query->fetch(PDO::FETCH_NUM)) {
                $tables[] = $row[0];
            }
            $query->closeCursor();
        } else {
            $tables = is_array($tables) ? $tables : explode(',', $tables);
        }

        foreach ($tables as $table) {

            $query = $this->dbInstance->prepare("SELECT * FROM `$table`");
            $query->execute();
            $output .= "DROP TABLE IF EXISTS `$table`;" . PHP_EOL;

            $query2 = $this->dbInstance->prepare("SHOW CREATE TABLE `$table`");
            $query2->execute();
            $row2 = $query2->fetch(PDO::FETCH_NUM);
            $query2->closeCursor();
            $output .= PHP_EOL . $row2[1] . ";" . PHP_EOL;

            while ($row = $query->fetch(PDO::FETCH_NUM)) {
                $output .= "INSERT INTO `$table` VALUES(";
                for ($j = 0; $j < count($row); $j++) {
                    $row[$j] = addslashes($row[$j]);
                    $row[$j] = str_replace("\n", "\\n", $row[$j]);
                    if (isset($row[$j]))
                        $output .= "'" . $row[$j] . "'";
                    else $output .= "''";
                    if ($j < (count($row) - 1))
                        $output .= ',';
                }
                $output .= ");" . PHP_EOL;
            }
        }
        $output .= PHP_EOL . PHP_EOL;

        $output .= "COMMIT;";


        $ff = date('Y-m-d');
        $filename = $path . 'db_backup_mediation_' . $ff . '.sql';
        $this->writeUTF8filename($filename, $output);
        echo "<script> alert('Succesfully $filename Backuped' ) </script>";
    }


    private function writeUTF8filename($fn, $c)
    {  /* save as utf8 encoding */
        $f = fopen($fn, "w+");
        # Now UTF-8 - Add byte order mark
        fwrite($f, pack("CCC", 0xef, 0xbb, 0xbf));
        fwrite($f, $c);
        fclose($f);
    }
}


if (isset($_POST['search'])) {

    $Backup = new DBbackup();
    $Backup->backup();
}
?>



<!doctype html>
<?php

include('../connect.php');

?>
<html lang="en">

<head>
    <title>Members</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="../css/bootstrap.min.css"> -->



    <style>
        @font-face {
            font-family: bamini;
            src: url('fonts/Bamini.ttf')
        }

        .ff {
            font-family: bamini;
            font-size: 2 10px;
            /* font-weight: bolder; */
        }

        .ff input[type=text] {
            font-size: 15px;
        }


        .bd-feedback {
            box-shadow: 0 0px 5px;
            padding: 60px;



        }


        /* note text box color change method */
        .bd-feedback input[type=text] {
            border: 1px solid #b9b9b9;
            font-size: 17px;
        }

        .modall {
            padding-left: 15px;
        }


        .modall input[type=text] {
            border: 1px solid #b9b9b9;
            font-size: 17px;
        }
    </style>
</head>

<body style="background-color:#ffffff">

    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="custom-menu">
                <button type="button" id="sidebarCollapse" class="btn btn-primary">
                    <i class="fa fa-bars"></i>
                    <span class="sr-only">Toggle Menu</span>
                </button>
            </div>
            <?php include('side.php') ?>
        </nav>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
            <div>

                <h2 style="  margin:0px 0 5px 0;">Backup</h2>
                <hr style="color: #808080; margin:0px 0 50px 0;">


                <form action="" method="post">

                    <button style="width: 40%" type="submit" name="search" class="btn btn-lg btn-primary"> <i class="fa fa-search"></i>Backup</button>

                </form>

            </div>
        </div>

</body>

</html>