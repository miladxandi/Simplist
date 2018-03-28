<img src="https://simplist.ir/Content/Shared/Logo.png" width="100px" height="100px">

## Simplist

### Simplist is a mini framework based on PHP language for small projects.
We strongly suggest our framework for personal blogs, news agencies & human resource management.




Just like any other PHP framework we started this project based on MVC architecture with the featured services like `$Add->Loader` , `gVerb` | `pVerb` , SharedLayouts, Middlewares & pre-defined security.
Everything in Simplist is as simple as installing it on your server!
Want to help in development?

## Documentation
Remember your PHP code should be upper than 7 and the local request address should be set on:
>public_html/

After that, you have to set the username & table of your Database!
in a local project for first use, these values should be just like this: 
>Table: simplist_simplist

>Username: root

>Password: Empty ( without value or an empty string)

You can there values by going to Model layer and change them in Database.phtml in Connection folder, our go to this address:

>Model/Connection/Database.phtml

Note: There is a SQL Table file in "Resources" folder that you can easily import it to your local or online MySQL database


Until you\`re working on local a working directory, the HTTPS protocol is turned off, but if you want to upload it on your server, the HTTPS protocol can be turn on by making the "SecureProtocol" `true` in the Middleware list, at the Important Folder you can find a Security file, our go to this address:
>Middleware/Important/Security.phtml

You can change the `$this->CoreSecurity->SecureProtocol(false);` to `$this->CoreSecurity->SecureProtocol(true);`

It\`s completely installed and ready for use.

To define your own routes, got to this address:
>Route/Setting/Routes.phtml

There is just an array returner that returns the url as an array key and configurations as it\`s values.
Every new route should exactly create from this template:
```
'/Aboutus' => [
 'target'=>'Main.Home.Aboutus',
 'gverb'=> 'GET',
 'pverb'=> 'POST',
 'middleware'=>'Main.Home.Aboutus' ],'
```
Let me describe it line by line:


`'/Aboutus' ` 
>This is a web address that will process the requested address by Controllers and Middlewares and is a key of an array.

`'target'=>'Main.Home.Aboutus'`
>It means the target Controller is "HomeController" in the "Main" folder of Controllers folder and after requesting this address "Aboutus" method will be call as it wrote at the end of `'target'=>'Main.Home.Aboutus'`
Controller also can process on a `Querry String` by getting it, in it\`s function parameters.
You can also make some request to Database in Controller files.
The given `Querry String` or Database values, should insert into a an array with `$Viewbag` name.
You can send them to your web page by this code:
`View::Process("Main.Home.Post",$Viewbag);`
It\`s now accessible in the request "View" file in "public_html/View/...".

Note: Controllers and Middlewares have to create with `Controller.phtml` or `Middleware.phtml` but should be written here without these extensions.
For example we have: HomeController but we can access to it with writting just it`s name.

`'gverb'=> 'GET' `  or `'pverb'=> 'POST' `
>These are the general server request methods that we can define here.
if you want to deny any post request, you just need to delete the `POST` word and leave it empty.
Then you can see every request with the `POST` request method will show an you a "Request Method Not Allowed" error.


`'middleware'=>'Main.Home.Aboutus'`
>When there was no conflict with the requested URL & it\`s defined request method, before launching Controllers, we have some middle ware to check some information.
It can use to check security cookies or website language options and etc.
Every Middleware should return `true` in it\`s "Status" key to pass it\`s examination.
Middleware also can process on a `Querry String` by getting it, in it\`s function parameters.

- [ ] Complete Documentations
- [ ] Handle the requested URl with regex
- [ ] Make a development environment for Database connection, Secure protocol & etc
- [ ] Make a user registration form