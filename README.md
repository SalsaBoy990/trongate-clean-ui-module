# Clean.UI for Trongate PHP framework

Author: András Gulácsi

_Almost production-ready._


## Install the Clean.UI Trongate module

1. Copy the `ui` folder into your `modules` folder of your Trongate project.

2. Copy the `clean.php` into your `templates\views` folder of your Trongate project.

3. Add this method to your `templates/controllers/Templates.php` file:

```php
    function clean($data) {
        load('clean', $data);
    }
```

4. The Clean CSS demo with useful components will be accessible at: `http://localhost/{your_project_folder_name}/ui`


## After install / Get Started

Go to `modules\ui\clean\` folder.
You can either use gulp or make to generate your css and js bundles.

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

Clean.UI is a minimalistic a CSS+JS library that is compatible with Trongate CSS, and uses the very minimal Alpine.js library.


## Credits

Clean.UI is made by making use of **W3.CSS** and **Solbit**.

[W3.CSS](https://www.w3schools.com/w3css/) is a free CSS library, an alternative to Bootstrap.
Does not have a licence.

[Solbit](https://github.com/getsolus/solbit) is the unified component styling and JavaScript for Budgie and Solus brand assets.
Solus OS is a GNU-Linux distribution.

- Copyright 2017-2023 GetSolus / Solus (Apache-2.0 license)


## License

Copyright &copy; 2023 András Gulácsi (MIT license)
