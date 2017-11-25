<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller

{

    /**
     * return a news item by it`s id
     *
     * @param int $id Id of the news item\
     *
     * @return []|null Array with news item data
     */
    private function getNewsItemById(int $id)
    {
        foreach ($this->news as $newItem) {
            if ($id === $newItem['id']){
                return $newItem;
            }
        }

        return null;
    }

    /**
     * Show the list of news page
     *
     * @return Response
     */
    public function newsList()
    {
        $newsItems = NewsItem::get();
        return view('newsList', ['news' => $newsItems]);
    }

    public function newsItem($id)
    {
        $newsItem = NewsItem::where('id', $id)->get()->first();
        //var_dump($newsItem);
        //die;

        if ($newsItem === null) {
            // TODO: render 404 page
        }

        return view('newsItem', ['newsItem' => $newsItem]);
    }

}
