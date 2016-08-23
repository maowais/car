<?php



namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB ;

class Car extends Model
{

    protected $table = 'cars' ;


public function get_id($make ,$model,$produced_on )
{
    $ID = DB::table('cars')->insertGetId(['make'=>$make,  'model' =>$model, 'produced_on'=>$produced_on] );
    return $ID ;

}






}
