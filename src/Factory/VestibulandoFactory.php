<?php

namespace Src\Factory;

use Src\Relationship\FATECRelationship;
use Src\Relationship\Vestibulando;

class VestibulandoFactory implements FATECRelationshipFactory
{
    public function createRelationship(): FATECRelationship
    {
        return new Vestibulando();
    }
}