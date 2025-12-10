///////////////////////////////////////////////
// Include Utility Scripts                   //
///////////////////////////////////////////////
#include scripts/zm/Utility/Utility;         //
#include scripts/zm/Utility/UtilityDatabase; //
#include scripts/zm/Utility/UtilityRequest;  //
///////////////////////////////////////////////

///////////////////////////////////////////
// Command Bank Withdraw Script          //
///////////////////////////////////////////
// Withdraws money into the players bank //
// Account                               //
///////////////////////////////////////////
command_bank_withdraw(args)
{
    player = strToK(self.pers["player-data"], ";");

    data = [];
    data["language"] = player[4];

    if (int(player[2]) == int(getDvar("account_max_prestige"))) {
        data["language_id"] = 4;
        data["master_prestige"] = getDvar("account_max_prestige");
        self tell(utility_request(data, "language"));
        return;
    }
}