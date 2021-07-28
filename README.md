Himalaya SMS Laravel Package
=============================

Himalaya SMS Laravel Package can be used to send SMS via Himalaya SMS.

## How to send an SMS

After the installation is complete, `Sparrow` alias is generated by default.

### Using the default Alias
```php
// Using Default 
use HimalayaSMS;
```

### Send an SMS
```php

$to = '98########'; // Setting Phone Number
$message = 'Test message.'; // Setting Message

// Send the message
$sms_message = HimalayaSMS::send($to, $message);
// This will return a pseudo JSON response, you will need to json_decode it.
```

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
