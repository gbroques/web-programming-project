<?php

class User
{
	public static function create($fields)
	{
		$sql = self::getCreateSql();
		$pdo = DB::prepare($sql);
		$input = self::sanitizeInput($fields);

		$success = $pdo->execute($input);
		if (!$success) {
			throw new Exception("Error creating user", 1);
		}

		return self::lastCreated();
	}

	public static function lastCreated()
	{
		$id = DB::lastInsertId();
		$pdoStatement = DB::query("SELECT * FROM registration where id = $id");
		return $pdoStatement->fetchObject();
	}

	private static function getCreateSql()
	{
		return 'INSERT INTO `registration`(`userName`, `password`, `firstName`, `lastName`, `address1`, `address2`, `city`, `state`, `zipCode`, `phone`, `email`, `gender`, `maritalStatus`, `dateOfBirth`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
	}

	private static function sanitizeInput($fields)
	{
		$copy = $fields;

		// Remove password confirm field and format birthday
		unset($copy["passwordConfirm"]);
		$dateOfBirth = date_create($copy["dateOfBirth"]);
		$copy["dateOfBirth"] = date_format($dateOfBirth, "Y-m-d");

		// Wrap values in single quotes
		$values = array_values($copy);

		return $values;
	}
}
