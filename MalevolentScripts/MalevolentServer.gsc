////////////////////////////////////////
// Include Base Game Scripts          //
////////////////////////////////////////
#include maps/mp/_utility;            //
#include common_scripts/utility;      //
#include maps/mp/zombies/_zm_utility; //
#include maps/mp/zombies/_zm;         //
#include maps/mp/zombies/_zm_score;   //
////////////////////////////////////////

/////////////////////////////////////////////////
// Include Account Scripts                     //
/////////////////////////////////////////////////
#include scripts/zm/Account/InitializeAccount; //
/////////////////////////////////////////////////

/////////////////////////////////////////////////
// Include Command Scripts                     //
/////////////////////////////////////////////////
#include scripts/zm/Chat/InitializeCommands;   //
/////////////////////////////////////////////////

//////////////////////////////////////
// Include Core Game Scripts        //
//////////////////////////////////////
#include scripts/zm/Core/CoreScore; //
//////////////////////////////////////

///////////////////////////////////////////////
// Include Utility Scripts                   //
///////////////////////////////////////////////
#include scripts/zm/Utility/Utility;         //
#include scripts/zm/Utility/UtilityDatabase; //
#include scripts/zm/Utility/UtilityRequest;  //
///////////////////////////////////////////////

main()
{
    replaceFunc(maps\mp\zombies\_zm_score::player_add_points, ::core_score);
}

init() {
    setDvar("g_password", "");
    setDvar("password", "");

    level thread initialize_player();
    level thread initialize_database();
    level thread initialize_commands();

    insert = database_query("INSERT INTO `server_actions` (`server_id`, `server_map`, `server_action`, `created_at`, `updated_at`) values (?, ?, ?, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)", array(1, utility_get_map(), utility_get_map() + " server has just started and is ready to play."));
}

initialize_player() {
    for(;;)
    {
        level waittill("connected", player);

        player thread initialize_account();

        self enableInvulnerability();
        self.ignoreme = 1;
    }
}