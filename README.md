> ## Atividade - Projeto GoF - Factory Method

> ## grupo:
- >Marcone Santos Magalhães - 1371392212017
- >Vinicius Anjos Dantas dos Santos - 1371392212002
- >William Victor Soares Silva Marques Fraga - 1371392212039


>![](http://clubedosgeeks.com.br/wp-content/uploads/2016/01/dormrm.gif)

> ### Ferramentas utilizadas :grinning:
[![My Skills](https://skillicons.dev/icons?i=php,git,github&perline=10)](https://skillicons.dev) 

> #### Como Instalar e rodar:
- Clone o repositório:
```git clone https://github.com/Marcone-Santos1/FactoryProject.git```
- Entre no diretório:
```cd FactoryProject```
- Execute:
```composer install```
- E rode o seguinte comando:
`````shell
php index.php
`````

- Logo após, lhe será apresentado a seguinte pergunta:
```shell
$ Entre com o seu nome:  
```
- e:
````shell
$ Digite a relação com a FATEC:
````
- e como resultado teremos:
````shell
$ Marcone tem relação com a instituição como Aluno
$ Digite 'q' para sair ou qualquer outra tecla para continuar: 
````

---

> Temos a seguinte disposição de namespaces:
- [Src\Factory](src%2FFactory)
  ````php 
    <?php 
    Namespace Src\Factory;
    ````
- [Src\Relationship](src%2FRelationship)
  ````php 
    <?php 
    Namespace Src\Relationship;
    ````
- [Src\RelationshipAnalyzer](src%2FRelationshipAnalyzer)
  ````php 
    <?php 
    Namespace Src\RelationshipAnalyzer;
    ````
Funcionamento:
````php
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
    ... Restante da classe
````
> Dentro dessa classe, existe uma validação da `key`, passada pelo usuário, quando há o preenchimento do: 
````shell
$ Digite a relação com a FATEC:
````

> E quando Passado o "relacionamento" entre essa pessoa e a instituição de ensino, valida-se caso o `key`for valido e chama a classe `Factory`

Dentro da clase Factory, supondo que o user, entrou como `Aluno`, iremos chamar a classe: 
```php 
class AlunoFactory implements FATECRelationshipFactory
```
e criar um relacionamento com a classe:
````php
class Aluno implements FATECRelationship
````

que nos retorna:
````php
public function getRelationship(): string
{
    return "Aluno";
}
````
e temos como resultado:
````shell
$ Marcone tem relação com a instituição como Aluno
$ Digite 'q' para sair ou qualquer outra tecla para continuar: 
````