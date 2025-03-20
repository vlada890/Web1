<section id="contact" class="py-5 bg-light">
   <div class="container">
     <div class="row">
       <div class="col-lg-9">
         <h3>Get In Touch</h3>
         <p class="lead">sdflsdkfjlsknf</p>
         <?php
         if(isset($_GET['success'])):
         ?>
         <p class="text-danger">mesaj trimis cu succes</p>
         <?php endif;?>
         <form action="config/prelucrare.php" method="post">
         <div class="input-group input-group-lg mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-user"></i></span>
          </div>
          <input type="text" name="nume" class="form-control" placeholder="Name">
         </div>


         <div class="input-group input-group-lg mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
          </div>
          <input type="email" name="email" class="form-control" placeholder="Email">
         </div>

         <div class="input-group input-group-lg mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
          </div>
         <textarea class="form-control" name="mesaj" placeholder="Message" rows="5"></textarea>
         </div>
         <input type="submit" value="Submit" class="btn btn-primary btn-block btn-lg">
         </form>
       </div>
       <div class="col-lg-3 align-self-center">
         <img src="img/mlogo.png" class="img-fluid">
       </div>
     </div>
   </div>
 </section>