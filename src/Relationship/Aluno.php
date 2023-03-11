<?php

namespace Src\Relationship;

use Src\Relationship\FATECRelationship;

class Aluno implements FATECRelationship
{
    public function getRelationship(): string
    {
        return "Aluno";
    }
}