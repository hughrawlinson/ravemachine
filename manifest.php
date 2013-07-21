<?php
header('Content-type: application/x-web-app-manifest+json');
?>
{
    "version": "1",
    "name": "Rave Machine",
    "launch_path": "/ravemachine/index.html",
    "description": "An app to make your phone go nuts",
    "icons": {
        "16": "/ravemachine/logo16.png",
        "32": "/ravemachine/logo32.png",
        "48": "/ravemachine/logo48.png",
        "64": "/ravemachine/logo64.png",
        "128": "/ravemachine/logo128.png"
    },
    "developer": {
        "name": "Hugh Rawlinson",
        "url": "http://hughrawlinson.me"
    },
    "installs_allowed_from": ["*"],
    "default_locale": "en",
    "permissions": {
    }
}
