<?php
class citas
{
	private $citas;
	private $dbh;

	public function __construct()
	{
		$this->citas = array();
		$this->dbh = new PDO('mysql:host=localhost;dbname=jmas', "root", "");
	}

	private function set_names()
	{
		return $this->dbh->query("SET NAMES 'utf8'");
	}

	public function lista_citas()
	{
		self::set_names();
		$sql="select * from citas";
		foreach ($this->dbh->query($sql) as $res)
		{
			$this->citas[]=$res;
		}
		return $this->citas;
		$this->dbh=null;
	}
}
?>