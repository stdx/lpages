<?php
class Company extends Eloquent {

  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'company';

  /**
   * The fields could be "mass assigned".
   *
   * @var unknown
   */
  protected $fillable = array (
      'name',
      'description'
  );
  
  /**
   * The products of the company.
   */
  public function products() {
    return $this->hasMany('Product');
  }
}