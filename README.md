# Timezone Conversion in Laravel

 ![](https://img.shields.io/badge/Version-1.00-green)[![GitHub license](https://img.shields.io/github/license/gothinkster/laravel-realworld-example-app.svg)](https://raw.githubusercontent.com/gothinkster/laravel-realworld-example-app/master/LICENSE)

> ### Timestamp conversion in Eloquent models, time conversion functions by  timezone in Laravel-8.\*

----------



## Installation

## **composer require theobros/settimezone**

### Usage

###### Step 1

**Make sure param timezone is sent in all http request  with value as example  "Asia/kolkata" or default timezone UTC will used to convert timestamps**

###### Step 2 
**Import SetTimeZone in required Eloquent models**
    
    <?php
    
    namespace App\Models;
    
    use Theobros\SetTimezone\Traits\SetTimeZone;
    
    class User extends Authenticatable
    {
        use SetTimeZone;
    
    }

**timestamps read_at, created_at,updated_at  will be automatically formatted to  datetime format "Y-m-d h:i A"**

###### Bonus
#### Function calls 
    use SetTimeZone;

     public function getCreatedAtAttribute($value)
        {
                return $this->convertToUser($value,  'Y-m-d h:i: A');
        }
    
     public function getCreatedAtAttribute($value)
        {
               return $this->convertToUTC($value,  'Y-m-d h:i: A');
        }

## Security

If you discover any security related issues, please email theobros05@gmail.com instead of using the issue tracker.

