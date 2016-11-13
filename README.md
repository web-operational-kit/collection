# Collection

This library is lightweight **collection manager**.

**Diclaimer :** This component is part of the [WOK](https://github.com/web-operational-kit/) (Web Operational Kit) framework. It however can be used as a standalone library.

## Install

It is recommanded to install that component as a dependency using [Composer](https://getcomposer.org/) :

    composer require wok/collection


You're also free to get it with [git](https://git-scm.com/) or by [direct download](https://github.com/web-operational-kit/collection/archive/master.zip) while this package has no dependencies.

    git clone https://github.com/web-operational-kit/collection.git


## Features

As this component roles are to be a data container and manager, it's features are related to collection data manipulation.

However, it has also been developed to be a dependency that other components can require and extend.


## Usage

``` php
// Register the data collection
$collection = new \WOK\Collection\Collection(array(
    'a' => 'value',
    'b' => 'value',
    'c' => 'value',
));

$collection->add(array('key'=>'value')); // Add some data

$exists = $collection->has($key); // Check if a data exists by it's key
$value  = $collection->get($key); // Get a data value by it's key
$collection->remove($key); // Remove a data

$data =  $collection->all(); // Get the all data collection as array

// Iterate through the collection
foreach($collection as $key => $data) {

    // Play with the data list

}
```
