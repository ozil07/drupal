<div class="top__panel">
  <div class="container">
    <div class="row no-gutters justify-content-between">
      <div class="information__menu">
        <div class="current__date">
          <?php echo (date("l, D M, Y ")); ?>
        </div>
        <?php print render($page['top__panel']); ?>
      </div>
      <div class="autorization">
        <a href="/user">Войти</a>
        <a href="/user/register">Регистрация</a>
        <?php print render($page['nav_info']); ?>
      </div>
    </div>
  </div>
</div>

<header id="header" class="header">
  <div class="container">
    <div class="row no-gutters">
      <div class="logo">
        <a href="/"><img src="/sites/all/themes/chernovik/public/logo.png" alt=""></a>
      </div>
      <div class="banner">
        <?php print render($page['banner_area_one']); ?>
      </div>
    </div>
  </div>
</header>


<main>
  <div class="container">
    <div class="row">
      <div class="main__content col-12 col-md-8">
        <?php print render($page['content']); ?>
      </div>
      <div class="sidebar__right col-12 col-md-4">
        <?php print render($page['sidebar__right']); ?>
      </div>
    </div>
  </div>
</main>




