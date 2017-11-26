<?php

namespace App\Builders;
use App\Entities\NewsItem;

class NewsBuilder
{
    public static function buildNewsItem($newsItemData): NewsItem
    {
        $id = $newsItemData->id;
        $title = $newsItemData->title;
        $shortBody = $newsItemData->short_body;
        $body = $newsItemData->body;

        return new NewsItem($id, $title, $shortBody, $body);
    }
}