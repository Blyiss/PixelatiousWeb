<?php
require('include/header.php');
?>

<div class="container text-center">
<h1>PHP Login Script (PHP, MySQL, Bootstrap, jQuery, Ajax and JSON) Demo</h1>
<p>More tutorials <a href="http://www.w3schools.in/">www.w3schools.in</a></p>
</div> <!-- /container -->





<!-- Login Form -->
<div class="container">
<!-- HTML Form -->
      <form action="submit.php" method="post" name="login_form" id="login_form" autocomplete="off">
        <h2 class="form-signin-heading">Login</h2>

        <label for="Email" class="sr-only">Email address</label>
        <input type="email" name="Email" id="Email" class="form-control" placeholder="Email address" required autofocus>

        <label for="Password" class="sr-only">Password</label>
        <input type="password" name="Password" id="Password" class="form-control" placeholder="Password" required pattern=".{6,12}" title="6 to 12 characters.">

        <div id="display_error" class="alert alert-danger fade in"></div><!-- Display Error Container -->

        <button type="submit" class="btn btn-lg btn-primary btn-block">Login</button>
        <button type="button" class="btn btn-lg btn-info btn-block" data-toggle="modal" data-target="#registration_modal">Create an account</button>
      </form>
<!-- /HTML Form -->




<!-- Registration Form -->
  <div class="modal fade" role="dialog" id="registration_modal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- HTML Form -->
        <form action="submit.php" method="post" name="registration_form" id="registration_form" autocomplete="off">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Registration form</h4>
        </div>
        <!-- Modal Body -->
        <div class="modal-body">
            <div class="form-group">
                <label for="Name">Full name</label>
                <input type="text" name="Name" id="Name" class="form-control" required pattern=".{2,100}" title="min 2 characters." autofocus>
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" name="Email" id="Email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="Password">New password</label>
                <input type="password" name="Password" id="Password" class="form-control" required pattern=".{6,12}" title="6 to 12 characters.">
            </div>
                <div id="display_error" class="alert alert-danger fade in"></div><!-- Display Error Container -->
        </div>

        <!-- Modal Footer -->
        <div class="modal-footer">
        <input type="submit" class="btn btn-lg btn-success" value="Submit" id="submit">
          <button type="button" class="btn  btn-lg  btn-default" data-dismiss="modal">Cancel</button>
        </div>
        </form>

      </div>
    </div>
  </div>


<p>Sometimes you may required to protect your web page with user authentication by using the database, and this tutorial can help you to do it.
This tutorial demonstrates user registration and login process by using PHP and MySQL.</p>

<h3>Features</h3>
<ul>
<li>Complete user registration and login management system.</li>
<li>User registration data store in MySQL database.</li>
<li>Login by using PHP script and MySQL database and only after authentication user can access to protected page.</li>
<li>Login by using PHP script and MySQL database and only after authentication user can access to protected page.</li>
<li>Foreign key relationships between MySQL tables.</li>
<li>User can Logout after Login.</li>
<li>PHP session is used to keep user login status until logout is clicked.</li>
<li>Secured code to prevent SQL injection attacks.</li>
<li>Data transmission by using JSON.</li>
<li>Bootstrap has been used to improve the user interface.</li>
<li>jQuery Ajax is used to submit forms without refreshing the page.</li>
</ul>


<h3>Database Structure</h3>
Two tables is created in database to manage user and user profile data separately.

<h4>tbl_users</h4>
<h4>tbl_user_profile</h4>
<h4>Schema</h4>
<ul>
<li>Foreign key relationships exist in between this two tables.</li>
<li>User profile data will get deleted automatically if data deleted from users table.</li>
</ul>


<h3>Program Structure</h3>
<h4>PHP</h4>
<ul>
<li>/index.php - This page can only open after authentication, otherwise user will be redirects to main.php page.</li>
<li>/main.php - This page only contains HTML login and registration forms.</li>
<li>/submit.php - PHP codes for Login and registration exist in this page, submitted by main.php page.</li>
<li>/logout.php - This page is destroying the session started by submit.php page.</li>
<li>/inc/config.php - This page is included in all php pages and used to start session and connect with MySQL database.</li>
<li>/inc/functions.php - This page has contains custom PHP functions used in program.</li>
<li>/include/header.php - This page has contains html.</li>
<li>/include/footer.php - This page has contains html.</li>
</ul>
<h4>JS</h4>
<ul>
<li>/js/app.js - This page has contains custom JavaScript which is used to submit Login and Registration forms.</li>
<li>/js/jquery.min.js - jQuery Plugin.</li>
<li>/js/bootstrap.min.js - Bootstrap Plugin.</li>
</ul>
<h4>CSS</h4>
<ul>
<li>/css/style.js - This page has contains custom CSS.</li>
<li>/css/bootstrap.min.css - Bootstrap Plugin.</li>
</ul>

</div>
<!-- /container -->

<?php require('include/footer.php');?>