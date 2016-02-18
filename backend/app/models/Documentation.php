<?php
class Documentation extends Eloquent {

  /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
   protected $table = 'documentations';
   protected $primaryKey = 'idDocumentation';

   public static $create_rules = array(
        "idCustomer"    => "required|exists:customers,idCustomer"
   );

   

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

  public static function getDocumentsByCustomer($idCustomer) 
  {
      return DB::table("documentations")
                 ->where("idCustomer", $idCustomer)
                 ->first();
  }


}
