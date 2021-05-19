<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Comandos para executar projeto


#### Iniciando e buildando o container

```bash
    docker-compose up -d --build
```

#### Acessa o container e executa o comando `composer install` para instalar as dependências do projeto.

```bash
    docker container exec containerlaravel bash -c "composer install"
```

## Comandos Console disponíveis

#### Acessar o container para executar os comandos

```bash
    docker container exec -it containerlaravel bash
```

##### :point_right: numeros:crescentes

```bash
    comando: `php artisan numeros:crescentes 10 20 11 25 89 14 56 10 --limit 4`
    parâmetro: `numeros:crescentes`
    parâmetro: números separados por espaço, exemplo: `1 2 3 4 5 6`
    opção: limita a quantidade de itens da lista que será retornado para usuário, exemplo:  `--limit 4` 
```

##### :point_right: numeros:descrescentes

```bash
    comando: `php artisan numeros:descrescente 10 20 11 25 89 14 56 10 --limit 4 --impares`
    assinatura: `numeros:crescentes`
    parâmetro: números separados por espaço, exemplo: `10 20 11 25 89 14 56 10`
    opção: limita a quantidade de itens da lista que será retornado para usuário, exemplo:  `--limit 4` 
    opção: retorna somente os números que forem ímpares:  `--impares` 
```

##### :point_right: numeros:soma

```bash
    comando: `php artisan numeros:soma 10 20 11 25 89 14 56 10`
    assinatura: `numeros:soma`
    parâmetro: números separados por espaço, exemplo: `10 20 11 25 89 14 56 10`
```

##### :point_right: numeros:impar

```bash
    comando: `php artisan numeros:impar 10 20 11 25 89 14 56 10`
    assinatura: `numeros:impar`
    parâmetro: números separados por espaço, exemplo: `10 20 11 25 89 14 56 10`
```

##### :point_right: numeros:par

```bash
    comando: `php artisan numeros:par 10 20 11 25 89 14 56 10`
    assinatura: `numeros:par`
    parâmetro: números separados por espaço, exemplo: `10 20 11 25 89 14 56 10`
```

##### :point_right: numeros:maior

```bash
    comando: `php artisan numeros:maior 10 20 11 25 89 14 56 10`
    assinatura: `numeros:maior`
    parâmetro: números separados por espaço, exemplo: `10 20 11 25 89 14 56 10`
```

##### :point_right: numeros:media

```bash
    comando: `php artisan numeros:media 10 20 11 25 89 14 56 10`
    assinatura: `numeros:media`
    parâmetro: números separados por espaço, exemplo: `10 20 11 25 89 14 56 10`
```

##### :point_right: numeros:menor

```bash
    comando: `php artisan numeros:menor 10 20 11 25 89 14 56 10`
    assinatura: `numeros:menor`
    parâmetro: números separados por espaço, exemplo: `10 20 11 25 89 14 56 10`
```
