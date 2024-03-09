# Unit test
___
## Creating Tests
```bash
php artisan make:test TaskTest
```
___
## Running Tests
```bash
php artisan test
php artisan test ./tests/
php artisan test ./tests/feature
php artisan test ./tests/feature/TaskTest.php
php artisan test ./tests/feature/TaskTest.php --filter=test_home_page
```
```bash
.\vendor\bin\phpunit
.\vendor\bin\phpunit ./tests/
.\vendor\bin\phpunit ./tests/feature
.\vendor\bin\phpunit ./tests/feature/TaskTest.php
.\vendor\bin\phpunit ./tests/feature/TaskTest.php --filter=test_home_page
```
___
## Methodes

```php
$response->getStatusCode()
```
### Methode routes
> get - post - put - patch - delete 
### Best practices for handling route Json
> get - postJson - putJson - patchJson - deleteJson 

___

```php 
$response->assertJson([
    [
        'id' => '1',
        'title' => 'category 1',
        'description' => 'description category 1',
    ]
]);
```

```php
    $this->assertEquals($category, $data);
    $this->assertEquals(count($category), count($data));

```
___

___
## github comment 

```bash
git reset --hard
```
