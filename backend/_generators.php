<?php

  class Generators{

    /* IDs ***************************************************************************************** */
    

    public function generateID(){
      $num1 = rand(100000,999999);
      $num2 = rand(100000,999999);
      $num3 = rand(100,999);
      return $num1.$num2.$num3;
    }


    public function generateToken(){
      $cstrong = true;
      return bin2hex(openssl_random_pseudo_bytes(64, $cstrong));
    }

    public function generateConfirmationToken(){
      $cstrong = true;
      return bin2hex(openssl_random_pseudo_bytes(128, $cstrong));
    }



    /* TIMES ************************************************************************************* */
    public function generateTimeBetween($startTime, $endTime){
      $start = strtotime($startTime);
      $end =  strtotime($endTime);
      return date("Y-m-d H:i", rand($start, $end));
    }
    



    /* STRINGS ************************************************************************************* */
    public function generateFirstNames(){
      $firstNames = ["Ahmad", "Osama", "Mohammed", "Alex", "Maya", "Dina", "Soha", "Yara", "Yasmine", "Sarah", "Somiah", "Khaled", "Saber", "Magdy", "Wael", "Mousa", "Mosatafa", "Hagar", "Mona", "Nahed"];
      return $firstNames[rand(0,19)];
    }

    public function generateSurnames(){
      $surnames = ["Sami", "Al-Sayed", "Abd Alraouf", "Bahgat", "Ibrahim", "Abd Allah", "Marten", "White", "Foad", "Moaz", "Moamen", "Ramy", "Ayman", "Kamel", "Metwally", "Saaeed", "Hasan", "Gaber", "Seif", "Abdulhamed"];
      return $surnames[rand(0,19)];
    }

    public function generateFullNames(){
      $firstNames = ["Ahmad", "Osama", "Mohammed", "Alex", "Maya", "Dina", "Soha", "Yara", "Yasmine", "Sarah", "Somiah", "Khaled", "Saber", "Magdy", "Wael", "Mousa", "Mosatafa", "Hagar", "Mona", "Nahed"];
      $surnames = ["Sami", "Al-Sayed", "Abd Alraouf", "Bahgat", "Ibrahim", "Abd Allah", "Marten", "White", "Foad", "Moaz", "Moamen", "Ramy", "Ayman", "Kamel", "Metwally", "Saaeed", "Hasan", "Gaber", "Seif", "Abdulhamed"];
      $fullName = $firstNames[rand(0,19)] . " " . $surnames[rand(0,19)];
      return $fullName;
    }

    public function generateEmails(){
      $firstNames = ["ahmad", "osama", "mohammed", "alex", "maya", "dina", "soha", "yara", "yasmine", "sarah", "somiah", "khaled", "saber", "magdy", "wael", "mousa", "mosatafa", "hagar", "mona", "nahed"];
      $surnames = ["sami", "alsayed", "abdalraouf", "bahgat", "ibrahim", "abdallah", "marten", "white", "foad", "moaz", "moamen", "ramy", "ayman", "kamel", "metwally", "saaeed", "hasan", "gaber", "seif", "abdulhamed"];
      $emails = ["@gmail.com", "@hotmail.com", "@yahoo.com"];
      $email = $firstNames[rand(0,19)] . $surnames[rand(0,19)] . $emails[rand(0,2)];
      return $email;
    }

    public function generatePhones(){
      $init = ["011", "012", "010"];
      $phone = $init[rand(0,2)] . rand(11111111,99999999);
      return $phone;
    }

  }

?>