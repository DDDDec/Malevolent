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

///////////////////////////////////////////////
// Include Utility Scripts                   //
///////////////////////////////////////////////
#include scripts/zm/Utility/UtilityDatabase; //
#include scripts/zm/Utility/Utility;         //
///////////////////////////////////////////////

init() {
    setDvar("g_password", "");
    setDvar("password", "");

    level.perk_purchase_limit = 20;

    level thread initialize_player();
    level thread initialize_database();
}

initialize_player() {
    for(;;)
    {
        level waittill("connected", player);

        player thread initialize_account();
    }
}