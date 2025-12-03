///////////////////////////////////////////////
// Include Utility Scripts                   //
///////////////////////////////////////////////
#include scripts/zm/Utility/Utility;         //
#include scripts/zm/Utility/UtilityDatabase; //
///////////////////////////////////////////////

//////////////////////////////////////////
// Command Account LevelUp Script       //
//////////////////////////////////////////
// Lets players level up their account  //
//////////////////////////////////////////
command_account_level_up(args)
{
    account = database_query("SELECT * FROM users WHERE id=?", array(self.guid));

    if (int(account[0][0]["user_level"]) == 1000) {
        self tell("[]");
        return;
    }
}