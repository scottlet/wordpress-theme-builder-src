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
  BREAKPOINT_DEVELOPMENT: 'mobile-first', // one of 'mobile-first' or 'desktop-first'
  // one of 'default', 'advanced' or 'lite'
  CSS_NANO_PRESET: process.env.NODE_ENV === 'production' ? 'advanced' : 'lite',
  FULL_NAME: 'WP Theme Builder example',
  NAME: name,
  VERSION: version
};

module.exports = OPTIONS;
