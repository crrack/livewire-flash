# Laravel Flash Messages with livewire support
## Installation

add before </body>

```php
<livewire:flash-container />
```

## Usage

make a call to the `flash()` function.

```php
$flash = [
    'type' => 'success',
    'title' => 'Success',
    'message' => 'Post added to our database',
];

flash($flash, $this);
```
($this is used for livewire support)
