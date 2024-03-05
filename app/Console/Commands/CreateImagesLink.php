<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class CreateImagesLink extends Command
{
    protected $signature = 'images:link';
    protected $description = 'Create a symbolic link to the images directory';

    public function handle()
    {
        $this->createLink();
    }

    private function createLink()
    {
        $linkPath = public_path('storage');
        $targetPath = storage_path('app/images');

        if (File::exists($linkPath)) {
            $this->error('The "public/storage" directory already exists.');
            return;
        }

        // Create the symbolic link
        $this->laravel->make('files')->link($targetPath, $linkPath);

        $this->info('The [public/storage] directory has been linked to [storage/app/images].');
    }
}
