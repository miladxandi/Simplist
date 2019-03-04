![eastCloud User Download](https://eastcloud.ir/Content/Main/Simplist_Version3.jpg)

[![ko-fi](https://www.ko-fi.com/img/donate_sm.png)](https://ko-fi.com/U7U6N2NR)

# Simplist  ![eastCloud User Download](http://eastcloud.ir/Content/Shared/Official-Badges.png) ![eastCloud User Download](http://eastcloud.ir/Content/Shared/Users-Badges.png)


## Simplist is a superfast micro-framework based on PHP
We strongly suggest our framework for personal blogs, news agencies & REST API development.




Just like any other PHP framework we started this project based on MVC architecture with the featured services like `$Add->Loader` , `REST API` , `SharedLayouts` , `Middlewares` & pre-defined security concepts.
Everything in Simplist is as simple as installing it on your server!

# Documentation

### Installation

Download it from [this repository](https://packagist.org/packages/miladxandi/simplist):

>```composer create-project miladxandi/simplist```

Remember your PHP version should be upper than 7 and the local request address should be set on:
>public_html/

After that, you have to set the username & table of your Database!
in a local project for first use, these values should be just like this: 
>Table: simplist_simplist

>Username: root

>Password: Empty ( without value or an empty string)

You can change these values by going to Model layer and change them in Connection.phtml in Core/Configurations folder, or go to this address:

>Core/Configurations/Connection.phtml

Note: There is a SQL Table file in "Resources" folder that you can easily import it to your local or online MySQL database


Until you\`re working on a local working directory, the HTTPS protocol is turned off, but if you want to upload it on your server, the HTTPS protocol can be turn on by making the "SecureProtocol" `true` in the Core Folder, at the Configurations Folder you can find a Routing file, or go to this address:
>Core/Configurations/Routing.phtml

You can change the `$SecureProtocol = false;` to `$SecureProtocol = true;`

It\`s completely installed and ready for use.

### Routing

To define your own routes, go to this address:
>Route/Setting/Routes.phtml

There is just an array returner that returns the url as an array key and configurations as its values.
Every new route should exactly create from this template:
```
'/aboutus' => [
 'target'=>'Main.Home.Aboutus',
 'get'=> true,
 'post'=> false,
 'middleware'=>'Main.Home.Aboutus'
 'important'=>false 
 ],
```
Let me describe it line by line:


`'/aboutus' ` 
>This is a web address that will process the requested address by Controllers and Middlewares and is a key of an array.
Note: Our router system is not case sensitive, but you`ve to define lowercase routes.

`'target'=>'Main.Home.Aboutus'`
>It means the target Controller is "HomeController" in the "Main" folder of Controllers folder and after requesting this address "Aboutus" method will be called as it wrote at the end of `'target'=>'Main.Home.Aboutus'`
Controller. also you can process on a `Querry String` by getting it, in its function parameters.
You can also make some request to Database in Controller files.
The given `Querry String` or Database values should insert into an array with `$Viewbag` name.
You can send them into your web page by this code:
`View::Process("Main.Home.Post",$Viewbag);`
It\`s now accessible from the requested "View" file in "public_html/View/...".
Instead of writing your logic codes into the Controllers, we encourage you to put them in the "Logic" folder in the Model folder.
There are some great Contracts in this folder to help you develop your business better than ever.

Note: Controllers and Middlewares have to create with exactly `Controller.phtml` or `Middleware.phtml` extensions, but should be written here without these extensions.
For example, we have "HomeController" but we can access it by writing just its name without the "Controller" word: "Home"


`'get'=> true `  or `'post'=> false `
>These are the general server request methods that we can define here.
if you want to deny any post request, you just need to change the `post` value to `false`.
Then you can see every request with the `POST` request method will show you a "Request Method Not Allowed" error.


`'middleware'=>'Main.Home.Aboutus'`
>When there was no conflict with the requested URL & its defined request method, before launching Controllers, we have some middleware to do some validations.
It can use to check security cookies or website language options and etc.
Every Middleware should return `true` in its "Status" key to pass its examination.
Middlewares also can process on a `Querry String` by getting it, in their function parameters.
Just like Controllers, we need their pure name without the "Middleware" word.

 ```'important'=>false ```
>As you read before, our system is not case sensitive by default, but sometimes you need to process on a case sensitive url to validate some tokens and sensitive data or any other reason.
you can change this rule of our Routing system by using  ```'important'=>true ``` or turn it off by  ```'important'=>false ```.
Note: This key in Routing array is not required.

### API

To define your own routes, go to this address:
>Route/Setting/Api.phtml

There is just an array returner that returns the url as an array key and configurations as its values.
Every new route should exactly create from this template:
```
'/api' => [
    'target' => 'Api.Home.Index',
    'allowed'=> 'get',
    'blocked'=> 'DELETE',
    'middleware'=>'Main.Home.Index',
    'important'=>false
]
```
Let me describe it line by line:


`'/api' ` 
>This is a web address for calling API and  will process the requested service by Controllers and Middlewares and is a key of an array.
Note: Our router system is not case sensitive, but you`ve to define lowercase routes.

`'target' => 'Api.Home.Index'`
>It means the target Controller is "HomeController" in the "Api" folder of Controllers folder and after requesting this address "Index" method will be called as it wrote at the end of `'target' => 'Api.Home.Index'`
Controller. also you can process on a `Querry String` by getting it, in its function parameters.
You can also make some request to Database in Controller files.
Instead of writing your logic codes into the Controllers, we encourage you to put them in the "Logic" folder in the Model folder.
There are some great Contracts in this folder to help you develop your business better than ever.

Note: Controllers and Middlewares have to create with exactly `Controller.phtml` or `Middleware.phtml` extensions, but should be written here without these extensions.
For example, we have "HomeController" but we can access it by writing just its name without the "Controller" word: "Home"


`'allowed'=> 'get'`  or `'blocked'=> 'DELETE' `
>If you want to let your app work any HTTP Verb, you can define it here and separate them with a comma to let your API use this methods. For example we want our app interact with our server with `POST` and `GET` methods; so we`ve to define both of them here just like this:

`'allowed'=> 'get,post'`

>Then we want to restrict some HTTP verbs from request to our server, we need to write them in the `blocked` part of this section:

`'blocked'=> 'DELETE'`

>We can write as many as verbs we want in these to sections.

`'middleware'=>'Main.Home.Aboutus'`
>When there was no conflict with the requested URL & its defined request method, before launching Controllers, we have some middleware to do some validations.
It can use to check security cookies or website language options and etc.
Every Middleware should return `true` in its "Status" key to pass its examination.
Middlewares also can process on a `Querry String` by getting it, in their function parameters.
Just like Controllers, we need their pure name without the "Middleware" word.

 ```'important'=>false ```
>As you read before, our system is not case sensitive by default, but sometimes you need to process on a case sensitive url to validate some tokens and sensitive data or any other reason.
you can change this rule of our Routing system by using  ```'important'=>true ``` or turn it off by  ```'important'=>false ```.
Note: This key in Routing array is not required.

### Features

#### oLoad


The `oLoad` library is a *Simplist* service and defined to help your html `head` section be more clean.
if you need to use this library, you have to use this code in your view file at first:

>`<?php $Add = new Core\Requirement\oLoad("../../..","Style/Main","Script/Main","Content/Main"); ?>
`

In this code, you can define different locations for your JS, CSS, Images and etc.
As we let you customize your app, the `../../..` will show you the default root of these contents, but you can change it in every page that you`re creating it.

This code can import external JS or CSS libraries or Images.

Also, it can add unique types of files to your project.

This is a complete code to show how can you show an image on your html:

>`<?php $Add->Loader("png","eastCloud","Shared",true,false,"eastCloud",24,24,"Style","Class"); ?>`

This Code means:

>`<?php $Add->Loader(Extension: "png",Name: "eastCloud",UniqueUrl: "Shared",Local: true,UniqueType: false,ImageAlt: "eastCloud",ImageWidth: 24,ImageHeight: 24,ImageStyle: "Style",ImageClass: "Class"); ?>`

And will create a complete `<img>` tag anywhere it used.

You can add JS and CSS libraries just like this; But except everything after the `Local` argument in that method and their own extensions like this:

>`<?php $Add->Loader("css","Style",null,true); ?>`

>`<?php $Add->Loader("js","Script",null,true); ?>`

The `UniqueUrl` argument let you define internal or external libraries or images. if there is no need to define `UniqueUrl`, just leave an empty double quotation (`""`) or pass null as its argument.It\`s null by default.

The `Local` argument means the library or image is a local file or not, The system will use the default root with the given argument to find that file if the `Local` was `true`.

The `UniqueType` argument must be `true` if the extension were everything except js, CSS, png, jpeg, jpg, and ico. It\`s `false` by default.

The `js` extension will create complete `<script src="../../../Script/Main/main.js"></script>` code everywhere you call it.
The `css` extension will create complete `<link rel="stylesheet" type="text/css" href="../../../Style/Shared/File.css">` code everywhere you call it.

#### SharedLayouts


*SharedLayouts* is name of a *Simplist* service that is in the Shared folder in View Folder(`public_html/View/Shared`).

It contains 2 folders and a .phtml file with "Layouts" name by default.
The Layouts file can contains one or more classes for each part of project. for example there is a class just like this:


>```
>  class MainLayouts
>  {
>      public static function _Header()
>      {
>          include "Main/_HeaderLayout.phtml";
>      }
>      public static function _Menu()
>      {
>          include "Main/_MenuLayout.phtml";
>      }
>      public static function _Footer()
>      {
>          include "Main/_FooterLayout.phtml";
>      }
>  }
>```


It includes some methods to load some other view files as header, menu and footer.
There s no complex concept.

We put some Mark down files with ".md" extensions as our detailed guide files.
We strongly suggest your to download and install a mark down viewer for your brower to view this files with better experience.
### Tasks


- [x] Starters Documentation
- [x] Complete Documentations
- [x] Fix Authentication & Authorization Bugs
- [x] Handle the requested URl with regex
- [x] Make a development environment for Database connection, Secure protocol & etc
- [x] RESTFUL API support