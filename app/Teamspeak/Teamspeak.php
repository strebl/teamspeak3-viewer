<?php

namespace Strebl\Teamspeak;

use \Teamspeak3_Viewer_ModernHtml;

class Teamspeak
{
    /**
     * @var \TeamSpeak3_Node_Host
     */
    private $host;

    /**
     * Teamspeak constructor.
     * @param \TeamSpeak3_Node_Host $host
     */
    public function __construct(\TeamSpeak3_Node_Host $host)
    {
        $this->host = $host;

        $this->host->setExcludeQueryClients(true);
        $this->host->setLoadClientlistFirst(true);
    }

    public function all()
    {
        $server = $this->host->serverList()[1];

        return $server->getViewer(new Teamspeak3_Viewer_ModernHtml());
    }
}
