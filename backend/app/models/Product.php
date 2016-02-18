<?php
class Product extends Eloquent {

  /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
   protected $table = 'products';
   protected $primaryKey = 'idProduct';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */


   public static function getProducts() {
       return DB::table("products")
                   ->select("name", "status")
                   ->where("status", "active")
                   ->orderBy("name", "ASC")
                   ->get();
    }

}
