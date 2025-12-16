@echo off
setlocal EnableDelayedExpansion

for %%F in (*-compiled*) do (
    set "old=%%~nxF"
    set "new=!old:-compiled=!"
    if not "!old!"=="!new!" (
        ren "%%F" "!new!"
    )
)