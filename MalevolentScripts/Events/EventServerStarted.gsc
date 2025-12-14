///////////////////////////////////////////////
// Include Utility Scripts                   //
///////////////////////////////////////////////
#include scripts/zm/Utility/Utility;         //
#include scripts/zm/Utility/UtilityDatabase; //
#include scripts/zm/Utility/UtilityRequest;  //
///////////////////////////////////////////////

//////////////////////////////////////////
// Event Server Started Script          //
//////////////////////////////////////////
// Uploads server started to database   //
//////////////////////////////////////////
event_server_started()
{
    database_query("INSERT INTO server_actions (`server_map`, `server_action`) values (?, ?)", array(utility_get_map(), utility_get_map() + " server has just started and is ready to play."));
}