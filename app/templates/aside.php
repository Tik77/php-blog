<div class="col-md-4" data-sticky_column>
    <div class="primary-sidebar">

        <aside class="widget news-letter">
            <h3 class="widget-title text-uppercase text-center">Get Newsletter</h3>

            <form action="#">
                <input type="email" placeholder="Your email address">
                <input type="submit" value="Subscribe Now"
                       class="text-uppercase text-center btn btn-subscribe">
            </form>

        </aside>
        <aside class="widget">
            <h3 class="widget-title text-uppercase text-center">Popular Posts</h3>


                <?php
                foreach ($send2 as $d){
                    ?>
            <div class="popular-post">
                    <a href="#" class="popular-img"><img src="assets/images/p1.jpg" alt="">

                        <div class="p-overlay"></div>
                    </a>
                    <div class="p-content">
                        <a href="#" class="text-uppercase"><?= $d["title"]?></a>
                        <span class="p-date"><?= $d["publishDate"]?></span>

                    </div>
            </div>
                <?php

                }
                ?>



        </aside>
        <aside class="widget">
            <h3 class="widget-title text-uppercase text-center">Featured Posts</h3>

            <div id="widget-feature" class="owl-carousel">
                <div class="item">
                    <div class="feature-content">
                        <img src="assets/images/p1.jpg" alt="">

                        <a href="#" class="overlay-text text-center">
                            <h5 class="text-uppercase">Home is peaceful</h5>

                            <p>Lorem ipsum dolor sit ametsetetur sadipscing elitr, sed </p>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="feature-content">
                        <img src="assets/images/p2.jpg" alt="">

                        <a href="#" class="overlay-text text-center">
                            <h5 class="text-uppercase">Home is peaceful</h5>

                            <p>Lorem ipsum dolor sit ametsetetur sadipscing elitr, sed </p>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="feature-content">
                        <img src="assets/images/p3.jpg" alt="">

                        <a href="#" class="overlay-text text-center">
                            <h5 class="text-uppercase">Home is peaceful</h5>

                            <p>Lorem ipsum dolor sit ametsetetur sadipscing elitr, sed </p>
                        </a>
                    </div>
                </div>
            </div>
        </aside>
        <aside class="widget pos-padding">
            <h3 class="widget-title text-uppercase text-center">Recent Posts</h3>
            <?php
            foreach ($send3 as $c){
                ?>
                <div class="thumb-latest-posts">

                    <div class="media">
                        <div class="media-left">
                            <a href="#" class="popular-img"><img src="assets/images/r-p.jpg" alt="">
                                <div class="p-overlay"></div>
                            </a>
                        </div>
                        <div class="p-content">
                            <a href="#" class="text-uppercase"><?=$c['title']?></a>
                            <span class="p-date"><?=$c['publishDate']?></span>
                        </div>
                    </div>
                </div>
                <?php

            }
            ?>



        </aside>
        <aside class="widget border pos-padding">
            <h3 class="widget-title text-uppercase text-center">Categories</h3>
            <ul>
                <?php
                foreach ($send as $b){
                ?>
                <li>
                    <a href="#"><?= $b['name'] ?></a>
                    <span class="post-count pull-right"> <?= $b['posts'] ?></span>
                </li>
                <?php

                }
                ?>


            </ul>
        </aside>
    </div>
</div>