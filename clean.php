<!DOCTYPE html>
<html lang="en" x-data="data" :class="{'dark': darkMode }" x-transition>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASE_URL ?>css/app.css">
    <!-- don't change anything above here -->
    <!-- add your own stylesheet below here -->

    <!-- Clean UI styles -->
    <link rel="stylesheet" type="text/css" href="ui-clean_module/css/clean.css">

    <!-- Prism code syntax highlight styles -->
    <link rel="stylesheet" type="text/css" href="ui-clean_module/css/prism.css">

    <!-- Font Awesome icons (CDN links for the demo, but you can host them locally as well) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.min.css"
          integrity="sha512-SgaqKKxJDQ/tAUAAXzvxZz33rmn7leYDYfBP+YoMRSENhf3zJyx3SBASt/OfeQwBHA1nxMis7mM3EV/oYT6Fdw=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/solid.min.css"
          integrity="sha512-yDUXOUWwbHH4ggxueDnC5vJv4tmfySpVdIcN1LksGZi8W8EVZv4uKGrQc0pVf66zS7LDhFJM7Zdeow1sw1/8Jw=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/brands.min.css"
          integrity="sha512-9YHSK59/rjvhtDcY/b+4rdnl0V4LPDWdkKceBl8ZLF5TB6745ml1AfluEU6dFWqwDw9lPvnauxFgpKvJqp7jiQ=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/regular.min.css"
          integrity="sha512-WidMaWaNmZqjk3gDE6KBFCoDpBz9stTsTZZTeocfq/eDNkLfpakEd7qR0bPejvy/x0iT0dvzIq4IirnBtVer5A=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <title><?= $title . ' | ' ?><?= WEBSITE_NAME ?></title>

    <?= Template::partial('partials/public/meta', $data) ?>

</head>
<body @scroll="setScrollToTop()">
<div class="wrapper">
    <header>
        <div id="header-sm">
            <div id="hamburger" onclick="openSlideNav()" aria-label="Open sidebar navigation">
                &#9776;
            </div>
            <div class="logo">
                <a href="<?= BASE_URL ?>">
                    <img src="ui_module/images/logo.png" alt="<?= WEBSITE_NAME ?>"/>
                    <span>Clean Theme</span>
                </a>
            </div>
            <div class="button-group">
                <?php
                echo anchor('account', '<i class="fa fa-user"></i>', array('title' => 'User account', 'aria-label' => 'Goto your account'));
                echo anchor('logout', '<i class="fa fa-sign-out"></i>', array('title' => 'Logout', 'aria-label' => 'Logout button'));
                ?>
                <button class="icon-button darkmode-toggle"
                        rel="button"
                        aria-label="Toggle dark / light theme"
                        @click="toggleDarkMode"
                        x-text="isDarkModeOn() ? '🔆' : '🌒'"
                        :title="isDarkModeOn() ? 'Light mode' : 'Dark mode'">
                </button>
            </div>
        </div>
        <div id="header-lg">
            <div class="logo">
                <a href="<?= BASE_URL ?>">
                    <img src="ui_module/images/logo.png" alt="<?= WEBSITE_NAME ?>"/>
                    <span>Clean Theme</span>
                </a>
            </div>
            <div>
                <ul id="top-nav">
                    <?= Template::partial('partials/public/main-nav') ?>

                    <li>
                        <button class="icon-button darkmode-toggle"
                                rel="button"
                                aria-label="Toggle dark / light theme"
                                @click="toggleDarkMode"
                                x-text="isDarkModeOn() ? '🔆' : '🌒'"
                                :title="isDarkModeOn() ? 'Light mode' : 'Dark mode'">
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </header>


    <div class="main-container container relative">
        <main class="content">
            <?= Template::display($data) ?>
        </main>
    </div>


    <button class="light-gray scroll-to-top-button padding-0-5 round"
            role="button"
            title="Scroll to the top of the page"
            aria-label="Scroll to the top of the page"
            x-show="scrollTop > 800"
            @click="scrollToTop"
            x-transition>
        <i class="fa fa-chevron-up" aria-hidden="true"></i>
    </button>

</div>
<footer class="footer">
    <div class="container">
        <!-- it's okay to remove the links and content here - everything is cool (DC) -->
        <div class="fs-14">&copy; Copyright <?= date('Y') . ' ' . OUR_NAME ?></div>
        <div class="fs-14"><?= anchor('https://trongate.io', 'Powered by Trongate') ?></div>
    </div>
</footer>
<div id="slide-nav">
    <div id="close-btn" onclick="closeSlideNav()" aria-label="Close sidebar navigation">&times;</div>
    <ul auto-populate="true"></ul>
</div>
<script src="<?= BASE_URL ?>js/app.js"></script>
<script src="ui-clean_module/js/clean.js"></script>
<script src="ui-clean_module/js/prism.js"></script>

</body>
</html>
