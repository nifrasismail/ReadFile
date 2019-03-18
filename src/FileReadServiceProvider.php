<?php
/**
 * Read File Package
 *
 * @author  Nifras Ismail <nifrasismail@gmail.com>
 * @copyright Copyright © 2019 Nertlab.
 * @license   MIT
 */
namespace Nertlab\FileRead;

use Illuminate\Support\ServiceProvider;

class FileReadServiceProvider extends ServiceProvider
{
    public function boot()
    {

    }

    public function register()
    {
        $this->app->register(FileReadServiceProvider::class);
    }
}
