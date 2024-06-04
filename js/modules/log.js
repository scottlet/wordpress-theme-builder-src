/**
 * Logger
 * Returns a function that logs messages to the console if it is defined,
 * or displays an alert if the console is not defined and the window object
 * has an alert function.
 * @returns {Function} A function that logs messages to the console or displays
 * an alert...
 */
function Logger() {
  if (typeof console !== 'undefined') {
    return (/** @type {any[]} */ ...msg) => {
      // eslint-disable-next-line no-console
      console.log(...msg);
    };
  }

  if (typeof (window || {}).alert !== 'undefined') {
    return (/** @type {string} */ msg) => {
      window.alert(msg); //eslint-disable-line
    };
  }

  return () => {
    /** */
  };
}

export default Logger;
