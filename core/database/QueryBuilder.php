<?php

class QueryBuilder
{
	protected $pdo;

	public function __construct(PDO $pdo)
	{
		$this->pdo = $pdo;
	}

	public function selectAll($table)
	{
		$statement = $this->pdo->prepare("SELECT * FROM {$table}");
		$statement->execute();
		return $statement->fetchAll(PDO::FETCH_CLASS);
	}

	public function insert($table, $data)
	{
		$sql = sprintf(
			'INSERT INTO %s (%s) VALUES (%s)',
			$table,
			implode(', ', array_keys($data)),
			':' . implode(', :', array_keys($data))
		);
		
		try	{
			$statement = $this->pdo->prepare($sql);
			$statement->execute($data);
		} catch (Exception $e) {
			die($e->getMessage());
		}
		
		return true;
	}

	public function findFirstBy($table, $column, $value)
	{
		$statement = $this->pdo->prepare(
			"SELECT * FROM {$table} WHERE {$column} = '{$value}'"
		);
		$statement->execute();
		return $statement->fetchObject();
	}

	public function findAllBy($table, $column, $value)
	{
		$statement = $this->pdo->prepare(
			"SELECT * FROM {$table} WHERE {$column} = '{$value}'"
		);
		$statement->execute();
		return $statement->fetchAll(PDO::FETCH_CLASS);
	}

	public function findById($table, $value)
	{
		$statement = $this->pdo->prepare(
			"SELECT * FROM {$table} WHERE `id` = '{$value}'"
		);
		$statement->execute();
		return $statement->fetchObject();
	}

	public function getCountBy($table, $column, $value)
	{
		$statement = $this->pdo->prepare(
			"SELECT COUNT(*) FROM `{$table}` WHERE {$column} = '{$value}'"
		);
		$statement->execute();
		return $statement->fetchColumn();
	}

	public function updateColumn($table, $setColumn, $setValue, $whereColumn, $whereValue)
	{
		$statement = $this->pdo->prepare(
			"UPDATE `{$table}` SET `{$setColumn}` = '{$setValue}' WHERE `{$whereColumn}` = '{$whereValue}'"
		);
		return $statement->execute();
	}
}