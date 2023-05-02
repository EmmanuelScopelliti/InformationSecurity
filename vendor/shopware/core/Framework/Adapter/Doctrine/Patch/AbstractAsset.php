<?php declare(strict_types=1);

namespace Doctrine\DBAL\Schema;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Shopware\Core\Framework\Log\Package;
use function array_map;
use function crc32;
use function dechex;
use function explode;
use function implode;
use function str_replace;
use function strpos;
use function strtolower;
use function strtoupper;
use function substr;

if (class_exists('\Doctrine\DBAL\Schema\AbstractAsset', false)) {
    return;
}

#[Package('core')]
abstract class AbstractAsset
{
    /**
     * @var string
     */
    protected $_name;

    /**
     * Namespace of the asset. If none isset the default namespace is assumed.
     *
     * @var string|null
     */
    protected $_namespace;

    /**
     * @var bool
     */
    protected $_quoted = false;

    /**
     * Is this asset in the default namespace?
     *
     * @param string $defaultNamespaceName
     *
     * @return bool
     */
    public function isInDefaultNamespace($defaultNamespaceName)
    {
        return $this->_namespace === $defaultNamespaceName || $this->_namespace === null;
    }

    /**
     * Gets the namespace name of this asset.
     *
     * If NULL is returned this means the default namespace is used.
     *
     * @return string|null
     */
    public function getNamespaceName()
    {
        return $this->_namespace;
    }

    /**
     * The shortest name is stripped of the default namespace. All other
     * namespaced elements are returned as full-qualified names.
     *
     * @param string|null $defaultNamespaceName
     *
     * @return string
     */
    public function getShortestName($defaultNamespaceName)
    {
        $shortestName = $this->getName();
        if ($this->_namespace === $defaultNamespaceName) {
            $shortestName = $this->_name;
        }

        return strtolower($shortestName);
    }

    /**
     * The normalized name is full-qualified and lowerspaced. Lowerspacing is
     * actually wrong, but we have to do it to keep our sanity. If you are
     * using database objects that only differentiate in the casing (FOO vs
     * Foo) then you will NOT be able to use Doctrine Schema abstraction.
     *
     * Every non-namespaced element is prefixed with the default namespace
     * name which is passed as argument to this method.
     *
     * @param string $defaultNamespaceName
     *
     * @return string
     */
    public function getFullQualifiedName($defaultNamespaceName)
    {
        $name = $this->getName();
        if (!$this->_namespace) {
            $name = $defaultNamespaceName . '.' . $name;
        }

        return strtolower($name);
    }

    /**
     * Checks if this asset's name is quoted.
     *
     * @return bool
     */
    public function isQuoted()
    {
        return $this->_quoted;
    }

    /**
     * Returns the name of this schema asset.
     *
     * @return string
     */
    public function getName()
    {
        if ($this->_namespace) {
            return $this->_namespace . '.' . $this->_name;
        }

        return $this->_name;
    }

    /**
     * Gets the quoted representation of this asset but only if it was defined with one. Otherwise
     * return the plain unquoted value as inserted.
     *
     * @return string
     */
    public function getQuotedName(AbstractPlatform $platform)
    {
        $keywords = $platform->getReservedKeywordsList();
        $parts = explode('.', $this->getName());
        foreach ($parts as $k => $v) {
            $parts[$k] = $this->_quoted || $keywords->isKeyword($v) ? $platform->quoteIdentifier($v) : $v;
        }

        return implode('.', $parts);
    }

    /**
     * Sets the name of this asset.
     *
     * @param string $name
     */
    protected function _setName($name): void
    {
        if ($this->isIdentifierQuoted($name)) {
            $this->_quoted = true;
            $name = $this->trimQuotes($name);
        }

        if (strpos($name, '.') !== false) {
            $parts = explode('.', $name, 2);
            $this->_namespace = $parts[0];
            $name = $parts[1];
        }

        $this->_name = $name;
    }

    /**
     * Checks if this identifier is quoted.
     *
     * @param string $identifier
     *
     * @return bool
     */
    protected function isIdentifierQuoted($identifier)
    {
        return isset($identifier[0]) && ($identifier[0] === '`' || $identifier[0] === '"' || $identifier[0] === '[');
    }

    /**
     * Trim quotes from the identifier.
     *
     * @param string $identifier
     *
     * @return string
     */
    protected function trimQuotes($identifier)
    {
        return str_replace(['`', '"', '[', ']'], '', $identifier);
    }

    /**
     * Generates an identifier from a list of column names obeying a certain string length.
     *
     * This is especially important for Oracle, since it does not allow identifiers larger than 30 chars,
     * however building idents automatically for foreign keys, composite keys or such can easily create
     * very long names.
     *
     * @param array<string> $columnNames
     * @param string   $prefix
     * @param int      $maxSize
     *
     * @return string
     */
    protected function _generateIdentifierName($columnNames, $prefix = '', $maxSize = 30)
    {
        $hash = implode('', array_map(static function ($column) {
            return dechex(crc32($column));
        }, $columnNames));

        return strtoupper(substr($prefix . '_' . $hash, 0, $maxSize));
    }
}
