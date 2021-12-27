How to use:  
&emsp;-First Install Composer:  
&emsp;&emsp;On Windows, you can use the installer (.exe file)

&emsp;-Then, using composer, install laravel (v8+):  
&emsp;&emsp;command is: **composer global require laravel/installer**

&emsp;-Open a terminal (Admin Mode preferred) in the _project Folder_ and  
&emsp;&emsp;Install Jetstream:  
&emsp;&emsp;&emsp;command is: **composer require laravel/jetstream**  
&emsp;&emsp;Install Livewire package for Jetstream:  
&emsp;&emsp;&emsp;command is: **php artisan jetstream:install livewire**  
&emsp;&emsp;Install the Node Dependencies  
&emsp;&emsp;&emsp;command is: **npm install**  
&emsp;&emsp;Build the Dependencies in Development Mode:  
&emsp;&emsp;&emsp;command is: **npm run dev**

***
&emsp;&emsp;**Important Note: Check the terminal to see if the build was sucessfull or it needs to run again**  
&emsp;&emsp;&emsp;(If it needs to run again, run **npm run dev** again)  
***
&emsp;-Set Database Name:  
&emsp;&emsp;&emsp;Open the .env File in the project and change the  **DB_DATABASE** value to your preferred database
***
&emsp;&emsp;**Important Note: Database must be Created and Ready before proceeding to the next step**  
&emsp;&emsp;&emsp;(This Database Must not contain any tables)
***
&emsp;-Startup the XAMPP Server  
&emsp;&emsp;Only Apache and Mysql services are required 

&emsp;-Create the Database Migrations:  
&emsp;&emsp; In the terminal, type the command: **php artisan migrate**

__*The Installation Process is now Complete*__ 

*** 
**Running a Development Build**  
A Development build is used for debugging and testing.
This requires two terminals, one for building the projects and one for hosting the development server.

First run: **npm run hot** on one terminal  
and on the other terminal, run: **php artisan serve**  
Do not kill these terminals unless you want to stop the server

*** 
**Site Flow**  
First Users need to create an account to use to Website. 
This can be done by going to http://127.0.0.1:5000/register from a web browser and filling in the required details.  

Then users will be redirected to the dashboard.
Since the Login is saved in the database, users may directly go to http://127.0.0.1:5000/ directly the next time.

Users can check the store and may even Add items to their cart, this site does not contain any special component for the cart items as they can be viewed from the store itself nor does it have a payment gateway.

**Extra App Features**  
**Night Mode**: This app supports Night Mode and can only be enabled once logged in.
Click on the **Coffee Cup Icon** on the navbar to switch Theme modes.