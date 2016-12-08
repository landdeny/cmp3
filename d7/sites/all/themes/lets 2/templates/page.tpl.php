<header>
        <div class='container title'>
            <h1><?php if ($logo): ?>
                  <a href="<?php print $front_page; ?>" title="<?php print t(""); ?>" rel="home" id="logo">
                    <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                  </a>
                <?php endif; ?>
            </h1>
        </div>
        <nav>
            <?php print render($page['main_menu']); ?>
        </nav>
    <div class="clearfix"></div>
    </header>
    





                <div class="item">
                    <div class="well sidebar_one">
                        <div class="well_content">
                            <div class='well_title'>
                                <ul>
                                    <li><i class="fa fa-location-arrow iconspacer" aria-hidden="true"></i><a href="#">
                                        
                                        
                                        
                                        
                                        </a>
                                    </li>

                                    <hr>
                                    <li><i class="fa fa-users iconspacer" aria-hidden="true"></i><a href="#">Activiteit</a>
                                    </li>

                                    <hr>
                                    <li><a href="#">Test</a>
                                    </li>

                                    <hr>
                                    <li><a href="#">Test</a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>






 
<?php print render($page['content']); ?>