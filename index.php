
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    
	<title>DBMS Laboratory Project</title>
<style>
  .button {
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {background-color: #4CAF50;}
</style>
</head>
<body>
	<?php
include("include/header.php");

?>



<section class="text-gray-600 body-font">
        <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
          <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Inter College Sports Tournament Management Application
            </h1>
            <p class="mb-8 leading-relaxed">As a part of our project for the course, Database Management System Lab, we have built an application for the job of coordinating and managing an inter college sports fest.</p>
            <p class="mb-8 leading-relaxed">This project is implemented by using HTML, CSS and JavaScript for the front end part and PHP for the backend part. XAMPP or WAMPP has to be installed in order to run the file.</p>
            <div class="flex justify-center">
              <a href="features.html">  
              <button class="button button1">Checkout the Features</button>
              </a>  
            </div>
          </div>
          <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
            <img class="object-cover object-center rounded" alt="hero" src="https://fiverr-res.cloudinary.com/images/q_auto,f_auto/gigs/105221985/original/7604ceba287ac49f87af1c9b7eb9f6e45670b07a/help-you-to-organize-your-sports-tournaments.jpg">
          </div>
        </div>
      </section>

</body>
</html>