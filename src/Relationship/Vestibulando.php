<?php

namespace Src\Relationship;

use Src\Relationship\FATECRelationship;

class Vestibulando implements FATECRelationship
{
    public function getRelationship(): string
    {
        return "Vestibulando";
    }
}