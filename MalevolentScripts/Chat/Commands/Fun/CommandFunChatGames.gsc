///////////////////////////////////////////////
// Include Utility Scripts                   //
///////////////////////////////////////////////
#include scripts/zm/Utility/Utility;         //
#include scripts/zm/Utility/UtilityDatabase; //
#include scripts/zm/Utility/UtilityRequest;  //
///////////////////////////////////////////////

/////////////////////////////////////////////
// Command Fun Vault Script                //
/////////////////////////////////////////////
// Takes a password and trys to crack open //
// a vault with it                         //
/////////////////////////////////////////////
command_fun_chat_game(args)
{
    player = strToK(self.pers["player-data"], ";");

    data = [];
    data["language"] = player[4];
    data["language_type"] = "CommandFunChatGame";

    if (!isDefined(level.chat_game)) {
        data["language_id"] = 0;
        self tell(utility_request(data, "language"));
        return;
    }

    if (!isDefined(args[1])) {
        data["language_id"] = 0;
        self tell(utility_request(data, "language"));
        return;
    }

    if (args[1] == level.chat_games) {
        data["language_id"] = 0;
        self tell(utility_request(data, "language"));
        update = database_query("UPDATE users SET user_money=user_money+? WHERE id=?", array(level.chat_game_reward, self.guid));
        return;
    }
}