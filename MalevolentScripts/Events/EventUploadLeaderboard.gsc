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

///////////////////////////////////////////////
// Event Upload Leaderboard Function         //
///////////////////////////////////////////////
// Uploads leaderboards on endgame           //
///////////////////////////////////////////////
event_upload_leaderboard() {
    level waittill("end_game");

    players = getPlayers();

    if (players.size == 0) {
        return;
    }

    foreach (player in players) {
        player_data = strToK(player.pers["player-data"], ";");

        if (!isDefined(usernames)) {
            usernames = player_data[0];
        } else {
            usernames = usernames + ", " + player_data[0];
        }
    }

    foreach (player in players) {
        player_data = strToK(player.pers["player-data"], ";");

        data = [];
        data["language"] = player_data[4];
        data["language_type"] = "EventUploadStatistic";

        player tell(utility_request(data, "language"));
    }
}