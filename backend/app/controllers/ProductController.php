<?php

class ProductController extends BaseController {

  public function __construct()
  {
      $this->beforeFilter('auth');
  }

	public function index()
	{

    $products = Product::getProducts();
    if (count($products) > 0) {
        //return Response::json(array("products" => $products));
    } else {
        //return Response::json(array("products" => array()));
    }

    $data = array('active'      => 'products',
                  'products'    => $products
    );
    return View::make('products.index', $data);
  }

  public function getCreate()
  {
    $data = array('active'      => 'products');
    return View::make('products.create', $data);
  }

}
