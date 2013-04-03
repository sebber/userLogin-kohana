<!doctype html>
<html>
	<head>
		<meta charset=utf-8>
		<title><?= $view->title(); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<?php foreach($view->stylesheets() as $stylesheet): ?>
			<?= $stylesheet ?>
		<?php endforeach; ?>
	</head>
	<body>
		
		<div class="navbar navbar-static-top">
          <div class="navbar-inner">

            <div class="container" style="width: auto; padding: 0 20px;">
              <a class="brand" href="#"><?= $view->title() ?></a>
              <ul class="nav">
                <li class="active"><a href="<?= URL::base() ?>">Home</a></li>
              </ul>
            </div>

          </div>
        </div>

		<div class="container-fluid main-wrapper">

			<div class="row">
				<div class="span12">
					<div class="hero-unit">
				        <h1>Hello, world!</h1>
				        <p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
				        <p><a href="#" class="btn btn-primary btn-large">Learn more &raquo;</a></p>
				      </div>
				</div>
			</div>


			<div class="row">
				<div class="span12">
					
					<?= $view->content(); ?>

				</div>
			</div>

		</div>


		<?php foreach($view->javascripts() as $script): ?>
			<?= $script ?>
		<?php endforeach; ?>
	</body>
</html>