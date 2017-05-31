<?php

/**
 * Created by PhpStorm.
 * User: Rafal
 * Date: 02017-05-31
 * Time: 16:44
 */
class DB
{
    protected $db_name = "myfirstphpapp";
    protected $db_user = "root";
    protected $db_pass = "mysql";
    protected $db_host = "localhost";

    // Open a connection to the database.
    // Make sure this is called on every page that needs to use the database.

    public function connect()
    {
        $connection = mysqli_connect(db_host, db_user, db_pass, db_name);
        mysqli_select_db(db_name);

        return true;
    }

    // Takes a MySQL row set and returns an associative array
}