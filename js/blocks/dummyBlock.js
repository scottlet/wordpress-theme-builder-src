import { DummyBlockIcon } from './icons';

const {
  blocks,
  i18n: { __ },
  blockEditor: { InnerBlocks }
} = window['wp'];

const MY_TEMPLATE = [
  [
    'core/cover',
    {
      align: 'full',
      dimRatio: 0
    }
  ]
];

blocks.registerBlockType('wordpress-theme-builder/dummy-block', {
  title: __('Dummy block icon', 'wordpress-theme-builder'),
  icon: DummyBlockIcon,
  category: 'wordpress-theme-builder',
  attributes: {
    align: {
      type: 'string',
      default: 'full'
    }
  },
  supports: {
    align: ['full']
  },
  edit: ({ className }) => {
    return (
      <div className={className}>
        <InnerBlocks template={MY_TEMPLATE} templateLock={'all'} />
      </div>
    );
  },
  save: ({ className }) => {
    return (
      <div className={className}>
        <InnerBlocks.Content />
      </div>
    );
  }
});
