<?php

declare(strict_types=1);

if (! defined('WHMCS')) {
    exit('Direct access is not permitted.');
}

require_once __DIR__.'/bootstrap.php';

use YourReselling\Whmcs\TeamspeakServer\Integration\WhmcsModule;

/** TeamSpeak Server: MetaData. */
function yourresellingteamspeakserver_MetaData(): array
{
    return ['DisplayName' => 'Your-Reselling · TeamSpeak Server', 'APIVersion' => '1.1', 'RequiresServer' => true];
}

/** TeamSpeak Server: ConfigOptions. */
function yourresellingteamspeakserver_ConfigOptions(): array
{
    return WhmcsModule::configOptions('teamspeak_server');
}

/** TeamSpeak Server: CreateAccount. */
function yourresellingteamspeakserver_CreateAccount(array $params): string
{
    return WhmcsModule::run('teamspeak_server', 'create', $params);
}

/** TeamSpeak Server: TestConnection. */
function yourresellingteamspeakserver_TestConnection(array $params): array
{
    return WhmcsModule::testConnection($params);
}

/** TeamSpeak Server: ClientArea. */
function yourresellingteamspeakserver_ClientArea(array $params): array
{
    return WhmcsModule::clientArea('teamspeak_server', $params);
}

/** TeamSpeak Server: AdminCustomButtonArray. */
function yourresellingteamspeakserver_AdminCustomButtonArray(): array
{
    return WhmcsModule::adminButtons('teamspeak_server');
}

/** TeamSpeak Server: RefreshStatus. */
function yourresellingteamspeakserver_RefreshStatus(array $params): string
{
    return WhmcsModule::run('teamspeak_server', 'refresh', $params);
}

/** TeamSpeak Server: TerminateAccount. */
function yourresellingteamspeakserver_TerminateAccount(array $params): string
{
    return WhmcsModule::run('teamspeak_server', 'termination', $params);
}
