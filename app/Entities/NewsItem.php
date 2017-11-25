<?php

namespace App\Entities;


class NewsItem implements \JsonSerializable {

    /**
     * @var int Id of the NewsItem in database
     */
    private $id;

    /**
     * @var string Title of the NewsItemm
     */
    private $title;

    /**
     * @var string Short text of the NewsItem
     */
    private $shortBody;

    /**
     * @var string Full text of this NewsItem
     */
    private $body;

    /**
     * Ingest constructor.
     *
     * @param int    $id        Id of the NewsItem in database
     * @param string $title     Title of the NewsItem
     * @param string $shortBody Short text of the NewsItem
     * @param string $body      Full text of the NewsItem
     */
    public function __construct($id, $title, $shortBody, $body) {
        $this->setId($id);
        $this->setTitle($title);
        $this->setShortBody($shortBody);
        $this->setBody($body);
    }

    /**
     * Id getter.
     *
     * @return int Id of the NewsItem in database
     */
    public function getId() : int {
        return $this->id;
    }

    /**
     * Id setter.
     *
     * @param int Id of the NewsItem in database
     */
    private function setId(int $id) {
        $this->id = $id;
    }

    /**
     * Title getter.
     *
     * @return string Title of the NewsItem
     */
    public function getTitle() : string {
        return $this->title;
    }

    /**
     * Title setter.
     *
     * @param string Title of the NewsItem
     */
    private function setTitle($title) {

        $this->title = $title;
    }

    /**
     * ShortBody getter.
     *
     * @return string Short text of the NewsItem
     */
    public function getShortBody() : string {
        return $this->shortBody;
    }

    /**
     * ShortBody setter.
     *
     * @param string Short text of the NewsItem
     */
    private function setShortBody($shortBody) {

        $this->hostname = $shortBody;
    }

    /**
     * Body getter.
     *
     * @return string Full text of the NewsTitle
     */
    public function getBody() : string {
        return $this->body;
    }

    /**
     * Body setter.
     *
     * @param string Full text of the NewsItem
     *
     */
    private function setBody($body) {
        $this->body = $body;
    }

    /**
     * Returns array with public data of the ingest.
     *
     * @return array
     */
    function jsonSerialize() {
        return [
            'id' => $this->getId(),
            'name' => $this->getTitle(),
            'shorBody' => $this->getShortBody(),
            'body' => $this->getBody(),
        ];
    }
}