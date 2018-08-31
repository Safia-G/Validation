<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
 ?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Site de Safia</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo(‘template_directory’);?>/blog.css" rel="stylesheet">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    </head>
  <body>

    <div class="header" style="background-color:black; opacity:0.7; padding-bottom:20px">
    <div class="container">
    <nav style="font-size:18px; text-align: right; margin-top: 20px" id="navigation-principale" role="navigation">
    <a class="active" href="#">Accueil</a>
    <a href="#">-</a>
    <a href=" index.php/produits/">Nos produits</a>
    <a href="#">-</a>
    <a href="#">À Propos</a>
    <a href="#">-</a>
    <a href="#">Contact</a>
    </nav>
    </div>
    </div>

    <div class="container">
    <div class="blog-header">
    <h1 style="text-align:center; color:#E8659E; margin-top:50px" class="blog-title"><?php echo get_option('mc_firstName'); ?></h1>
    <p style="text-align:center; margin-bottom:50px" class="lead blog-description">Par <i><?php echo get_option('mc_lastName'); ?></i></p>
    </div>

    <?php if(get_option('mc_promo') == 'on'): ?>
      <p style="background-color:yellow; font-size:20px; text-align:center; padding:20px"><?php echo "Flash info : Aujourd'hui profitez de -20% sur tous nos produits" ?></p>
    <?php else: ?>
    <?php endif; ?>

    <!--<div class="promo">
       <p style="background-color:yellow"><?php echo get_option('mc_promo'); ?></p>
    </div> -->


    <div class="row">
    <div class="col-sm-8 blog-main">
    <div class="blog-post">
      <h2 class="blog-post-title">Qui sommes-nous ?</h2>
      <p style="font-size:12px" class="blog-post-meta"><i>29 août 2018 par <a href="#">Safia</a></i></p>
      <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
    </div>
    </div>




    <div class="col-sm-8 blog-main">
      <h2>Découvrez nos derniers produits</h2>
      <ul>
      <?php
          $recentPosts = new WP_Query();
          $recentPosts->query('showposts=5');
      ?>
      <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
          <li><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></li>
      <?php endwhile; ?>
      </ul>
    </div>



    <!--<div class="col-sm-8 blog-main">
      <h2>Mes derniers commentaires</h2>
      <ul>
    	<?php $comments = get_comments('post_type=NOM_DU_CUSTOM_POST_TYPE'); foreach ($comments as $comment) { ?>
    	<li>
  		<div class="comment">
  			<p><?php echo strip_tags($comment->comment_author); ?> - <a href="<?php echo get_permalink($comment->ID); ?>#comment-<?php echo $comment->comment_ID; ?>" title="<?php echo $comment->post_title; ?>">"<?php echo strip_tags($comment->comment_content); ?>"...</a></p>
  		</div>
    	</li>
    	<?php } ?>
      </ul>
    </div> -->


    <div class="col-sm-8 blog-sidebar">
    <div class="sidebar-module sidebar-module-inset">
    <h2>À Propos</h2>
    <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
    </div>
    </div>
    </div>
    </div>

  <footer class="blog-footer">
    <p style="width:100%;float:bottom;text-align:right; padding-right:30px; background-color:#E8659E; padding:20px; margin-top:200px">Par Safia Gobet.</p>
  </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
