<?php require("header.php") ?>

        <div class="hero-area about">

            <div class="row row-center">

                <h3 class="hero-title"><?php echo $config['about']['hero']['title'];?></h3>

                <div class="row row-center">

                    <div class="span-8 columns">
                        
                        <p class="hero-desc">
                            <?php echo $config['about']['hero']['desc'];?>
                        </p>

                        <!-- <img src="img/keyboard.png" alt=""> -->

                        <a class="radius about-hero-radius" href="./portfolio.php">View Work</a>

                        <i class="fa fa-angle-double-down fa-3x scroll_down-icon scroll_down" data-scroll_to=".page-creaters"></i>

                    </div>

                </div>

                <div class="about-triangle"></div>

            </div>

        </div>

        <main class="page-main">

            <section class="section page-creaters">

                <h3 class="page-title bb">The Creaters</h3>

                <div class="row">

                <?php foreach($config['about']['creaters'] as $val): ?>
                    
                    <div class="span-6 columns creater-list scroll-list" <?php echo $val['data']?>>
                        
                        <div>
                            <img src="<?php echo $val['img']?>" alt="<?php echo $val['alt']?>">
                        </div>

                        <div class="creater-info">
                            
                            <a href="#<?php echo $val['id']?>" class="fbox">

                                <div class="creater-info-inner">
                                    
                                    <h5><?php echo $val['name']?></h5>
                                    
                                    <p class="info-subtitle"><?php echo $val['position']?></p>

                                    <i class="fa fa-plus fa-3x icon"></i>    
                                    
                                    <div id="<?php echo $val['id']?>" style="display:none;" class="creater-info-detail modal">

                                        <div class="row">
                                        
                                            <div class="span-8 span-m-8 span-l-6 columns">
                                                <img src="<?php echo $val['img_detail']?>" alt="<?php echo $val['img_detail_alt']?>">
                                            </div>
                                            <div class="span-12 span-m-12 span-l-6 columns">

                                                <h4 class="creater-info-heading"><?php echo $val['name']?></h4>
                                                <p class="info-detail-subtitle"><?php echo $val['position']?></p>

                                                <p class="info-detail-desc"><?php echo $val['desc']?></p>

                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </a>
                        </div>

                    </div>
                <?php endforeach; ?>

                </div>
                
            </section>

            <section class="section page-awards">

                <h3 class="page-title bb">The Awards</h3>

                <div class="row">
                    

                <?php foreach($config['about']['awards'] as $val): ?>

                    <div class="span-3 columns scroll-list" <?php echo $val['data']?> >
                        
                        <div>
                            <img src="<?php echo $val['img']?>" alt="<?php echo $val['alt']?>">
                        </div>

                    </div>
                <?php endforeach; ?>
                                    
                </div>

            </section>

            <section class="section page-snap">

                <h3 class="page-title bb">The Snaps</h3>

                <div class="row">
                <?php foreach($config['about']['snaps'] as $val): ?>
                    
                    <div class="span-4 columns scroll-list snap-list" <?php echo $val['data']?>>
                        
                        <div>
                            <img src="<?php echo $val['img']?>" alt="<?php echo $val['alt']?>">
                        </div>

                    </div>
                <?php endforeach; ?>

                </div>
                
            </section>

        </main>
        
<?php require("footer.php") ?>