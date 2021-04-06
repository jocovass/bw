<div id="logoholder" class="ease-in mb-3" style="z-index: 1000; " >
    <!-- Desktop Logo -->
    <div  class="desktop-image m-0 pl-3 pt-3 p-3 h-100 z-index-100 position-absolute">
             <a href="<?php echo get_home_url(); ?>"> 
        <div class="table-container"  style="min-height: 1vh"> 
            <div class="centre-content">
                <img  width="110" src="<?php bloginfo('template_directory'); ?>/assets/images/logo/logo.png" style="width: 8.5rem;" alt="Bleze Media logo"/>  
            </div>
        </div>
            </a>
    </div>


    <!-- Mobile Logo -->
    <div  class="mobile-image m-0 pl-3 pt-3 p-3 h-100 z-index-100 position-absolute">
        <a href="<?php echo get_home_url(); ?>">
            <div class="pt-1"> 
                <img  width="100" src="<?php bloginfo('template_directory'); ?>/assets/images/logo/logo.png" style="width: 7.7rem;" alt="Blaze Media logo"/>
            </div>
        </a>
    </div>

    <nav class="justify-content-end navbar navbar-expand-lg pr-3 fs-5" style="background: transparent; padding-right: 1rem;">
        <p  class="btn mt-2 mr-2 desktop-image rounded mb-0 p-0">
            <a class="text-accent text-decoration-none nav-link pt-0 pb-0" aria-label="cal on 0151 000 0000"  href="tel:01513193418">
            <span> <img width="20px" src="<?php bloginfo('template_directory'); ?>/assets/images/icons/white/phone.svg" alt="Phone icon"> 01513193418         
            </a>
        </p>         
        <div aria-label="Open Page Menu" class="mobile-image openmenu btn btn-transparent rounded-circle mt-2 mr-2 mb-1">
            <img width="20px" src="<?php bloginfo('template_directory'); ?>/assets/images/icons/white/menu.svg" alt="Open Page Menu" style="width: 1.53rem;">
        </div>            
    </nav> 


    <nav class="desktop-image justify-content-end small-nav navbar navbar-expand-lg pr-3 pb-2 col-12" style="clear: both; background: transparent; padding-right: 1rem;">
        <?php wp_nav_menu(array(
            'theme_location' => 'top-menu',
            'menu_class' => 'nav-list-block list-inline mx-auto fs-5 justify-content-end h-100 mb-0 text-accent d-flex font-weight-bold'
        )); ?>
    </nav>

</div>

<div id="navmenu" class="position-fixed top-0 large-nav w-100 closedmenu scrollDiv bg-light">
         
    <div   class="logomenu closemenu z-index-100">
             
        <div  class="d-flex flex-row-reverse closemenu position-absolute rounded-0 p-3 mb-0" style="width: 100%">
            <button aria-label="close menu" class="btn btn-none text-dark btn btn-none text-light z-index-100">
                <img width="20px" src="<?php bloginfo('template_directory'); ?>/images/menu.svg" alt="Close menu">
                <span class="d-none">close the menu</span>
            </button>
       </div>

        <div class='container-fluid m-0 p-0'>
            <div class='row'>
                <div id="navMenuTrigger"></div>
                <div class="col-12">
               
                    <div class="full-height-div" style="min-height: 100vh">
                        <div class="table-container position-relative" style="min-height: 100vh">  
            
                            <div class="centre-content" style="overflow: hidden">
                                <div class='container'>
                                    <div class="col-xl-9 col-lg-6 col-md-8 col-12 p-0">
                                        <!-- <div class="wp-spacer-sm"></div> -->
                                        <div class="categories">
                                            <?php wp_nav_menu(array(
                                                 'theme_location' => 'top-menu',
                                                 'menu_class' => 'text-secondary font-weight-bold h-100 fs-3'
                                            ));?>
                                        </div> 
                                        <!-- <div class="wp-spacer-sm"></div>  -->
                                    </div>
                                    <?php get_template_part( 'template-parts/header/site', 'branding' ); ?>               
                                </div>

 
                                <!-- <div class="w-100 position-relative bottom-0 z-index-100">
                                    <div class="container"> 
                                        <div class="row">
                                            <div class="wp-spacer-sm"></div> 
                                            <div class="wp-spacer-sm"></div> 
                                        </div>
                                    </div>
                                </div> -->
                            </div>    
                        </div>
                    </div>
               </div>          
            </div>
        </div>
    </div>
</div>
<div id="navTrigger" class="p-2 mt-5 position-absolute" style="top: 50%"></div>  



<?php /* <div class="h-100 w-100">
  
                   <div  class="logomenu d-flex flex-row-reverse closemenu rounded-0 p-3 mb-0">
                    <button class="btn btn-transparent">
                      <i class="fas fa-times"></i>
                    </button>
                   </div>

                <div class="categories">
                               <div class='container'>
                <?php wp_nav_menu(
            array(
             'theme_location' => 'top-menu',
             'menu_class' => 'list-inline nav-list-block list-inline h-100'
               )
               

            ); ?>
                </div> 
        <?php get_template_part( 'template-parts/header/site', 'branding' ); ?>               
          </div>
        </div> */ ?>