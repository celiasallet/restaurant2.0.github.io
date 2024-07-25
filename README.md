# restaurant_2.0.github.io

#### I cloned my restaurant repo and created an environment with it to open phpMyAdmin and create a table with different values (text, int, varchar, etc.) as presented in my HTML.

## First Step: Linking the Form to MySQL Database Using PHP

![Markdown](https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExYTVoYjFiOGJsNDY5cHVoMTlqNDdqNjVjaW5hMzNoNWhjNzQxMTZuOSZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/l1Asw5PEDPSxZJoKQ/giphy.gif)
<br> About today : It looks like the connection issues between your PHP application and MySQL are persisting ... 

#### My PhP by the end of the day looks like this : 

<img src="./application/source/php.png" alt="Alt text" title="links" width="600px">

#### My Table Looked like this : 

<img src="./application/source/table.png" alt="Alt text" title="links" width="600px">

#### Now i'm gonna sleep on this : 

<img src="./application/source/error.png" alt="Alt text" title="links" width="600px">

Tho, I might have found the answer in this video. We'll see tomorrow ...

https://www.youtube.com/watch?v=2ygog4MHXws&ab_channel=NouvelleTechno

## After two days of struggle, my database is finally connected to my form ! Yihaa. 

#### This is my PHP request who's posting my data onto phpmyadmin, filling rightfully my table. 

<img src="./application/source/phpdone.png" alt="Alt text" title="links" width="600px">

<img src="./application/source/phpmy.png" alt="Alt text" title="links" width="600px">

#### Now I will create a function with JS: 

##### addEventlistenner, if the form is submited correctly then the client get sent to the success.html page.

<img src="./application/source/js.png" alt="Alt text" title="links" width="600px">

I had to add this line in my PHP file so it could display success.html and not my var_dump

<img src="./application/source/header.png" alt="Alt text" title="links" width="600px">

##### Now I need an HTML page with an interface that displays a list of data and provides the ability to delete a client. Fetch the data from MySQL, and if a client is deleted, also remove it from phpMyAdmin.

1) Retrieve the table from MySQL
2) Create backoffice.html
3) Display the entries in the table on backoffice.html
4) If delete, send the information to MySQL to remove the row in phpMyAdmin as well