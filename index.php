<?php require("header.php") ?>

        <div class="hero-area home">

            <div class="row row-center">

                <div class="span-12 span-l-9 columns">

                        <p class="hero-title">
                            <span>We</span>
                            <span class="love">love</span>
                            <span class="creative">creative</span>
                        </p>

                        <div class="one-call-wrapper">

                            <a class="radius" href="./contact.html">
                                Keep in touch
                            </a>

                        </div>
                    
                </div>

            </div>

        </div>

        <div class="page-main">

            <section class="section page-portfolio">

                <h3 class="page-title home">Work</h3>

                <div class="row">
                    
                <?php foreach($config['home']['work_lists'] as $val): ?>
                    <div class="span-6 span-l-4 columns portfolio-list scroll-list" <?php echo $val['data']?> >
                        
                        <div>
                            <img src="<?php echo $val['img']?>" alt="<?php echo $val['alt']?>">
                        </div>

                        <div class="portfolio-info">
                            <div class="portfolio-info-inner">
                                <h5><?php echo $val['title']?></h5>
                                <a class="radius" href="<?php echo $val['url']?>">Learn More</a>                                
                            </div>
                        </div>

                    </div>
                <?php endforeach ?>

                </div>
                
            </section>

            <section class="section page-service">

                <h3 class="page-title home">Love</h3>

                <div class="row">

                <?php foreach($config['home']['service_lists'] as $val): ?>
                    
                    <div class="span-6 span-l-3 columns service-list scroll-list" <?php echo $val['data']?> >
                            
                        <img src="<?php echo $val['img']?>" alt="<?php echo $val['alt']?>">

                        <h4 class="service-list-title"><?php echo $val['title']?></h4>

                        <a href="<?php echo $val['url']?>" class="radius">Learn More</a>

                    </div>

                <?php endforeach ?>

                </div>
                
            </section>

            <section class="section page-clients">
                
                <h3 class="page-title home">Together</h3>

                <div class="row row-center scroll-list" data-animation="fade-in-down">

                    <div class="span-12 span-l-8 columns">
                        <p class="client-comment">“Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eu est nec ligula ultrices ultrices. Proin lorem tellus, consectetur et sagittis eu, condimentum.”</p>

                        <img class="client-logo" src="dist/img/client-logo.png" alt="Client logo image">
                    </div>

                </div>

            </section>

        </div>

<?php require("footer.php") ?>