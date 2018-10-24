<?php
class Autocompletar
{

	private $dbh;

	public function __construct()
	{
		$this->dbh = new PDO("mysql:host=localhost;dbname=valdoco", "root", "");
	}

	public function findData($search)
	{
		$query = $this->dbh->prepare("SELECT idPrestamo, Carnet FROM prestamo WHERE Carnet LIKE :search");
        $query->execute(array(':search' => '%'.$search.'%'));
        $this->dbh = null;
        if($query->rowCount() > 0)
        {
        	echo json_encode(array('res' => 'full', 'data' => $query->fetchAll()));
        }
        else
        {
        	echo json_encode(array('res' => 'empty'));
        }
	}
}