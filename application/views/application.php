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
            <div class="container">

			    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			    	<span class="icon-bar"></span>
			      	<span class="icon-bar"></span>
			      	<span class="icon-bar"></span>
			    </a>

              	<a class="brand" href="<?= URL::base() ?>"><?= $view->title() ?></a>

      			<div class="nav-collapse collapse">
       				<ul class="nav">
                		<li class="active"><a href="<?= URL::base() ?>">Home</a></li>
              		</ul>

              		<ul class="nav pull-right">
                      <li><a href="<?= URL::site('login') ?>">Login</a></li>
                    </ul>
      			</div>
            </div>

          </div>
        </div>

		<div class="container-fluid main-wrapper">

			<div class="row">
				<div class="span12">
					
					<?= $view->content() ?>

				</div>
			</div>

		</div>


		<?php foreach($view->javascripts() as $script): ?>
			<?= $script ?>
		<?php endforeach; ?>
	</body>
</html>