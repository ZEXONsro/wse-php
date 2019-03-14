<?php

namespace RobRichards\WsePhp;

interface WSSEExternalXmlSignerResponseInterface
{
    /**
     * @return string|null Signed XML document string
     */
    public function getSignedXml(): ?string ;

    /**
     * @return string|null External signer exception name
     */
    public function getSignerExceptionCode(): ?string;

    /**
     * @return string|null External signer exception message
     */
    public function getSignerExceptionMessage(): ?string;

    /**
     * @return string|null Signer ID if available ( smart card ID for example )
     */
    public function getSignerId(): ?string;

    /**
     * @return bool True if external signature failed
     */
    public function isSignatureFailed(): bool;
}