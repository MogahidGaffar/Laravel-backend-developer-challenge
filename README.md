
<!-- PROJECT LOGO -->
<br />
<div align="center">
  <a href="#">
    <img src="https://github.com/MogahidGaffar/Laravel-backend-developer-challenge/blob/main/public/img/laravel_challenge.png" alt="Logo" >
  </a>

  <h3 align="center">Laravel Backend Developer Challenge  </h3>


</div>



## Our Problem
a UK estate agent named Verde Estates; which house of your employees,
It has difficulty keeping records of when and to which customers it will show. The company
manager, who wants to use his employees more effectively, especially wants to be able to
control the length of the processes to and from the appointments, the time allocated by the
employees for the appointment and all
these appointments without conflicts among themselves.
In order to solve these problems, the company needs an application that simulates the
scenario that we will describe in detail below.


## Scenario

• Everyone working in the real estate agent should be able to register in this API system
and likewise should be able to login. (Login and register endpoints). </br>
• On the appointment creation screen; appointment address, appointment date, attendee
customer's personal information (name, surname) and contact information (email,
address, phone number). (Appointment creation endpoint)</br>
• Realtor is located at cm27pj zip code.</br>
• The postal code sent as the appointment address and the postal code of the real estate
agent office should be measured and this value entered into a column in the
appointment table should be written</br>
• Appointment duration is considered as 1 hour and the appointment address is given to
the real estate agent.</br>
• The estimated time of departure from the office and the real estate office after the
appointment so that he can go should be able to login. (Login and register endpoints)
When it will be available, it will return to 2 separate columns in the appointments
table Should be written (Google maps API can be used for calculations ) </br>
• Appointment update and deletion endpoints should also be created.</br>
• An endpoint for listing appointments should be created. This listing endpoint must be
filtered by date.</br>


## Technical Rules

• The project should be developed with “Laravel” as main framework and
with “repository pattern” design.</br>
• You are expected to prepare an API for the needs identified in the scenario.</br>
• In this direction, you should create a setup by considering the Users,
Appointments, Contacts database tables.</br>
• Prepare documentation for the endpoints you have prepared and</br>
• The project should be kept in a version management system (preferably gitlab)
and code changes should be made in part as commits, in English with details
about the transactions. You can choose the services that offer it.) You must
define the endpoints in a folder in Postman.</br>
• JWT should be used for authentication processes and checks should be made
regarding token expire scenario. </br>
• The project is completely on Restful communication and data transfer
architecture.</br>
• PHP Laravel should be used for back-end technology. </br>
• Appointment address and real estate agent's address should be followed only by
zip code. (It should be in the address column). Use open source zip code
services to obtain location information about addresses. All appointments must
take place in the UK. </br>


## Delivery Process

• Please share with us the sharing link of Collection, which you defined in
postman, the repo and endpoints where you kept the project during the delivery
process.</br>
• Deploy the project to a remote server. (Free infrastructure like Heroku You can
choose the services that offer it.)</br>
• For running the project and necessary details, please readme in the repo keep
your file up to date</br>

## Project Development
This project is designed to measure your perspective on events, your
technical knowledge, and the solutions you bring to problems. Please advance the
development process accordingly.


#### CRUD blades screenshots

<img src="https://github.com/MogahidGaffar/Laravel-backend-developer-challenge/blob/main/public/img/crud_screenshoots.png" />


#### GetAll appointments Endpoint 

<img src="https://github.com/MogahidGaffar/Laravel-backend-developer-challenge/blob/main/public/img/1.PNG" />

#### GetOne appointment Endpoint 

<img src="https://github.com/MogahidGaffar/Laravel-backend-developer-challenge/blob/main/public/img/2.PNG" />


#### create new  appointment Endpoint 

<img src="https://github.com/MogahidGaffar/Laravel-backend-developer-challenge/blob/main/public/img/3.PNG" />


#### Update appointment Endpoint 

<img src="https://github.com/MogahidGaffar/Laravel-backend-developer-challenge/blob/main/public/img/4.PNG" />


#### Delete appointments Endpoint 

<img src="https://github.com/MogahidGaffar/Laravel-backend-developer-challenge/blob/main/public/img/5.PNG" />


#### Jwt auth register Endpoint 

<img src="https://github.com/MogahidGaffar/Laravel-backend-developer-challenge/blob/main/public/img/6.PNG" />


#### Jwt auth login Endpoint 

<img src="https://github.com/MogahidGaffar/Laravel-backend-developer-challenge/blob/main/public/img/7.PNG" />



##  Built With

* Laravel
* Bootstrap
* Baldes
* Mysql DB


<!-- GETTING STARTED -->
## Installation

Below is how you can instruct your audience on installing and setting up your app

 1. Clone the repo
   ```sh
gh repo clone MogahidGaffar/Laravel-backend-developer-challenge
   ```
2. Install NPM packages
   ```sh
   npm install
   ```
3. composer update
   ```sh
   composer update
   ```

3. Database Migrattion
   ```sh
   php artisan migrate
   ```
 
3. Server establish
   ```sh
   php artisan serve
   ```


## Contact

Mogahid Gaffar -  mogahidgaffar@gmail.com


