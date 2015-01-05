<?php
class ProductController extends \BaseController {
  
  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index() {
    $products = Product::all();
    return $products;
  }
  
  /**
   * Displays a listing of the resource for company.
   * @param int $id          
   * @return Response
   */
  public function indexByCompany($id){
    $company = Company::find($id);
    return $company->products;
  }
  
  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create() {
    $product = new Product();
    return View::make('edit-product', array (
        'product' => $product 
    ));
  }
  
  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store() {
    $user = new User();
    $user->id = 1;
    $product = new Product();
    $product->title = Input::get("title");
    $product->model = Input::get("model");
    $product->description = Input::get("description");
    $product->contact = $user->id;
    $product->save();
  }
  
  /**
   * Display the specified resource.
   *
   * @param int $id          
   * @return Response
   */
  public function show($id) {
      $product = Product::find($id);
      return $product;
  }
  
  /**
   * Show the form for editing the specified resource.
   *
   * @param int $id          
   * @return Response
   */
  public function edit($id) {
    $product = Product::find($id);
    return View::make('edit-product', array (
        'product' => $product 
    ));
  }
  
  /**
   * Update the specified resource in storage.
   *
   * @param int $id          
   * @return Response
   */
  public function update($id) {
    if (empty($id)) {
      $product = new Product();
    } else {
      $product = Product::find($id);
    }
    
    $product->title = Input::get("title");
    $product->model = Input::get("model");
    $product->description = Input::get("description");
    $product->save();
  }
  
  /**
   * Remove the specified resource from storage.
   *
   * @param int $id          
   * @return Response
   */
  public function destroy($id) {
    $product = Product::find($id);
    
    $product->delete();
  }
}
