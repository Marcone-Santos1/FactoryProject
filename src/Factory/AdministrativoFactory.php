<?php

namespace Src\Factory;

use Src\Relationship\Administrativo;
use Src\Relationship\FATECRelationship;

class AdministrativoFactory implements FATECRelationshipFactory
{
    public function createRelationship(): FATECRelationship
    {
        return new Administrativo();
    }
}