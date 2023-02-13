# Solid

Bob's Uncle Solid Principles

## Installing Composer

``` shell
cd /home/username/proyectos/solid

php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"

HASH=`curl -sS https://composer.github.io/installer.sig`

echo $HASH
 55ce33d7678c5a611085589f1f3ddf8b3c52d662cd01d4ba75c0ee0459970c2200a51f492d557530c71c15d8dba01eae

php -r "if (hash_file('sha384', 'composer-setup.php') === '$HASH') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
 Installer verified

php composer-setup.php --install-dir=. --filename=composer

php -r "unlink('composer-setup.php');"

./composer
```

## Execute

``` shell
# Edit php files and update autoload
./composer dump-autoload

php index.php
```
