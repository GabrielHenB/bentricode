@echo off
REM Isso acima faz ele nao replicar os comandos na tela
echo "=======[ CONSTRUTOR DO PROJETO ]========="
echo "Iniciando..."
echo "Se algo der errado verifique se o PHP existe como variavel global"
echo "Se nao existir, altere os SET abaixo no .bat:"

REM Altere abaixo com o caminho absoluto do php.exe. Pode estar
REM em xampp/php se estiver usando o XAMPP
set CAMINHO_PHP=php
set CAMINHO_COMPOSER=composer

where /q php
IF %ERRORLEVEL% NEQ 0 (
	echo "PHP nao foi encontrado, instale o PHP e altere o batch ou"
	echo "adicione o caminho ao PHP no PATH do sistema"
	pause
	exit /b 1
)ELSE (
	echo "PHP detectado com sucesso"
)

REM Check if Composer executable is available
REM O where com o q retorna 0 se sucesso ou 1 se falhou a busca
REM O exit b 1 eh codigo de erro 1 na saida do cmd
where /q composer
IF %ERRORLEVEL% NEQ 0 (
    echo "Composer nao esta instalado e ou nao esta no PATH do Sistema"
    echo "Instale o Composer e tente novamente"
    pause
    exit /b 1
)ELSE (
	echo "Composer encontrado com sucesso"
	echo "Tudo certo, o proximo comando ira abrir uma nova janela e atualizar as dependencias"
	pause
	cmd /k %CAMINHO_COMPOSER% update
	IF %ERRORLEVEL% NEQ 0 (
		echo "Erro encontrado durante o script"
		pause
		exit /b 1
	)
)