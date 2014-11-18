/*global google, jQuery*/
/*jslint browser: true, unparam: true*/
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
    map.mapTypes.set("transport", new google.maps.ImageMapType({
        getTileUrl: function (coord, zoom) {
            return "https://a.tile.thunderforest.com/transport/" + zoom + "/" + coord.x + "/" + coord.y + ".png";
        },
        tileSize: new google.maps.Size(256, 256),
        name: "OSM Transport",
        maxZoom: 18
    }));
    map.mapTypeId = 'OSM';
    map.setOptions({
        mapTypeControl: true,
        mapTypeControlOptions: {
            mapTypeIds: ['OSM', 'transport']
        }

    });
}

jQuery(document).bind('em_maps_location_hook', replaceMap);
