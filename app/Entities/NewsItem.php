<?php

namespace App\Entities;

class NewsItem implements \JsonSerializable {

    /**
     * @var int Id of the news item in the database
     */
    private $id;

    /**
     * @var string Title of the news item
     */
    private $title;

    /**
     * @var string Short text of the news item
     */
    private $shortBody;

    /**
     * @var string Full text of the news item
     */
    private $body;

    /**
     * Ingest constructor.
     *
     * @param int    $id        Id of the news item in the database
     * @param string $title     Title of the news item
     * @param string $shortBody Short text of the news item
     * @param string $body      Full text of the news item
     */
    public function __construct(int $id, string $title, string $shortBody, string $body) {
        $this->setId($id);
        $this->setTitle($title);
        $this->setShortBody($shortBody);
        $this->setBody($body);
    }

    /**
     * Id getter.
     *
     * @return int Id of the news item in the database
     */
    public function getId() : int {
        return $this->id;
    }

    /**
     * Id setter.
     *
     * @param int $id Id of the news item in the database
     */
    private function setId(int $id) {
        $this->id = $id;
    }

    /**
     * Title getter.
     *
     * @return string Title of the news item
     */
    public function getTitle() : string {
        return $this->title;
    }

    /**
     * Title setter.
     *
     * @param string $title Title of the news item
     */
    private function setTitle(string $title) {
        $this->title = $title;
    }

    /**
     * ShortBody getter.
     *
     * @return string Short text of the news item
     */
    public function getShortBody() : string {
        return $this->shortBody;
    }

    /**
     * ShortBody setter.
     *
     * @param string $shortBody Short text of the news item
     */
    private function setShortBody(string $shortBody) {
        $this->shortBody = $shortBody;
    }

    /**
     * Body getter.
     *
     * @return string Full text of the news item
     */
    public function getBody() : string {
        return $this->body;
    }

    /**
     * Body setter.
     *
     * @param string $body Full text of the news item
     */
    private function setBody(string $body) {
        $this->body = $body;
    }

    /**
     * Returns array with public data of the news item.
     *
     * @return array
     */
    function jsonSerialize()     {
        return [
            'id' => $this->getId(),
            'title' => $this->getTitle(),
            'shortBody' => $this->getShortBody(),
            'body' => $this->getBody(),
        ];
    }
}
