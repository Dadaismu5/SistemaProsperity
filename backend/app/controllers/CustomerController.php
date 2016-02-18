<?php

class CustomerController extends BaseController {

  public function __construct()
  {
      $this->beforeFilter('auth');
  }

	public function index()
	{

    $customers = Customer::getCustomers();
    
    $data = array('active'      => 'customers',
                  'customers'    => $customers
    );
    return View::make('customers.index', $data);
  }

  public function create()
  {
    $data = array('active'      => 'customers');
    return View::make('customers.create', $data);
  }

  public function store()
  {
      $customer = Input::get("customer");
      $rules = Customer::$create_rules;

      $validator = Validator::make($customer, $rules);
      $validator->setAttributeNames(Customer::$fancy_labels);

      if ($validator->passes()) {
        try {
            DB::transaction(function() use ($customer) {
              $row = new Customer;
              $row->name        = $customer['name'];
              $row->address     = $customer['address'];
              $row->company     = $customer['company'];
              $row->ocupation   = $customer['ocupation'];
              $row->email       = $customer['email'];
              $row->phone       = $customer['phone'];
              $row->cell_phone  = $customer['cell_phone'];
              $row->status      = "active";
              $row->save();

              $id_customer = $row->idCustomer;

            });

        } catch (\ErrorException $e) {
            Log::info("Error ".$e);
            return Redirect::to("/customers/create")->with('add_errors', true);
        }

        return Redirect::to("/customers/".$id_customer."/documentation");

      } else {
        
        return Redirect::back()->withErrors($validator->messages())->withInput();
      }
  }

  public function getDocumentation($idCustomer) 
  {
    $row = Customer::find($idCustomer);
    $documentation = Documentation::getDocumentsByCustomer($idCustomer);

    if ($row->idCustomer) {
      $data = array('active'          => 'customers',
                    'customer'        => $row,
                    'documentation'   => $documentation
      );

      return View::make('customers.documentation', $data);
    }
  }


  public static function postDocumentation()
  {
      $file = $_FILES["documentation"]['name'];
      $filename = md5(date('Y-m-d H:i:s')) . "_" . $file;

      $data = array(
        "filename"    => $filename,
        "type"        => Input::get("type")
      );


      if (Input::hasFile('documentation')) {

          $rules = Documentation::$create_rules;

          $validator = Validator::make(Input::all(), $rules);
          $validator->setAttributeNames(Customer::$fancy_labels);

          if ($validator->passes()) {
              //---->Verificamos si ya existe la tabla de documentación, si no creamos la tabla
              $documentation = DB::table("documentations")
                               ->select("idDocumentation")
                               ->where("idCustomer", Input::get("idCustomer"))
                               ->first();

              if ($documentation) {
                  $directory = public_path().'/documentations/' . Input::get("idCustomer");
                  
                  if (Input::file('documentation')->move($directory, $filename)) {
                    try {
                      DB::transaction(function() use ($data, $documentation) {

                        $row = Documentation::find($documentation->idDocumentation);      
                        
                        switch ($data['type']) {
                          case 'request_credit':
                              $row->request_credit = $data['filename'];
                              break;

                          case 'address':
                              $row->address = $data['filename'];
                              break;

                          case 'format_credit':
                              $row->format_credit = $data['filename'];
                              break;

                          case 'status_bank':
                              $row->status_bank = $data['filename'];
                              break;

                          case 'identification':
                              $row->identification = $data['filename'];
                              break;

                          case 'birth':
                              $row->birth = $data['filename'];
                              break;

                          case 'proceedings':
                              $row->proceedings = $data['filename'];
                              break;

                          case 'property_copy':
                              $row->property_copy = $data['filename'];
                              break;

                          case 'property_taxes':
                              $row->property_taxes = $data['filename'];
                              break;

                          case 'photos':
                              $row->photos = $data['filename'];
                              break;

                          case 'ticket_water':
                              $row->ticket_water = $data['filename'];
                              break;

                          case 'map':
                              $row->map = $data['filename'];
                              break;

                          case 'pay_of_appraisal':
                              $row->pay_of_appraisal = $data['filename'];
                              break;

                          case 'certificate_assessment':
                              $row->certificate_assessment = $data['filename'];
                              break;

                          case 'appraisal':
                              $row->appraisal = $data['filename'];
                              break;

                          case 'pay_of_assessment':
                              $row->pay_of_assessment = $data['filename'];
                              break;
                          
                        }

                        $row->idCustomer = Input::get("idCustomer");
                        $row->save();
                      });

                    } catch (\ErrorException $e) {
                      sleep(3);
                      return Response::json(array("exito" => false, "type" => "1"));
                    }

                    sleep(3);
                    return Response::json(array("exito" => true, "filename" => $filename));
                }
                

              } else {
                  $directory = public_path().'/documentations/' . Input::get("idCustomer");
                  File::makeDirectory($directory, 0755);

                  if (Input::file('documentation')->move($directory, $filename)) {
                    try {
                      DB::transaction(function() use ($data) {
                        $row = new Documentation;
                        
                        switch ($data['type']) {
                          case 'request_credit':
                              $row->request_credit = $data['filename'];
                              break;

                          case 'address':
                              $row->address = $data['filename'];
                              break;

                          case 'format_credit':
                              $row->format_credit = $data['filename'];
                              break;

                          case 'status_bank':
                              $row->status_bank = $data['filename'];
                              break;

                          case 'identification':
                              $row->identification = $data['filename'];
                              break;

                          case 'birth':
                              $row->birth = $data['filename'];
                              break;

                          case 'proceedings':
                              $row->proceedings = $data['filename'];
                              break;

                          case 'property_copy':
                              $row->property_copy = $data['filename'];
                              break;

                          case 'property_taxes':
                              $row->property_taxes = $data['filename'];
                              break;

                          case 'photos':
                              $row->photos = $data['filename'];
                              break;

                          case 'ticket_water':
                              $row->ticket_water = $data['filename'];
                              break;

                          case 'map':
                              $row->map = $data['filename'];
                              break;

                          case 'pay_of_appraisal':
                              $row->pay_of_appraisal = $data['filename'];
                              break;

                          case 'certificate_assessment':
                              $row->certificate_assessment = $data['filename'];
                              break;

                          case 'appraisal':
                              $row->appraisal = $data['filename'];
                              break;

                          case 'pay_of_assessment':
                              $row->pay_of_assessment = $data['filename'];
                              break;
                          
                        }

                        $row->idCustomer = Input::get("idCustomer");
                        $row->save();
                      });

                    } catch (\ErrorException $e) {
                      sleep(3);
                      return Response::json(array("exito" => false, "type" => "1"));
                    }

                    sleep(3);
                    return Response::json(array("exito" => true, "filename" => $filename));
                  }                
              }
          } else {
              sleep(3);
              return Response::json(array("exito" => false, "type" => "2"));
          }  
      } else {
        sleep(3);
        return Response::json(array("exito" => false, "type" => "3"));
      }
  }

}
