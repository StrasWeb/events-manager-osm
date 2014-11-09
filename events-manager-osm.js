/*global google, jQuery*/
/*jslint browser: true*/
function replaceMap(e, map) {
    'use strict';
    map.mapTypes.set("OSM", new google.maps.ImageMapType({
        getTileUrl: function (coord, zoom) {
            return "https://a.tile.openstreetmap.org/" + zoom + "/" + coord.x + "/" + coord.y + ".png";
        },
        tileSize: new google.maps.Size(256, 256),
        name: "OpenStreetMap",
        maxZoom: 18
    }));
    map.mapTypeId = 'OSM';
}

jQuery(document).bind('em_maps_location_hook', replaceMap);
