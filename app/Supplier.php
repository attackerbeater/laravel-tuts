<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Supplier extends Model
{
    public function getName($orders)
    {

    	// supplier
      $suppliers = DB::table('suppliers')
          ->select('supplier_name')
          ->get();
     
      foreach ($suppliers as $supplier){
        $supplier_array[] = $supplier->supplier_name;
      }

      for ($i=0; $i < count($orders); $i++) {
        // order_treatment
        if(isset($orders[$i]->order_treatment)){
          $order_treatment = $orders[$i]->order_treatment;
          $orders[$i]->order_treatment =explode(',',$order_treatment);
        }
        
        // order_treatment_details
        if(isset($orders[$i]->order_treatment_details)){
          $order_treatment_details = $orders[$i]->order_treatment_details;
          $orders[$i]->order_treatment_details =explode(',',$order_treatment_details);
        }
       
        // order_treatment_details
        if(isset($orders[$i]->order_treatment_price)){
          $order_treatment_price = $orders[$i]->order_treatment_price;
          $orders[$i]->order_treatment_price =explode(',',$order_treatment_price);
        }
      }

      return $suppliers;
    }
}
