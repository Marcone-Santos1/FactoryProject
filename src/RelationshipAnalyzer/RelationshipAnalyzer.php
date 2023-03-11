<?php

namespace Src\RelationshipAnalyzer;

use Src\Factory\{
    AdministrativoFactory,
    AlunoFactory,
    CoordenadorFactory,
    DiretorFactory,
    ProfessorFactory,
    VestibulandoFactory
};

class RelationshipAnalyzer
{
    private array $factories = [];

    public function __construct()
    {
        $this->factories['Aluno'] = new AlunoFactory();
        $this->factories['Professor'] = new ProfessorFactory();
        $this->factories['Coordenador'] = new CoordenadorFactory();
        $this->factories['Diretor'] = new DiretorFactory();
        $this->factories['Administrativo'] = new AdministrativoFactory();
        $this->factories['Vestibulando'] = new VestibulandoFactory();
    }

    public function analyzeRelationship($name, $relationship): string
    {
        if (array_key_exists($relationship, $this->factories)) {
            $factory = $this->factories[$relationship];
            $fatecRelationship = $factory->createRelationship();
            return "$name tem relação com a instituição como {$fatecRelationship->getRelationship()}";
        } else {
            return "$name, Não tem nenhuma relação com a instituição, acompanhar até a secretaria";
        }
    }
}

