<?php

namespace App\Queries\API;

class GetPostQuery
{
    protected $id;

    public function __construct($Data)
    {

        if (is_array($Data))
        {

            foreach ($Data as $Key => $Value)
            {
                $this->$Key = $Value;
            }
        }

    }

    public function GetId(): int
    {
        return $this->id;
    }
}
