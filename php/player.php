<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo "$title" ?></title>
    <link
      rel="icon"
      type="image/png"
      href="<?php echo "$icon" ?>"
    />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <link rel="stylesheet" href="<?php echo $base_url ?>/css/bulma.css" />
    <link rel="stylesheet" href="<?php echo $base_url ?>/css/roadshow.css" />
    <link rel="stylesheet" href="<?php echo $base_url ?>/css/taylor.css" />
  </head>
  <body>
    <section class="hero is-fullheight">
      <!-- Hero head: will stick at the top -->
      <div class="hero-head">
        <header class="navbar">
          <div class="container">
            <div class="navbar-brand">
              <a class="navbar-item" href="<?php echo "$title_link" ?>" target="_blank">
                <img
                  class="mr-2"
                  src="<?php echo "$icon" ?>"
                  alt="Logo"
                /><span
                  class="site-name is-size-12 is-uppercase has-text-weight-bold"
                  ><?php echo "$title" ?></span
                >
              </a>
              <span class="navbar-burger" data-target="navbarMenuHeroC">
                <span></span>
                <span></span>
                <span></span>
              </span>
            </div>
            <div id="navbarMenuHeroC" class="navbar-menu">
              <div class="navbar-end">
                <!-- <a class="navbar-item is-active"> Register </a>
                <a class="navbar-item"> Schedule </a>
                <a class="navbar-item"> Previous Workshops </a> -->
              </div>
            </div>
          </div>
        </header>
        <div
          class="
            programs
            container
            px-2
            is-flex is-flex-direction-row is-flex-wrap-nowrap is-horz-scrolling
          "
        ></div>
        <div class="modals"></div>
      </div>
      <div class="hero-body p-1">
        <div class="container is-fluid">
          <div class="columns is-multiline is-1">
            <div class="column is-full pb-0">
              <div class="field">
                <input
                  id="live-box"
                  type="checkbox"
                  name="switchRoundedOutlinedDefault"
                  class="switch is-rounded is-outlined is-success"
                />
                <label
                  class="is-uppercase has-text-success has-transition"
                  for="live-box"
                  >Live</label
                >
              </div>
            </div>
            <div class="column is-two-thirds is-relative">
              <!-- <figure id="player-figure" class="is-invisible image is-16by9"> -->
                <iframe
                  id="player"
                  class="has-ratio box p-0"
                  width="100%"
                  height="620px"
                  src="<?php echo "$placeholder_videoID"; ?>"
                  title="<?php echo "$title"; ?>"
                  frameborder="0"
                ></iframe>
              <!-- </figure> -->
            </div>
            <div class="column is-one-third">
              <!-- <iframe src="https://e.widgetbot.io/channels/954008116800938044/<?php echo "$discord_channel_id"; ?>" allow="clipboard-write; fullscreen" height="100%" width="100%"></iframe> -->
              <widgetbot
                server="954008116800938044"
                channel="<?php echo "$discord_channel_id"; ?>"
                width="100%"
                height="100%"
              ></widgetbot>
              <script src="https://cdn.jsdelivr.net/npm/@widgetbot/html-embed"></script>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div id="api_url_div" style="display: none;"><?php echo $api_url ?><?php echo htmlspecialchars($category_id); ?></div>
    <div id="placeholder_videoID_div" style="display: none;"><?php echo htmlspecialchars($placeholder_videoID); ?></div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>
    <script src="<?php echo $base_url ?>/js/luxon.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
    <script src="<?php echo $base_url ?>/js/app.js"></script>
  </body>
</html>
