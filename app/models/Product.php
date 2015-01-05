<?php
class Product extends Eloquent {
  
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'product';
  
  /**
   * The fields could be "mass assigned".
   * 
   * @var unknown
   */
  protected $fillable = array (
      'title',
      'model',
      'description'
  );
}