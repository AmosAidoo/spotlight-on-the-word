# Spotlight on the Word
## What you need
1. A local server. E.g. Xampp
2. [Composer](https://getcomposer.org)

## Setting things up
1. Create a database for the website.
2. Rename the .env.example file to .env and make the edit the following fields:
   - **DB_DATABASE=homestead**
   - **DB_USERNAME=homestead**
   - **DB_PASSWORD=secret**
3. Run the following commands (Make sure you are in the preject directory):
   ```
   composer install
   php artisan migrate
   php artisan key:generate
   php artisan db:seed
   ```
4. Finally run `php artisan serve` to run the website on your localhost.
