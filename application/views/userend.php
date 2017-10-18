<html>

<head>
<title>Panel CodeIgniter</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="<?php echo base_url("css/style.css"); ?>">
</head>
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<body>
<div class="container">
   <div class="row">
    <div class="col-md-12">
      <div class="panel panel-login">
        <div class="panel-body">
          <div class="row">
            <div class="col-lg-12">
             
              <div class="col-lg-6">
              <form id="register-form" action="<?php echo base_url('welcome/register'); ?>" method="post" role="form">
                <h2>REGISTER</h2>
                <div class="alert-danger" style="padding-left:5px;"><?php echo validation_errors(); ?></div>
<div class="alert-success" style="padding-left:5px;"><?php if ($this->session->flashdata('success') != ''): 
    echo $this->session->flashdata('success'); 
endif; ?> </div>
                  <div class="form-group">
                    <input type="text" name="name" id="name" class="form-control" placeholder="Name" value="<?php echo set_value('name'); ?>" required>
                  </div>
                  <div class="form-group">
                    <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="<?php echo set_value('email'); ?>" required>
                  </div>
                  <div class="form-group">
                    <input type="text" name="mobile" id="mobile" tabindex="1" class="form-control" placeholder="Mobile Number" value="<?php echo set_value('mobile'); ?>" required>
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" required>
                  </div>
                  <div class="form-group">
                    <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password" required>
                  </div>
                  <div class="form-group">
                    <input type="text" name="address" id="address" tabindex="2" class="form-control" placeholder="Address" value="<?php echo set_value('address'); ?>" required>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
                      </div>
                    </div>
                  </div>
              </form>
            </div>
               <div class="col-lg-6">
              <form id="login-form" action="<?php echo base_url('welcome/login'); ?>" method="post" role="form" style="display: block;">
                <h1 class="log">Test Demo</h1>
                <h2>LOGIN</h2>
                <div class="alert-danger" style="padding-left:5px;"><?php if ($this->session->flashdata('error') != ''): 
    echo $this->session->flashdata('error'); 
endif; ?> </div>
                  <div class="form-group">
                    <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="" required>
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" required>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">  
                        <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                  </div></div></div>
              </form>
              </div>
            </div>
          </div>
        </div>
        <div class="panel-heading">
          <div class="row">
            <div class="col-xs-6 tabs login"></div>
            <div class="col-xs-6 tabs register"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>

