<?php

namespace Src\Factory;

use Src\Relationship\FATECRelationship;

interface FATECRelationshipFactory
{
    public function createRelationship(): FATECRelationship;
}