Plugin Name: HWCOE Cards  
Description: Card shortcode and ACF InnerBlock
Version: 1.0.1
License: GPL  
Author: Herbert Wertheim College of Engineering  
Author URI: http://www.eng.ufl.edu  

Provides a card shortcode and block. Using the Card block requires the ACF PRO plugin. HWCOE Cards cannot be used with the UF HWCOE 2018 theme.

Also makes use of the Bootstrap card specs. See https://getbootstrap.com/docs/4.0/components/card/

# Installation/Activation:
- Upload hwcoe-card folder to /wp-content/plugins/
- Activate HWCOE Cards plugin on Plugins page in site dashboard

# Usage:

## Changes from card module in UF HWCOE 2018 Theme
- Cards have no floats, so shortcodes or Card blocks must be nested within a Row block in the Gutenberg editor.
- Allow row to wrap to multiple lines
- In Card block, most content can be entered in block settings. Enter a Card URL to enable card linkage.

## Shortcode:

### Basic usage

```

[ufl-card]
<h3>HTML is Allowed</h3>
Card content here
[/ufl-card]

```
### With image, headline, and button, set to take up 50% of the container width

```

[ufl-card headline="AI in Space and Communications" image="https://www.eng.ufl.edu/wp-content/uploads/2021/02/AIspeakerseries-card-gattle.jpg" button_link="https://www.youtube.com/watch?v=cwCh8L7aFQI" button_text="Watch Video" new_window="true" cards_per_row=2]
<p><strong>Featuring Bill Gattle (BSME ’84, MS ’87), President of Space Systems at L3Harris Technologies</strong> Learn about the role of AI in space and communications and what it takes to develop an AI-enabled workforce.</p>
<h3>Jan. 27, 2021</h3>
[/ufl-card]

```

### Shortcode attributes and defaults
- cards_per_row: 3 (can specify 2 through 4)
- headline (optional): none
- image (optional): none (enter image ID or URL)
- button_text: "Learn More" 
- button_link (optional): none (enter link URL to enable button)
- new_window: 0/no (enter "1", "yes", or "true" to open button link in new window)

## Card block:
 - Within a Row block, add a new block and search for Card (ACF Block) to enter
 - Select outer Card block to change block settings
 - Card width can be 25%, 33%, or 50% of container 
 - Upload or select image and add headline if desired
 - Add card URL if the entire card should be a link; set new window and animate options (default is false)
 - Update body copy. Can add any desired blocks, including links if there is no Card URL set.

== Changelog ==

1.0.1
---
- Add custom class for cards to separate out custom styles
- Adjust width of .card-link to take up 100% of container

1.0.0
---
- Initial version
