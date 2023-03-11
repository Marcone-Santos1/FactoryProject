<?php

namespace Src\Factory;

use Src\Relationship\Coordenador;
use Src\Relationship\FATECRelationship;

class CoordenadorFactory implements FATECRelationshipFactory
{
    public function createRelationship(): FATECRelationship
    {
        return new Coordenador();
    }
}