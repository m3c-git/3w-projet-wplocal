<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<?php wp_head(); ?>  
		<meta content="<?php echo get_bloginfo( 'name' );?>" name="title">  
		<meta content="<?php echo get_bloginfo( 'description' );?>" name="description">  
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
		<link rel="preconnect" href="https://fonts.googleapis.com">  
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>  
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />  
<title><?php echo get_bloginfo( 'name' );?></title>
	</head>
	<body>
    <?php  
$menuItems = getNavigationMenu();  
$data = getHomepageData(); 
$projects = getProjects();
?>


<?php  

 
  
?>
        <h1>Accueil</h1>

        <section id="about">  
    <h2><?= $data["a-propos"]["titre"] ?></h2>  
    <p>  
        <?= $data["a-propos"]["contenu"] . "<br> ". var_dump(($projects))?>  
    </p>  
</section>

<header>
            <nav>
                <ul>
                    <!--A mettre en Uppercase css-->
                    <?php foreach($menuItems as $item) { ?>  
    <li>  
        <a href="<?= $item->url ?>">  
            <?= $item->title ?>  
        </a>  
    </li>  
<?php  
}  
?>
                </ul>
            </nav>
        </header>
        
        <main>
            <section class="title">
                <h1>YEPFOLIO</h1>
                <h2>développement web & mobile</h2><!--A mettre en Uppercase css-->
                <!--img en back-ground--css>-->
            </section>
            
            <section class="tintro">
                <h2>YEPFOLIO EN QUELQUES MOTS</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, aliquid, officia porro excepturi nostrum voluptatum similique placeat quo ab quos.
                        Perferendis, amet, impedit adipisci hic molestiae nostrum sed incidunt dolorum.Consectetur ducimus consequuntur aspernatur! Accusamus, illo, porro molestias 
                        enim animi eos aliquam magni expedita adipisci explicabo. Totam, incidunt, obcaecati quo blanditiis iste tempora ipsum inventore iure illo minima? Consectetur,
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, facere, quasi iusto ex rerum vel at consectetur doloribus commodi nesciunt adipisci vitae veniam 
                    </p>
            </section>
            <section class="article" id="projects article">
				<h2>MES DERNIERS PROJETS </h2>
				<?php foreach($projects as $project) { ?>  
                <article data-img="<?= $project["image"]["url"] ?>">
                    <p><?= $project["category"] ?> </p>
                    <h3><?= $project["data"]->post_title ?></h3>
                    <!--img en back-ground--css>-->
                </article>  
				<?php  
				}  
				?>
                
            </section>
            
            <section id="contact">  
				<h2>Me contacter</h2>  
				<?php echo do_shortcode("[contact-form-7 id='e52dfe9' title='Contact form 1']"); ?>  
			</section>
        </main>
        
        <footer></footer>
		<?php wp_footer(); ?>
		<script src="./script.js" defer></script>
	</body>
</html>