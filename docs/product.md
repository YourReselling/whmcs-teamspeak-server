# TeamSpeak Server

Bestellung: `POST /products/teamspeak/servers/create`. ID: `data.id`.

Kundenfelder: `name`.

| Feld | Typ | Pflicht | Hinweis |
|---|---|---|---|
| `name` | string | Ja | Server name (max 255 characters) |
| `slots` | integer | Ja | Number of slots |

API-Key-Rechte für alle Modulansichten und Aktionen: `teamspeak:create`, `teamspeak:delete`, `teamspeak:power`, `teamspeak:read`, `teamspeak:update`.

Verwaltungsaktionen: Sperrliste leeren, Sperre erstellen, Kanal erstellen, Client entfernen, Client verschieben, Client anstupsen, Server-Einstellungen, Starten, Stoppen, TS-DNS bearbeiten, TS-DNS entfernen.

Hinweise:
- No suspend/unsuspend endpoint; stop/start are power operations
