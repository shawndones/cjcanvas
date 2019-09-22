<?php get_header(); ?>
  <?php while (have_posts()) : the_post(); 
    if ( !empty( get_the_content() ) ){ ?>
      
      <?php the_content(); ?>
      
    <?php	} ?>
  <?php  endwhile; ?>
  <style>/*
Atomic design is philosophically complimentary with these CSS approaches:

* SMACSS by Jonathan Snook http://smacss.com/
* OOCSS by Nicole Sullivan http://oocss.org/
* BEM CSS Methology : http://bem.info/method/
* CSS Guidelines by Harry Roberts : https://github.com/csswizardry/CSS-Guidelines

So feel free to use any of these approaches. Or don't. It's totally up to you.

*/
/*------------------------------------*\
    $TABLE OF CONTENTS
    based generally on Harry Roberts excellent CSS Guidelines https://github.com/csswizardry/CSS-Guidelines
\*------------------------------------*/
/**
 * ABSTRACTS..............Declarations of Sass variables and mixins
 * Mixins.................Mixin styles that are included in the site
 * Variables..............Variables for styles that are used in the site
 *
 * BASE...................Base/reset styles for certain elements
 * Animation..............Animation base styles
 * Forms..................Form field base styles
 * Global Classes.........Base styles used across the entirety of the site
 * Headings...............Base styles for headings (h1, h2, etc.)
 * Links..................Base styles for links
 * Lists..................Base styles lists
 * Main...................Base styles for main section
 * Media..................Base styles for various media (videos, iframes, etc.)
 * Reset..................Reset base styles (i.e. Display block on certain elements)
 * Tables.................Base styles for tables
 * Text...................Base styles for text elements
 *
 * COMPONENTS.............Styles for certain components
 * Accordion..............Styles for accordion components
 * Article................Styles for article components
 * Blocks.................Styles for block components
 * Buttons................Styles for button components
 * Carousels..............Styles for carousels
 * Comments...............Styles for comments component
 * Footer.................Styles for the footer component
 * Forms..................Styles for form components
 * Header.................Styles for header component
 * Icons..................Styles for icons
 * Lists..................Styles for types of lists
 * Main...................Styles for main section
 * Messaging..............Styles for alerts/messaging components
 * Nav....................Styles for navigation components
 * Sections...............Styles for section components
 * Tabs...................Styles for tabs
 * Text...................Styles for text components
 * Tooltip................Styles for tooltips

 *
 * LAYOUT.................Styles that affect the site's general layout
 * Layout.................Layout styles
 *
 * UTILITIES..............Styles that require a utility class
 *
 */
/*------------------------------------*\
    $ABSTRACTS
\*------------------------------------*/
/*------------------------------------*\
    #MIXINS
\*------------------------------------*/
/** CSS Transition
 *	Usage: @include transition(width,0.3s,ease-out);
 */
/** Rem Unit font sizes with relative fallback http:/seesparkbox.com/foundry/scss_rem_mixin_now_with_a_better_fallback  
 *	Usage: @include font-size(1, large);
 */
/*------------------------------------*\
    #VARIABLES
\*------------------------------------*/
/*------------------------------------*\
    #COLORS
\*------------------------------------*/
/*
 * 1) Color variables involve a two-tier system to keep colors in sync. The
 *    first tier defines the brand and neutral colors, and the second tier
 *    defines the application of those colors.
 */
/*
 * Brand Colors
 * 1) Brand color variables use English names to define colors to make palettes easier to
 *    identify. Names are generated using this tool: http://chir.ag/projects/name-that-color/
 * 2) Brand color variables should typically not be used directly in Sass partials. Instead, use
 *    second-tier application colors.
 *
 */
/*
 * Neutral Colors
 * 1) Neutral color variables use a numbered system to define variables for better maintainability.
 *    "$color-gray-10" means "10% gray", which is a gray closer to white than to black. For more info
 *    read https://medium.com/eightshapes-llc/color-in-design-systems-a1c80f65fa3#.brevrq67p
 */
/**
 * Utility Colors
 * 1) Utility colors are colors used to provide feedback, such as alert messages,
 * form validation, etc.
 */
/*
  * Text Colors
  * 1) These are non-linked text colors, such as body copy.
  */
/*
 * Heading Colors
 * 1) These are non-linked heading colors, such as h2, h3, etc.
 */
/*
 * Text Link Colors
 * 1) These are for linked text, such as a link found within an article,
 *    navigation link, footer link, etc.
 */
/*
 * Border Colors
 * 1) Border colors are used as decoration or dividers, such as as a seperator
 *    for navigation items, block borders, etc.
 */
/*------------------------------------*\
    #TYPOGRAPHY
\*------------------------------------*/
/*------------------------------------*\
    #LAYOUT
\*------------------------------------*/
/**
 * Spacing Defaults
 */
/*------------------------------------*\
    #BORDERS
\*------------------------------------*/
/**
 * Border Width
 */
/**
 * Border Radius
 */
/*------------------------------------*\
    #ANIMATION
\*------------------------------------*/
/**
 * Animation Duration
 */
/**
 * Animation Easing
 */
/*------------------------------------*\
    #BREAKPOINTS
\*------------------------------------*/
/**
 * Breakpoints
 */
/*------------------------------------*\
    $BASE
\*------------------------------------*/
/*------------------------------------*\
    #BODY
\*------------------------------------*/
html {
  font-size: 16px; }
  @media screen and (min-width: 320px) {
    html {
      font-size: calc(16px + 8 * ((100vw - 320px) / 1680)); } }
  @media screen and (min-width: 2000px) {
    html {
      font-size: 24px; } }

/**
 * Body base styles
 */
body {
  background: #fff;
  color: #808080;
  -webkit-text-size-adjust: 100%;
  min-height: 100vh;
  display: flex;
  flex-direction: column; }

/*------------------------------------*\
    #ANIMATION
\*------------------------------------*/
/**
 * Fade Animation
 */
.animate-fade {
  -webkit-transition: opacity 0.3s ease-out;
  -moz-transition: opacity 0.3s ease-out;
  -ms-transition: opacity 0.3s ease-out;
  -o-transition: opacity 0.3s ease-out;
  transition: opacity 0.3s ease-out; }
  .animate-fade:hover {
    opacity: 0; }

/*------------------------------------*\
    #FORMS
\*------------------------------------*/
/**
 * Fieldset base styles
 */
fieldset {
  border: 0;
  padding: 0;
  margin: 0; }

/**
 * Label base styles
 */
label {
  display: block;
  padding-bottom: 0.2rem;
  font-weight: bold; }

/**
 * Form button, input, select, and text area base styles
 * 1) Zero out margin and inherit font styles
 */
button, input, select, textarea {
  font-family: inherit;
  font-size: 100%;
  margin: 0; }

/**
 * Input and text area base styles
 * 1) Width entire container, gray border, padding
 */
input, textarea {
  width: 100%;
  border: 1px solid #a5a5a5;
  border-radius: 6px;
  padding: 1rem; }

/**
 * Input areas base styles
 * 1) Get rid of webkit appearance of these areas
 */
input[type=text], input[type=search], input[type=url], input[type=number], textarea {
  -webkit-appearance: none; }

/**
 * Button/Submit button base styles
 */
button, input[type="submit"] {
  padding: 0.5em;
  background: #444444;
  border: 1px solid #808080;
  cursor: pointer; }

/**
 * Checkboxes/Radio button base styles
 */
input[type="checkbox"],
input[type="radio"] {
  width: auto;
  margin-right: 0.3em; }

/**
 * Search cancel button and search decoration webkit appearance none
 */
input[type="search"]::-webkit-search-cancel-button,
input[type="search"]::-webkit-search-decoration {
  -webkit-appearance: none; }

/*------------------------------------*\
    #GLOBAL CLASSES
\*------------------------------------*/
/**
 * Clearfix
 */
.cf {
  *zoom: 1; }

/**
 * Clearfix pseudo-elements
 */
.cf:before, .cf:after {
  content: " ";
  /* 1 */
  display: table;
  /* 2 */ }

.cf:after {
  clear: both; }

/**
 * Completely remove from the flow and screen readers.
 */
.is-hidden {
  display: none !important;
  visibility: hidden !important; }

/**
 * Completely remove from the flow but leave available to screen readers.
 */
.is-vishidden {
  position: absolute !important;
  overflow: hidden;
  width: 1px;
  height: 1px;
  padding: 0;
  border: 0;
  clip: rect(1px, 1px, 1px, 1px); }

/**
 * Text align right
 */
.align-right {
  text-align: right; }

/**
 * Text align center
 */
.align-center {
  text-align: center; }

/**
 * Text Align left
 */
.align-left {
  text-align: left; }

/**
 * Hide on small screens
 */
@media all and (max-width: 46.8em) {
  .hide-small {
    display: none; } }

/**
 * Hide on medium screens
 */
@media all and (min-width: 46.8em) and (max-width: 50em) {
  .hide-med {
    display: none; } }

/**
 * Hide on large screens
 */
@media all and (min-width: 50em) {
  .hide-large {
    display: none; } }

/**
 * Show valid text color
 */
.valid {
  color: #03804d; }

/**
 * Show error text color
 */
.error {
  color: #b12a0b; }

/**
 * Show warning text color
 */
.warning {
  color: #a59b15; }

/**
 * Show informational text color
 */
.information {
  color: #0192d0; }

/**
 * Display secondary font family
 */
.font-secondary {
  font-family: Georgia, Times, "Times New Roman", serif; }

/*------------------------------------*\
    #HEADINGS
\*------------------------------------*/
h1, .h1 {
  font-size: 2.0736rem; }
  h1, .h1 {
    font-size: 27.648px; }
    @media screen and (min-width: 320px) {
      h1, .h1 {
        font-size: calc(27.648px + 26.352 * ((100vw - 320px) / 1680)); } }
    @media screen and (min-width: 2000px) {
      h1, .h1 {
        font-size: 54px; } }

h2, .h2 {
  font-size: 1.728rem; }
  h2, .h2 {
    font-size: 27.648px; }
    @media screen and (min-width: 320px) {
      h2, .h2 {
        font-size: calc(27.648px + 26.352 * ((100vw - 320px) / 1680)); } }
    @media screen and (min-width: 2000px) {
      h2, .h2 {
        font-size: 54px; } }

h3, .h3 {
  font-size: 1.44rem; }
  h3, .h3 {
    font-size: 23.04px; }
    @media screen and (min-width: 320px) {
      h3, .h3 {
        font-size: calc(23.04px + 12.96 * ((100vw - 320px) / 1680)); } }
    @media screen and (min-width: 2000px) {
      h3, .h3 {
        font-size: 36px; } }

/**
 * Heading 4
 */
h4, .h4 {
  font-size: 1.75rem; }

/**
 * Heading 5
 */
h5, .h5 {
  font-size: 1.25rem; }

/**
 * Heading 6
 */
h6, .h6 {
  font-size: 1rem; }

/**
 * Subheading
 */
.subheading {
  font-family: Georgia, Times, "Times New Roman", serif;
  font-weight: normal; }


/**
 * Ordered/Unordered list base styles
 */
ol, ul {
  margin: 0;
  padding: 0;
  list-style: none; }

/**
 * Definition list base styles
 */
dl {
  overflow: hidden;
  margin: 0 0 1em; }

/**
 * Terms/Names base styles
 */
dt {
  font-weight: bold; }

/**
 * Definition list description base styles
 */
dd {
  margin-left: 0; }

/*------------------------------------*\
    #MAIN
\*------------------------------------*/
/**
 * Main content area
 */
[role=main] {
  flex: 1; }

/*------------------------------------*\
    #MEDIA ELEMENTS
\*------------------------------------*/
/**
 * Make media elements responsive
 */
img, video, object {
  max-width: 100%;
  height: auto; }

/**
 * Iframe base styles
 */
iframe {
  margin-bottom: 1em; }

/**
 * Figure base styles
 */
figure {
  margin-bottom: 1em;
  /**
	 * Figure image base styles
	 */ }
  figure img {
    margin-bottom: 0.5em; }

/**
 * Figure caption base styles
 */
figcaption {
  font-style: italic; }

img[class*="_round"] {
  border-radius: 50%; }

/*------------------------------------*\
    #RESET
\*------------------------------------*/
/**
 * Use border box on all elements
 */
* {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box; }

/**
 * Zero out margin and padding on most elements as base style
 */
html, body, div, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, ol, ul, li, form, legend, label, table, header, footer, nav, section, figure {
  margin: 0;
  padding: 0; }

/**
 * Display block as base for these elements
 */
header, footer, nav, section, article, hgroup, figure {
  display: block; }

/* Define the "system" font family */
@font-face {
  font-family: system;
  font-style: normal;
  font-weight: 300;
  src: local(".SFNSText-Light"), local(".HelveticaNeueDeskInterface-Light"), local(".LucidaGrandeUI"), local("Ubuntu Light"), local("Segoe UI Light"), local("Roboto-Light"), local("DroidSans"), local("Tahoma"); }

/* Now, let's apply it on an element */
body {
  font-family: "system"; }

/*------------------------------------*\
    #TABLE
\*------------------------------------*/
/**
 * Table base styles
 */
table {
  border-collapse: collapse;
  border-spacing: 0;
  border: 1px solid #808080;
  width: 100%; }

/**
 * Table header base styles
 */
th {
  text-align: left;
  border: 1px solid #808080;
  padding: 0.2em; }

/**
 * Table cell base styles
 */
td {
  border: 1px solid #808080;
  padding: 0.2em; }

/*------------------------------------*\
    #TEXT
\*------------------------------------*/
/**
 * Paragraph base styles
 */
p {
  margin-bottom: 1em; }

/**
 * Blockquote base styles
 */
blockquote {
  font-style: italic;
  border-left: 1px solid #808080;
  color: #808080;
  padding-left: 1em;
  margin-bottom: 1em; }

/**
 * Horizontal rule base styles
 */
hr {
  border: 0;
  height: 2px;
  background: #d9d9d9;
  margin: 2em 0; }

/**
 * Abbreviation base styles
 */
abbr {
  border-bottom: 1px dotted #808080;
  cursor: help; }

/*------------------------------------*\
    $COMPONENTS
\*------------------------------------*/
/*------------------------------------*\
    #BLOCKS
\*------------------------------------*/
/**
 * 1) Blocks are collections of text and/or images/media working together as a unit.
 */
/*------------------------------------*\
	#HERO BLOCK
\*------------------------------------*/
.c-block-hero {
  display: block;
  position: relative; }

/**
 * Hero Image
 * 1) This is the primary hero image that runs full-bleed across the layout
 */
.c-block-hero__img {
  display: block;
  width: 100%;
  max-height: 50vh;
  object-fit: cover; }

/**
 * Hero Headline
 * 1) This sits overtop of the hero image when space permits
 */
.c-block-hero__headline {
  background: rgba(0, 0, 0, 0.5);
  color: #fff;
  padding: 1rem;
  font-size: 2.6rem;
  transition: all 0.2s ease; }
  @media all and (min-width: 50em) {
    .c-block-hero__headline {
      position: absolute;
      top: 3rem;
      left: 1rem;
      width: 50%;
      border-radius: 6px; } }
  .c-block-hero:hover .c-block-hero__headline, .c-block-hero:focus .c-block-hero__headline {
    background: #444444; }

/*------------------------------------*\
	#MEDIA BLOCK
\*------------------------------------*/
/**
 * 1) Media block contains an image (or some other media) on the left
 * and text on the right.
 * 2) For more info, read http://www.stubbornella.org/content/2010/06/25/the-media-object-saves-hundreds-of-lines-of-code/
 */
.c-block-media {
  display: flex;
  transition: all 0.2s ease; }
  .c-block-media:hover .c-block-media__headline, .c-block-media:focus .c-block-media__headline {
    color: #fed559; }
  .c-block-media--small {
    font-size: 0.875rem; }

/**
 * Media Container
 * 1) This is the container that holds the block image (or media)
 */
.c-block-media__media {
  width: 20%;
  max-width: 11em;
  margin-right: 1rem; }
  .c-block-media--small .c-block-media__media {
    max-width: 3.5em;
    margin-right: 0.5rem; }
  @media all and (min-width: 46.8em) {
    .c-block-media__media {
      width: 50%;
      margin-right: 1.5rem; } }

.c-block-media__img {
  border-radius: 6px; }

.c-block-media__headline {
  margin-bottom: 0.2em;
  color: #595959;
  transition: all 0.2s ease; }
  .c-block-media--small .c-block-media__headline {
    font-size: 1rem; }

.c-block-media__body {
  display: flex;
  flex-direction: column;
  justify-content: center;
  flex: 1; }

.c-block-media__excerpt {
  color: #a5a5a5;
  transition: all 0.2s ease; }
  .c-block-media--small .c-block-media__excerpt {
    margin-bottom: 0;
    line-height: 1.2; }

/*------------------------------------*\
	#TOUT BLOCK
\*------------------------------------*/
/**
 * 1) The tout block contains an image and headline overlayed over the image.
 */
.c-block-tout {
  display: inline-block;
  margin-bottom: 0.5em;
  position: relative;
  overflow: hidden;
  border-radius: 6px; }

/**
 *  Tout image
 */
.c-block-tout__img {
  display: block; }

/**
 *  Tout headline
 */
.c-block-tout__headline {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  background: rgba(0, 0, 0, 0.5);
  color: #fff;
  padding: 0.5em;
  font-size: 1.4rem;
  transition: all 0.2s ease; }
  .c-block-tout:hover .c-block-tout__headline, .c-block-tout:focus .c-block-tout__headline {
    padding-bottom: 2rem; }

/*------------------------------------*\
	#TILE BLOCK
\*------------------------------------*/
/**
 * 1) The tile block contains a span and headline overlayed on a background
 */
.c-block-tile {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  width: 100%;
  background: rgba(0, 0, 0, 0.5);
  color: #fff;
  border-radius: 6px;
  padding: 1em 1em;
  text-align: center;
  overflow: hidden;
  transition: all 0.2s ease; }
  .c-block-tile:hover, .c-block-tile:focus {
    background: rgba(0, 0, 0, 0.7);
    color: #fff; }
  @media all and (min-width: 55rem) {
    .c-block-tile {
      padding: 4em 1em; } }

/**
 * Featured tile block
 */
.c-block-tile--featured {
  min-height: 200px; }

/**
 * Tile block value
 */
.c-block-tile__value {
  font-size: 1.5rem;
  line-height: 1.2;
  /**
	 * Tile value when inside featured tile parent selector
	 */ }
  .c-block-tile--featured .c-block-tile__value {
    font-size: 2.5rem; }
    @media all and (min-width: 46.8em) {
      .c-block-tile--featured .c-block-tile__value {
        font-size: 5rem; } }
  @media all and (min-width: 55rem) {
    .c-block-tile__value {
      font-size: 3rem; } }

.c-block-tile__label {
  color: #d9d9d9;
  font-weight: normal;
  font-size: 1rem; }

/*------------------------------------*\
	#FEATURE CARD - []
\*------------------------------------*/
.feature-card {
  text-align: center; }
  .feature-card__inner {
    padding: 2vw; }
  .feature-card__icon {
    display: block;
    width: auto;
    margin: 1em auto; }

/*------------------------------------*\
    #BUTTONS
\*------------------------------------*/
/**
 * Button
 */
.c-btn {
  display: inline-block;
  background: #fed559;
  color: #fff;
  line-height: 1;
  font-weight: bold;
  padding: 1rem 2rem;
  border: 0;
  border-radius: 6px;
  text-align: center;
  transition: background 0.2s ease;
  text-transform: uppercase;
  /**
	 * Disabled button
	 */ }
  .c-btn:hover, .c-btn:focus {
    background: #e8b132;
    color: #fff; }
  .c-btn.disabled {
    background: #d9d9d9;
    color: #808080; }

/**
 * Small button
 */
.c-btn-small {
  padding: 0.5em; }

/**
 * Large button
 */
.c-btn-large {
  padding: 0.5em;
  text-transform: uppercase;
  background: #808080;
  font-size: 1.4rem;
  font-weight: normal; }

/**
 * Text button
 */
.c-text-btn {
  position: relative;
  background: none;
  border: none;
  font-style: normal;
  font-weight: bold;
  font-size: 1.2rem; }
  .c-text-btn:after {
    position: absolute;
    content: "";
    height: 20px;
    width: 20px;
    background: url("../../../images/icon-arrowhead.svg") no-repeat;
    top: 7px;
    right: -26px;
    transition: all 0.2s ease; }
  .c-text-btn:hover, .c-text-btn:focus {
    color: #444444; }
    .c-text-btn:hover:after, .c-text-btn:focus:after {
      right: -28px; }
  .c-block-media--small .c-text-btn {
    font-size: 1rem; }

/**
 * Button on overlay
 */
.c-btn--overlay {
  background: #a5a5a5; }

/*------------------------------------*\
    #CAROUSEL
\*------------------------------------*/
/**
 * Horizontal carousel
 */
.carousel-horizontal {
  margin-bottom: 1em;
  overflow: hidden;
  position: relative; }

/**
 * Carousel island container
 */
.carousel-island-container {
  overflow: hidden; }

/**
 * Carousel container
 */
.carousel-container {
  position: relative; }

/**
 * Carousel list
 */
/**
 * Carousel controls
 */
.carousel-controls {
  display: table;
  width: 100%;
  margin: -0.5em 0 1em;
  /**
	 * Carousel pagination
	 */
  /**
	 * Carousel next button
	 */ }
  .carousel-controls a, .carousel-controls div {
    display: table-cell;
    padding: 0.5em; }
  .carousel-controls .carousel-pagination {
    text-align: center; }
  .carousel-controls .carousel-next {
    text-align: right; }


/*------------------------------------*\
    #LISTS
\*------------------------------------*/
/**
 * Inline list
 */
.inline-list li {
  display: inline-block; }

/**
 * Social list
 */
.social-list li {
  margin: 0 0.4rem 1em 0; }

.social-list a {
  font-size: 1.6em; }

/**
 * Headline list
 */
.headline-list {
  margin-bottom: 1em; }
  .headline-list.flush {
    margin: 0; }
  .headline-list h4 {
    font-weight: normal; }
  .headline-list li {
    padding: 0.25em 0;
    border-top: 1px solid #a5a5a5; }

/**
 * Post list
 */
.post-list li {
  margin-bottom: 1em; }

/**
 * Bullet list
 */
.bullet-list {
  list-style: square;
  margin: 0 0 1em 1.2em;
  line-height: 1.3; }
  .bullet-list li {
    margin-bottom: 1em; }

/**
 * Text list
 */
.text-list {
  margin: 0 0 1em;
  line-height: 1.3; }
  .text-list li {
    margin-bottom: 1em; }

/**
 * Media List
 */
.c-media-list__item {
  margin-bottom: 1.5em; }

/**
 * Tile list
 */
.c-tile-list {
  display: flex;
  flex-direction: column; }
  @media all and (min-width: 55rem) {
    .c-tile-list {
      flex-direction: row;
      flex-wrap: wrap; } }

/**
 * Tile list item
 */
.c-tile-list__item {
  width: 100%;
  margin-bottom: 1em;
  position: relative; }
  .c-tile-list__item:nth-child(2n) {
    padding-right: 0; }
  @media all and (min-width: 55rem) {
    .c-tile-list__item {
      width: 50%;
      margin: 0;
      padding: 0 1em 1em 0; } }

/*------------------------------------*\
    #MESSAGING
\*------------------------------------*/
/**
 * Alert
 */
.alert {
  text-align: center;
  padding: 0 1rem;
  background: #f7f9f9;
  overflow: hidden;
  font-size: 1em;
  animation: slideDown 2s forwards; }
  .alert a {
    color: inherit;
    text-decoration: underline; }

/**
 * Error alert
 */
.alert--error {
  color: #b12a0b;
  background: #fdded8; }

/**
 * Success alert
 */
.alert--success {
  color: #03804d;
  background: #d4f3e6; }

/**
 * Warning alert
 */
.alert--warning {
  color: #a59b15;
  background: #fffecf; }

/**
 * Info alert
 */
.alert--info {
  color: #0192d0;
  background: #d3f2ff; }

/**
 * Slidedown animation
 */
@keyframes slideDown {
  0% {
    max-height: 0;
    padding: 0; }
  100% {
    padding: 1rem;
    max-height: 12em; } }

/**
 * Overlay
 */
.c-overlay {
  display: block;
  padding: 1em;
  background: rgba(0, 0, 0, 0.7);
  border-radius: 6px;
  position: relative;
  height: 100%;
  width: 100%;
  top: 0;
  left: 0;
  border-radius: 6px;
  text-align: center;
  padding: 1em;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column; }
  .c-overlay--is-hidden {
    display: none; }
  .c-tile-grid__primary .c-overlay {
    position: absolute; }
  .c-tile-list__item .c-overlay {
    position: absolute; }
  .c-section .c-overlay {
    position: absolute; }

/**
 * Overlay Intro
 */
.c-overlay__intro {
  font-size: 1.5rem;
  color: #fff; }

/*------------------------------------*\
    #PRIMARY NAVIGATION
\*------------------------------------*/
/**
 * Navigation tag
 */
.c-primary-nav {
  display: none; }
  .c-primary-nav--is-active {
    display: block;
    position: absolute;
    padding: 1em 2em;
    top: 67px;
    right: 0;
    box-shadow: -3px 3px 5px -2px rgba(0, 0, 0, 0.2);
    z-index: 2;
    background: #fff; }
  @media all and (min-width: 46.8em) {
    .c-primary-nav {
      display: block;
      margin-right: 1rem; } }

/**
 * Nav List
 */
.c-primary-nav__list {
  display: none; }
  @media all and (min-width: 46.8em) {
    .c-primary-nav__list {
      display: flex; } }
  .c-primary-nav--is-active .c-primary-nav__list {
    display: block; }

/**
 * Nav Links
 */
.c-primary-nav__link {
  font-weight: bold;
  display: block;
  padding: 1rem;
  text-transform: uppercase;
  letter-spacing: 1px;
  color: #fff; }
  .c-primary-nav__link:hover, .c-primary-nav__link:focus {
    color: #e8b132; }

/**
 * Pagination
 */
.pagination {
  overflow: hidden; }
  .pagination li {
    float: left;
    border-right: 1px solid #d9d9d9; }
    .pagination li:last-child {
      border: 0; }
  .pagination a {
    padding: 1em; }

/*------------------------------------*\
    #PAGE HEADER
\*------------------------------------*/
/**
 * 1) The page header contains the page's heading, as perhaps other page information
 *    such as description or actions (edit, delete, etc).
 */
.c-page-header__title {
  padding: 1rem 0 0.5rem;
  position: relative;
  color: #444444; }
  .c-page-header__title:after {
    content: "";
    display: block;
    position: absolute;
    width: 3rem;
    height: 0.5rem;
    bottom: 0;
    background: #a5a5a5; }

/*------------------------------------*\
	#TEXT MODULE - [1, 2]
\*------------------------------------*/
/**
* The text module contains an image, headline, text blob, and button
*/
.m-text {
  text-align: center; }
  .m-text .c-section__title {
    margin-top: 2rem; }
    @media all and (min-width: 64rem) {
      .m-text .c-section__title {
        margin-top: 0; } }
  @media all and (min-width: 64rem) {
    .m-text.reverse .box--img {
      text-align: right; } }

.m-text--1 {
  padding: 5%; }
  @media all and (min-width: 64rem) {
    .m-text--1 {
      text-align: left; } }
  .m-text--1 img {
    width: 100%;
    max-width: 90%; }

@media all and (min-width: 64rem) {
  .m-text--2 {
    text-align: left; } }

.m-text--2 img {
  width: 100%;
  min-height: 100%;
  object-fit: cover; }

.m-text--2 .box--img {
  display: block;
  width: 100%; }

.m-text--2 .box--content {
  padding-bottom: 5%;
  padding-top: 5%;
  padding: 5%; }
  @media all and (min-width: 64rem) {
    .m-text--2 .box--content {
      padding-left: 0; } }

@media all and (min-width: 64rem) {
  .m-text--2.reverse .box--content {
    padding-left: 5%;
    padding-right: 0; } }

.m-text--4 {
  padding: 0 6%;
  text-align: center; }
  @media all and (min-width: 64rem) {
    .m-text--4 {
      padding: 0 2%; } }

/*------------------------------------*\
	#BANNER MODULE - []
\*------------------------------------*/
.m-banner {
  padding: 16vh 5%;
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center center; }
  .m-banner .inner-content {
    margin: 0 auto; }

/*------------------------------------*\
    #SECTIONS
\*------------------------------------*/
/**
 * Section
 */
.c-section {
  position: relative;
  margin: 0 0 2em; }
  @media all and (min-width: 39.8em) {
    .l-sidebar .c-section {
      margin-right: 2em;
      width: 50%; }
      .l-sidebar .c-section:last-child {
        margin-right: 0; } }
  @media all and (min-width: 50em) {
    .l-sidebar .c-section {
      width: 100%;
      margin-right: 0; } }

/**
 * Section title
 */
.c-section__title {
  position: relative;
  color: #444444;
  margin-bottom: 1.5rem;
  font-weight: 100; }

/**
 * Section block
 */
.c-tile-grid {
  background: url(../../images/sample/hero-mountains.jpg) no-repeat 50% 50% #444444;
  background-size: cover; }

.c-tile-grid__inner {
  display: flex;
  flex-direction: column; }
  @media all and (min-width: 46.8em) {
    .c-tile-grid__inner {
      flex-direction: row; } }

.c-tile-grid__primary {
  display: flex;
  position: relative;
  width: 100%;
  margin-bottom: 1rem; }
  @media all and (min-width: 46.8em) {
    .c-tile-grid__primary {
      width: 50%; } }
  @media all and (min-width: 55rem) {
    .c-tile-grid__primary {
      width: 30%; } }

.c-tile-grid__secondary {
  flex: 1; }
  @media all and (min-width: 46.8em) {
    .c-tile-grid__secondary {
      padding: 0 0 0 1em; } }

/*------------------------------------*\
    #TEXT
\*------------------------------------*/
/**
 * Passages of text
 */
.text a {
  text-decoration: underline; }

.text ul {
  list-style: disc;
  margin: 0 0 1em 1.2em; }
  .text ul ul {
    margin-bottom: 0; }

.text ol {
  list-style: decimal;
  margin: 0 0 1em 1.5em; }
  .text ol ol {
    margin-bottom: 0; }

/**
 * Text passage
 */
.s-text-passage {
  margin-bottom: 1rem; }

/**
 * Image within text passage
 */
.c-text-passage__img {
  border-radius: 6px;
  margin-bottom: 1rem; }

/*------------------------------------*\
    #BOX
\*------------------------------------*/
/**
 * 1) This component is a modal-like
 */
.c-box {
  border: 1px solid #808080;
  border-radius: 6px;
  padding: 2rem;
  margin: 2rem;
  align-self: center;
  justify-content: center;
  max-width: 32em;
  margin: 2rem auto; }

.c-box__header {
  text-align: center;
  margin-bottom: 2rem; }

/*------------------------------------*\
    #FEEDBACK
\*------------------------------------*/
/**
 * 1) Feedback consists of components that give information back to the user. Examples include progress bars, progress wheels, etc.
 */
/**
 * Progress bar
 */
.c-progress {
  -webkit-appearance: none;
  appearance: none;
  border: 1px solid rgba(0, 0, 0, 0.5);
  background: #cdcaa2;
  background-size: auto;
  width: 100%;
  max-width: 300px;
  height: 0.5rem;
  border-radius: 6px;
  margin-bottom: 1em; }

.c-progress::-moz-progress-bar {
  background-color: red;
  background-image: linear-gradient(to right, red, #f06d06, yellow, green);
  background-size: 300px 50px;
  border-radius: 6px; }

.c-progress::-webkit-progress-value {
  background-color: red;
  background-image: linear-gradient(to right, red, #f06d06, yellow, green);
  background-size: 300px 50px;
  border-radius: 6px; }

progress[value]::-webkit-progress-bar {
  border-radius: 6px; }

.anim::-moz-progress-bar {
  -moz-transition: width 4s ease; }

.anim::-webkit-progress-value {
  -webkit-transition: width 4s ease;
  -o-transition: width 4s ease;
  transition: width 4s ease; }

.c-progress.start::-moz-progress-bar {
  width: 0% !important;
  background: #cdcaa2 !important; }

.c-progress.start::-webkit-progress-value {
  width: 0% !important;
  background: #cdcaa2 !important; }

/*------------------------------------*\
    $LAYOUT
\*------------------------------------*/
.container-fluid,
.container {
  margin-right: auto;
  margin-left: auto; }

.container-fluid {
  padding-right: 2rem;
  padding-left: 2rem; }

.row {
  box-sizing: border-box;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-flex: 0;
  -ms-flex: 0 1 auto;
  flex: 0 1 auto;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
  -ms-flex-direction: row;
  flex-direction: row;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  margin-right: -0.5rem;
  margin-left: -0.5rem; }

.row.reverse {
  -webkit-box-orient: horizontal;
  -webkit-box-direction: reverse;
  -ms-flex-direction: row-reverse;
  flex-direction: row-reverse; }

.col.reverse {
  -webkit-box-orient: vertical;
  -webkit-box-direction: reverse;
  -ms-flex-direction: column-reverse;
  flex-direction: column-reverse; }

.col-xs,
.col-xs-1,
.col-xs-2,
.col-xs-3,
.col-xs-4,
.col-xs-5,
.col-xs-6,
.col-xs-7,
.col-xs-8,
.col-xs-9,
.col-xs-10,
.col-xs-11,
.col-xs-12,
.col-xs-offset-0,
.col-xs-offset-1,
.col-xs-offset-2,
.col-xs-offset-3,
.col-xs-offset-4,
.col-xs-offset-5,
.col-xs-offset-6,
.col-xs-offset-7,
.col-xs-offset-8,
.col-xs-offset-9,
.col-xs-offset-10,
.col-xs-offset-11,
.col-xs-offset-12 {
  box-sizing: border-box;
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  padding-right: 0.5rem;
  padding-left: 0.5rem; }

.col-xs {
  -webkit-box-flex: 1;
  -ms-flex-positive: 1;
  flex-grow: 1;
  -ms-flex-preferred-size: 0;
  flex-basis: 0;
  max-width: 100%; }

.col-xs-1 {
  -ms-flex-preferred-size: 8.33333333%;
  flex-basis: 8.33333333%;
  max-width: 8.33333333%; }

.col-xs-2 {
  -ms-flex-preferred-size: 16.66666667%;
  flex-basis: 16.66666667%;
  max-width: 16.66666667%; }

.col-xs-3 {
  -ms-flex-preferred-size: 25%;
  flex-basis: 25%;
  max-width: 25%; }

.col-xs-4 {
  -ms-flex-preferred-size: 33.33333333%;
  flex-basis: 33.33333333%;
  max-width: 33.33333333%; }

.col-xs-5 {
  -ms-flex-preferred-size: 41.66666667%;
  flex-basis: 41.66666667%;
  max-width: 41.66666667%; }

.col-xs-6 {
  -ms-flex-preferred-size: 50%;
  flex-basis: 50%;
  max-width: 50%; }

.col-xs-7 {
  -ms-flex-preferred-size: 58.33333333%;
  flex-basis: 58.33333333%;
  max-width: 58.33333333%; }

.col-xs-8 {
  -ms-flex-preferred-size: 66.66666667%;
  flex-basis: 66.66666667%;
  max-width: 66.66666667%; }

.col-xs-9 {
  -ms-flex-preferred-size: 75%;
  flex-basis: 75%;
  max-width: 75%; }

.col-xs-10 {
  -ms-flex-preferred-size: 83.33333333%;
  flex-basis: 83.33333333%;
  max-width: 83.33333333%; }

.col-xs-11 {
  -ms-flex-preferred-size: 91.66666667%;
  flex-basis: 91.66666667%;
  max-width: 91.66666667%; }

.col-xs-12 {
  -ms-flex-preferred-size: 100%;
  flex-basis: 100%;
  max-width: 100%; }

.col-xs-offset-0 {
  margin-left: 0; }

.col-xs-offset-1 {
  margin-left: 8.33333333%; }

.col-xs-offset-2 {
  margin-left: 16.66666667%; }

.col-xs-offset-3 {
  margin-left: 25%; }

.col-xs-offset-4 {
  margin-left: 33.33333333%; }

.col-xs-offset-5 {
  margin-left: 41.66666667%; }

.col-xs-offset-6 {
  margin-left: 50%; }

.col-xs-offset-7 {
  margin-left: 58.33333333%; }

.col-xs-offset-8 {
  margin-left: 66.66666667%; }

.col-xs-offset-9 {
  margin-left: 75%; }

.col-xs-offset-10 {
  margin-left: 83.33333333%; }

.col-xs-offset-11 {
  margin-left: 91.66666667%; }

.start-xs {
  -webkit-box-pack: start;
  -ms-flex-pack: start;
  justify-content: flex-start;
  text-align: start; }

.center-xs {
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  text-align: center; }

.end-xs {
  -webkit-box-pack: end;
  -ms-flex-pack: end;
  justify-content: flex-end;
  text-align: end; }

.top-xs {
  -webkit-box-align: start;
  -ms-flex-align: start;
  align-items: flex-start; }

.middle-xs {
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center; }

.bottom-xs {
  -webkit-box-align: end;
  -ms-flex-align: end;
  align-items: flex-end; }

.around-xs {
  -ms-flex-pack: distribute;
  justify-content: space-around; }

.between-xs {
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between; }

.first-xs {
  -webkit-box-ordinal-group: 0;
  -ms-flex-order: -1;
  order: -1; }

.last-xs {
  -webkit-box-ordinal-group: 2;
  -ms-flex-order: 1;
  order: 1; }

@media only screen and (min-width: 48em) {
  .container {
    width: 49rem; }
  .col-sm,
  .col-sm-1,
  .col-sm-2,
  .col-sm-3,
  .col-sm-4,
  .col-sm-5,
  .col-sm-6,
  .col-sm-7,
  .col-sm-8,
  .col-sm-9,
  .col-sm-10,
  .col-sm-11,
  .col-sm-12,
  .col-sm-offset-0,
  .col-sm-offset-1,
  .col-sm-offset-2,
  .col-sm-offset-3,
  .col-sm-offset-4,
  .col-sm-offset-5,
  .col-sm-offset-6,
  .col-sm-offset-7,
  .col-sm-offset-8,
  .col-sm-offset-9,
  .col-sm-offset-10,
  .col-sm-offset-11,
  .col-sm-offset-12 {
    box-sizing: border-box;
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    padding-right: 0.5rem;
    padding-left: 0.5rem; }
  .col-sm {
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    max-width: 100%; }
  .col-sm-1 {
    -ms-flex-preferred-size: 8.33333333%;
    flex-basis: 8.33333333%;
    max-width: 8.33333333%; }
  .col-sm-2 {
    -ms-flex-preferred-size: 16.66666667%;
    flex-basis: 16.66666667%;
    max-width: 16.66666667%; }
  .col-sm-3 {
    -ms-flex-preferred-size: 25%;
    flex-basis: 25%;
    max-width: 25%; }
  .col-sm-4 {
    -ms-flex-preferred-size: 33.33333333%;
    flex-basis: 33.33333333%;
    max-width: 33.33333333%; }
  .col-sm-5 {
    -ms-flex-preferred-size: 41.66666667%;
    flex-basis: 41.66666667%;
    max-width: 41.66666667%; }
  .col-sm-6 {
    -ms-flex-preferred-size: 50%;
    flex-basis: 50%;
    max-width: 50%; }
  .col-sm-7 {
    -ms-flex-preferred-size: 58.33333333%;
    flex-basis: 58.33333333%;
    max-width: 58.33333333%; }
  .col-sm-8 {
    -ms-flex-preferred-size: 66.66666667%;
    flex-basis: 66.66666667%;
    max-width: 66.66666667%; }
  .col-sm-9 {
    -ms-flex-preferred-size: 75%;
    flex-basis: 75%;
    max-width: 75%; }
  .col-sm-10 {
    -ms-flex-preferred-size: 83.33333333%;
    flex-basis: 83.33333333%;
    max-width: 83.33333333%; }
  .col-sm-11 {
    -ms-flex-preferred-size: 91.66666667%;
    flex-basis: 91.66666667%;
    max-width: 91.66666667%; }
  .col-sm-12 {
    -ms-flex-preferred-size: 100%;
    flex-basis: 100%;
    max-width: 100%; }
  .col-sm-offset-0 {
    margin-left: 0; }
  .col-sm-offset-1 {
    margin-left: 8.33333333%; }
  .col-sm-offset-2 {
    margin-left: 16.66666667%; }
  .col-sm-offset-3 {
    margin-left: 25%; }
  .col-sm-offset-4 {
    margin-left: 33.33333333%; }
  .col-sm-offset-5 {
    margin-left: 41.66666667%; }
  .col-sm-offset-6 {
    margin-left: 50%; }
  .col-sm-offset-7 {
    margin-left: 58.33333333%; }
  .col-sm-offset-8 {
    margin-left: 66.66666667%; }
  .col-sm-offset-9 {
    margin-left: 75%; }
  .col-sm-offset-10 {
    margin-left: 83.33333333%; }
  .col-sm-offset-11 {
    margin-left: 91.66666667%; }
  .start-sm {
    -webkit-box-pack: start;
    -ms-flex-pack: start;
    justify-content: flex-start;
    text-align: start; }
  .center-sm {
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    text-align: center; }
  .end-sm {
    -webkit-box-pack: end;
    -ms-flex-pack: end;
    justify-content: flex-end;
    text-align: end; }
  .top-sm {
    -webkit-box-align: start;
    -ms-flex-align: start;
    align-items: flex-start; }
  .middle-sm {
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center; }
  .bottom-sm {
    -webkit-box-align: end;
    -ms-flex-align: end;
    align-items: flex-end; }
  .around-sm {
    -ms-flex-pack: distribute;
    justify-content: space-around; }
  .between-sm {
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between; }
  .first-sm {
    -webkit-box-ordinal-group: 0;
    -ms-flex-order: -1;
    order: -1; }
  .last-sm {
    -webkit-box-ordinal-group: 2;
    -ms-flex-order: 1;
    order: 1; } }

@media only screen and (min-width: 64em) {
  .container {
    width: 65rem; }
  .col-md,
  .col-md-1,
  .col-md-2,
  .col-md-3,
  .col-md-4,
  .col-md-5,
  .col-md-6,
  .col-md-7,
  .col-md-8,
  .col-md-9,
  .col-md-10,
  .col-md-11,
  .col-md-12,
  .col-md-offset-0,
  .col-md-offset-1,
  .col-md-offset-2,
  .col-md-offset-3,
  .col-md-offset-4,
  .col-md-offset-5,
  .col-md-offset-6,
  .col-md-offset-7,
  .col-md-offset-8,
  .col-md-offset-9,
  .col-md-offset-10,
  .col-md-offset-11,
  .col-md-offset-12 {
    box-sizing: border-box;
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    padding-right: 0.5rem;
    padding-left: 0.5rem; }
  .col-md {
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    max-width: 100%; }
  .col-md-1 {
    -ms-flex-preferred-size: 8.33333333%;
    flex-basis: 8.33333333%;
    max-width: 8.33333333%; }
  .col-md-2 {
    -ms-flex-preferred-size: 16.66666667%;
    flex-basis: 16.66666667%;
    max-width: 16.66666667%; }
  .col-md-3 {
    -ms-flex-preferred-size: 25%;
    flex-basis: 25%;
    max-width: 25%; }
  .col-md-4 {
    -ms-flex-preferred-size: 33.33333333%;
    flex-basis: 33.33333333%;
    max-width: 33.33333333%; }
  .col-md-5 {
    -ms-flex-preferred-size: 41.66666667%;
    flex-basis: 41.66666667%;
    max-width: 41.66666667%; }
  .col-md-6 {
    -ms-flex-preferred-size: 50%;
    flex-basis: 50%;
    max-width: 50%; }
  .col-md-7 {
    -ms-flex-preferred-size: 58.33333333%;
    flex-basis: 58.33333333%;
    max-width: 58.33333333%; }
  .col-md-8 {
    -ms-flex-preferred-size: 66.66666667%;
    flex-basis: 66.66666667%;
    max-width: 66.66666667%; }
  .col-md-9 {
    -ms-flex-preferred-size: 75%;
    flex-basis: 75%;
    max-width: 75%; }
  .col-md-10 {
    -ms-flex-preferred-size: 83.33333333%;
    flex-basis: 83.33333333%;
    max-width: 83.33333333%; }
  .col-md-11 {
    -ms-flex-preferred-size: 91.66666667%;
    flex-basis: 91.66666667%;
    max-width: 91.66666667%; }
  .col-md-12 {
    -ms-flex-preferred-size: 100%;
    flex-basis: 100%;
    max-width: 100%; }
  .col-md-offset-0 {
    margin-left: 0; }
  .col-md-offset-1 {
    margin-left: 8.33333333%; }
  .col-md-offset-2 {
    margin-left: 16.66666667%; }
  .col-md-offset-3 {
    margin-left: 25%; }
  .col-md-offset-4 {
    margin-left: 33.33333333%; }
  .col-md-offset-5 {
    margin-left: 41.66666667%; }
  .col-md-offset-6 {
    margin-left: 50%; }
  .col-md-offset-7 {
    margin-left: 58.33333333%; }
  .col-md-offset-8 {
    margin-left: 66.66666667%; }
  .col-md-offset-9 {
    margin-left: 75%; }
  .col-md-offset-10 {
    margin-left: 83.33333333%; }
  .col-md-offset-11 {
    margin-left: 91.66666667%; }
  .start-md {
    -webkit-box-pack: start;
    -ms-flex-pack: start;
    justify-content: flex-start;
    text-align: start; }
  .center-md {
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    text-align: center; }
  .end-md {
    -webkit-box-pack: end;
    -ms-flex-pack: end;
    justify-content: flex-end;
    text-align: end; }
  .top-md {
    -webkit-box-align: start;
    -ms-flex-align: start;
    align-items: flex-start; }
  .middle-md {
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center; }
  .bottom-md {
    -webkit-box-align: end;
    -ms-flex-align: end;
    align-items: flex-end; }
  .around-md {
    -ms-flex-pack: distribute;
    justify-content: space-around; }
  .between-md {
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between; }
  .first-md {
    -webkit-box-ordinal-group: 0;
    -ms-flex-order: -1;
    order: -1; }
  .last-md {
    -webkit-box-ordinal-group: 2;
    -ms-flex-order: 1;
    order: 1; } }

@media only screen and (min-width: 75em) {
  .container {
    width: 76rem; }
  .col-lg,
  .col-lg-1,
  .col-lg-2,
  .col-lg-3,
  .col-lg-4,
  .col-lg-5,
  .col-lg-6,
  .col-lg-7,
  .col-lg-8,
  .col-lg-9,
  .col-lg-10,
  .col-lg-11,
  .col-lg-12,
  .col-lg-offset-0,
  .col-lg-offset-1,
  .col-lg-offset-2,
  .col-lg-offset-3,
  .col-lg-offset-4,
  .col-lg-offset-5,
  .col-lg-offset-6,
  .col-lg-offset-7,
  .col-lg-offset-8,
  .col-lg-offset-9,
  .col-lg-offset-10,
  .col-lg-offset-11,
  .col-lg-offset-12 {
    box-sizing: border-box;
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    padding-right: 0.5rem;
    padding-left: 0.5rem; }
  .col-lg {
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    max-width: 100%; }
  .col-lg-1 {
    -ms-flex-preferred-size: 8.33333333%;
    flex-basis: 8.33333333%;
    max-width: 8.33333333%; }
  .col-lg-2 {
    -ms-flex-preferred-size: 16.66666667%;
    flex-basis: 16.66666667%;
    max-width: 16.66666667%; }
  .col-lg-3 {
    -ms-flex-preferred-size: 25%;
    flex-basis: 25%;
    max-width: 25%; }
  .col-lg-4 {
    -ms-flex-preferred-size: 33.33333333%;
    flex-basis: 33.33333333%;
    max-width: 33.33333333%; }
  .col-lg-5 {
    -ms-flex-preferred-size: 41.66666667%;
    flex-basis: 41.66666667%;
    max-width: 41.66666667%; }
  .col-lg-6 {
    -ms-flex-preferred-size: 50%;
    flex-basis: 50%;
    max-width: 50%; }
  .col-lg-7 {
    -ms-flex-preferred-size: 58.33333333%;
    flex-basis: 58.33333333%;
    max-width: 58.33333333%; }
  .col-lg-8 {
    -ms-flex-preferred-size: 66.66666667%;
    flex-basis: 66.66666667%;
    max-width: 66.66666667%; }
  .col-lg-9 {
    -ms-flex-preferred-size: 75%;
    flex-basis: 75%;
    max-width: 75%; }
  .col-lg-10 {
    -ms-flex-preferred-size: 83.33333333%;
    flex-basis: 83.33333333%;
    max-width: 83.33333333%; }
  .col-lg-11 {
    -ms-flex-preferred-size: 91.66666667%;
    flex-basis: 91.66666667%;
    max-width: 91.66666667%; }
  .col-lg-12 {
    -ms-flex-preferred-size: 100%;
    flex-basis: 100%;
    max-width: 100%; }
  .col-lg-offset-0 {
    margin-left: 0; }
  .col-lg-offset-1 {
    margin-left: 8.33333333%; }
  .col-lg-offset-2 {
    margin-left: 16.66666667%; }
  .col-lg-offset-3 {
    margin-left: 25%; }
  .col-lg-offset-4 {
    margin-left: 33.33333333%; }
  .col-lg-offset-5 {
    margin-left: 41.66666667%; }
  .col-lg-offset-6 {
    margin-left: 50%; }
  .col-lg-offset-7 {
    margin-left: 58.33333333%; }
  .col-lg-offset-8 {
    margin-left: 66.66666667%; }
  .col-lg-offset-9 {
    margin-left: 75%; }
  .col-lg-offset-10 {
    margin-left: 83.33333333%; }
  .col-lg-offset-11 {
    margin-left: 91.66666667%; }
  .start-lg {
    -webkit-box-pack: start;
    -ms-flex-pack: start;
    justify-content: flex-start;
    text-align: start; }
  .center-lg {
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    text-align: center; }
  .end-lg {
    -webkit-box-pack: end;
    -ms-flex-pack: end;
    justify-content: flex-end;
    text-align: end; }
  .top-lg {
    -webkit-box-align: start;
    -ms-flex-align: start;
    align-items: flex-start; }
  .middle-lg {
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center; }
  .bottom-lg {
    -webkit-box-align: end;
    -ms-flex-align: end;
    align-items: flex-end; }
  .around-lg {
    -ms-flex-pack: distribute;
    justify-content: space-around; }
  .between-lg {
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between; }
  .first-lg {
    -webkit-box-ordinal-group: 0;
    -ms-flex-order: -1;
    order: -1; }
  .last-lg {
    -webkit-box-ordinal-group: 2;
    -ms-flex-order: 1;
    order: 1; } }

/*------------------------------------*\
    #LAYOUT
\*------------------------------------*/
/**
 * Layout container
 */
.l {
  max-width: 80em;
  margin: 0 auto;
  padding: 1rem; }

/*------------------------------------*\
    #TEMPLATES
\*------------------------------------*/
/**
 * 2 column layout
 */
.l--two-col {
  display: flex;
  flex-direction: column;
  /**
	 * Sidebar
	 */ }
  @media all and (min-width: 50em) {
    .l--two-col .l-main {
      width: 70%;
      padding-right: 1em; } }
  @media all and (min-width: 39.8em) {
    .l--two-col .l-sidebar {
      display: flex; } }
  @media all and (min-width: 50em) {
    .l--two-col .l-sidebar {
      flex-direction: column;
      width: 30%;
      padding: 0 0 0 1em; } }
  @media all and (min-width: 50em) {
    .l--two-col {
      flex-direction: row; } }

/*------------------------------------*\
    #GRIDS
\*------------------------------------*/
/**
 * Grid
 */
.g {
  overflow: hidden;
  margin: 0 -0.5em; }

/**
 * Grid item
 */
.gi {
  padding: 0.5em; }
  .gi img {
    display: block; }
  @media all and (min-width: 46.8em) {
    .gi {
      float: left; } }

/**
 * 2 up grid
 */
@media all and (min-width: 46.8em) {
  .g-2up > .gi {
    float: left;
    width: 50%; }
    .g-2up > .gi:nth-of-type(odd) {
      clear: left; } }

/**
 * Grid side by side
 */
.g-half > .gi {
  float: left;
  width: 50%; }
  .g-half > .gi:nth-of-type(odd) {
    clear: left; }

/**
 * 3 up grid
 */
@media all and (min-width: 46.8em) {
  .g-3up > .gi {
    float: left;
    width: 50%; }
    .g-3up > .gi:nth-of-type(2n+1) {
      clear: left; } }

@media all and (min-width: 50em) {
  .g-3up > .gi {
    width: 33.3333333%; }
    .g-3up > .gi:nth-of-type(2n+1) {
      clear: none; }
    .g-3up > .gi:nth-of-type(3n+1) {
      clear: left; } }

/**
 * 4 up grid
 */
@media all and (min-width: 46.8em) {
  .g-4up > .gi {
    float: left;
    width: 50%; }
    .g-4up > .gi:nth-of-type(2n+1) {
      clear: both; } }

@media all and (min-width: 50em) {
  .g-4up > .gi {
    width: 25%; }
    .g-4up > .gi:nth-of-type(2n+1) {
      clear: none; }
    .g-4up > .gi:nth-of-type(4n+1) {
      clear: left; } }

/**
 * Quarter grid always displayed side by side
 */
.g-quarter > .gi {
  float: left;
  width: 24%; }
  .g-quarter > .gi:nth-of-type(4n+1) {
    clear: left; }

/**
 * Grid max 4 up
 */
@media all and (min-width: 29.75em) {
  .g-max4 > .gi {
    float: left;
    width: 50%; }
    .g-max4 > .gi:nth-of-type(2n+1) {
      clear: both; } }

@media all and (min-width: 39.8em) {
  .g-max4 > .gi {
    width: 33.3333333%; }
    .g-max4 > .gi:nth-of-type(2n+1) {
      clear: none; }
    .g-max4 > .gi:nth-of-type(3n+1) {
      clear: left; } }

@media all and (min-width: 50em) {
  .g-max4 > .gi {
    width: 25%; }
    .g-max4 > .gi:nth-of-type(3n+1) {
      clear: none; }
    .g-max4 > .gi:nth-of-type(4n+1) {
      clear: left; } }

/**
 * Grid max of 5 up
 */
.g-max5 > .gi {
  float: left;
  width: 50%; }
  .g-max5 > .gi:nth-of-type(2n+1) {
    clear: both; }

@media all and (min-width: 39.8em) {
  .g-max5 > .gi {
    width: 33.3333333%; }
    .g-max5 > .gi:nth-of-type(2n+1) {
      clear: none; }
    .g-max5 > .gi:nth-of-type(3n+1) {
      clear: left; } }

@media all and (min-width: 46.8em) {
  .g-max5 > .gi {
    width: 25%; }
    .g-max5 > .gi:nth-of-type(3n+1) {
      clear: none; }
    .g-max5 > .gi:nth-of-type(4n+1) {
      clear: left; } }

@media all and (min-width: 48em) {
  .g-max5 > .gi {
    width: 20%; }
    .g-max5 > .gi:nth-of-type(4n+1) {
      clear: none; }
    .g-max5 > .gi:nth-of-type(5n+1) {
      clear: left; } }
</style>
  <section class="c-section m-banner row" style="background-image: url(http://cjcanvasprod.wpengine.com/wp-content/uploads/2019/08/fpo_hero.png);">
  <div class="inner-content col-sm-8 center-xs">
    <h2 class="h1 c-section__title">Section Title</h2>
    <p class="h6 c-section__title">Section Sub Title</p>
    <button class="c-btn ">Button</button>

    <button class="c-btn ">Button</button>

  </div>
</section><!--end section-->
<section class="c-section m-text m-text--1 row start-md middle-xs center-xs ">
  <div class="col col-md-6 box--img" >
    <img src="http://cjcanvasprod.wpengine.com/wp-content/uploads/2019/08/fpo_16x9.png" alt="Landscape Image" class="" />

  </div>
  <div class="col col-md-6 box--content" >
    <h2 class="c-section__title">Section Title</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, unde, dolore? Ex fugit, necessitatibus tempore neque ullam nostrum ducimus alias beatae voluptatibus iusto, perspiciatis tenetur consectetur reprehenderit, harum quae rerum!</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit corrupti fuga, quas quisquam perspiciatis. Consequatur, atque ducimus dolores natus officia qui rerum consectetur repellat ullam accusantium laboriosam, reprehenderit nemo deleniti</p>
    
    <button class="c-btn ">Button</button>

  </div>
</section><!--end section-->
<section class="c-section m-text m-text--2 row between-xs ">
  <div class="col col-md-6 box--img" >
    <img src="http://cjcanvasprod.wpengine.com/wp-content/uploads/2019/08/fpo_16x9.png" alt="Landscape Image" class="" />

  </div>
  <div class="col col-md-5 box--content" >
    <h2 class="c-section__title">Section Title</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, unde, dolore? Ex fugit, necessitatibus tempore neque ullam nostrum ducimus alias beatae voluptatibus iusto, perspiciatis tenetur consectetur reprehenderit, harum quae rerum!</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit corrupti fuga, quas quisquam perspiciatis. Consequatur, atque ducimus dolores natus officia qui rerum consectetur repellat ullam accusantium laboriosam, reprehenderit nemo deleniti</p>
    
    <button class="c-btn ">Button</button>

  </div>
</section><!--end section-->
<div class="c-section m-text m-text--3">
	<div class="feature-card__inner">
  <img src="http://cjcanvasprod.wpengine.com/wp-content/uploads/2019/08/icon.png" class="feature-card__icon " alt="" />

  <h4>Lorem Ipsum Dolor Sit Amet</h4>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat  incididunt ut laboret.</p>
  <p><a href="#">Learn More <i class="icon"></i></a></p>
</div>
</div><!--end-->

<div class="c-section m-text m-text--4">
	<h2>Lorem Ipsum Dolor Sit Amet</h2>
	<ul class="feature-list row around-sm">
	<li class="feature-card col col-md-4 col-sm-6">
	<div class="feature-card__inner">
  <img src="http://cjcanvasprod.wpengine.com/wp-content/uploads/2019/08/icon.png" class="feature-card__icon " alt="" />

  <h4>Lorem Ipsum Dolor Sit Amet</h4>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat  incididunt ut laboret.</p>
  <p><a href="#">Learn More <i class="icon"></i></a></p>
</div>
	</li>
	<li class="feature-card col col-md-4 col-sm-6">
	<div class="feature-card__inner">
  <img src="http://cjcanvasprod.wpengine.com/wp-content/uploads/2019/08/icon.png" class="feature-card__icon " alt="" />

  <h4>Lorem Ipsum Dolor Sit Amet</h4>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat  incididunt ut laboret.</p>
  <p><a href="#">Learn More <i class="icon"></i></a></p>
</div>
	</li>
	<li class="feature-card col col-md-4 col-sm-6">
	<div class="feature-card__inner">
  <img src="http://cjcanvasprod.wpengine.com/wp-content/uploads/2019/08/icon.png" class="feature-card__icon " alt="" />

  <h4>Lorem Ipsum Dolor Sit Amet</h4>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat  incididunt ut laboret.</p>
  <p><a href="#">Learn More <i class="icon"></i></a></p>
</div>
	</li>
	<li class="feature-card col col-md-4 col-sm-6">
	<div class="feature-card__inner">
  <img src="http://cjcanvasprod.wpengine.com/wp-content/uploads/2019/08/icon.png" class="feature-card__icon " alt="" />

  <h4>Lorem Ipsum Dolor Sit Amet</h4>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat  incididunt ut laboret.</p>
  <p><a href="#">Learn More <i class="icon"></i></a></p>
</div>
	</li>
	<li class="feature-card col col-md-4 col-sm-6">
	<div class="feature-card__inner">
  <img src="http://cjcanvasprod.wpengine.com/wp-content/uploads/2019/08/icon.png" class="feature-card__icon " alt="" />

  <h4>Lorem Ipsum Dolor Sit Amet</h4>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat  incididunt ut laboret.</p>
  <p><a href="#">Learn More <i class="icon"></i></a></p>
</div>
	</li>
	<li class="feature-card col col-md-4 col-sm-6">
	<div class="feature-card__inner">
  <img src="http://cjcanvasprod.wpengine.com/wp-content/uploads/2019/08/icon.png" class="feature-card__icon " alt="" />

  <h4>Lorem Ipsum Dolor Sit Amet</h4>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat  incididunt ut laboret.</p>
  <p><a href="#">Learn More <i class="icon"></i></a></p>
</div>
	</li>
</ul>
</div><!--end-->


<?php get_footer(); ?>