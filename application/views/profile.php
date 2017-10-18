<html>
<head>
<title>User Profile</title>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="<?php echo base_url("css/style.css"); ?>">
<body style="padding-top:40px">
<div class="container">
  <div class="row">
    <div class="col-lg-12 col-sm-12">

            <div class="card hovercard">
                <div class="cardheader">

                </div>
                 <div class="col-lg-3 col-sm-3"></div>
     <div class="col-lg-6 col-sm-6">
                <div class="avatar">
                    <img alt="" src="<?php echo base_url("images/default_profile.jpg"); ?>">
                </div>
                <div class="info">
                    <div class="title"> 
                        <a target="_blank" href=""><?php echo $name; ?></a>
                    </div>
                    <div class="desc">Email : <?php echo $email; ?></div>
                    <div class="desc">Contact No : <?php echo $mobile; ?></div>
                    <div class="desc">Address : <?php echo $address; ?></div>
                </div>
                </div>
     <div class="col-lg-3 col-sm-3" style="padding-top: 28px;"><a href="<?php echo base_url('welcome/logout'); ?>" style="color:#fff;font-weight:900">Logout</a></div>
            </div>

        </div>
</div>

  </div>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html12