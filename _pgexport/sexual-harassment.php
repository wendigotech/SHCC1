<!doctype html> 
<html <?php language_attributes(); ?>> 
    <head> 
        <meta charset="<?php bloginfo( 'charset' ); ?>"> 
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
        <meta name="description" content=""> 
        <meta name="author" content="">          
        <!-- Bootstrap core CSS -->         
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous"> 
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> 
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet" type="text/css"> 
        <link href="https://fonts.googleapis.com/css?family=PT+Serif:400,400i,700,700i" rel="stylesheet"> 
        <!-- Custom styles for this template -->         
        <link href="css/style.css" rel="stylesheet"> 
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php wp_head(); ?>
    </head>     
    <body> 
        <!-- Navigation -->         
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav"> 
            <div class="container"> 
                <a class="navbar-brand js-scroll-trigger" href="#page-top">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/SHCC-logo.png">
                </a>                 
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"> 
                    <?php _e( 'Menu', 'shcc_wp' ); ?> 
                    <i class="fa fa-bars"></i> 
                </button>                 
                <div class="collapse navbar-collapse" id="navbarResponsive"> 
                    <ul class="navbar-nav text-uppercase ml-auto"> 
                        <li class="nav-item"> 
                            <a class="nav-link js-scroll-trigger" href="#services"><?php _e( 'About', 'shcc_wp' ); ?></a> 
                        </li>                         
                        <li class="nav-item"> 
                            <a class="nav-link js-scroll-trigger" href="#portfolio"><?php _e( 'Services', 'shcc_wp' ); ?></a> 
                        </li>                         
                        <li class="nav-item"> 
                            <a class="nav-link js-scroll-trigger" href="#about"><?php _e( 'Contact', 'shcc_wp' ); ?></a> 
                        </li>                         
                    </ul>                     
                </div>                 
            </div>             
        </nav>         
        <section class="what-is"> 
            <div class="container"> 
                <div class="row centered"> 
                    <div class="col-md-12"> 
                        <h1><?php _e( 'What Is Sexual Harassment?', 'shcc_wp' ); ?></h1> 
                    </div>                     
                </div>                 
            </div>             
        </section>         
        <section class="sh-form"> 
            <div class="container"> 
                <div class="row"> 
                    <div class="col-md-6 first custom-form"> 
                        <form class="form-horizontal" role="form"> 
                            <fieldset> 
                                <!-- Form Name -->                                 
                                <div class="form-title"> 
                                    <legend>
                                        <?php _e( 'Free No Obligation Consultation', 'shcc_wp' ); ?>
                                    </legend>                                     
                                </div>                                 
                                <!-- Text input-->                                 
                                <div class="form-body-dark"> 
                                    <div class="form-group"> 
                                        <div class="col-sm-12"> 
                                            <input type="text" placeholder="First Name *" class="form-control"> 
                                        </div>                                         
                                    </div>                                     
                                    <!-- Text input-->                                     
                                    <div class="form-group"> 
                                        <div class="col-sm-12"> 
                                            <input type="text" placeholder="Last Name *" class="form-control"> 
                                        </div>                                         
                                    </div>                                     
                                    <!-- Text input-->                                     
                                    <div class="form-group"> 
                                        <div class="col-sm-12"> 
                                            <input type="text" placeholder="Email *" class="form-control"> 
                                        </div>                                         
                                    </div>                                     
                                    <!-- Text input-->                                     
                                    <div class="form-group"> 
                                        <div class="row"> 
                                            <div class="col-md-6"> 
                                                <div class="col-sm-12"> 
                                                    <input type="text" placeholder="Phone" class="form-control"> 
                                                </div>                                                 
                                            </div>                                             
                                            <div class="col-md-6"> 
                                                <div class="col-sm-12"> 
                                                    <input type="text" placeholder="Zip code*" class="form-control pull-left"> 
                                                    <i class="zip-fa fa fa-info-circle" aria-hidden="true"></i> 
                                                </div>                                                 
                                            </div>                                             
                                        </div>                                         
                                    </div>                                     
                                    <!-- Text input-->                                     
                                    <div class="form-group"> 
                                        <div class="col-sm-12"> 
                                            <input type="text" placeholder="Comments *" class="form-control"> 
                                            <i class="comments-fa fa fa-info-circle" aria-hidden="true"></i> 
                                        </div>                                         
                                    </div>                                     
                                    <a class="btn btn-primary btn-xl col-md-12" href="#services"><?php _e( 'Yes, I would like a free consultation', 'shcc_wp' ); ?></a> 
                                </div>                                 
                            </fieldset>                             
                        </form>                         
                    </div>                     
                    <div class="col-md-6 second"> 
                        <div class="intro-text">
                            <h3><?php _e( 'Unwelcome Behavior is Key in Sexual Harassment', 'shcc_wp' ); ?></h3>
                        </div>                         
                        <div class="intro-list"> 
                            <p><?php _e( 'Unwelcome behavior is the critical component when looking at what is sexual harassment. That’s the perspective of the United Nations organization responsible for promoting women’s gender equality and empowerment. UN Women first points to EEOC guidelines that say sexual harassment is unwelcome sexual advances, requests for sexual favors and other verbal or physical conduct of a sexual nature.', 'shcc_wp' ); ?></p> 
                            <p><?php _e( 'The UN organization goes on to explain that “unwelcome” does not mean “involuntary.”', 'shcc_wp' ); ?></p> 
                            <p><?php _e( 'Sexual conduct is harassment when the victim considers it unwelcome. Persons subjected to sexual harassment may consent or actively participate in conduct even when they find that conduct offensive and objectionable. All the circumstances dictate whether or not the victim welcomed a sex-oriented comment, joke or request for a date.', 'shcc_wp' ); ?></p> 
                            <p><?php _e( 'Examples of the unwelcome behavior are a woman looking a man up and down when he walks towards her or a man whistling at a woman when she walks by.', 'shcc_wp' ); ?></p> 
                        </div>                         
                    </div>                     
                </div>                 
            </div>             
        </section>         
        <section class="sh-two"> 
            <div class="container"> 
                <div class="row"> 
                    <div class="col-md-12 centered"> 
                        <h3><?php _e( 'Sexual Harassment Can Escalate from Subtle to Hostile', 'shcc_wp' ); ?></h3> 
                    </div>                     
                    <div class="col-md-6 first"> 
                        <p><?php _e( 'There can be a quid pro quo element to sexual harassment when an employee’s acceptance or rejection of unwelcome sexual behavior is the basis for hiring or firing or promotions at work. For instance, a boss firing an employee because that employee will not go out with him or her is quid pro quo sexual harassment.', 'shcc_wp' ); ?></p> 
                        <p><?php _e( 'When unwelcome subtle harassment of a sexual nature is allowed to continue, it could create a quid pro quo or hostile work environment for the person subjected to the behavior. Examples of subtle sexual harassment are sexual jokes, innuendo or comments. While subtle sexual harassment is a behavior, it is not a legal term.', 'shcc_wp' ); ?></p> 
                    </div>                     
                    <div class="col-md-6 second"> 
                        <p><?php _e( 'Referring to an adult as a girl, hunk, doll, babe, or honey.  Whistling at someone. Cat calls. These are examples of sexual harassment. Sexual harassment includes such things as actual or attempted rape or sexual assault. The behavior could be unwanted pressure for sexual favors or dates.', 'shcc_wp' ); ?>   <?php _e( 'Unwanted sexual looks or gestures as well as unwanted deliberate touching, leaning over, cornering, or pinching are considered sexual harassment. Turning work discussions to sexual topics is sexual harassment, as are unwelcome sexual teasing, jokes, remarks, or questions.', 'shcc_wp' ); ?></p> 
                    </div>                     
                </div>                 
            </div>             
        </section>         
        <section class="mind-section colored-bg"> 
            <div class="container"> 
                <div class="row"> 
                    <div class="col-md-2"></div>                     
                    <div class="col-md-8 centered"> 
                        <h3 class="white-text"><?php _e( 'Peace Of Mind Could Be 30 Seconds Away', 'shcc_wp' ); ?></h3>
                        <br> 
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/SHCC-mind-white.png">
                        <br>
                        <br> 
                        <a class="btn btn-primary btn-xl" href="#services"><?php _e( 'Fill Out A Free Case Evaluation Form Now', 'shcc_wp' ); ?></a> 
                    </div>                     
                    <div class="col-md-2"></div>                     
                </div>                 
            </div>             
        </section>         
        <section class="footer"> 
            <div class="container"> 
                <div class="row"> 
                    <div class="col-md-12 centered"> 
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/SHCC-logo-gray.png"> 
                        <p><?php _e( '© 2017 Sexual Harassment Claim Center.', 'shcc_wp' ); ?></p> 
                    </div>                     
                </div>                 
            </div>             
        </section>         
        <!-- Bootstrap core JavaScript -->         
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>         
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>         
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>         
        <?php wp_footer(); ?>
    </body>     
</html>