///////////////////////////////////////////////
// Include Utility Scripts                   //
///////////////////////////////////////////////
#include scripts/zm/Utility/Utility;         //
#include scripts/zm/Utility/UtilityDatabase; //
#include scripts/zm/Utility/UtilityRequest;  //
///////////////////////////////////////////////

//////////////////////////////////////////
// Command Account Prestige Script      //
//////////////////////////////////////////
// Lets players prestige their account  //
//////////////////////////////////////////
command_account_prestige(args)
{
    player = strToK(self.pers["player-data"], ";");

    language = [];
    language["language"] = player[4];

    if (int(player[2]) == int(getDvar("account_max_prestige"))) {
        language["language_id"] = 0;
        message = utility_request(data, "language");
        self tell(message);
        return;
    }

    database_query("UPDATE users SET user_money=?, user_prestige=user_prestige+1 WHERE id=?", array(self.guid));
}