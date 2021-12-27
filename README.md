How to use:  
&emsp;-First Install Composer:  
&emsp;&emsp;On Windows, you can use the installer (.exe file)

&emsp;-Then, using composer, install laravel (v8+):  
&emsp;&emsp;command is: **composer global require laravel/installer**

&emsp;-Open a terminal (Admin Mode preferred) in the _project Folder_ and  
&emsp;&emsp;Install Jetstream:  
&emsp;&emsp;&emsp;command is: **composer require laravel/jetstream**  
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
**Serve and Run the Application**  
This will serve the application on http://127.0.0.1:5000/ but changes made to the source code wont reflect in the browser.  
Run the command: **php artisan serve**  
Open the browser and navigate to http://127.0.0.1:5000/register to register a new user.

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
**Night Mode**: This app supports Night Mode. Click on the **Coffee Cup Icon** whenever you see one, to switch Theme modes.
<?xml version="1.0" encoding="UTF-8"?>
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="150px" height="150px" viewBox="0 0 38" version="1.1">
<g id="surface1">
<path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" d="M 36.042969 26.109375 C 39.609375 26.109375 42 22.230469 42 18.605469 C 42 15.972656 40.375 15.617188 38.789062 15.617188 C 38.335938 15.617188 37.847656 15.648438 37.328125 15.679688 C 36.910156 15.703125 36.476562 15.722656 36.042969 15.734375 L 36.046875 15.617188 L 6.199219 15.617188 C 6.199219 21.234375 9.351562 26.117188 14 28.625 C 9.242188 28.9375 6 29.554688 6 30.257812 C 6 31.289062 12.769531 32.117188 21.121094 32.117188 C 29.472656 32.117188 36.242188 31.289062 36.242188 30.257812 C 36.242188 29.550781 32.984375 28.933594 28.207031 28.625 C 29.597656 27.875 30.855469 26.921875 31.9375 25.792969 C 33.199219 26.109375 34.691406 26.109375 36.042969 26.109375 Z M 35.988281 16.769531 C 36.46875 16.757812 36.941406 16.738281 37.390625 16.710938 C 37.890625 16.683594 38.367188 16.652344 38.789062 16.652344 C 40.292969 16.652344 40.96875 16.9375 40.96875 18.601562 C 40.96875 21.664062 38.945312 25.078125 36.042969 25.078125 C 34.769531 25.078125 33.652344 25.050781 32.738281 24.898438 C 34.574219 22.644531 35.75 19.835938 35.988281 16.769531 Z M 18.941406 12.707031 C 18.867188 12.636719 17.1875 10.886719 18.960938 8.742188 C 21.128906 6.128906 18.960938 3.90625 18.941406 3.882812 L 18.472656 4.355469 C 18.542969 4.425781 20.226562 6.175781 18.449219 8.320312 C 16.28125 10.9375 18.449219 13.160156 18.472656 13.183594 Z M 21.523438 12.707031 C 21.449219 12.636719 19.769531 10.886719 21.546875 8.742188 C 23.710938 6.128906 21.546875 3.90625 21.523438 3.882812 L 21.050781 4.355469 C 21.125 4.425781 22.804688 6.175781 21.03125 8.320312 C 18.867188 10.9375 21.03125 13.160156 21.054688 13.183594 Z M 24.335938 12.707031 C 24.265625 12.636719 22.582031 10.886719 24.355469 8.742188 C 26.523438 6.128906 24.355469 3.90625 24.335938 3.882812 L 23.863281 4.355469 C 23.933594 4.425781 25.617188 6.175781 23.84375 8.320312 C 21.675781 10.9375 23.84375 13.160156 23.867188 13.183594 Z M 24.335938 12.707031 "/>
</g>
</svg>
