<?php
class UserController extends BaseController {
  public function getAll() {
    $users = User::all();
    return View::make('users', array('users' => $users, 'message' => Session::get('message')));
  }
  public function get($id) {
    $user = User::find($id);
    return View::make('user/user')->with('user', $user);
  }
  public function edit($id) {
    $user = User::find($id);
    
    return View::make('edit-user')->with('user', $user);
  }
  public function save() {
    $user = User::find($id);
    
    if (! $user->update(Input::all())) {
      return Redirect::back()->with('message', 'Something wrong happened while saving your user.')->withInput();
    }
    
    return Redirect::route('users')->with('message', 'User updated.');
  }
  public function create() {
    return View::make('edit-user');
  }
  public function update($id) {
    $user = User::find($id);
    
    if (! $user->update(Input::all())) {
      return Redirect::back()->with('message', 'Something wrong happened while saving your model')->withInput();
    }
    
    return Redirect::route('users')->with('message', 'User "'.$user->first_name .' '.$user->last_name.'" updated.');
  }
  public function delete($id) {
    $user = User::find($id);
    
    $user->delete();
  }
}
