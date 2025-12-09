///////////////////////////////////////////////////////////////////////////////
// Include Chat Command Scripts                                              //
///////////////////////////////////////////////////////////////////////////////
#include scripts/zm/Chat/Commands/Account/CommandAccountLevelUp;             //
#include scripts/zm/Chat/Commands/Account/CommandAccountPrestige;            //
#include scripts/zm/Chat/Commands/Staff/CommandStaffGodmode;                 //
#include scripts/zm/Chat/Commands/CommandChat;                               //
///////////////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////
// Initialize Commands Function              //
///////////////////////////////////////////////
// Runs threads when the server first starts //
///////////////////////////////////////////////
initialize_commands()
{
    chat::register_command(".levelup", ::command_account_level_up(args), true);
    chat::register_command(".prestige", ::command_account_prestige(args), true);

    chat::register_command(".godmode", ::command_staff_godmode(args), true);

    chat::register_command(".chat", ::command_chat(args), true);
}