<?php
/**
 * @title          Example Usage of the pH7CMS HTTP REST Push Data
 *
 * @author         Pierre-Henry Soria <hello@ph7cms.com>
 * @copyright      (c) 2015, Pierre-Henry Soria. All Rights Reserved.
 * @license        GNU General Public License; See PH7.LICENSE.txt and PH7.COPYRIGHT.txt in the root directory.
 */

require 'PH7CMS.class.php';


/*
 * The Private pH7CMS API Key. It is available in your ~/_protected/app/configs/config.ini file after the installation.
 */
$oPH7CMSApi = new PH7\External\Api\PH7CMS('4545s5sq5ss5sd4s5ds4d5s5d4qs', 'http://http://localhost/GitHub/pH7-Social-Dating-CMS');


//---------- ADD ACCOUNT ----------\\
$aNewUser = [
    'email' => 'myemail@hizup.uk',
    'username' => 'usersample',
    'password' => '123456pH7CMS89',
    'first_name' => 'Pete',
    'last_name' => 'Donovan',
    'sex' => 'male',
    'match_sex' => 'female',
    'birth_date' => '10/16/1994', // Format: mm/dd/yyyy
    'country' => 'GB',
    'city' => 'Newcastle upon Tyne',
    'state' => 'Tyne and Wear',
    'zip_code' => 'NE6 1AH',
    'description' => 'I want to meet some nice girls'
];

// Ass the user
$oPH7CMSApi->post('api/user/createaccount', $aNewUser);

// Show the response
echo var_dump($oPH7CMSApi->getResponse());



//---------- LOGIN ----------\\
$aUserLogin = [
    'email' => 'myemail@hizup.uk',
    'password' => '123456pH7CMS89'
];

// Login the user
$aRes = $oPH7CMSApi->post('api/user/login', $aUserLogin)->getResponse(PH7\External\Api\PH7CMS::ARR_TYPE); // Get the response in Array

// Show the response
echo var_dump($aRes);