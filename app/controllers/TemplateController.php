<?php
class TemplateController extends \BaseController {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index() {
    $templates = ProductTemplate::all();
    return $templates;
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create() {
    $template = new ProductTemplate();
    return View::make('edit-template', array (
        'company' => $template
    ));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store() {
    $template = new ProductTemplate();
    $template->name = Input::get("name");
    $template->description = Input::get("description");
    $template->save();
  }

  /**
   * Display the specified resource.
   *
   * @param int $id
   * @return Response
   */
  public function show($id) {
    $template = ProductTemplate::find($id);
    return $template;
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param int $id
   * @return Response
   */
  public function edit($id) {
    $template = ProductTemplate::find($id);
    return View::make('edit-template', array (
        'template' => $template
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
      $template = new ProductTemplate();
    } else {
      $template = ProductTemplate::find($id);
    }

    $template->name = Input::get("name");
    $template->description = Input::get("description");
    $template->save();
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param int $id
   * @return Response
   */
  public function destroy($id) {
    $template = ProductTemplate::find($id);

    $template->delete();
  }
}
