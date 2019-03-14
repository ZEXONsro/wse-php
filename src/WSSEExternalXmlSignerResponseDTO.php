<?php

namespace RobRichards\WsePhp;

/**
 * Class WSSERemoteXmlSignerResponseDTO
 * Basic implementation for WSSERemoteXmlSignerResponseInterface
 * @package RobRichards\WsePhp
 */
class WSSEExternalXmlSignerResponseDTO implements WSSEExternalXmlSignerResponseInterface
{

    /**
     * @var bool True if external sign failed
     */
    private $isSignatureFailed;
    private $signedXml;
    private $signerExceptionCode;
    private $signerExceptionMessage;
    private $signerId;

    /**
     * WSSERemoteXmlSignerResponseDTO constructor.
     * @param string|null $signedXml
     * @param string|null $signerExceptionCode
     * @param string|null $signerExceptionMessage
     * @param string|null $signerId
     * @param bool $isSignatureFailed
     */
    public function __construct($signedXml, $signerExceptionCode, $signerExceptionMessage, $signerId, $isSignatureFailed)
    {
        $this->signedXml = $signedXml;
        $this->signerExceptionCode = $signerExceptionCode;
        $this->signerExceptionMessage = $signerExceptionMessage;
        $this->signerId = $signerId;
        $this->isSignatureFailed = $isSignatureFailed;
    }

    /**
     * @return string|null Signed XML document string
     */
    public function getSignedXml(): ?string
    {
        return $this->signedXml;
    }

    /**
     * @return string|null External signer exception name
     */
    public function getSignerExceptionCode(): ?string
    {
        return $this->signerExceptionCode;
    }

    /**
     * @return string|null External signer exception message
     */
    public function getSignerExceptionMessage(): ?string
    {
        return $this->signerExceptionMessage;
    }

    /**
     * @return string|null Signer ID if available ( smart card ID for example )
     */
    public function getSignerId(): ?string
    {
        return $this->signerId;
    }

    /**
     * @return bool True if external signature failed
     */
    public function isSignatureFailed(): bool
    {
        return $this->isSignatureFailed;
    }

}