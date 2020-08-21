<?php 

namespace App\Acme\Repositories;

use DB;

class SalesRepository
{
	public function between($startDate, $endDate)
	{
		return $startDate . 'AND' . $endDate;
	}
}	