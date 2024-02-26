# Dynamic Update Trait

The Dynamic Update Trait for Laravel provides a convenient way to dynamically update model attributes using magic methods. This trait allows you to update individual model attributes without explicitly defining setter methods for each attribute. It simplifies the process of updating model fields by providing a generic `update` method that can be called with dynamic method names.

## Installation

You can install the package via Composer:

```bash
composer require shaka/dynamic-update-trait
```

## Usage

To use the Dynamic Update Trait, simply use it in your Eloquent model:

```php
<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use Shaka\DynamicUpdateTrait\Traits\DynamicUpdateTrait;


class User extends Model
{
  use DynamicUpdateTrait;
}
```

You can then update model attributes dynamically:

```php
$model = User::find(1);
$model->updateName('Shah Sawood'); // name field will be updated 
$model->updateEmail('shahsawoodshinwari@gmail.com'); // email field will be updated
```

## Additional Information

The package expects the fields to be updated are in snake_case.

## Contributing

Contributions are welcome! Feel free to submit pull requests or open issues to improve the package.

## License

The Dynamic Update Trait for Laravel is open-sourced software licensed under the [MIT license](https://chat.openai.com/c/LICENSE.md).


