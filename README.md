# pH7CMS HTTP REST Push Data Class


## Overview

This **PH7CMS class** helps to retrieve the data from the API (natively integrated to pH7CMS) from another app (iOS/Android Apps, websites, etc.).

If your app or website that you want to integrate pH7CMS's data is coded is Java, Python, Ruby, C# or in another language, you can easily transform this class to another language by taking inspiration from the class.
After that, it would be great if you can send the class by making a **pull request** on this Git repo. 


## How to Use

Here's a basic example:

```php
<?php
require 'PH7CMS.class.php';

$oPH7CMSApi = new PH7\External\Api\PH7CMS('YourPrivateApiKey', 'http://your-ph7cms-site.com');


/***** Log a user *****/
$aUserLogin = [
    'email' => 'myemail@hizup.uk',
    'password' => '123456pH7CMS89'
];

// Login the user
$aRes = $oPH7CMSApi->post('api/user/login', $aUserLogin);

// Show the response
echo var_dump( $oPH7CMSApi->getResponse(PH7\External\Api\PH7CMS::ARR_TYPE) ); // Get the response in Array
```


## Website

**[Social Dating Network Script](http://ph7cms.com)**


## Author

Pierre-Henry Soria


## Contact the Author

By email at: *phy [AT] hizup [D0T] uk* or at: *ph7software [AT] gmail [D0T] com*


## License

License: [General Public License 3](http://www.gnu.org/licenses/gpl.html) or later; See the *PH7.LICENSE.txt* and *PH7.COPYRIGHT.txt* files for more details.
