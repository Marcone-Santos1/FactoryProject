<?php

namespace Src\Relationship;

use Src\Relationship\FATECRelationship;

class Administrativo implements FATECRelationship
{
    public function getRelationship(): string
    {
        return "Administrativo";
    }
}