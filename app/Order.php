<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Order extends Model
{
    protected $guarded = ['id', 'name', 'subject', 'email', 'subject', 'attachment', 'content'];

    public function getCompaniesWithOrders()
    {
    	$companies = DB::table('companies')
           ->select(
              'orders.*', 
              'companies.company_id as companies_client_id', 
              'companies.company_name as company_name', 
              'companies.contact_person_last_name as contact_lastname'
            )
           ->join(
              'orders', 
              'companies.company_id', '=', 'orders.company_id'
            )
           ->orderBy('orders.company_id', 'desc')
           ->get();

  

    	return $companies;     

    } 

}
