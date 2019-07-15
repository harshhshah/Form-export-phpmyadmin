<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <link rel="stylesheet" href="styles.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
    </head>
<body>
    <nav class="navbar" style="background-color:#fb9013 ; height:"300px">
    <a class="navbar-brand" href="#">Brand Logo</a>
   </nav>
   <div class="h">
        <div class="card-form">
                <form class="signup" method="POST" action="inserted.php">
                  <div class="form-title">Blood Donation</div>
                  <div class="form-body">
                    <div class="row">
                      <input type="text" placeholder="Name*" name="cname">
                    </div>
                    <div class="row">
                    <input type="text" placeholder="Phone No.*" name="phone">
                        </div>
                    <div class="row">
                      <input type="text" placeholder="Location*" name="location">
                    </div>
                    <div class="row">
                      <input type="text" placeholder="Pincode *" name="pincode">
                    </div>
                    <div class="row">
                          <label style="color: grey">Blood Group</label>
                          </div>
                    <div class="row"> 
                        <select name="blood" >
                            <option>A+</option>
                            <option>A-</option>
                            <option>B+</option>
                            <option>B-</option>
                            <option>AB+</option>
                            <option>AB-</option>
                            <option>O+</option>
                            <option>O-</option>
                        </select> 
                        </div>      
                  </div>
                  <div style="text-align: center">
                  <button type="reset" class="btn btn-danger" >Reset</button>
                  &nbsp;&nbsp;<button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
            </div>
  </body>
  </html>