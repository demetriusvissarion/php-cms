<?php

class QueryBuilder 
{
	protected $pdo;


	public function __construct($pdo)
	{
		$this->pdo = $pdo;
	}

	public function selectAll($table)
	{
		$statement = $this->pdo->prepare("select * from {$table}");

		$statement->execute();

		return $statement->fetchAll(PDO::FETCH_CLASS);
	}

	public function insert($table, $parameters)
	{
		// die(var_dump(array_keys($parameters)));
		$sql = sprintf(
			'insert into %s (%s) values (%s)',
			$table, 
			implode(', ', array_keys($parameters)),
			':' . implode(', :', array_keys($parameters)),
		);

		try {
			$statement = $this->pdo->prepare($sql);

			$statement->execute($parameters);
		} catch (Exception $e) {
			die('Whoops, something went wrong.');
		}
	}

    public function update($table, $parameters)
    {
        $statement = $this->pdo->prepare("update $table set page_content = :page_content where id = :id");

        $statement->execute([
            'id' => $parameters['id'],
            'page_content' => $parameters['name']
        ]);

        return $statement->rowCount();
    }
};