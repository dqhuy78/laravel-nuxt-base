<?php
// phpcs:ignoreFile
// @codeCoverageIgnoreStart
namespace App\Http\Resources\Custom;

use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Pagination\AbstractPaginator;

class ShareResourceCollection extends ResourceCollection
{
    /**
     * The name of the resource being collected.
     *
     * @var string
     */
    public $collects;
    /**
     * Create a new anonymous resource collection.
     *
     * @param  mixed  $resource
     * @param  string  $collects
     * @return void
     */
    public function __construct($resource, $collects)
    {
        $this->collects = $collects;
        parent::__construct($resource);
    }

    /**
     * Create an HTTP response that represents the object.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function toResponse($request)
    {
        return $this->resource instanceof AbstractPaginator
            ? (new SharePaginatedResourceResponse($this))->toResponse($request)
            : parent::toResponse($request);
    }
}
