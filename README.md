# Descrição
O cnj-tools é um conjunto de métodos para manipulação da numeração única do CNJ. Esta é a sua versão em PHP.

# Funcionalidades
* Checagem de validade do CNJ
* Checagem da origem a partir da numeração
* Geração do número validador
* Formatação de string para o padrão do CNJ
* Remoção da formatação
* Quebra do número do CNJ em Array

# Métodos

### Checar validade

```php
<?php
$tools = new Codilo\CnjTools;

$valid = $tools->is_cnj('0000001-59.2001.1.00.0001'); /* $valid === true  */
$valid = $tools->is_cnj('0000000-00.0000.0.00.0000'); /* $valid === false */
```

### Checar a origem a partir da numeração

```php
<?php
$tools = new Codilo\CnjTools;

$origin = $tools->origin_cnj('0000001-59.2001.1.00.0001'); /* $origin === 'Supremo Tribunal Federal' */
$origin = $tools->origin_cnj('0000001-51.2001.8.26.0001'); /* $origin === 'Tribunal de Justiça de São Paulo' */
$origin = $tools->origin_cnj('0000000-00.0000.0.00.0000'); /* $origin === false */
```

### Geração do número validador

```php
<?php
$tools = new Codilo\CnjTools;

$cnj = $tools->gen_validator('0000001', '2001', '1', '00', '0001'); /* $cnj === '0000001-59.2001.1.00.0001' */
$cnj = $tools->gen_validator('0000001', '2001', '8', '26', '0001'); /* $cnj === '0000001-51.2001.8.26.0001' */
```

### Formatação de string para o padrão

```php
<?php
$tools = new Codilo\CnjTools;

$cnj = $tools->mount_cnj('00000015920011000001'); /* $cnj === '0000001-59.2001.1.00.0001' */
$cnj = $tools->mount_cnj('00000015120018260001'); /* $cnj === '0000001-51.2001.8.26.0001' */
```

### Remoção da formatação

```php
<?php
$tools = new Codilo\CnjTools;

$cnj = $tools->clean('0000001-59.2001.1.00.0001'); /* $cnj === '00000015920011000001' */
$cnj = $tools->clean('0000001-51.2001.8.26.0001'); /* $cnj === '00000015120018260001' */
```

### Quebra do número de CNJ em Array

```php
<?php
$tools = new Codilo\CnjTools;

$array = $tools->split('0000001-59.2001.1.00.0001'); /* $array === ['0000001', '59', '2001', '1', '00', '0001'] */
$array = $tools->split('0000001-51.2001.8.26.0001'); /* $array === ['0000001', '51', '2001', '8', '26', '0001'] */
```