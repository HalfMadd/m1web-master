<?php

namespace App\API\Migrations;

use App\API\Migrations\AbstractMigrations;

require_once 'vendor/autoload.php';

class Migrations20191019 extends AbstractMigrations
{
	protected $sql = "
		INSERT INTO destination.city
		VALUES
			(0, 'paris', 'paris.jpg'),
			(NULL, 'tokyo', 'tokyo.jpg'),
			(NULL, 'londres', 'londres.jpg')
		;
		INSERT INTO destination.country
		VALUES
			(NULL, 'France', 0)
		;
	";
}