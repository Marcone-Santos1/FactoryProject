<?php

namespace Src\Relationship;

use Src\Relationship\FATECRelationship;

class Professor implements FATECRelationship
{
    public function getRelationship(): string
    {
        return "Professor";
    }
}