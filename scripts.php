<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>
    <script>
      //an pentru subsol
      $("#year").text(new Date().getFullYear());
      //initializare scrolling
      $("body").scrollspy({ target:'#main-nav' });
      //modificare scrolling
      $("#main-nav a").on('click',function(event){
      if(this.hash !== "")
      {
        event.preventDefault();
        const hash=this.hash;
        $("html,body").animate({
        scrollTop:$(hash).offset().top
        },800,function() {
          window.location.hash=hash;
        });
      }
      });
    </script>