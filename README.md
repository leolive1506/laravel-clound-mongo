# extenção mongo
```sh
sudo pecl install mongodb

# php ini
extension="mongodb.so"
```

# Install Packcage github jenssegers/laravel-mongodb
- Link: https://github.com/jenssegers/laravel-mongodb
```sh
composer require jenssegers/mongodb
```


# database.php
```php
'default' => env('DB_CONNECTION', 'mongodb'),
# dentro connections
        'mongodb' => [
            'driver' => 'mongodb',
            # pegar essa url pelo proprio mongo
            'dsn' => env('DB_URI', 'mongodb+srv://name_user_clound:password_user_clound@cluster0.q4ecgjs.mongodb.net/?retryWrites=true&w=majority'),
            'database' => env('DB_DATABASE', 'mongoclound'),
            'username' => env('MONGO_USER', 'name_user_clound'),
            'password' => env('MONGO_PASSWORD', 'password_user_clound'),
        ],
```


# Links uteis
- https://www.mongodb.com/compatibility/mongodb-laravel-intergration
- https://www.mongodb.com/docs/atlas/driver-connection/
- https://www.mongodb.com/docs/drivers/


# Lembra de
- No model
```php
protected $connection = 'mongodb';
// como se fosse nome da table
// collection é uma coleção de documentos
// documentos é como se fosse uma linha em uma banco relacional
protected $collection = 'collection_name';
```
