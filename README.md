# laminas-mvc

## System Requirements

- Composer version 1
- PHP 8

## Windows PowerShell

```bash
$ composer create-project -sdev laminas/laminas-mvc-skeleton ./
$ composer require laminas/laminas-form
$ composer require laminas/laminas-db
$ 
```

```bash
$ composer require twbs/bootstrap:5.1.0
$ composer remove vendor/twbs/bootstrap
$ composer dump-autoload
```

```bash
$ git init
$ git branch -M main
$ git add *
$ git commit -m"create project"
$ git push --set-upstream origin main
```

## More Command Support

```bash
$ composer -V
$ php -version
$ composer self-update --1 # downgrade from v2 to v1
$ composer self-update --rollback #--> return version 2.
$ composer dump-autoload
```

## Module

- Category: Partner(list+type), Goods(list+type), Rent(list+type), Project