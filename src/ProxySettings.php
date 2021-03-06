<?php
declare(strict_types = 1);

namespace LightweightCurl;

/**
 * Настройки proxy
 */
class ProxySettings implements IProxySettings
{
    /** Socks5 proxy */
    const TYPE_SOCKS5 = CURLPROXY_SOCKS5;

    /** Socks4 proxy */
    const TYPE_SOCKS4 = CURLPROXY_SOCKS4;

    /** Http proxy */
    const TYPE_HTTP = CURLPROXY_HTTP;

    /** @var int Тип прокси */
    private $socketType = self::TYPE_SOCKS5;

    /** @var string Url proxy */
    private $url = '';

    /**
     * Устанавливаем тип прокси
     *
     * @param int $socketType Тип прокси см ProxySettings:TYPE_*
     */
    public function setSocketType(int $socketType): void
    {
        $this->socketType = $socketType;
    }

    /**
     * Получаем тип проекси
     * @return int Тип прокси
     */
    public function getSocketType(): int
    {
        return $this->socketType;
    }

    /**
     * Устанавливаем Url проекси
     * @param string $url Url proxy
     */
    public function setUrl(string $url): void
    {
        $this->url = $url;
    }

    /**
     * Получаем URL прокси
     * @return string Url проекси
     */
    public function getUrl(): string
    {
        return $this->url;
    }
}
