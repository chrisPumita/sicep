<?php


class KEYWORDS
{
    private $id_key;
    private $keyword;

    /**
     * @return mixed
     */
    public function getIdKey()
    {
        return $this->id_key;
    }

    /**
     * @param mixed $id_key
     */
    public function setIdKey($id_key): void
    {
        $this->id_key = $id_key;
    }

    /**
     * @return mixed
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * @param mixed $keyword
     */
    public function setKeyword($keyword): void
    {
        $this->keyword = $keyword;
    }


}