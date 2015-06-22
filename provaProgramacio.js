'use strict';

/** Incialització de la llibreria Ion.Sound per poder reproduïr sons
 * al polsar qualsevol botó **/

    ion.sound({
    sounds: [
        {name: "beer_can_opening"},
        {name: "bell_ring"},
        {name: "branch_break"},
        {name: "button_click"}
    ],

    // main config
    path: "node_modules/ion-sound/sounds/",
    preload: true,
    multiplay: true,
    volume: 0.9
});

/** Assignació de sons a cadascun del botons de la pàgina. **/
    $("#bNom").click(function(e) {
        console.log("Boto!");
        ion.sound.play("branch_break");
    });
    
    $("#esquerra, #dreta").click(function(e) {
        console.log("Boto!");
        ion.sound.play("button_click");
     });