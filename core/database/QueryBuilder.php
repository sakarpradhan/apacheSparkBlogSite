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
	}

	public function findBy($table, $column, $value)
	{
		// $sql = sprintf(
		// 	"SELECT * FROM %s WHERE %s = '%s'",
		// 	$table,
		// );
		$statement = $this->pdo->prepare(
			"SELECT * FROM {$table} WHERE {$column} = '{$value}'");
		$statement->execute();
		return $statement->fetchObject();
	}
}