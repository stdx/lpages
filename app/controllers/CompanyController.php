<?php
class CompanyController extends \BaseController {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index() {
    $companies = Company::all();
    return $companies;
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create() {
    $company = new Company();
    return View::make('edit-product', array (
        'company' => $company
    ));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store() {
    $company = new Company();
    $company->name = Input::get("name");
    $company->description = Input::get("description");
    $company->save();
  }

  /**
   * Display the specified resource.
   *
   * @param int $id
   * @return Response
   */
  public function show($id) {
    $company = Company::find($id);
    return $company;
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param int $id
   * @return Response
   */
  public function edit($id) {
    $company = Company::find($id);
    return View::make('edit-company', array (
        'company' => $company
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
      $company = new Company();
    } else {
      $company = Company::find($id);
    }

    $company->name = Input::get("name");
    $company->description = Input::get("description");
    $company->save();
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param int $id
   * @return Response
   */
  public function destroy($id) {
    $company = Company::find($id);

    $company->delete();
  }
}
