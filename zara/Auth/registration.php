<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<html>
  <head>
    <title>Register</title>
  <link rel="icon" href="../Images/Pre-Z.jpg" type="image/jpg">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="../css/style.css">
  </head>
</html>
<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="../Images/Pre-Z.jpg" alt=""/>
                        <h3>Welcome</h3>
                        <p>Get ready to get a new look!</p>
                        <input type="submit" name="" value="Explore"/><br/>
                    </div>
                    <div class="col-md-9 register-right">
                        <form method="post" action="../back-ends/registeration.inc.php">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">User</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                    <div class="form-group">
                            <label>Email:</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        
                        <div class="form-group">
                            <label>Last Name:</label>
                            <input type="text" name="lName" class="form-control" required>
                        </div>
                       
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" name="address" class="form-control" required>
                        </div>
                       
                        <div class="form-group">
                            <label>Telephone Number</label>
                            <input type="tel" name="tNumber" class="form-control" required>
                        </div>
                        <!-- <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div> -->
                        
                            
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                            <label>First Name:</label>
                            <input type="text" name="fName" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Send to:</label>
                            <input type="text" name="sendTo" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Drop off</label>
                            <input type="text" name="dropOff" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" name="confirm-password" class="form-control" required>
                        </div>
                                       
                        <button type="submit" class="btn btn-primary">Register</button>
                                    </div>
                                </div>
                            </div>
</form>   
                        </div>
                    </div>
                </div>

            </div>