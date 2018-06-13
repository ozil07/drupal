<div class="top__panel">
	<div class="container">

		<div class="row no-gutters flex-wrap">
			<div class="top-panel col-12">
				<?php print render($page['top_panel']); ?>
			</div>
		</div>

		<div class="row no-gutters flex-wrap justify-content-between">
			<div class="top-panel__col1">
				<?php print render($page['top_panel_col1']); ?>
			</div>
			<div class="top-panel__col2">
				<?php print render($page['top_panel_col2']); ?>
			</div>
			<div class="top-panel__col3">
				<?php print render($page['top_panel_col3']); ?>
			</div>
		</div>

	</div>
</div>


<header id="header" class="header">
	<div class="container">

		<div class="row no-gutters flex-wrap justify-content-between">
			<?php print render($page['header']); ?>
		</div>

		<div class="row no-gutters flex-wrap justify-content-between">
			<div class="header__col1">

				<div class="autorization d-flex flex-wrap flex-column justify-content-center justify-content-sm-start">
					<?php if (!$logged_in): ?>
						<a href="/user">Войти</a>
						<a href="/user/register">Регистрация</a>

						<?php else: ?>
							<a href="/user/logout">Выйти</a>
							<a href="/user">Личный кабинет</a>
							<a href="/user/<?php global $user; print $user->uid;?>/edit">Редактировать профиль</a>
						<?php endif ?>
					</div>

				<?php print render($page['header_col1']); ?>
			</div>
			<div class="header__col2">
				<a href="/"><span class="icon logo"></span></a>
				<?php print render($page['header_col2']); ?>
			</div>
			<div class="header__col3">
				<?php print render($page['header_col3']); ?>
			</div>
		</div>

	</div>
</header>


<nav>
	<div class="container">
		<div class="row no-gutters">
			<?php print render($page['nav']); ?>
		</div>
	</div>
</nav>

<div class="system__drupal">
	<div class="container">	
		<?php if ($messages): ?>
			<div id="drupal_messages">
				<div class="section clearfix">
					<?php print $messages; ?>
				</div>
			</div>
		<?php endif; ?>


		<?php if ($tabs): ?>
			<div class="drupal_tabs">
				<?php print render($tabs); ?>
			</div>
		<?php endif; ?>
	</div>
</div>


<main>
	<div class="container">
		<div class="row no-gutters">
			<div class="main__content product col-12">
				<?php print render($page['content']); ?>
			</div>
		</div>
	</div>
</main>


<footer>
	<div class="container">
		<div class="row no-gutters">
			<?php print render($page['footer']); ?>
		</div>

		<div class="footer__col1">
			<?php print render($page['footer__col1']); ?>
		</div>
		<div class="footer__col2">
			<?php print render($page['footer__col2']); ?>
		</div>
		<div class="footer__col3">
			<?php print render($page['footer__col3']); ?>
		</div>
	</div>
</footer>

