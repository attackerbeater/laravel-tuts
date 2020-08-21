<?php 
namespace App\Acme\Reporting;

use App\Acme\Reporting\SalesOutputInterface;

class HtmlOutput implements SalesOutputInterface
{
	public function output($sales)
	{
		echo "<h1>Sales: $sales</h1>";
	}
}