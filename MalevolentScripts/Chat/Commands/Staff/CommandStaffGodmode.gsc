///////////////////////////////////////////////
// Include Utility Scripts                   //
///////////////////////////////////////////////
#include scripts/zm/Utility/Utility;         //
#include scripts/zm/Utility/UtilityDatabase; //
#include scripts/zm/Utility/UtilityRequest;  //
///////////////////////////////////////////////

//////////////////////////////////////////
// Command Staff Godmode Script         //
//////////////////////////////////////////
// Gives the staff member godmode.      //
//////////////////////////////////////////
command_staff_godmode(args)
{
    player = strToK(self.pers["player-data"], ";");

    data = [];
    data["language"] = player[4];

    if (int(player[1]) < 5) {
        data["language_id"] = 8;
        self tell(utility_request(data, "language"));
        return;
    }

    if (self.ignoreme == 0) {
        self enableInvulnerability();
        self.ignoreme = 1;

        data["language_id"] = 9;
        self tell(utility_request(data, "language"));
    } else {
        self disableInvulnerability();
        self.ignoreme = 0;

        data["language_id"] = 910;
        self tell(utility_request(data, "language"));
    }
}