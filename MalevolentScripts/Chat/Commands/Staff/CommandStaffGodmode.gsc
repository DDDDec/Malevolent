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
// Command Staff Godmode Script      //
///////////////////////////////////////
// Gives the staff member godmode    //
///////////////////////////////////////
command_staff_godmode(args)
{
    player_data = strToK(self.pers["player-data"], ";");

    if (int(player_data[1]) < 5) {
        self tell("[^5Staff^7] You need to be a member of staff to use this command");
        return;
    }

    if (int(self.ignoreme) == 1) {
        self disableInvulnerability();
        self.ignoreme = 0;
        self tell("[^5Staff^7] You have disabled godmode");
        return;
    }

    if (int(self.ignoreme) == 0) {
        self enableInvulnerability();
        self.ignoreme = 1;
        self tell("[^5Staff^7] You have enabled godmode");
    }
}