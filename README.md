##FAO - Beneficiary App

#Installation

- Clone the project
- Rename .env.example to .env and change the DB config and also APP_URL,ASSET_URL to your project root folder
- Run 'composer install' command to install the packages:
```
composer install
```
- Run 'npm install' to install the frontend:
```
npm install
```
- On a separate terminal run 'npm run dev' to render the frontend:
```
npm run dev
```
- On a separate terminal run 'npm run build' to build the assets on the public folder:
```
npm run build
```
- To seed the application with dummy data run: php artisan db:seed --class=UserSeeder. Do note it will take awhile since <routprojectfolder>/database/seeders/UserSeeder.php has been set a default value of 1,000,000:
```
php artisan db:seed --class=UserSeeder
```
- To use laravel telescope, a change has to be made on: <routprojectfolder>/vendor/laravel/telescope/resources/views/layout.blade.php.
Change:
```
<script>
    window.Telescope = @json($telescopeScriptVariables);
</script>
```

to
```
<script>
    window.Telescope = @json($telescopeScriptVariables);
    window.Telescope.path = 'faoassignment/telescope'; 
</script>
```
- Access the application on the browser
http://localhost/faoassignment/performance/view
- Access Laravel Telescope:
http://localhost/faoassignment/telescope
