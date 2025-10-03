Nessa aula aprenderemos sobre functions e modularização de código:


- Boas práticas são fundamentais para desempenhar o nosso papel

- **PHP DOC** é uma PSR de documentação do PHP

- **SOLID** é para orientação à objetos

- **Camel Case** (ex: function funcaoCodigo(){}): Serve para separar as palavras usadas para nomear variáveis e funções

- Quanto **mais** o código for **segmentado** em funções, **melhor é** para manutenção. Importante **não exagerar nas functions** também!

- Não é uma boa prática retornar os parâmetros direto no Return.
  Ex: function metroQuadrado(int $lado1 = 1, int $lado2 = 1){ 
           return $lado1 * $lado2
      }
    Pode dar problema porque pode existir algum valor fora do esperado nos parâmetros, logo o certo é passar uma variável, e existir dentro da função um algoritmo de tratamento de erros.

- 