<?php

namespace FleetCart\Console\Commands;

use Illuminate\Console\Command;
use Modules\Page\Entities\PageTranslation;

class RefactorImagesCommand extends Command
{
    protected $signature = 'refactor:images';

    protected $description = 'Update image src from local to s3';

    public function handle()
    {
        $pages = PageTranslation::all();

        foreach($pages as $page) {
            $page->body = str_replace('src="/storage/', 'src="https://maison-aspirateur.s3.ca-central-1.amazonaws.com/', $page->body);
            $page->save();
        }
    }
}
