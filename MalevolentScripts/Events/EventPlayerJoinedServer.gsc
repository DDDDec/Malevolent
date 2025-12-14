///////////////////////////////////////////////
// Include Utility Scripts                   //
///////////////////////////////////////////////
#include scripts/zm/Utility/Utility;         //
#include scripts/zm/Utility/UtilityDatabase; //
#include scripts/zm/Utility/UtilityRequest;  //
///////////////////////////////////////////////

//////////////////////////////////////////
// Event Player Joined Server Script    //
//////////////////////////////////////////
// Uploads player joined to database    //
//////////////////////////////////////////
event_player_joined_server()
{
    player = strToK(self.pers["player-data"], ";");
    database_query("INSERT INTO user_actions (`user_name`, `user_action`) values (?, ?)", array(player[0]. player[0] + " has just started playing on the " + utility_get_map() + " server."));
}