<?php

namespace App\Queries\API;

class SearchPostQuery
{
    protected $id;
    protected $title;

    public function __construct($Data){
        foreach ($Data as $Key => $Value)
        {
            $this->$Key = $Value;
        }
    }

    public function GetId(): int
    {
        return $this->id;
    }

    public function GetTitle(): string
    {
        return $this->title;
    }

}
