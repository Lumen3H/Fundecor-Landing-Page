# Fundecor Landing Page

You are reading the ReadMe description for the landing page for FUNDECOR Educational Travel Experiences.

The primary FUNDECOR website can be found at [fundecor.org](https://www.fundecor.org/)

The main site runs using static HTML/CSS/JavaScript and should not require any further server interactions beyond serving the static page. The form to submit an 'application' runs using a PHP backend which saves the data sent to a local file. This means that the main webpage will work just fine on a static host, however the actual submission and viewing of 'applications' requires a PHP server to be spun up (or something else on the host which can run PHP).

## IMPLEMENTATION NOTES

- "Container" is the general term used to describe divs which denote distinct "sections" of content.
- CSS class structure is set up such that several distinct classes are used to apply different styling which appears more commonly. For example:
    - A navy container with centered content organized in a column would be styled as `class="tiertiary container centered flex-row"`
    - An active `Selector` would be styled as `class="selector active"`
    - However, an element which is more specialized in use will be applied more singularly, e.g. `class="container meet-the-team"` or `class="logo-image"`
    - For a full description of the preset variables used in CSS styling, view the
- This webpage uses the `OKLCH` colorspace and standard with most colors taken from sRGB IEC 61966-2-1 sources of FUNDECOR's color scheme, and some other custom colors made within the OKLCH space. This decision was made due to the higher visual acuity and ability to display high-gammut colors more accurately. OKLCH has seen widespread adoption across popular browser vendors and should be supported on most devices, but if not CSS should automatically use an sRGB fallback. This page does not use any P3 colors, but if the decision is made in the future to use them, an sRGB fallback is automatically generated. For more information on OKLCH, visit the [MDN Pages for its web implementation](https://developer.mozilla.org/en-US/docs/Web/CSS/Reference/Values/color_value/oklch).
- The application page operates using PHP. The form is submitted with a POST action to `submit-form.php`, and these submissions may then be viewed by accessing `view-applications.php` on the server storing the data. Accessing `view-applications.php` requires the use of a password, in this case
- The code for this site was formatted using [Prettier](https://prettier.io/). A configuration file has been included with this project which includes a `.prettierrcc` configuration file. If you want to keep your code in the same format, you can point your Prettier module at this file.

---

### CSS Variables List

If you're reading this you're a developer and already know what this is, but just in case, these are variables defined in `:root` to be used with `var()`, e.g. `var(--fundecor-navy)` will set the color of the element the rule is defined on to be the OKLCH value for Fundecor Navy.

| Syntax                 | Description                                                |
| ---------------------- | ---------------------------------------------------------- |
| `off-white`            | A subtle off-white color used for backgrounds              |
| `primary-color`        | FUNDECOR Green                                             |
| `secondary-color`      | FUNDECOR Yellow                                            |
| `fundecor-navy`        | FUNDECOR Navy                                              |
| `light-blue Secondary` | blue color which is analagous to FUNDECOR Navy             |
| `navy-gradient-alt`    | Alt color used for the navy gradient                       |
| `navy-gradient`        | Gradient between FUNDECOR Navy and a lighter purplish-blue |
