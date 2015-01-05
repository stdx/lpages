<?php
class ProductTemplate extends Eloquent {

  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'product_template';

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
   * The products of the template.
  */
  public function products() {
    return $this->hasMany('Product');
  }
}