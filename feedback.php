<?php include 'header.php'; ?>
<br><br><br>
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <?php if(isset($msg)) { ?>
                <div class="alert alert-success" style="font-size:20px;text-align:center;color:blue;">
                    <?php echo $msg; ?>    
                </div> 
            <?php } ?>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8" style="background-image:url('./img/background.png');border-radius:2%;">
           
             <form method="POST" action="feedback_send.php">
                    <br>
                    <div class="form-row">
                        <div class="form-group col-md-10">
                          <label for="inputEmail4">Name (optional)</label>
                          <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <div class="form-row">
                            <div class="col-md-10">
                            <label for="Branch">Select Your Branch</label>
                            <select class="form-control" name="branch" id="Branch">
                              <option>SELECT YOUR BRANCH</option>
                              <option>CE</option>
                              <option>IT</option>
                              <option>EC</option>
                              <option>MH</option>
                              <option>CH</option>
                              <option>CIVIL</option>
                              <option>IC</option>
                              <option>OTHER</option>
                            </select>
                            </div>
                            <div class="col-md-10">
                            <label for="Branch">Select Your Year</label>
                            
                            <select class="form-control" name="year" id="year">
                              <option>SELECT YOUR YEAR</option>
                              <option>1st Year</option>
                              <option>2nd Year</option>
                              <option>3rd Year</option>
                              <option>4th  Year</option>
                              <option>OTHER</option>
                            </select>
                                </div>
                            </div>
                      
                        </div>
                        <div class="col-md-10">
                        <label for="email">Email</label>
                        <input type="mail" name="email" class="form-control" id="email" placeholder="E-mail">
                      </div>
                      <div class="form-group col-md-10">
                        <label for="description">Feedback</label><br>
                          <textarea id="description" name="description" placeholder="Enter Your Feedback" rows="4" cols="70"></textarea>
                         </div>
                        <div class="form-group col-md-10">
                        <label for="special_comment">Special Comment</label>
                         <textarea id="special_comment" name="special_comment" placeholder="Enter Your comment" rows="4" cols="70"></textarea> <br>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                 
                 
                 </div> 
                      
                    </form>
            
        </div>    
    </div>
</div>



