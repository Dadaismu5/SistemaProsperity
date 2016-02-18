<?php
class Customer extends Eloquent {

  /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
   protected $table = 'customers';
   protected $primaryKey = 'idCustomer';

   public static $create_rules = array(
        "name"          => "required|max:100",
        "address"       => "required|max:200",
        "email"         => "required",
        "phone"         => "required|max:30"
   );

   public static $fancy_labels = array(
        "name"          => "Nombre",
        "address"       => "Dirección",
        "email"         => "Email",
        "phone"         => "Teléfono"
    );

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */


   public static function getCustomers() 
   {
       return DB::table("customers")
                   ->select("name", "email", "phone", "cell_phone", "company", "idCustomer")
                   ->where("status", "active")
                   ->orderBy("name", "ASC")
                   ->get();
   }

}
