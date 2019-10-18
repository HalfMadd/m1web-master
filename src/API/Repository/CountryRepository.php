<?php

namespace App\API\Repository;

use App\API\Core\Database;

class CountryRepository
{
	private $database;
	private $connection;

	public function __construct(Database $database)
	{
		$this->database = $database;
		$this->connection = $this->database->connect();
	}

	public function findAll():array
	{
		$sql = "
			SELECT country.*
			FROM destination.country;
		";
		$query = $this->connection->prepare($sql);
		$query->execute();
		$results = $query->fetchAll(\PDO::FETCH_CLASS, 'App\API\Entity\Country');
		return $results;
	}

	public function findCities():array{
		$sql = "
			SELECT city.*
			INNER JOIN country.* ON country.city_id = city.id
			FROM destination.city;
		";
		$query = $this->connection->prepare($sql);
		$query->execute();
		$results = $query->fetchAll(\PDO::FETCH_CLASS, 'App\API\Entity\Country');
		return $results;
	}
}