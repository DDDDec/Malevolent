@echo off
set "script_dir=%~dp0"

set "compiler=%script_dir%Compiler.exe"

for %%F in (%*) do (
    echo Processing: %%~nxF
    pushd "%%~dpF"
    "%compiler%" "%%~nxF"
    popd
)

pause