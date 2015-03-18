# smn-page-templater
###Page Templater plugin to add legacy pages to SMN

Based on HarriBellThomas's https://github.com/wpexplorer/page-templater

## Installation
1. Download and unzip the Page Templater plugin.
2. Upload the `smn-page-templater` folder to the `/wp-content/plugins/` directory.
3. Activate the plugin through the `Plugins` menu in WordPress.
4. You will now have new template options under 'Page Attributes' meta box on page edit screen.

## Usage
1. Select template option on Page edit screen
2. Publish page

### For `(blank)` templates:
1. Your custom page content will appear between the top header and nav, and the bottom footer blocks
2. CSS classes are available for styling page content

#### CSS Classes for content formatting - a quick overview
- `.fboxes` adds rounded border and background gradient to row or section
    * defines individual or blocked content containers
- `.fboxdividers` adds divider lines to `.fbox`
    * must be nested inside `.fboxes`
    * wraps `.fbox`
- `.fbox` used to wrap inline content blocks at one-third width
    * must be nested inside `.fboxdividers`
- `.fboxcopy` adds padding to content within either `.fboxes` or each `.fbox`
    * do not use multiple nested instances of `.fboxcopy`