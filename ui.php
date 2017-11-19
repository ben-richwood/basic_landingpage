<?php include './function.php' ?>
<?php $pageName = 'UI components'; ?>

<!DOCTYPE html>
<!-- A website entiery designed by Richwood -->
<!--[if IE]><script src="./js/html5-ie.js"></script><![endif]-->

<!--
Author:
    ____  _      __                            __
   / __ \(_)____/ /_ _      ______  ____  ____/ /
  / /_/ / / ___/ __ \ | /| / / __ \/ __ \/ __  /
 / _, _/ / /__/ / / / |/ |/ / /_/ / /_/ / /_/ /
/_/ |_/_/\___/_/ /_/|__/|__/\____/\____/\__,_/

-->

<!--[if IE]><script src="./assets/js/html5-ie.js"></script><![endif]-->

   <html lang="fr-FR" prefix="og: http://ogp.me/ns#"> <!--<![endif]-->
    <?php include "head.php" ?>

    <!--[if IE ]>
    <body class="ie">
    <![endif]-->
    <!--[if !IE]>-->
    <body>
    <!--<![endif]-->
    <main>
      <section class="almostHeight">
        <div class="container">
          <div class="row">
            <h1>UI Components</h1>
          </div>
          <div class="row">
            <h2>Manifesto</h2>
            <p class="text-fluid">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
      </section>
      <section class="almostHeight" id="typoNcolor">
        <div class="container">
          <div class="row">
            <div>
              <h2>Typo and colors</h2>
              <div>
                <div class="large-shadow box primary-bg"></div>
                <div class="large-shadow box secondary-bg"></div>
                <div class="large-shadow box ternary-bg"></div>
              </div>
              <div>

              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="almostHeight">
        <div class="container">
          <div class="row">
            <div>
              <h2>Head and titles</h2>
            </div>
            <div>
              <h1>Title 1</h1>
              <h2>Title 2</h2>
              <h3>Title 3</h3>
              <h4>Title 4</h4>
              <h5>Title 5</h5>
              <h6>Title 6</h6>
            </div>
            <div>
              <p>Body content</p>
            </div>
            </div>
          </div>
        </div>
      </section>

      <section class="almostHeight">
        <div class="container">
          <div class="row">
            <div>
              <h2>Sections, blocks and paragraphs</h2>
            </div>
          </div>
        </div>
      </section>

      <section class="almostHeight">
        <div class="container">
          <div class="row">
            <div>
              <h2>Form and inputs</h2>
            </div>
            <div class="col-xs-12 col-sm-10 col-md-6">
              <form class="" action="./#" method="post">
                <label for="name">Name</label>
                <input type="text" name="" value="" placeholder="">
                <label for="email">Email</label>
                <input type="email" name="" value="" placeholder="">
                <label for="password">Password</label>
                <input type="password" name="" value="" placeholder="">
                <label for="tel">Phone</label>
                <input type="tel" name="" value="" placeholder="">
                <label for="date">Date</label>
                <input type="date" name="" value="" placeholder="">

                <textarea name="name" rows="8" cols="80"></textarea>
              </form>
            </div>
          </div>
        </div>
      </section>

      <section class="almostHeight">
        <div class="container">
          <div class="row">
            <div>
              <h2>Buttons and links</h2>
              <div>
                <div>
                  <button type="button">Button primary</button><button type="button">Button secondary hover</button>
                </div>
                <div>
                  <button type="button">Button secondary</button> <button type="button">Button secondary hover</button>
                </div>
                <div class="margin-top-lg">
                  <a class="hyperlink" href="#/">Link</a> <a class="hyperlink" href="#/">Link:hover</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="almostHeight">
        <div class="container">
          <div class="row">
            <div>
              <h2>Misc</h2>
              <h3>media queries breakpoints</h3>
            </div>
          </div>
        </div>
      </section>
    </main>

    <?php include "footer.php" ?>
  </body>
</html>
