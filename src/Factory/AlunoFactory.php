<?php

namespace Src\Factory;

use Src\Relationship\Aluno;
use Src\Relationship\FATECRelationship;

class AlunoFactory implements FATECRelationshipFactory
{
    public function createRelationship(): FATECRelationship
    {
        return new Aluno();
    }
}
