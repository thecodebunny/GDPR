# Thecodebunny GDPR

[![Latest Stable Version](https://poser.pugx.org/thecodebunny/gdpr/v)](//packagist.org/packages/thecodebunny/gdpr)
[![Total Downloads](https://poser.pugx.org/thecodebunny/gdpr/downloads)](//packagist.org/packages/thecodebunny/gdpr)
[![License](https://poser.pugx.org/thecodebunny/gdpr/license)](https://github.com/thecodebunny/gdpr/blob/master/LICENSE)

## 1. Introduction:

Thecodebunny GDPR will help customers to Send Data Requests for Changing name , email ID , many more as well as customer can also send request for delete a particular data. Through this module customer can also see their all detaills like personal Details , Address Details , Order Details in pdf & html formate. If admin is satisfied with the GDPR Data Request of the customer then admin could proceed the request of change a particular info or delete a  particular info of the customer.

* Customers can send Data Request for Changing information in their acccount.
* Customers can send Data Request for deleteing a particular information in their acccount.
* After sending any Request customer recieves a mail on their registered email id.
* Customer can see thier all details like Personal Detail, Address Detail , Order detail through just one click in pdf and html formats.
* Admin can Enable/Disable GDPR Module.
* Admin can Enable/Disable Customer Agreement in GDPR Module.
* Admin can Enable/Disable Cookie Management in GDPR Module.
* Admin can Enable/Disable Cookie Management in GDPR Module.
* Admin can see the list of all Data Request.
* Admin can solve the Data Request and can change the status of the request.


## 2. Requirements:

* **Thecodebunny**: v1.2.0

## 3. Installation:

### Install with composer
Go to the root folder of **Thecodebunny** and run the following command:

```
composer require thecodebunny/gdpr
```

Prepare your database table(s) by the following command:
```
php artisan migrate
```

Populate the table(s)
```
php artisan db:seed --class=Thecodebunny\\GDPR\\Database\\Seeders\\GdprTableSeeder
```

#### Run these commands below to complete the setup

```
php artisan route:clear
```

```
php artisan config:cache
```

```
php artisan vendor:publish

-> Press 0 and then press enter to publish all assets and configurations.
```

* Enable the GDPR Module from the Admin Panel
 
```
Admin->Settings->GDPR
```

### Install without composer
* Unzip the respective extension zip and then create a folder named **GDPR**  inside the `packages/Thecodebunny` folder into project root directory.
* Goto config/app.php file and add following line under 'providers'

```php
Thecodebunny\GDPR\Providers\GDPRServiceProvider::class
```

* Goto composer.json file and add following line under 'psr-4'

```json
"Thecodebunny\\GDPR\\": "packages/Thecodebunny/GDPR/src"
```
Now run the following command:
```
composer dump-autoload
```

Prepare your database table(s) by the following command:
```
php artisan migrate
```

Populate the table(s)
```
php artisan db:seed --class=Thecodebunny\\GDPR\\Database\\Seeders\\GdprTableSeeder
```

#### Run these commands below to complete the setup

```
php artisan route:clear
```

```
php artisan config:cache
```

```
php artisan vendor:publish

-> Press 0 and then press enter to publish all assets and configurations.
```

* Enable the GDPR Module from the Admin Panel
 
```
Admin->Settings->GDPR
```



> That's it, now just execute the project on your specified domain.
