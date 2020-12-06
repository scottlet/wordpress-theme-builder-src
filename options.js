const { name, version } = require('./package.json');

const OPTIONS = {
    BREAKPOINTS: {
        OLD_MOB: 320,
        MOB: 767,
        SMALL_TABLET: 600,
        TABLET: 979,
        TABLET_LANDSCAPE: 1024,
        SMALL_DESKTOP: 1440
    },
    BREAKPOINT_DEVELOPMENT: 'mobile-first', // exactly 'mobile-first' or 'desktop-first'
    CSS_NANO_PRESET: 'advanced',
    FULL_NAME: 'Wordpress Theme Builder',
    NAME: name,
    VERSION: version
};

module.exports = OPTIONS;
