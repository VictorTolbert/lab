## Setup information

In the `./application/config` directory

1. Copy `database.example.php` to `database.php` and update the database credentials
1. Copy the `config.example.php` example to `config.php` and update the `$default_domain`
1. Import the database schema `./database.sql`

```sh
mysql -u <username> -p <database> < ./database.sql
```
