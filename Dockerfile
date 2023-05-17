# Étape 1: Utilisez l'image de base de PHP avec Apache
FROM php:7.4-apache

# Étape 2: Copiez votre code source dans le conteneur Docker
COPY . /var/www/html/

# Étape 3: Activez le module Apache Rewrite
RUN a2enmod rewrite

# Étape 4: Installez les extensions PHP requises
# Vous pouvez ajouter ou supprimer des extensions en fonction de vos besoins
RUN docker-php-ext-install pdo pdo_mysql

# Étape 5: Changez le propriétaire du répertoire à www-data
RUN chown -R www-data:www-data /var/www/html/

# Étape 6: Exposez le port 80
EXPOSE 80
