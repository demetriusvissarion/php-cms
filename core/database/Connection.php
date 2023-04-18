<?php

class Connection
{
	public static function make()
	{
		try {
			return new PDO('mysql:host=127.0.0.1; dbname=mytodo', 'root', 'Carajoy2');
		} catch (PDOException $e) {
			echo die($e->getMessage());
		}
	}
}

$pdo = Connection::make();