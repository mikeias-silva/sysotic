## SYSOTIC

## Requerimentos
- php 8.1.24
- node  v21.2.0
- npm 10.2.3
- mysql 8.0.33
- composer 2.5.5

## Instalação
### 1 - Dependências do PHP
    composer install
* o comando acima pode ocorrer erros como no exmeplo abaixo
  **Problem 1**
    - [ ] Root composer.json requires php ^7.1.3 but your php version (8.1.0) does not satisfy that requirement. 
 
    **Problem 2**
    - [ ] doctrine/inflector is locked to version v1.3.0 and an update of this package was not requested.
    - [ ] doctrine/inflector v1.3.0 requires php ^7.1 -> your php version (8.1.0) does not satisfy that requirement.

Esse caso ocorre pois pode haver recursos do php (o qual o composer esta requerendo) desabilitados, portanto, basta habilitá-los no arquivo php.ini na raíz da instalação do php. A forma mais fácil de resolver isso é consultar no google o problema e encontrar a resposta sobre como habilitar. **é bem tranquilo** 

### 2 - Dependências de front-end
    npm install
    
    npm run build
Nesse ultimo comando, a saída final deve estar tudo verde.

### 3 - Criar tabelas do banco de dados
    php artisan migrate
A saída final deve estar tudo verde, indicando que as tabelas foram salvas


### 4 - Iniciar ambiente de testes
    php artisan serve


