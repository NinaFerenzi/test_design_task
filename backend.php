<?php
   $request = $_POST;
   $template = array(
            'admin' => 0,
            'disabled' => 0,
            'activated' => 0
         );
   $new_user = $request + $template;

   $query = sprintf("INSERT INTO 'user' 
    (email, password, name, phone, country, domain, admin, disabled, activated, registration_date)
      VALUES
         ('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', now())",
           $new_user["email"],
           $new_user["password"],
           $new_user["name"],
           $new_user["phone"],
           $new_user["country"],
           $new_user["domain"],
           $new_user["admin"],
           $new_user["disabled"],
           $new_user["activated"]
   );   
   
   mysql_query($query);
?>
