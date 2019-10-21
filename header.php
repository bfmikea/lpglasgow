<!DOCTYPE html>
<html lang="<?php $metaidioma_array = get_field( 'metaidioma' ); ?><?php if ( $metaidioma_array ): ?><?php foreach ($metaidioma_array as $metaidioma_item ): ?><?php echo $metaidioma_item; ?><?php endforeach; ?><?php endif; ?>">
	
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php the_field( 'metadescripcion' ); ?>">
    <meta name="author" content="freetourglasgow.com">
    <meta name="copyright" content="freetourglasgow.com">

    <link rel="icon" href="<?php bloginfo( 'template_directory' ); ?>/images/favicon.ico">

    <title><?php bloginfo( 'name' ); ?></title>

    <?php

    // wp_head action hook
    wp_head();

    ?>

</head>

<body <?php body_class(); ?>>
    <nav id="myHeader" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid anchohp">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><?php the_field( 'logoizquierda' ); ?></a>
                
            </div>


			<div class="collapse navbar-collapse" id="navbar">
				<ul class="nav navbar-nav" id="menu-navigationes">
					<li class="menu-item">
						<a href="<?php the_field( 'url-item1' ); ?>" title="<?php the_field( 'item1' ); ?>">
							<?php the_field( 'item1' ); ?>
						</a>
					</li>
					<li class="menu-item">
						<a href="<?php the_field( 'url-item2' ); ?>" title="<?php the_field( 'item2' ); ?>">
							<?php the_field( 'item2' ); ?>
						</a>
					</li>
					<li class="menu-item">
						<a href="<?php the_field( 'url-item3' ); ?>" title="<?php the_field( 'item3' ); ?>">
							<?php the_field( 'item3' ); ?>
						</a>
					</li>
					<li class="menu-item">
						<a href="<?php the_field( 'url-item4' ); ?>" title="<?php the_field( 'item4' ); ?>">
							<?php the_field( 'item4' ); ?>
						</a>
					</li>
					
					<li class="menu-item">
						<a data-toggle="modal" data-target="<?php the_field( 'url-item5' ); ?>"  title="<?php the_field( 'item5' ); ?>">

							<button type="button" class="btnpm btn btn-primary btn-xs"><?php the_field( 'item5' ); ?></button>
							
						</a>
					</li>
					<li class="menu-item">
						<a class="ppbtn" href="/en" title="English">
							<img alt="English" src="<?php bloginfo('template_url');?>/images/eng.png"/>
						</a>
					</li>
					<li class="menu-item">
						<a class="ppbtn" href="/" title="Español">
							<img alt="Español" src="<?php bloginfo('template_url');?>/images/spa.png"/>
						</a>
					</li>
				</ul>
			</div>

			


        </div>
    </nav>
