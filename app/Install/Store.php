<?php

namespace FleetCart\Install;

use Modules\Setting\Entities\Setting;

class Store
{
    public function setup($data)
    {
        Setting::setMany([
            'translatable' => [
                'store_name' => $data['store_name'],
            ],
            'store_email' => $data['store_email'],
            'store_phone' => $data['store_phone'],
            'store_fax' => $data['store_fax'],
            'search_engine' => $data['search_engine'],
            'algolia_app_id' => $data['algolia_app_id'],
            'algolia_secret' => $data['algolia_secret'],
            'meilisearch_host' => $data['meilisearch_host'],
            'meilisearch_key' => $data['meilisearch_key'],
        ]);
    }
}
