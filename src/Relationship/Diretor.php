<?php

namespace Src\Relationship;

use Src\Relationship\FATECRelationship;

class Diretor implements FATECRelationship
{
    public function getRelationship(): string
    {
        return "Diretor";
    }
}