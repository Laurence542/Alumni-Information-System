<?php 
include 'admin/db_connect.php'; 
?>
<style>
#portfolio .img-fluid{
    width: calc(100%);
    height: 30vh;
    z-index: -1;
    position: relative;
    padding: 1em;
}
.vacancy-list{
cursor: pointer;
}
span.hightlight{
    background: yellow;
}
</style>
        <header class="masthead">
            <div class="container-fluid h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end mb-4 page-title">
                    	
                    <div class="col-md-12 mb-2 text-left">
                        <div class="card">
                            <div class="card-body">
                                  <h4 class="text-center">Find Vacancies</h4>
                               <div class="form-group">
                                   <div class="input-group">
                                       <input type="text" class="form-control" id="filter">
                                       <div class="input-group-append">
                                           <span class="input-group-text"><i class="fa fa-search"></i></span>
                                       </div>
                                   </div>
                               </div>
                            </div>
                        </div>
                    </div>                        
                    </div>
                    
                </div>
            </div>
        </header>


        <style>

/*** Category ***/
.cat-item {
    display: block;
    box-shadow: 0 0 45px rgba(0, 0, 0, .08);
    border: 1px solid transparent;
    transition: .5s;
}
     </style>

        <!-- Category Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Most popular posted jobs</h1>
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                       <div class="cat-item rounded p-4">
                            <i class="fa fa-3x fa-mail-bulk text-primary mb-4"></i>
                            <h6 class="mb-3">Marketing</h6>
                         
                        </div> 
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="cat-item rounded p-4">
                            <i class="fa fa-3x fa-mail-bulk text-primary mb-4"></i>
                            <h6 class="mb-3">Customer service</h6>

                        </div> 
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="cat-item rounded p-4">
                            <i class="fa fa-3x fa-mail-bulk text-primary mb-4"></i>
                            <h6 class="mb-3">Human resource</h6>
                    
                        </div> 
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="cat-item rounded p-4">
                            <i class="fa fa-3x fa-mail-bulk text-primary mb-4"></i>
                            <h6 class="mb-3">Project management</h6>
                   
                        </div> 
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="cat-item rounded p-4">
                            <i class="fa fa-3x fa-mail-bulk text-primary mb-4"></i>
                            <h6 class="mb-3">Buisness development</h6>
                    
                        </div> 
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="cat-item rounded p-4">
                            <i class="fa fa-3x fa-mail-bulk text-primary mb-4"></i>
                            <h6 class="mb-3">Web development</h6>
                    
                        </div> 
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="cat-item rounded p-4">
                            <i class="fa fa-3x fa-mail-bulk text-primary mb-4"></i>
                            <h6 class="mb-3">Cyber security</h6>
                      
                        </div> 
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="cat-item rounded p-4">
                            <i class="fa fa-3x fa-mail-bulk text-primary mb-4"></i>
                            <h6 class="mb-3">Design and cretivity</h6>
         
                        </div> 
                    </div>
                </div>
            </div>
        </div>
        <!-- Category End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="row g-0 about-bg rounded overflow-hidden">
                            <div class="col-6 text-start">
                                <img class="img-fluid w-100" src="images/about-1.jpg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid" src="images/about-2.jpg" style="width: 85%; margin-top: 15%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid" src="images/about-3.jpg" style="width: 85%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid w-100" src="images/about-4.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <h1 class="mb-4">We Help To Get The Best Job And Find A Talent</h1>
                        <p class="mb-4">Alumni Information System! We are dedicated to helping job seekers find their dream jobs and helping employers find the best candidates for their open positions.</p>
                        <p><i class="fa fa-check text-primary me-3"></i>For job seekers, we offer a user-friendly platform with thousands of job postings from top companies in various industries.</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Our job portal website values transparency, accuracy, and efficiency in job postings and applications.</p>
                        <p><i class="fa fa-check text-primary me-3"></i>We are committed to providing the highest level of service to both job seekers and employers.</p>
                        <a class="btn btn-primary py-3 px-5 mt-3" href="index.php?page=about">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->





        <section id="list">
            <div class="container mt-3 pt-2">
                <br>
                <h3 class="text-center">Job Listing</h3>
                <hr class="divider">
                <?php
                $vacancy = $conn->query("SELECT * FROM vacancy order by date(date_created) desc ");
                while($row = $vacancy->fetch_assoc()):
                    $trans = get_html_translation_table(HTML_ENTITIES,ENT_QUOTES);
                    unset($trans["\""], $trans["<"], $trans[">"], $trans["<h2"]);
                    $desc = strtr(html_entity_decode($row['description']),$trans);
                    $desc=str_replace(array("<li>","</li>"), array("",","), $desc);
                ?>
                <div class="card vacancy-list" data-id="<?php echo $row['id'] ?>">
                    <div class="card-body">
                        <h3><b class="filter-txt"><?php echo $row['position'] ?></b></h3>
                        <span><small>Needed: <?php echo $row['availability'] ?></small></span>
                        <hr>
                        <larger class="truncate filter-txt"><?php echo strip_tags($desc) ?></larger>
                        <br><br>
                        <!-- <hr class="divider"  style="max-width: calc(80%)"> -->
                        <button type="button" class="btn btn-primary" id='submit' onclick="$('#uni_modal form').submit()">Apply</button>

                    </div>
                </div>
                <br>
                <?php endwhile; ?>
            </div>
        </section>


<script>
    $('.card.vacancy-list').click(function(){
        location.href = "index.php?page=view_vacancy&id="+$(this).attr('data-id')
    })
    $('#filter').keyup(function(e){
        var filter = $(this).val()

        $('.card.vacancy-list .filter-txt').each(function(){
            var txto = $(this).html();
            txt = txto
            if((txt.toLowerCase()).includes((filter.toLowerCase())) == true){
                $(this).closest('.card').toggle(true)
            }else{
                $(this).closest('.card').toggle(false)
               
            }
        })
    })
</script>