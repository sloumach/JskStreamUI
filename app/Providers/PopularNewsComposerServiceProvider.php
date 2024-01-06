<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\PopularNews;
use App\Models\Comment;


class PopularNewsComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        View::composer(['index', 'blog-detail'], function ($view) {
            $popularNews = PopularNews::orderBy('date', 'desc')->paginate(4);
            if (isset($view->getData()['viewData'])) {
                $viewData = $view->getData()['viewData'];
                $comments = Comment::where('post_id', $viewData['post_id'])->get();
                $view->with('PopularNews', $popularNews)->with('comments', $comments);
            } else {
                $view->with('PopularNews', $popularNews);
            }

        });
    }
}
