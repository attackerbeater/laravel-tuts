<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Company extends Model
{
    public function getCollections()
    {
    	$collections = DB::table('companies')          
           	->leftJoin(
              'suppliers', 
              'companies.company_id', '=', 'suppliers.supplier_id'            
            )
           	->leftJoin(
              'orders', 
              'orders.order_id', '=', 'companies.company_id'            
            )
           ->orderBy('companies.company_id', 'asc')
           ->get();      

    	return $collections;	    	
    }
}
