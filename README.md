# Fundecor Landing Page

You are reading the ReadMe description for the landing page for FUNDECOR Educational Travel Experiences.

The primary FUNDECOR website can be found at [fundecor.org](https://www.fundecor.org/)

The main site runs using static HTML/CSS/JavaScript and should not require any further server interactions beyond serving the static page. The form to submit an 'application' runs using a PHP backend which saves the data sent to a local file. This means that the main webpage will work just fine on a static host, however the actual submission and viewing of 'applications' requires a PHP server to be spun up (or something else on the host which can run PHP).

## INSTALLATION

This repo is mostly plug-and-play; if you download it and spin up a PHP server on localhost:8000, everything but the videos will work out of the box. However, because this website is designed around the primary page being its own index.php, it will conflict if it is added directly to the main FUNDECOR website without adjusting the name and references to it.
The videos are expected to be placed in the directory `/static/img/video/[video name]`, where the videos are named `Promovid1.mp4` and `Promovid2.mp4` respectively. Besides that, this repo should be convenient to download and use.

## IMPLEMENTATION NOTES

### GENERAL NOTES

- "Container" is the general term used to describe divs which denote distinct "sections" of content.
- CSS class structure is set up such that several distinct classes are used to apply different styling which appears more commonly. For example:
    - A navy container with centered content organized in a column would be styled as `class="tiertiary container centered flex-row"`
    - An active `Selector` would be styled as `class="selector active"`
    - However, an element which is more specialized in use will be applied more singularly, e.g. `class="container meet-the-team"` or `class="logo-image"`
    - For a full description of the preset variables used in CSS styling, view the
- This webpage uses the `OKLCH` colorspace and standard with most colors taken from sRGB IEC 61966-2-1 sources of FUNDECOR's color scheme, and some other custom colors made within the OKLCH space. This decision was made due to the higher visual acuity and ability to display high-gammut colors more accurately. OKLCH has seen widespread adoption across popular browser vendors and should be supported on most devices, but if not CSS should automatically use an sRGB fallback. This page does not use any P3 colors, but if the decision is made in the future to use them, an sRGB fallback is automatically generated. For more information on OKLCH, visit the [MDN Pages for its web implementation](https://developer.mozilla.org/en-US/docs/Web/CSS/Reference/Values/color_value/oklch).
- The application page operates using PHP. The form is submitted with a POST action to `submit-form.php`, and these submissions may then be viewed by accessing `view-applications.php` on the server storing the data. Accessing `view-applications.php` requires the use of a password, in this case
- The code for this site was formatted using [Prettier](https://prettier.io/). A configuration file has been included with this project which includes a `.prettierrcc` configuration file. If you want to keep your code in the same format, you can point your Prettier module at this file. Please note that Prettier does not natively support formatting PHP and you will need to install a PHP plugin, I reccommend you use the one Prettier has listed on their website.

### CSS Variables

If you're reading this you're a developer and already know what this is, but just in case, these are variables defined in `:root` to be used with `var()`, e.g. `var(--fundecor-navy)` will set the color of the element the rule is defined on to be the OKLCH value for Fundecor Navy. All hard-coded CSS
variables are stored directly at the top of `main.css` in `:root`.
