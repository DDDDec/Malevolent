////////////////////////////////////////
// Include Base Game Scripts          //
////////////////////////////////////////
#include maps/mp/_utility;            //
#include common_scripts/utility;      //
#include maps/mp/zombies/_zm_utility; //
#include maps/mp/zombies/_zm;         //
////////////////////////////////////////

///////////////////////////////////////
// Include Utility Scripts           //
///////////////////////////////////////
#include scripts/zm/Utility/Utility; //
///////////////////////////////////////

///////////////////////////////////////
// Command Staff Players Script      //
///////////////////////////////////////
// Shows staff the players details   //
///////////////////////////////////////
command_staff_players(args)
{
    player_data = strToK(self.pers["player_data"], ";");

    if (int(player_data[1]) < 6) {
        self tell("[^5Staff^7] You need to be a staff member to use this command");
        return;
    }

    players = getPlayers();

    foreach(player in players)
        self tell("[^5Players^7] ");
}