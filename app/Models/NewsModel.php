<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use App\Builders\NewsBuilder;
use App\Entities\NewsItem;

class NewsModel extends NewsBuilder
{

    /**
     * Get all news from the database
     *
     * @return NewsItem[] Array of the NewsItem instances
     */
    public static function getAllNewsItems(): array
    {
        $query = "SELECT * FROM `posts_news`;";
        $queryParameters = [];

        $newsItemsData = DB::select(DB::raw($query), $queryParameters);

        $newsItems = [];

        foreach ($newsItemsData as $newsItemData) {
            $newsItems[] = self::buildNewsItem($newsItemData);
        }

        return $newsItems;
    }



}