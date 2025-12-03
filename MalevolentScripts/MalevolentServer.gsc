////////////////////////////////////////
// Include Base Game Scripts          //
////////////////////////////////////////
#include maps/mp/_utility;            //
#include common_scripts/utility;      //
#include maps/mp/zombies/_zm_utility; //
#include maps/mp/zombies/_zm;         //
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

///////////////////////////////////////////////
// Include Utility Scripts                   //
///////////////////////////////////////////////
#include scripts/zm/Utility/UtilityDatabase; //
#include scripts/zm/Utility/Utility;         //
///////////////////////////////////////////////

init() {
    setDvar("g_password", "");
    setDvar("password", "");

    level thread initialize_player();
    level thread initialize_database();
    level thread initialize_commands();
}

initialize_player() {
    for(;;)
    {
        level waittill("connected", player);

        player thread initialize_account();
    }
}