# 23 Web

23 Web is the branded WordPress block child theme for the public business website at [23web.co.uk](https://23web.co.uk/). It adds the company presentation layer and editable homepage starter content to the reusable **23 Theme** foundation. It does not contain portable business functionality or editorial permissions.

Version: `0.1.0`

## Requirements and dependencies

- WordPress 6.6 or later
- PHP 7.4 or later
- Parent theme: **23 Theme** installed in `wp-content/themes/twentythree-theme`
- Governance plugin: **23 Core** is recommended for the 23 Site Manager workflow

Phase 1 was built against these exact clean dependency states:

- 23 Theme `v0.1.0`, commit `663578e`
- 23 Core `0.2.0`, commit `a01233e`

23 Core had no Git tag at the time of validation. Its clean `0.2.0` commit is therefore recorded explicitly rather than described as a tagged dependency.

## Architecture

```text
twentythree-web/
├── assets/
│   ├── brand/       Original and derived PNG brand assets
│   ├── fonts/       Self-hosted WOFF2 files and OFL licences
│   └── images/      Honest, replaceable content placeholders
├── parts/           Branded header and footer overrides
├── patterns/        Complete homepage starter content
├── templates/       Branded front-page shell
├── tests/           WordPress Playground runtime QA
├── functions.php    Child-theme setup and pattern category
├── style.css        Theme metadata and small presentation layer
└── theme.json       Brand tokens and global block styles
```

The parent supplies the generic `index`, `page`, and `single` templates. This child overrides the shared header and footer and adds `front-page.html`. The front-page template contains only the template parts and Post Content block: homepage sections remain ordinary page content in the database, not hard-coded template content.

## Installation

1. Install 23 Theme as `wp-content/themes/twentythree-theme`.
2. Install this repository as `wp-content/themes/twentythree-web`.
3. Optionally install and activate 23 Core for the governed Site Manager role.
4. Activate **23 Web** in Appearance → Themes.
5. Confirm Appearance → Editor is available to an Administrator and the parent is reported as **23 Theme**.

The `Template: twentythree-theme` header is exact and must not be changed unless the parent theme folder itself changes.

## First homepage setup

1. Create a normal page named **Home**.
2. In the block inserter, open Patterns → **23 Web pages** and insert **23 Web homepage starter**.
3. Replace every explicit project, portrait and testimonial placeholder with verified content.
4. Publish the page.
5. In Settings → Reading, choose **A static page** and select **Home** as the homepage.
6. Create the destination pages used by starter links (`Work`, `Services`, `Care`, `Contact`, `Privacy Policy`, and `Cookie Policy`) or update those links before launch.
7. Build the primary navigation as an Administrator. A 23 Site Manager can then maintain the contents of that existing navigation through the 23 Core Navigation screen.

The complete starter is deliberately insertable rather than automatic. Inserting it gives the editor a normal copy in page content and avoids surprising writes on theme activation.

## Header, footer and logo setup

The header and footer use the WordPress **Site Logo** block. Set the logo once as an Administrator:

1. Open Appearance → Editor → Styles or the Header template part.
2. Select the Site Logo block and upload `assets/brand/23-web-wordmark-compact.png`.
3. Give the Media Library item the alternative text `23 Web`.
4. Keep **Use as site icon** off for the wide wordmark.
5. In Settings → General → Site Icon, upload `assets/brand/site-icon-512.png`.

If no logo has been configured, the linked Site Title remains as a usable text fallback. Header navigation uses WordPress's responsive Navigation block. The contact button points to `/contact/`; update it if the final URL differs.

## Brand assets

`assets/brand/23-web-logo-original.png` is a byte-for-byte preservation copy of the supplied RGBA source. Its SHA-256 is:

```text
5116a336d4e3b4d6fbc52447216c5583e63e723ea487230b41e90b5df71ceb82
```

Derived PNGs are non-destructive crops or resizes of those source pixels:

- `23-web-wordmark.png` — tight high-resolution wordmark crop
- `23-web-wordmark-compact.png` — compact wide Site Logo upload
- `23-web-monogram.png` — square high-resolution monogram
- `site-icon-512.png` and `site-icon-192.png` — square monogram site icons

No vector tracing or newly interpreted version of the logo is included. Keep the preserved original when replacing or regenerating derivatives.

## Design system

The child theme sets a black/white editorial base with exact brand accents:

- black `#09080a`
- white `#ffffff`
- off-white `#f7f5f7`
- grey 700 `#555158`
- grey 300 `#d6d5d7`
- mint `#61ebb6`
- orchid `#dd75e7`
- brand gradient `#61ebb6` → `#dd75e7`

Space Grotesk is used for headings and interface labels. Source Sans 3 is used for body copy. The theme ships only Latin variable WOFF2 files (Source Sans 3 normal and italic, Space Grotesk normal), with no external font request at runtime. Both families are distributed under the SIL Open Font License 1.1; the licence texts are stored beside the font files.

## Editorial model

The homepage starter contains separate top-level sections for:

- hero;
- selected work;
- numbered services;
- the direct, personal working relationship;
- process;
- website care;
- West Yorkshire/local positioning;
- honest testimonial placeholders;
- contact call to action.

Each outer section uses WordPress `contentOnly` locking. With 23 Core active, a 23 Site Manager can edit text, links, images and alternative text inside these sections, and can reorder or remove whole top-level sections. The internal columns, groups, spacing and hierarchy remain protected by the editor. Locking is an editorial guardrail; server-side WordPress and 23 Core capabilities remain the security boundary.

Administrators retain structural control over templates, template parts, global styles, navigation entities and lock state. WordPress can store Administrator template edits in the database; those overrides take precedence over theme files and must be reviewed during future theme updates.

## Accessibility and security foundations

- Semantic header, main and footer landmarks come from the child and parent templates.
- The parent-provided skip link targets `#main`; the child supplies a high-contrast focus treatment.
- The Navigation block provides the keyboard-operable responsive menu behaviour.
- Fluid type, restrained line lengths, responsive columns, reduced-motion handling and visible focus states are included.
- Pattern strings are translated and escaped for their output context.
- PHP blocks direct execution and uses the `twentythree_web_` prefix.
- The theme performs no form processing, database migration, remote runtime request or privileged action.

Editorial accessibility still requires meaningful image alternatives, logical headings, descriptive links, captions where necessary and honest content review.

## Testing

Run the clean WordPress Playground suite from this repository:

```sh
tests/run-playground.sh \
  "/absolute/path/to/23 Web Website" \
  "/absolute/path/to/23 Core Plugin"
```

The suite mounts all three repositories, activates 23 Core and the child theme, configures representative homepage content, and runs role, pattern, lock, asset, fallback-template and rendered-markup assertions on WordPress 6.6/PHP 7.4 and the current WordPress/PHP targets declared in the blueprints.

Viewport, keyboard, Site Editor and visual checks still require a browser session. Automated runtime checks cannot judge logo legibility, real content quality, final image crops or whether an Administrator finds the Site Editor workflow intuitive.

## Scope boundaries

This repository intentionally excludes custom blocks, custom post types, custom fields, forms, booking, ecommerce, analytics, memberships, directory features, schema, update delivery, deployment infrastructure and speculative integrations.

Reusable presentation belongs in 23 Theme. Portable capabilities and editorial governance belong in 23 Core. This child theme should remain the small branded presentation and starter-content layer for the 23 Web site itself.

## Licensing

Theme PHP, HTML, CSS and JSON are licensed under GNU GPL version 2 or later. Bundled font software is separately licensed under SIL OFL 1.1 as documented in `assets/fonts/`.
