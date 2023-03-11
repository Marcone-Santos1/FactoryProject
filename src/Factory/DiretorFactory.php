<?php

namespace Src\Factory;

use Src\Relationship\Diretor;
use Src\Relationship\FATECRelationship;

class DiretorFactory implements FATECRelationshipFactory
{
    public function createRelationship(): FATECRelationship
    {
        return new Diretor();
    }
}