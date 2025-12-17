////////////////////////////////////////
// Include Base Game Scripts          //
////////////////////////////////////////
#include maps/mp/_utility;            //
#include common_scripts/utility;      //
#include maps/mp/zombies/_zm_utility; //
////////////////////////////////////////

///////////////////////////////////////////////
// Include Utility Scripts                   //
///////////////////////////////////////////////
#include scripts/zm/Utility/Utility;         //
#include scripts/zm/Utility/UtilityDatabase; //
#include scripts/zm/Utility/UtilityRequest;  //
///////////////////////////////////////////////

/////////////////////////////////////////////////
// Event Auto Message Function                 //
/////////////////////////////////////////////////
// Sends a message to everyone every x seconds //
/////////////////////////////////////////////////
event_auto_message() {
    level waittill("end_game");

    while (true) {
        players = getPlayers();

        if (players.size > 0) {
            foreach (player in players) {
                player_data = strToK(player.pers["player-data"], ";");

                data = [];
                data["language"] = player_data[4];
                data["language_type"] = "EventAutoMessage";

                player tell(utility_request(data, "language"));
            }
        }

        wait 300;
    }
}