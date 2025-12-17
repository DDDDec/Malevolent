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
// Event Upload Statistic Function           //
///////////////////////////////////////////////
// Uploads statistics on endgame             //
///////////////////////////////////////////////
event_upload_statistics() {
    self endon("disconnected");
    level waittill("end_game");

    player = strToK(self.pers["player-data"], ";");

    data = [];
    data["language"] = player[4];
    data["language_type"] = "EventUploadStatistic";

    update = database_query(
        "UPDATE users SET user_kills=user_kills+? WHERE id=?",
        array(self.pers["kills"], self.guid)
    );

    self tell(utility_request(data, "language"));
}