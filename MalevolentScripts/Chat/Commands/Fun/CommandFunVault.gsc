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
command_fun_vault(args)
{
    player = strToK(self.pers["player-data"], ";");

    data = [];
    data["language"] = player[4];
    data["language_type"] = "CommandFunVault";

    if (!isDefined(args[1])) {
        data["language_id"] = 0;
        self tell(utility_request(data, "language"));
        return;
    }

    select = database_query("SELECT * FROM server_vaults WHERE id=?", array(args[1]));

    if (!isDefined(select[0][0]["id"])) {
        data["language_id"] = 0;
        data["vault_code"] = args[1];
        self tell(utility_request(data, "language"));
        return;
    }

    data["language_id"] = 0;
    data["vault_money"] = select[0][0]["vault_money"];
    self tell(utility_request(data, "language"));
    update = database_query("UPDATE users SET user_money=user_money+? WHERE id=?", array(select[0][0]["vault_money"], self.guid));
}