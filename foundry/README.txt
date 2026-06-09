FOUNDRY - Co-founder matching platform (ESADE web project)
===========================================================

What this is
------------
A small dynamic web app built ONLY with the course tools: HTML, CSS, JavaScript,
PHP and MySQL. It follows the same structure as the Task Manager reference app
(S6-S8), so it runs on the same MAMP (local) and Plesk (server) setup.

It implements the two MANDATORY functionalities of the assignment:
  1. User registration & login   -> new_user.html / user_reg.php / login.html / verify.php
  2. Product/Service catalog list -> members.php  (the Founder Directory)

Plus static pages for the business idea: index.html, how_it_works.html, events.html.

Files
-----
  db.php            Database connection + session (the ONLY file to edit per server)
  foundry.sql       Database dump to import in phpMyAdmin
  style.css         Shared styling
  index.html        Homepage (business idea)
  how_it_works.html How it works + FAQ
  events.html       Events list
  new_user.html     Apply / registration form (with JavaScript validation)
  user_reg.php      Inserts the new founder (or says the username is taken)
  login.html        Login form
  verify.php        Checks the login credentials
  members.php       Founder Directory (the catalog list) - login required
  logout.php        Logs the user out
  error_login.html / user_exist.html / query_error.html   Information pages

Run locally with MAMP
---------------------
  1. Start MAMP (Start Servers).
  2. Copy the whole "foundry" folder into MAMP's htdocs folder.
  3. Open phpMyAdmin: http://localhost/phpMyAdmin/?lang=en
  4. Create a database named  foundry  (or just use the Import tab - the SQL
     file creates the database itself).
  5. Import tab -> choose foundry.sql -> Go.
  6. db.php already uses 'root' / 'root', which is the MAMP default.
  7. Open the app:  http://localhost/foundry/index.html

Deploy to Plesk (same 7 steps as the course guide)
---------------------------------------------------
  1. Log in to Plesk.
  2. Databases -> Add Database -> name it  foundry .
  3. Add a database user (note the username and password).
  4. phpMyAdmin -> Import tab -> upload foundry.sql.
  5. Edit db.php: replace 'root' / 'root' with your DB username / password.
  6. File Manager -> httpdocs -> new directory  foundry  -> upload all files.
  7. Open  http://your-domain/foundry/index.html

Test login (sample account from foundry.sql)
---------------------------------------------
  username: marta    password: marta@123
  admin:    admin    password: admin@123

Note (kept simple on purpose)
-----------------------------
Like the course material, passwords are stored as plain text and queries insert
the form values directly. That matches what was taught. In a real product you
would hash passwords and use prepared statements - not required for this project.
