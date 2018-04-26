
#How to Install PHPUnit


1.Make sure you have xampp with PHP 7.x installed (or other version required to your version of phpunit)

2.Go to folder xampp\php (wherever you installed your xampp) We will be working in this folder during entire installation. So if I say edit file etc it means in this folder.

there you should find files:

> phpunit (yes there is no extension for this file)

> phpunit.bat

3.Download newest version of phpunit from [here](https://phpunit.de/) At the time of writing this I get version phpunit 6.2 and PHP 7.1.4.

4.Copy downloaded file to xampp\php folder For me it's: phpunit-6.2.2.phar for you it might be different version.

5.Now **change** name of the **phpunit-6.2.2.phar** to **phpunit.phar**

I also renamed file phpunit to phpunit-org just in case.

6.Edit file phpunit.bat

7.Find line that says:

    >`""%PHPBIN%" "C:\AnyFolderYouInsalledWampTo\xampp\php\phpunit" %*`

   Edit this line to look like this

    >`""%PHPBIN%" "C:\AnyFolderYouInsalledWampTo\xampp\php\phpunit.phar" %*`

Yes at the end of phpunit we **add .phar**

8.Now make sure you have added your php to PATH in Environment Variables To do this on Windows 10 and Windows 8

    8a. In Search, search for and then select: System (Control Panel)
    
    8b. Click the Advanced system settings link.
    
    8c. Click Environment Variables. In the section System Variables, find the PATH environment variable and select it. Click Edit. If the PATH environment variable does not exist, click New.
    
    8d. In the Edit System Variable (or New System Variable) window, specify the value of the PATH environment variable. Paste location of your PHP. For me it would be: D:\AnyFolderYouInsalledWampTo\xampp\php

    8e. Click OK. Close all remaining windows by clicking OK.

9.In cmd (to run cmd go to search in Windows and type cmd.exe and click Enter) go to drive you have xampp installed, then type this command

 >`phpunit`

you should get list of all commands available in phpunit

now type:

 >`phpunit --check-version`

you will get info what phpunit version you have and if you are using the newest version.

10.in case this won't work go to your \xampp\php folder in cmd and then write/paste and run this command:

 >`echo @php "%~dp0phpunit.phar" %* > phpunit.cmd`

it will create phpunit.cmd file in php folder

(i would paste in cmd:

 >`cd AnyFolderYouInsalledWampTo\xampp\php`

for you it would be your path of xampp\php but make sure you are on drive where your xamp\php is installed otherwise use

 >`cd C:\AnyFolderYouInsalledWampTo\xampp\php`

Repeat step 9.

11.At the end run this command on your terminal:

>`composer require phpunit/phpunit`