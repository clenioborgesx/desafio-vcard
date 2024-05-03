# Desafio estágio de programação

## Descrição

Você está trabalhando em um software que precisa implementar uma funcionalidade
para importar uma lista de contatos no formato vCARD para o sistema.

O vCard é um formato de arquivo padrão para troca de informações de contato
pessoal. Ele pode armazenar informações como nome, endereço, telefone, e-mail,
etc.

Apps de sistemas móveis como Android e iOS são capazes de exportar contatos
para um arquivo vCard. Acontece que este arquivo pode conter informações de
multiplos contatos, e o seu software precisa ser capaz de importar todos eles.

## Tarefa

A plataforma de backend roda na linguagem PHP 8.2, a equipe de desenvolvimento
identificou uma biblioteca que pode ser utilizada para fazer o parse de arquivos
vCard, a biblioteca escolhida é a `sabre/vobject`.

A biblioteca escolhida é capaz de fazer o parse de arquivos vCARD em suas
diferentes versões. Porém, apenas o primeiro registro do arquivo vCARD é
retornado.

A sua tarefa é extender a funcionalidade da biblioteca `sabre/vobject` para que
ela seja capaz de fazer o parse de arquivos vCARD com multiplos registros.

A implementação deve considerar manter o máximo possível da originalidade da
biblioteca, evitando alterações que possam quebrar a compatibilidade e dificultar
o merge de futuras atualizações.

## Requisitos

- O código deve ser escrito em PHP 8.2+
- Entregue em um repositório git público (crie um fork deste repositório e
  trabalhe nele)
- Inclua instruções claras de como executar o exemplo de uso da sua implementação

## Critérios de avaliação

- Qualidade do código
    1. Padronização do código
    2. Uso de Orientação a Objetos
    3. Uso de boas práticas de programação
- Clareza e organização
- Documentação
- Testes (bônus)
