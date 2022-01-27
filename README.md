<div align=center>
    <h1>Docker compose services</h1>
</div>

configuration des services docker compose.

|services | port |
--------  |------|
|php      | 8000 |
|db       | 5432 |
|adminer  | 8080 |

## requirements
- **git**
- **docker**
- **docker compose**

## running
```bash
$ git clone git@github.com:izemaghilas/tp-docker-php.git
$ cd tp-docker-php
```

```bash
# créez le fichier .env à la racine de dossier
# puis spécifiez les valeurs des variables d'environnement suivantes 

DB_HOST=db # docker compose database service
DB_PORT=
DB_USER=
DB_PASSWORD=
DB_NAME=
```

```php
// créez le ficher config.php dans le dossier src
// ajoutez le code suivant:

<?php

class Config {
    public static $DB_HOST = '';
    public static $DB_PORT = '';
    public static $DB_USER = '';
    public static $DB_PASSWORD = '';
    public static $DB_NAME = '';
}

// puis initialisez les variables avec les même valeurs spécifiées dans le fichier .env
```

```bash
# build et run les services
$ docker compose up -d
```

pour un premier lancement des services, veuillez à lancer les requêtes sql de ficher **dump.sql** via le service **adminer**, pour créer la table article et insérer un enregistrement.

Résultat attendu ![result](https://github.com/quentinhermiteau/tp-docker-php/blob/main/result.png?raw=true) 
