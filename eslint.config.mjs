import { defineConfig } from 'eslint/config';
import { fixupConfigRules, fixupPluginRules } from '@eslint/compat';
import preferSmartQuotes from 'eslint-plugin-prefer-smart-quotes';
import react from 'eslint-plugin-react';
import reactHooks from 'eslint-plugin-react-hooks';
import globals from 'globals';
import path from 'node:path';
import { fileURLToPath } from 'node:url';
import js from '@eslint/js';
import { FlatCompat } from '@eslint/eslintrc';

const __filename = fileURLToPath(import.meta.url);
const __dirname = path.dirname(__filename);
const compat = new FlatCompat({
  baseDirectory: __dirname,
  recommendedConfig: js.configs.recommended,
  allConfig: js.configs.all
});

export default defineConfig([
  {
    extends: fixupConfigRules(
      compat.extends(
        '../eslint.config.mjs',
        'plugin:react/recommended',
        'plugin:react-hooks/recommended'
      )
    ),

    plugins: {
      'prefer-smart-quotes': preferSmartQuotes,
      react: fixupPluginRules(react),
      'react-hooks': fixupPluginRules(reactHooks)
    },

    languageOptions: {
      globals: {
        ...globals.browser,
        ...globals.node
      }
    },

    settings: {
      'import/resolver': {
        alias: {
          map: ['~', './js/modules']
        }
      },

      react: {
        version: 'detect'
      }
    },

    rules: {
      complexity: [1, 9],
      'no-console': 2,
      'no-var': 2,
      'react/react-in-jsx-scope': 0,

      'import/no-unresolved': [
        2,
        {
          commonjs: true,
          ignore: ['compiledHandlebars']
        }
      ]
    }
  },
  {
    files: ['**/*.test.*'],

    languageOptions: {
      globals: {
        ...globals.mocha
      }
    }
  }
]);
