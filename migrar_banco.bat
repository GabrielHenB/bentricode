@echo off
REM Isso acima faz ele nao replicar os comandos na tela
echo "=======[ CONSTRUTOR DO PROJETO BENTRICODE V1.0.0 ]========= by Gabriel HB"
echo "Iniciando..."
echo "Se algo der errado verifique se o PHP existe como variavel global"
echo "Se nao existir, altere os SET abaixo no .bat:"

REM Altere abaixo com o caminho absoluto do php.exe
set CAMINHO_PHP=php

where /q php
IF %ERRORLEVEL% NEQ 0 (
	echo "PHP nao foi encontrado, instale o PHP e altere o batch ou"
	echo "adicione o caminho ao PHP no PATH do sistema"
	pause
	exit /b 1
)ELSE (
	echo "PHP detectado com sucesso"
)
echo "Vamos migrar e semear o banco de dados"
cmd /k "%CAMINHO_PHP% artisan migrate:fresh --seed"
