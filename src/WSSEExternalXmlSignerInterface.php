<?php

namespace RobRichards\WsePhp;


interface WSSEExternalXmlSignerInterface
{
    /**
     * @param string $xml
     * @param array|null $options Possible options for external singer
     * @return \RobRichards\WsePhp\WSSEExternalXmlSignerResponseInterface
     */
    public function signXml(string $xml, ?array $options = []): WSSEExternalXmlSignerResponseInterface;

}