<?php // gkc_hash_code : 01F20DDQ6AC44VR9TJE1SN7CJ5 ?>
<?php
// phpcs:ignoreFile
// @codeCoverageIgnoreStart
namespace App\Http\Resources\Custom;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Custom\ShareResourceCollection;
use Illuminate\Http\Resources\MissingValue;

class ShareResource extends JsonResource
{
    /**
     * Create new anonymous resource collection.
     *
     * @param  mixed  $resource
     * @return App\Http\Resources\Custom\ShareResourceCollection
     */
    public static function collection($resource)
    {
        return tap(new ShareResourceCollection($resource, static::class), function ($collection) {
            if (property_exists(static::class, 'preserveKeys')) {
                $collection->preserveKeys = (new static([]))->preserveKeys === true;
            }
        });
    }

    protected function getValue($value)
    {
        return $value !== null ? $value : new MissingValue;
    }
}
