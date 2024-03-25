 <!-- Header-->
 <!-- <header class="bg-dark py-5" id="main-header">
    <div class="container h-100 d-flex align-items-end justify-content-center w-100">
        <div class="text-center text-white w-100">
            <h1 class="display-4 fw-bolder mx-5">About Us</h1>
        </div>
    </div>
</header> -->
<section class="py-5">
    <div class="container">
        <div class="card rounded-0 card-outline card-purple shadow px-4 px-lg-5 mt-5">
            <div class="row">
            <div class="card-body">
    <div class="container" style="max-width: 1100px; width: 100%; background: #ffc61a; border-radius: 6px; padding: 10px 60px 10px 40px; box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);">
      <div class="content" style="display: flex; align-items: center; justify-content: space-between;">
        <div class="left-side" style="width: 35%;height: 100%;display: flex;flex-direction: column;align-items: center;justify-content: center;margin-top: 3px;position: relative; ">
          <div class="address details" style="margin: 14px;text-align: center;">
            <i class="fas fa-map-marker-alt" style="font-size: 30px;color: #3e2093;margin-bottom: 10px;"></i>
            <div class="topic" style="font-size: 23px;font-weight: 600;">Adresse</div>
            <div class="text-one" style="font-size: 14px;color: black;">GOMA, Commune de Goma</div>
            <div class="text-two" style="font-size: 14px;color: black;">Av. Kituku, Q. Kyeshero, Num 243</div>
          </div>
          <div class="phone details" style=" margin: 14px;text-align: center;">
            <i class="fas fa-phone-alt" style="font-size: 30px;color: #3e2093;margin-bottom: 10px;"></i>
            <div class="topic" style="font-size: 23px;font-weight: 600;">Phone</div>
            <div class="text-one" style="font-size: 14px;color: black;">+243 973 422 294</div>
            <div class="text-two" style="font-size: 14px;color: black;">+243 891 756 898</div>
          </div>
          <div class="email details" style=" margin: 14px;text-align: center;">
            <i class="fas fa-envelope" style="font-size: 30px;color: #3e2093;margin-bottom: 10px;"></i>
            <div class="topic" style="font-size: 23px;font-weight: 600;">Email</div>
            <div class="text-one" style="font-size: 14px;color: black;">info.taxiexpress@gmail.com</div>
            <div class="text-two" style="font-size: 14px;color: black;">guydepaulm@gmail.com</div>
          </div>
          <style>
            .left-side::before {
                    content: "";
                    position: absolute;
                    height: 70%;
                    width: 2px;
                    right: -15px;
                    top: 50%;
                    transform: translateY(-50%);
                    background: black;
                     }
          </style>
        </div>
        <div class="right-side" style="width: 55%;margin-left: 40px;">
          <div class="topic-text" style="font-size: 23px;font-weight: 600;color: black;">Envoie-nous un message</div>
          <p style="color: black">Veuillez nous contacter en cliquantt sur le bouton et notre équipe vous répondra dans les plus brefs délai.</p>
          <img src="uploads/images-1.png" alt="" style="width: 350px; height: 250px">
            <a href="mailto:guydepaulm@gmail.com" type="submit" style="text-decoration: none;display: inline-block;font-size:20px;font-weight: 700;background: #fff;color:rgb(57, 18, 83);padding: 10px 30px;border-radius: 30px;margin: 30px 0 10px;transition: all .5s ease;">Contactez-nous</a>
        </div>
      </div>
    </div>
            </div>
            </div>
        </div>
    </div>
</section>

<script>
    $(document).scroll(function() { 
        $('#topNavBar').removeClass('bg-purple navbar-light navbar-dark bg-gradient-purple text-light')
        if($(window).scrollTop() === 0) {
           $('#topNavBar').addClass('navbar-dark bg-purple text-light')
        }else{
           $('#topNavBar').addClass('navbar-dark bg-gradient-purple ')
        }
    });
    $(function(){
        $(document).trigger('scroll')
    })
</script>