composer require symfony/var-dumper --dev
composer require laravel/pint --dev

# db: (Temporary)
CREATE TABLE `movies` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `name` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
CREATE TABLE `users` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `email` VARCHAR(255) NULL DEFAULT NULL , `password` VARCHAR(255) NULL DEFAULT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

# shell (создание сылки на Storage "Linux")
ln -s $PWD/storage $PWD/public/storage

# shell (создание сылки на Storage "Windows")
mkLink /D storage public/storage