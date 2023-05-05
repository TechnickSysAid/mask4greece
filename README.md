# Invoice mask for Greece
Dolibarr invoice mask for Greece & PDF model

* Moon invoice mask
* Τιμολόγιο Πώλησης
* Τιμολόγιο Παροχής Υπηρεσιών
* Απόδειξη Λιανικής Πώλησης
* Απόδειξη Παροχής Υπηρεσιών
* Πιστωτικό Τιμολόγιο
* Πιστωτικό Λιανικής
* Δελτίο Αποστολής
* Προσφορά

For more info read the [wiki](https://github.com/TechnickSysAid/mask4greece/wiki)

***
## Version Information:
* Name: Mask4Greece
* Prerequisites: Dolibarr version 16.x.+
* Current version: 4.0.0
* Last updated: 31/03/2022
***

## LICENSE
Mask4Greece is released under the terms of the GNU General Public License as published by the Free Software Foundation; either version 3 of the License, or (at your option) any later version (GPL-3+).

See the [COPYING](https://github.com/Dolibarr/dolibarr/blob/develop/COPYING) file for a full copy of the license.


***
## Install module:
- If you get the module in a zip file (like when downloading it from the market place [Dolistore](https://www.dolistore.com)), go into
menu ```Home - Setup - Modules - Deploy external module``` and upload the zip file.


Note: If this screen tell you there is no custom directory, check your setup is correct: 

- In your Dolibarr installation directory, edit the ```htdocs/conf/conf.php``` file and check that following lines are not commented:

    ```php
    //$dolibarr_main_url_root_alt ...
    //$dolibarr_main_document_root_alt ...
    ```

- Uncomment them if necessary (delete the leading ```//```) and assign a sensible value according to your Dolibarr installation

    For example :

    - UNIX:
        ```php
        $dolibarr_main_url_root_alt = '/custom';
        $dolibarr_main_document_root_alt = '/var/www/Dolibarr/htdocs/custom';
        ```

    - Windows:
        ```php
        $dolibarr_main_url_root_alt = '/custom';
        $dolibarr_main_document_root_alt = 'C:/My Web Sites/Dolibarr/htdocs/custom';
        ```

if needed rename dolibarr_module_externalaccess folder to externalaccess
        


From your browser:

  - Log into Dolibarr as a super-administrator
  - Go to "Setup" -> "Modules"
  - You should now be able to find and enable the module
