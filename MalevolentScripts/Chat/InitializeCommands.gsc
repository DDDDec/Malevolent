///////////////////////////////////////////////////////////////////////////////
// Include Chat Command Scripts                                              //
///////////////////////////////////////////////////////////////////////////////
#include scripts/zm/Chat/Commands/Account/CommandAccountLevelUp;             //
#include scripts/zm/Chat/Commands/Account/CommandAccountPrestige;            //
#include scripts/zm/Chat/Commands/Bank/CommandBankDeposit;                   //
#include scripts/zm/Chat/Commands/Bank/CommandBankWithdraw;                  //
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
    chat::register_command(array(".levelup", ".lu"), ::command_account_level_up(args), true);
    chat::register_command(array(".prestige", ".psg"), ::command_account_prestige(args), true);

    chat::register_command(array(".deposit", ".d"), ::command_bank_deposit(args), true);
    chat::register_command(array(".withdraw", ".w"), ::command_bank_withdraw(args), true);

    chat::register_command(array(".godmode", "gm"), ::command_staff_godmode(args), true);

    chat::register_command(".chat", ::command_chat(args), true);
}