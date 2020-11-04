# Laravel Flash Messages with livewire support
## Installation

install via composer

```bash
composer require crrack/livewire-flash
```

## Setup

add before `</body>`

```html
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
