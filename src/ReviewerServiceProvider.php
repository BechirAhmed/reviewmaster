<?php
namespace Beksos\Review;

use Illuminate\Support\ServiceProvider;

class ReviewerServiceProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
        $this->publishes([
            __DIR__ .'/../migrations/create_review_table.php.stub' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_review_table.php'),
        ], 'migrations');

        $this->publishes([
            __DIR__ . '/../config/review-master.php' => config_path('review-master.php')
        ], 'config');
    }
}
