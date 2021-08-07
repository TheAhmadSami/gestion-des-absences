<?php
  require_once("_config.php");

  $db->query("UPDATE owners SET pw=:pw WHERE owner_id='6f2486e26206cb01e591",[":pw"=>password_hash("Aa@123", PASSWORD_DEFAULT)]);

  //INSDERT TO RESERVATIONS ****************************************************************************
  // $ownerID = null;
  // $reservationID = mull;

  // for ($i=0; $i < 500000; $i++) {

  //   do {
  //     $reservationID = $generator->generateReservationID();
  //     $dbResult = $db->query('SELECT reservation_id FROM reservations WHERE reservation_id=:reservation_id', [':reservation_id'=>$reservationID]);
  //   } while($dbResult);

  //   $ownerID = $generator->generateOwnerID();
  //   $ownerName = $generator->generateFullNames();
  //   $locationID= $generator->generateLocationID();
  //   $userID = $generator->generateUserID();
  //   $userName = $generator->generateFullNames();
  //   $status = rand(0,4);
  //   $timestamp = $generator->generateTimeBetween("2020-05-01 00:00","2021-01-29 23:59");

  //   $db->query("INSERT INTO reservations VALUES (:reservation_id, :owner_id, :owner_name, :location_id, :user_id, :user_name, :timestamp, :status)", [":reservation_id"=>$reservationID, ":owner_id"=>$ownerID, ":owner_name"=>$ownerName, ":location_id"=>$locationID, ":user_id"=>$userID, ":user_name"=>$userName, ":timestamp"=>$timestamp, ":status"=>$status]);

  //   echo $i . " -- ";
  // }

  //INSDERT TO RESERVATIONS ****************************************************************************
  // $userID = null;
  // $email = null;

  // for ($i=0; $i < 100; $i++) {

  //   do {
  //     $userID = $generator->generateUserID();
  //     $dbResult = $db->query('SELECT user_id FROM users WHERE user_id=:user_id', [':user_id'=>$userID]);
  //   } while($dbResult);

  //   do {
  //     $email = $generator->generateEmails();
  //     $dbResult = $db->query('SELECT email FROM users WHERE email=:email', [':email'=>$email]);
  //   } while($dbResult);

    
  //   $pw = '$2y$10$LxvBZEIN9lQszerDk6FhTehm7YG8kiC5HtIGpl1ka9kx4RhYqls6K';
  //   $firstName = $generator->generateFirstNames();
  //   $surname = $generator->generateSurnames();
  //   $phone = $generator->generatePhones();
  //   $profilePicture = "owners-data/e055940f0ec55e94fd10/profile-picture/e055940f0ec55e94fd10_1.jpg";
  //   $bd = $generator->generateTimeBetween("1994-01-01 00:00","1996-01-01 23:59");
  //   $gender = "Male";
  //   $timestamp = $generator->generateTimeBetween("2020-09-01 00:00","2020-09-07 23:59");;
  //   $status = rand(0,4);

  //   $db->query("INSERT INTO users VALUES (:user_id, :email, :pw, :first_name, :surname, :phone, :profile_picture, :bd, :gender, :timestamp, :status)", [":user_id"=>$userID, ":email"=>$email, ":pw"=>$pw, ":first_name"=>$firstName, ":surname"=>$surname, ":phone"=>$phone, ":profile_picture"=>$profilePicture, ":bd"=>$bd, ":gender"=>$gender, ":timestamp"=>$timestamp, ":status"=>$status]);

  //   echo $i . " -- ";
  // }


  // INSDERT TO SUB CATEGRIES ****************************************************************************
  // $categoryID = null;
  // $subCategoryID = null;

  // for ($i=0; $i < 3000; $i++) {

  //   do {
  //     $subCategoryID = $generator->generateSubCategoryID();
  //     $dbResult = $db->query('SELECT sub_category_id FROM categories_sub WHERE sub_category_id=:sub_category_id', [':sub_category_id'=>$subCategoryID]);
  //   } while($dbResult);

  //   $categoryID = $generator->generateCategoryID();
  //   $name = $generator->generateFullNames();
  //   $arabic = $generator->generateUserID();
  //   $french = $generator->generateSurnames();
  //   $timestamp = $generator->generateTimeBetween("2020-01-01 00:00","2020-08-31 23:59");

  //   $db->query("INSERT INTO categories_sub VALUES (:sub_category_id, :category_id, :name, :arabic, :french, :image, :timestamp, :status)", [":sub_category_id"=>$subCategoryID, ":category_id"=>$categoryID, ":name"=>$name, ":arabic"=>$arabic, ":french"=>$french, ":image"=>"", ":timestamp"=>$timestamp, ":status"=>""]);

  //   echo $i . " -- ";
  // }


   // INSDERT TO CATEGRIES ****************************************************************************
  // $categoryID = null;

  // for ($i=0; $i < 3000; $i++) {

  //   do {
  //     $categoryID = $generator->generateCategoryID();
  //     $dbResult = $db->query('SELECT category_id FROM categories WHERE category_id=:category_id', [':category_id'=>$categoryID]);
  //   } while($dbResult);

  //   $name = $generator->generateFullNames();
  //   $arabic = $generator->generateFirstNames();
  //   $french = $generator->generateSurnames();
  //   $timestamp = $generator->generateTimeBetween("2020-01-01 00:00","2020-08-31 23:59");

  //   $db->query("INSERT INTO categories VALUES (:category_id, :name, :arabic, :french, :image, :timestamp, :status)", [":category_id"=>$categoryID, ":name"=>$name, ":arabic"=>$arabic, ":french"=>$french, ":image"=>"", ":timestamp"=>$timestamp, ":status"=>""]);

  //   echo $i . " -- ";
  // }



  
?>