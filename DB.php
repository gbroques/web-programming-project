<?php

include './database.php';

class DB
{
	protected static $conn;
	public static function connect()
	{
		try {
			$host = $_ENV["DATABASE_HOST"];
			$dbName = $_ENV["DATABASE_NAME"];
		    self::$conn = new PDO("mysql:host=$host;dbname=$dbName", $_ENV["USERNAME"], $_ENV["PASSWORD"]);
		    // set the PDO error mode to exception
		    self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch(PDOException $e) {
		    echo "Connection failed: " . $e->getMessage();
		}
	}

	public static function query($q)
	{
		return self::$conn->query($q);
	}

	public static function prepare($q)
	{
		return self::$conn->prepare($q);
	}

	public static function lastInsertId()
	{
		return self::$conn->lastInsertId();
	}
}
