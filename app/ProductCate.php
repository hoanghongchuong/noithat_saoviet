<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCate extends Model {

	protected $table='product_categories';

	protected $fillable = ['id','name','alias','photo','parent_id','stt','level','status','title','keyword','description'];
	public $timestamps = true;
	public function getProductsAttribute()
    {
    	$categoryIdArray = $this->getChildCategories([$this->id]);
        return \App\Products::whereIn('cate_id', $categoryIdArray)->orderBy('id','desc')->take(4)->get();
    }

    protected function getChildCategories($categoryArray = [])
    {
    	$childIdArray = ProductCate::select('id')->whereIn('parent_id', $categoryArray)->whereNotIn('id', $categoryArray)->get()->pluck('id')->toArray();
    	if (!count($childIdArray)) {
    		return $categoryArray;
    	}
    	$categoryArray = array_merge($categoryArray, $childIdArray);
    	return $this->getChildCategories($categoryArray);
    }

    public function productCate(){
        return $this->hasMany('App\ProductCate','parent_id')->get();
    }

    public function products()
    {
        return $this->hasMany('App\Products','cate_id')->take(4)->orderBy('id','desc')->get();
    }

}
