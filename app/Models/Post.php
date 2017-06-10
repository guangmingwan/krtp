<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Post",
 *      required={""},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="supplier_sn",
 *          description="supplier_sn",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="supplier_name",
 *          description="supplier_name",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="color",
 *          description="color",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="class",
 *          description="class",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="name",
 *          description="name",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="library",
 *          description="library",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="percent",
 *          description="percent",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="zhen_number",
 *          description="zhen_number",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="inch_number",
 *          description="inch_number",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="total_zhen_number",
 *          description="total_zhen_number",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="width",
 *          description="width",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="goods_weight",
 *          description="goods_weight",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="pi_number",
 *          description="pi_number",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="pi_weight",
 *          description="pi_weight",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="weight",
 *          description="weight",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="price",
 *          description="price",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="face_pic",
 *          description="face_pic",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="back_pic",
 *          description="back_pic",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="notes",
 *          description="notes",
 *          type="string"
 *      )
 * )
 */
class Post extends Model
{
    use SoftDeletes;

    public $table = 'posts';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'supplier_sn',
        'supplier_name',
        'color',
        'class',
        'name',
        'library',
        'percent',
        'zhen_number',
        'inch_number',
        'total_zhen_number',
        'width',
        'goods_weight',
        'pi_number',
        'pi_weight',
        'weight',
        'price',
        'face_pic',
        'back_pic',
        'notes'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'supplier_sn' => 'integer',
        'supplier_name' => 'string',
        'color' => 'string',
        'class' => 'integer',
        'name' => 'string',
        'library' => 'string',
        'percent' => 'integer',
        'zhen_number' => 'string',
        'inch_number' => 'string',
        'total_zhen_number' => 'string',
        'width' => 'integer',
        'goods_weight' => 'integer',
        'pi_number' => 'integer',
        'pi_weight' => 'integer',
        'weight' => 'integer',
        'price' => 'integer',
        'face_pic' => 'string',
        'back_pic' => 'string',
        'notes' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];
}
