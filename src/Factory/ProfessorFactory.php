<?php

namespace Src\Factory;

use Src\Relationship\FATECRelationship;
use Src\Relationship\Professor;

class ProfessorFactory implements FATECRelationshipFactory
{
    public function createRelationship(): FATECRelationship
    {
        return new Professor();
    }
}