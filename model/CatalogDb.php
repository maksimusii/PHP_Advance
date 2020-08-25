<?php

abstract class ConnectDb {
  
  const dsn = "mysql:host=localhost;dbname=l8_db";
  const user= 'root';
  const password = 'root01';
  
	protected static $connection = null;

	public function __construct() {

		if (!self::$connection) {

			self::$connection = new \PDO(self::dsn, self::user, self::password);
			self::$connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
		}
	}
}
class CatalogDb extends ConnectDb {
  public function getGoods() {
		$statement = self::$connection->prepare("SELECT * FROM goods");
		$statement->execute();   

		return $statement->fetchAll(\PDO::FETCH_ASSOC);
	}
}