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
// Event Upload Server Statistic Function    //
///////////////////////////////////////////////
// Uploads server statistics on endgame      //
///////////////////////////////////////////////
event_upload_server_statistic() {
    self endon("disconnected");
    level waittill("end_game");

    update = database_query(
        "UPDATE servers SET kills=kills+? WHERE server_port=?",
        array(level.kills, getDvar("net_port"))
    );
}