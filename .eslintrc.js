module.exports = {
  env: {
    browser: true,
    es6: true,
    node: true
  },

  plugins: ['prefer-smart-quotes', 'react', 'react-hooks'],
  settings: {
    'import/resolver': {
      alias: {
        map: [['~', './js/modules']]
      }
    },
    react: {
      version: 'detect'
    }
  },
  extends: [
    '../.eslintrc.js',
    'plugin:react/recommended',
    'plugin:react-hooks/recommended'
  ],
  rules: {
    complexity: [1, 9],
    'no-console': 2,
    'no-var': 2,
    'react/react-in-jsx-scope': 0,
    'import/no-unresolved': [
      2,
      { commonjs: true, ignore: ['compiledHandlebars'] }
    ]
  }
};
