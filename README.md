# KySports Foundation Theme

A custom, lightweight WordPress theme for the KySports Foundation nonprofit. It is the starting point for a mission-first site focused on youth sports-media education, opportunity, and community impact.

## Current foundation

- WordPress theme metadata and installable fallback template
- WordPress 6.5+ and PHP 8.1+ support
- Custom logo, menus, featured images, responsive embeds, wide alignment, and editor styles
- Global color, typography, spacing, and accessibility foundation
- Organized folders for future templates, template parts, block patterns, CSS, and JavaScript

## Install locally

1. Copy the `kysports-foundation` folder into `wp-content/themes/` in a WordPress installation.
2. In WordPress Admin, go to **Appearance → Themes** and activate **KySports Foundation**.
3. Assign menus to **Primary Navigation** and **Footer Navigation** under **Appearance → Menus**.
4. Add a custom logo under **Appearance → Customize → Site Identity**.

## Project structure

```text
kysports-foundation/
├── assets/
│   ├── css/main.css       # Global tokens and base styles
│   ├── js/app.js          # Theme-wide JavaScript entry point
│   ├── images/            # Future theme imagery
│   ├── video/             # Future optimized hero media
│   └── fonts/             # Optional self-hosted fonts
├── inc/
│   ├── setup.php          # Theme supports and navigation locations
│   └── enqueue.php        # Front-end asset loading
├── parts/                 # Future reusable template parts
├── patterns/              # Future registered block patterns
├── templates/             # Future custom template files
├── footer.php
├── functions.php
├── header.php
├── index.php
├── style.css
└── theme.json
```

## Next sprint

Build the responsive header and footer styles, then implement the modular homepage sections: hero, mission, impact, programs, student story, latest news, events, partners, and donation call to action.

## Development principles

- Mobile-first and WCAG 2.2 AA-minded
- WordPress coding standards
- Minimal dependencies and no page builder requirement
- Progressive enhancement with vanilla JavaScript
- Reusable components over duplicated markup
