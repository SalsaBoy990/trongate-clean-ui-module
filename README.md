# Clean.UI for Trongate PHP framework

Author: András Gulácsi <guland@protonmail.com>

Version: **1.0.0** (2024-03-12)


## Install the Clean.UI Trongate module

1. Copy the `ui` folder into your `modules` folder of your Trongate project.

2. Copy the `clean.php`, the `clean-demo.php`, and the `clean-narrow.php`  into your `templates\views` folder of your
   Trongate project.

3. Copy `partials\meta.php` into your `templates\views\partials` folder of your Trongate project.

3. Add these 3 methods to your `templates/controllers/Templates.php` file (`clean_demo` is used by the Clean.UI demo
   page):

```php
    function clean($data) {
        load('clean', $data);
    }

    function clean_demo($data) {
        load('clean-demo', $data);
    }

    function clean_narrow($data) {
        load('clean-narrow', $data);
    }
```

4. The Clean.UI demo with useful components will be accessible at: `http://localhost/{your_project_folder_name}/ui`


## After install / Get Started

Go to `modules\ui\clean\` folder.
You can either use gulp or make to generate your css and js bundles.

_Tip: For shared hosting, do not copy the `node_modules` folder and the build scripts through ftp._


### Gulp setup (all OS)

Install the cli (globally):

```bash
npm -g install gulp-cli
```

Install nmp packages:

```bash
npm i
```

**Inspect `gulpfile.js`.**

Generate CSS bundle:

```bash
gulp styles
```

Generate JS bundle:

```bash
gulp scripts
```

Watch mode (both JS and CSS):

```bash
gulp watch
```


### Makefile (only for Linux)

All the scripts are defined in a Makefile (install GNU `make` program first). Use these commands:

- Install **sassc** (compiler written in C++) library: `make install-sass`
- Compile sass to css: `make sass`
- Compile sass to css in watch mode: `make sass-watch`
- Install **esbuild** (JS bundler written in Go): `make install-esbuild`
- Create JS bundle: `make esbuild`
- Create JS bundle in watch mode: `make esbuild-watch`


## About Clean.UI

Clean.UI is a minimalistic a CSS+JS library that is compatible with Trongate CSS, and uses the very minimal Alpine.js
library.

**The following Alpine.js components are production-ready** (you will definitely need them):

- data (needed for the darkmode toggle, and the scroll-to-top button)
- alert
- modal
- dropdown
- accordion
- tabs
- progress bar
- animation
- filter

**These Alpine.js components are not production-ready** (these will be removed in the future):

- lightbox
- slider
- ajax search (deprecated, not going to work due to Trongate API changes)
- tabbed images

Consider these deprecated before the first release (v1.0.0).


**Additional libraries included:**

- jQuery,
- Tom Select (for better select fields),
- clean-dropzone.js (for single or multi file upload dropzone, it is a jQuery plugin, a modified version of
  bs-dropzone.js).

- You can remove them if you don't need them _(keep in mind that some of the examples on the demo page will not work
  after doing that)_.


## Credits

Clean.UI is made by making use of **W3.CSS** and **Solbit**.

- [W3.CSS](https://www.w3schools.com/w3css/) is a free CSS library, an alternative to Bootstrap. Does not have a licence.

- [Solbit](https://github.com/getsolus/solbit) is the unified component styling and JavaScript for Budgie and Solus brand
assets.  Solus OS is a GNU-Linux distribution. - Copyright 2017-2023 GetSolus / Solus (Apache-2.0 license)

_A big thank you to all of them._


## License
 
Copyright &copy; 2023-2024 András Gulácsi (MIT license)
