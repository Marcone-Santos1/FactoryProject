<?php

namespace Src\Relationship;

use Src\Relationship\FATECRelationship;

class Coordenador implements FATECRelationship
{
    public function getRelationship(): string
    {
        return "Coordenador";
    }
}