'use strict';

var pkg = require('./package.json');

var OPTIONS = {
    NAME: pkg.name,
    FULL_NAME: 'Wordpress Theme Builder',
    VERSION: pkg.version,
    BREAKPOINTS: {
        OLD_MOB: 320,
        MOB: 767,
        SMALL_TABLET: 600,
        TABLET: 979,
        TABLET_LANDSCAPE: 1024,
        SMALL_DESKTOP: 1440
    }
};

module.exports = OPTIONS;
