<?php

namespace App\Controllers;
//require APPPATH.'globals.php';
class Helloworld extends BaseController
{
    public function index()
    {
        return view('hello_world');
    }
    public function comment()
    {

        $db = db_connect();
        $q = "INSERT INTO test (id, name) VALUES (2, 'melihLOL')";
        //$db->query($q);
        $query = $db->query('SELECT * FROM test');
        
        foreach ($query->getResult() as $row) {
            echo $row->id;
            echo $row->name;
        }

        //$dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass);
        

        // MET PREPARE
        // $calories = 0;
        // $colour = 'm%';
        // $qr2 = "SELECT id, name FROM test WHERE id > ?"; //AND name like ?
        // $sth = $db->prepare($qr2);
        // $sth->execute($calories);



        //$sth->bindParam( 2, $colour, PDO::PARAM_STR, 12 );
        // $sth->execute( );
        // while ( $row = $sth->fetch(PDO::FETCH_BOTH ) ) {
        //     echo “Column 1 : “ . $row[‘id’] . “ Column 2 : “ .$row[‘name’];
        // }
    }
    public function product($productCat, $productName)
    {
        echo $productCat;
        echo $productName;
    }
    // GETS CALLED ALWAYS
    //public function _remap(){
    //    echo 'HELLO WORDL';echo "kek";
    //}
}