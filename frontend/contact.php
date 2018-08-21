 <?php include_once('inc/header.php');?>
 <?php include_once('inc/nav.php');?>
 
   <div class="container-fluid team-banner p-0" style=" background: url(contents/website/images/team-banner.jpg) no-repeat center;">
        <div class="team-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 team-head" >
                        <h2 class="text-center">Contact Us</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
     <div class="container"> 
     <div class="row"> 
        <div class="contact-form col-lg-8 col-md-offset-2"> 
          <form>
              <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              
              
              <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" class="form-control" id="phone" placeholder="Enter Phone">
              </div>
              
               <div class="form-group">
                  <label for="phone">Message</label>
                <textarea class="form-control" name="" placeholder="Enter Message"></textarea>
              </div>
              
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
     </div>
     </div>
 <?php include_once('inc/footer.php');?>
 <style>
 	    .team-banner{
        background-size: cover;
        margin-bottom: 80px;
        padding-left: 0;
        padding-right: 0;
    }
    .team-banner .team-overlay{
        background: rgba(0, 0, 0,0.7);
        padding: 80px 0;
    }
    .team-banner .team-overlay h2{
        color: #fff;
        font-size: 45px;
        font-weight: bold
    }
     .contact-form {
         padding-bottom: 30px
     }  
     .contact-form textarea{
        height:150px;
        resize:none
     }

</style>
 