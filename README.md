# Project Title

Users Hierarchy by Khoa Bui

## Getting Started

Unzip the file users-hierarchy.zip on your desktop or local staging environment. 

## Files

Unzip the file users-hierarchy.zip on your desktop or local staging environment. 

### Prerequisites

* PHP. At least Version 5+
* Internet. The code calls Bootstrap CDN
* Apache


### Installing

There are two methods to installing the code:

1. Local Development Server

2. Self Hosted

[Local Development Server]

If you are running Windows, download WAMP (Windows, Apache, MySQL, PHP)
If you are running Mac, download MAMP (Mac, Apache, MySQL, PHP)

1. Unzip the file contents.
2. Copy over the folder into your htdocs directory
3. Run your WAMP or MAMP
4. Type in localhost:8888/khoabui-codechallenge


[Self Hosted]

If you wish to run the code on a hosted server, please ensure the host provider can run PHP, at least version 5 will do. 

1. Simply unzip the file contents.
2. Upload the directory into your public www folder.
3. Load the folder in your address bar. 

For example: 
http://www.yoursite.com/staging/khoabui-codechallenge/

Your self hosted server should already have index.php configured in the php.ini file hence automatically run without you typing it in. 

## Running the tests

In order to run a test. Simply select a user and review the details outlined on the page.

You can also double check the IDs in the inc_db_users.php and inc_db_roles.php files. 


## Built With

* [Brackets](http://http://brackets.io) - Code IDE
* [Photoshop](https://www.adobe.com/au/products/photoshop.html) - Design and Photos
* [Bootstrap](http://getbootstrap.com) - Used to build mobile responsive elements and styles

## Author

Khoa Bui
email : kwabee@gmail.com
phone : 0415 689 777

## Notes

[Security]
Passing user variables through the address bar is normally avoided due to security concerns. ie manipulating the userid variables and seeing user credentials that you may not have the privileges to. 

[Scalability]
The roles and users is currently stored in a multi dimensional array. This acts as a quick database to reference IDs. If the requirements needed to import hundreds of records, I would definitely not use this method due to scalability and maintenance issues. Instead, I would retreive the records and feed them into a JSON/CSV/XML file or SQL which will be manipulated accordingly.  Due to the scope of this project, I went with the multidimensional array for ease of development. 

[Enhancements]
I didn't output it as a raw text because I wanted to make the UX nice and pretty.

[User Selection]
Since there was only 5 users, I decided to keep this as a simple list for easy navigation. However if there were hundreds of users, I would defintely build a site tree or pagnation to organise the large number of records. 

[User Icons]
These characters are cool. Enough said :) 

## Acknowledgments

* Pixar Studios
* Steve Jobs
* Nescafe Blend 43
