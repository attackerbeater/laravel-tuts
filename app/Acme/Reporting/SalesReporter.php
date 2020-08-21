<?php

namespace App\Acme\Reporting;

use App\Acme\Repositories\SalesRepository;
use App\Acme\Reporting\SalesOutputInterface;

use DB; 
use Auth; 
use Exception;

class SalesReporter
{
	protected $repo;

	public function __construct(
		SalesRepository $repo
	)
	{
		$this->repo = $repo;
	}	

	public function between($startDate, $endDate, SalesOutputInterface $formatter)
	{
		$sales = $this->repo->between($startDate, $endDate);
		$formatter->output($sales );
	}


}


