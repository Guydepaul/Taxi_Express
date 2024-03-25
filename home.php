 <!-- Header-->
 <header class="bg-dark py-5" id="main-header">
    <div class="container h-100 d-flex align-items-center justify-content-center w-100">
        <div class="text-center text-white w-100">
            <h1 class="display-4 fw-bolder mx-5"><?php echo $_settings->info('name') ?></h1>
            <div class="col-auto mt-4">
                <!-- <a class="btn btn-warning btn-lg rounded-0" href="./?p=booking">Book Now</a> -->
            </div>
        </div>
    </div>
</header>
<!-- Section-->
<section class="py-5">
    <div class="container">
        <div class="card shadow card-outline card-purple rounded-0">
            <div class="card-body">
               <?php //include './welcome.html' ?>

                <!-- home section -->
<div style="background: #ffc61a;padding: 2rem 7%;width: 100%;padding-top: 1rem;border-radius: 10px;">
    <div style="padding-top: 1rem;display: flex;flex-wrap: wrap;justify-content: center;align-items: center;">
        <div style="flex: 1 1 10rem;padding: 1rem;">
            <h3 style="font-size: 31px;">Meilleur en ville</h3>
            <h2 style="font-size: 31px;">Service de taxi de confiance dans la ville</h2>
            <p style="color: black;font-size: 1rem;padding-bottom: 1rem;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum nihil deserunt odio repellendus dolorum suscipit excepturi placeat facilis dignissimos officiis aut nam, delectus possimus rerum consequatur similique! Deserunt, vitae. Officiis?</p>
            <a href="./?p=cab_available" style="padding: 1rem 1rem;color: black;font-size: 1rem;border: 1px solid black;border-radius: 10px;background-color: white;"><span style="font-size: 0.9rem">Réserver maintenant</span></a>
        </div>

    </div>
</div>
<!-- home section ended -->

<!-- our tariff -->

<div style="padding: 3rem 7%;">
    <h1 style="font-size: 38px;text-align: center;padding-bottom: 6rem;">Nos <span style="color: #ffc61a;">Tarrifs</span></h1>
    <div style="display: flex;flex-wrap: wrap;justify-content: center;gap: 15px;">
        <div style="flex: 1 1 250px;text-align: center;padding: 1rem 0;">
            <div class="inner-box" style="font-size: 1.5rem;padding: 1rem 1rem;">
                <img src="ex/images/image1.png" alt="" style="width: 60%;margin-top: -50px;">
                <h2 style="font-size: 30px;">5 Places</h2>
                <p style="font-size: 1rem;padding: 1.5rem;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat illum officia fugiat, autem facere iste repellendus omnis nemo dolore</p>
                <h3 style="color: #ffc61a;font-size: 1.7rem;">Prix: $5 /Course</h3>
            </div>
        </div>

        <div style="flex: 1 1 250px;text-align: center;padding: 1rem 0;">
            <div class="inner-box" style="font-size: 1.5rem;padding: 1rem 1rem;">
                <img src="ex/images/image1.png" alt="" style="width: 60%;margin-top: -50px;">
                <h2 class="heading-yellow" style="color: #ffc61a;font-size: 30px;">6 Places</h2>
                <p style="font-size: 1rem;padding: 1.5rem;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat illum officia fugiat, autem facere iste repellendus omnis nemo dolore</p>
                <h3 style="color: #ffc61a;font-size: 1.7rem; color: black !important;" class="yellw-section">Prix: $8 /Course</h3>
            </div>
        </div>
        

        <div style="flex: 1 1 250px;text-align: center;padding: 1rem 0;">
            <div style="font-size: 1.5rem;padding: 1rem 1rem;">
                <img src="ex/images/image1.png" alt="" style="width: 60%;margin-top: -50px;">
                <h2 style="font-size: 30px;">7 Places</h2>
                <p style="font-size: 1rem;padding: 1.5rem;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat illum officia fugiat, autem facere iste repellendus omnis nemo dolore</p>
                <h3 style="color: #ffc61a;font-size: 1.7rem;">Prix: $10 /Course</h3>
            </div>
        </div>
    </div>
</div>

<!-- our tariff ended -->
<h1 style="font-size: 38px;text-align: center;padding-bottom: 6rem;">clients <span style="color: #ffc61a;">heureux</span></h1>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators" style="left: 0; top: auto;batton: -70px">
            <li  data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li  data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row">
                    <div class="col-md-4">
                        <div class="single-box">
                            <div class="img-area" style="position: absolute;width: 100px;height: 100px;border: 5px solid #fff; overflow: hidden;top: 15px;left: 125px;border-radius: 50%;"><img src="ex/images/jhon.png" alt=""></div>
                            <div class="img-text" style="width: 100%;height: 30px;display: block;text-align: center;padding: 40% 5%;background:#262626;color: #fff;border-radius: 15px;">
                                <h2 style="font-size: 25px;text-transform: uppercase;letter-spacing: 2px;color: white">Person One</h2>
                                <p style=" font-size: 14px;color: white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, ipsa nihil molestias aliquid eum, culpa a fugit porro sed, dignissimos maiores quo voluptates totam aspernatur sapiente eligendi deserunt eveniet hic.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-box">
                            <div class="img-area" style="position: absolute;width: 100px;height: 100px;border: 5px solid #fff; overflow: hidden;top: 15px;left: 125px;border-radius: 50%;"><img src="ex/images/jhon.png" alt=""></div>
                            <div class="img-text" style="width: 100%;height: 30px;display: block;text-align: center;padding: 40% 5%;background:#262626;color: #fff;border-radius: 15px;">
                                <h2 style="font-size: 25px;text-transform: uppercase;letter-spacing: 2px;color: white">Person two</h2>
                                <p style=" font-size: 14px;color: white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, ipsa nihil molestias aliquid eum, culpa a fugit porro sed, dignissimos maiores quo voluptates totam aspernatur sapiente eligendi deserunt eveniet hic.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-box">
                            <div class="img-area" style="position: absolute;width: 100px;height: 100px;border: 5px solid #fff; overflow: hidden;top: 15px;left: 125px;border-radius: 50%;"><img src="ex/images/jhon.png" alt=""></div>
                            <div class="img-text" style="width: 100%;height: 30px;display: block;text-align: center;padding: 40% 5%;background:#262626;color: #fff;border-radius: 15px;">
                                <h2 style="font-size: 25px;text-transform: uppercase;letter-spacing: 2px;color: white">Person three</h2>
                                <p style=" font-size: 14px;color: white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, ipsa nihil molestias aliquid eum, culpa a fugit porro sed, dignissimos maiores quo voluptates totam aspernatur sapiente eligendi deserunt eveniet hic.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="row">
                    <div class="col-md-4">
                        <div class="single-box" style="position: relative; margin-batton: 30px">
                            <div class="img-area" style="position: absolute;width: 100px;height: 100px;border: 5px solid #fff; overflow: hidden;top: 15px;left: 125px;border-radius: 50%;"><img src="ex/images/jhon.png" alt=""></div>
                            <div class="img-text" style="width: 100%;height: 300px;display: block;text-align: center;padding: 40% 5%;background:#262626;color: #fff;border-radius: 15px;">
                                <h2 style="font-size: 25px;text-transform: uppercase;letter-spacing: 2px;color: white">Person 4</h2>
                                <p style=" font-size: 14px;color: white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, ipsa nihil molestias aliquid eum, culpa a fugit porro sed, dignissimos maiores quo voluptates totam aspernatur sapiente eligendi deserunt eveniet hic.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-box">
                            <div class="img-area" style="position: absolute;width: 100px;height: 100px;border: 5px solid #fff; overflow: hidden;top: 15px;left: 125px;border-radius: 50%;"><img src="ex/images/jhon.png" alt=""></div>
                            <div class="img-text" style="width: 100%;height: 30px;display: block;text-align: center;padding: 40% 5%;background:#262626;color: #fff;border-radius: 15px;">
                                <h2 style="font-size: 25px;text-transform: uppercase;letter-spacing: 2px;color: white">Person 5</h2>
                                <p style=" font-size: 14px;color: white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, ipsa nihil molestias aliquid eum, culpa a fugit porro sed, dignissimos maiores quo voluptates totam aspernatur sapiente eligendi deserunt eveniet hic.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-box">
                            <div class="img-area" style="position: absolute;width: 100px;height: 100px;border: 5px solid #fff; overflow: hidden;top: 15px;left: 125px;border-radius: 50%;"><img src="ex/images/jhon.png" alt=""></div>
                            <div class="img-text" style="width: 100%;height: 30px;display: block;text-align: center;padding: 40% 5%;background:#262626;color: #fff;border-radius: 15px;">
                                <h2 style="font-size: 25px;text-transform: uppercase;letter-spacing: 2px;color: white">Person 6</h2>
                                <p style=" font-size: 14px;color: white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, ipsa nihil molestias aliquid eum, culpa a fugit porro sed, dignissimos maiores quo voluptates totam aspernatur sapiente eligendi deserunt eveniet hic.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- fast booking -->
<!-- fast booking end -->



</section>
<script>
    $(function(){
        $('#search').on('input',function(){
            var _search = $(this).val().toLowerCase().trim()
            $('#service_list .item').each(function(){
                var _text = $(this).text().toLowerCase().trim()
                    _text = _text.replace(/\s+/g,' ')
                    console.log(_text)
                if((_text).includes(_search) == true){
                    $(this).toggle(true)
                }else{
                    $(this).toggle(false)
                }
            })
            if( $('#service_list .item:visible').length > 0){
                $('#noResult').hide('slow')
            }else{
                $('#noResult').show('slow')
            }
        })
        $('#service_list .item').hover(function(){
            $(this).find('.callout').addClass('shadow')
        })
        $('#service_list .view_service').click(function(){
            uni_modal("Service Details","view_service.php?id="+$(this).attr('data-id'),'mid-large')
        })
        $('#send_request').click(function(){
            uni_modal("Fill the Service Request Form","send_request.php",'large')
        })

    })
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