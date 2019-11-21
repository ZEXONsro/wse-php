<?php

namespace RobRichards\WsePhp;


interface WSSEExternalXmlSignerInterface
{
    /**
     * @param string $xml
     * @param array|null $options Possible options for external singer
     * @return \RobRichards\WsePhp\WSSEExternalXmlSignerResponseInterface
     * @throws \RobRichards\WsePhp\SoapNodeSignFailedException
     * @throws \RobRichards\WsePhp\SoapNodeSignRefusedException
     */
    public function signXml(string $xml, ?array $options = []): WSSEExternalXmlSignerResponseInterface;

}