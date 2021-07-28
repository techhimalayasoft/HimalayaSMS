Himalaya SMS Laravel Package
=============================
https://packagist.org/packages/techhimalayasoft/himalayasms

Himalaya SMS Laravel Package can be used to send SMS via Himalaya SMS.

## Changing Config

```
php artisan vendor:publish --provider="techhimalayasoft\HimalayaSMS\HimalayaSMSServiceProvider"
```

## How to send an SMS

```php
// Using Default 
use HimalayaSMS;
```

### Send an SMS
```php

$senderid = ''
$campaign = ''
$routeid = ''
$key = ''
$to = '98########'; // Setting Phone Number
$text = 'Test message.'; // Setting Message

// Send the message
$sms_message = HimalayaSMS::send($to, $text, $senderid, $campaign, $routeid, $key);
// This will return a pseudo JSON response, you will need to json_decode it.
```

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
