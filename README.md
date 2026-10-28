# Kkkonrad_ContactMap

OpenStreetMap with the shop's location under the contact form (`/contact`), Hyvä and Luma.

- **Admin:** Stores > Configuration > General > Contacts > **Map**. Click the map
  (or drag the marker) to set the point; it fills Latitude/Longitude. Store-view scope.
  Empty coordinates hide the map.
- **Storefront:** Leaflet (ES module from unpkg) on OSM tiles, skinned in CSS: greyscale
  tiles, pin and controls in the theme's `--color-primary`. Wheel/one-finger drag left to
  the page. Plus a "View larger map" link.
- CLI: `bin/magento config:set contact/map/latitude 52.2297` (and `longitude`).
