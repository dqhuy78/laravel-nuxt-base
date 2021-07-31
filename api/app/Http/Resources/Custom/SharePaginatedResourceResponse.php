<?php
// phpcs:ignoreFile
// @codeCoverageIgnoreStart
namespace App\Http\Resources\Custom;

use Illuminate\Http\Resources\Json\PaginatedResourceResponse;

class SharePaginatedResourceResponse extends PaginatedResourceResponse
{
    /**
     * Add the pagination information to the response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    protected function paginationInformation($request)
    {
        $paginated = $this->resource->resource->toArray();

        return [
            'meta' => $this->transformMeta($this->meta($paginated)),
        ];
    }

    /**
     * Transform meta data key to camelCase
     *
     * @var array $meta
     *
     * @return array
     */
    private function transformMeta($meta)
    {
        return [
            'currentPage' => $meta['current_page'],
            'perPage' => $meta['per_page'],
            'total' => $meta['total'],
            'lastPage' => $meta['last_page'],
        ];
    }
}
