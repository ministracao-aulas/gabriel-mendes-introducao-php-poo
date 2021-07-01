### Formas de nomear arquivos, pastas e outros itens por convenção no PHP

> São sugestões da comunidade. Não são regras. Se vocÊ fizer diferente, vai funcionar, porém se segui-las torna seu código mais fácil de dar manutenção e para ler.

> UmaPessoaAqui       -> UpperCamelCase
> umaPessoaAqui       -> camelCase
> uma_pessoas_aqui    -> snake_case
> umapessoasaqui      -> lowercase  
> UMAPESSOASAQUI      -> UPPER_CASE

### Upper Camel Case -> UpperCamelCase
Utilizado para nomes de classes, pastas de classes.

Exemplo:
```php
namespace Clientes;//Clientes
class ClienteNovo
{
    //
}
```

### Camel Case -> camelCase
É utilizado para, variávies (prefira snake case para variáveis, porém camel case não está errado), funções e métodos (pois um método é uma função).

Exemplo:
```php
function editarClienteNovo()
{}

$clienteNovo = "Pedro";
```

### Snake Case -> snake_case
É utilizado para nomes de variáveis, nomes de colunas em banco de dados, pastas, nomes de arquivos genéricos (qualser tipo de arquivo ou PHP que não sejam classes) e pastas (que não sejam de classes ou um namespace).

Exemplo:
```php
$nome_do_cliente = "Marcos";
require_once ('arquivos_de_clientes/teste.php');
```

### Lower Case -> lowercase
É utilizado para nomes de pequenas variáveis, pastas e arquivos (se tiver mais de 1 palavra, utilize snake case ou camel case).

Exemplo:
```php
$cliente = "Pedro";
```

### Upper Case -> UPPER_CASE
Utilizado para constantes, variáveis de ambiente e atributos (em classes).

Exemplo:
```php
define('SITE_NAME', 'Meu Site Legal');
constant ALGO = "Exmplo";

```