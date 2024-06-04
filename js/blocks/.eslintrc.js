module.exports = {
  extends: ['../../.eslintrc.js'],
  globals: {
    JSX: true
  },
  parserOptions: {
    sourceType: 'module',
    ecmaFeatures: {
      jsx: true
    }
  },
  rules: {
    'react/display-name': 0,
    'react/prop-types': 0,
    'react/react-in-jsx-scope': 0,
    'react-hooks/rules-of-hooks': 'error', // Checks rules of Hooks
    'react-hooks/exhaustive-deps': 'warn' // Checks effect dependencies
  }
};
