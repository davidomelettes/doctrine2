<?php

declare(strict_types=1);

namespace Doctrine\ORM\Cache;

/**
 * Defines entity collection roles to be stored in the cache region.
 */
class CollectionCacheKey extends CacheKey
{
    /**
     * READ-ONLY: Public only for performance reasons, it should be considered immutable.
     *
     * @var mixed[] The owner entity identifier
     */
    public $ownerIdentifier;

    /**
     * READ-ONLY: Public only for performance reasons, it should be considered immutable.
     *
     * @var string The owner entity class
     */
    public $entityClass;

    /**
     * READ-ONLY: Public only for performance reasons, it should be considered immutable.
     *
     * @var string The association name
     */
    public $association;

    /**
     * @param string  $entityClass     The entity class.
     * @param string  $association     The field name that represents the association.
     * @param mixed[] $ownerIdentifier The identifier of the owning entity.
     */
    public function __construct($entityClass, $association, array $ownerIdentifier)
    {
        ksort($ownerIdentifier);

        $this->ownerIdentifier = $ownerIdentifier;
        $this->entityClass     = (string) $entityClass;
        $this->association     = (string) $association;
        $this->hash            = str_replace('\\', '.', strtolower($entityClass)) . '_' . implode(' ', $ownerIdentifier) . '__' . $association;
    }
}
