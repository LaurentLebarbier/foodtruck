<?php

namespace ContainerXDoopJA;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder4ab08 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer77fc2 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesfb454 = [
        
    ];

    public function getConnection()
    {
        $this->initializer77fc2 && ($this->initializer77fc2->__invoke($valueHolder4ab08, $this, 'getConnection', array(), $this->initializer77fc2) || 1) && $this->valueHolder4ab08 = $valueHolder4ab08;

        return $this->valueHolder4ab08->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer77fc2 && ($this->initializer77fc2->__invoke($valueHolder4ab08, $this, 'getMetadataFactory', array(), $this->initializer77fc2) || 1) && $this->valueHolder4ab08 = $valueHolder4ab08;

        return $this->valueHolder4ab08->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer77fc2 && ($this->initializer77fc2->__invoke($valueHolder4ab08, $this, 'getExpressionBuilder', array(), $this->initializer77fc2) || 1) && $this->valueHolder4ab08 = $valueHolder4ab08;

        return $this->valueHolder4ab08->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer77fc2 && ($this->initializer77fc2->__invoke($valueHolder4ab08, $this, 'beginTransaction', array(), $this->initializer77fc2) || 1) && $this->valueHolder4ab08 = $valueHolder4ab08;

        return $this->valueHolder4ab08->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer77fc2 && ($this->initializer77fc2->__invoke($valueHolder4ab08, $this, 'getCache', array(), $this->initializer77fc2) || 1) && $this->valueHolder4ab08 = $valueHolder4ab08;

        return $this->valueHolder4ab08->getCache();
    }

    public function transactional($func)
    {
        $this->initializer77fc2 && ($this->initializer77fc2->__invoke($valueHolder4ab08, $this, 'transactional', array('func' => $func), $this->initializer77fc2) || 1) && $this->valueHolder4ab08 = $valueHolder4ab08;

        return $this->valueHolder4ab08->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer77fc2 && ($this->initializer77fc2->__invoke($valueHolder4ab08, $this, 'wrapInTransaction', array('func' => $func), $this->initializer77fc2) || 1) && $this->valueHolder4ab08 = $valueHolder4ab08;

        return $this->valueHolder4ab08->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer77fc2 && ($this->initializer77fc2->__invoke($valueHolder4ab08, $this, 'commit', array(), $this->initializer77fc2) || 1) && $this->valueHolder4ab08 = $valueHolder4ab08;

        return $this->valueHolder4ab08->commit();
    }

    public function rollback()
    {
        $this->initializer77fc2 && ($this->initializer77fc2->__invoke($valueHolder4ab08, $this, 'rollback', array(), $this->initializer77fc2) || 1) && $this->valueHolder4ab08 = $valueHolder4ab08;

        return $this->valueHolder4ab08->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer77fc2 && ($this->initializer77fc2->__invoke($valueHolder4ab08, $this, 'getClassMetadata', array('className' => $className), $this->initializer77fc2) || 1) && $this->valueHolder4ab08 = $valueHolder4ab08;

        return $this->valueHolder4ab08->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer77fc2 && ($this->initializer77fc2->__invoke($valueHolder4ab08, $this, 'createQuery', array('dql' => $dql), $this->initializer77fc2) || 1) && $this->valueHolder4ab08 = $valueHolder4ab08;

        return $this->valueHolder4ab08->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer77fc2 && ($this->initializer77fc2->__invoke($valueHolder4ab08, $this, 'createNamedQuery', array('name' => $name), $this->initializer77fc2) || 1) && $this->valueHolder4ab08 = $valueHolder4ab08;

        return $this->valueHolder4ab08->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer77fc2 && ($this->initializer77fc2->__invoke($valueHolder4ab08, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer77fc2) || 1) && $this->valueHolder4ab08 = $valueHolder4ab08;

        return $this->valueHolder4ab08->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer77fc2 && ($this->initializer77fc2->__invoke($valueHolder4ab08, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer77fc2) || 1) && $this->valueHolder4ab08 = $valueHolder4ab08;

        return $this->valueHolder4ab08->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer77fc2 && ($this->initializer77fc2->__invoke($valueHolder4ab08, $this, 'createQueryBuilder', array(), $this->initializer77fc2) || 1) && $this->valueHolder4ab08 = $valueHolder4ab08;

        return $this->valueHolder4ab08->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer77fc2 && ($this->initializer77fc2->__invoke($valueHolder4ab08, $this, 'flush', array('entity' => $entity), $this->initializer77fc2) || 1) && $this->valueHolder4ab08 = $valueHolder4ab08;

        return $this->valueHolder4ab08->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer77fc2 && ($this->initializer77fc2->__invoke($valueHolder4ab08, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer77fc2) || 1) && $this->valueHolder4ab08 = $valueHolder4ab08;

        return $this->valueHolder4ab08->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer77fc2 && ($this->initializer77fc2->__invoke($valueHolder4ab08, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer77fc2) || 1) && $this->valueHolder4ab08 = $valueHolder4ab08;

        return $this->valueHolder4ab08->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer77fc2 && ($this->initializer77fc2->__invoke($valueHolder4ab08, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer77fc2) || 1) && $this->valueHolder4ab08 = $valueHolder4ab08;

        return $this->valueHolder4ab08->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer77fc2 && ($this->initializer77fc2->__invoke($valueHolder4ab08, $this, 'clear', array('entityName' => $entityName), $this->initializer77fc2) || 1) && $this->valueHolder4ab08 = $valueHolder4ab08;

        return $this->valueHolder4ab08->clear($entityName);
    }

    public function close()
    {
        $this->initializer77fc2 && ($this->initializer77fc2->__invoke($valueHolder4ab08, $this, 'close', array(), $this->initializer77fc2) || 1) && $this->valueHolder4ab08 = $valueHolder4ab08;

        return $this->valueHolder4ab08->close();
    }

    public function persist($entity)
    {
        $this->initializer77fc2 && ($this->initializer77fc2->__invoke($valueHolder4ab08, $this, 'persist', array('entity' => $entity), $this->initializer77fc2) || 1) && $this->valueHolder4ab08 = $valueHolder4ab08;

        return $this->valueHolder4ab08->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer77fc2 && ($this->initializer77fc2->__invoke($valueHolder4ab08, $this, 'remove', array('entity' => $entity), $this->initializer77fc2) || 1) && $this->valueHolder4ab08 = $valueHolder4ab08;

        return $this->valueHolder4ab08->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializer77fc2 && ($this->initializer77fc2->__invoke($valueHolder4ab08, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializer77fc2) || 1) && $this->valueHolder4ab08 = $valueHolder4ab08;

        return $this->valueHolder4ab08->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializer77fc2 && ($this->initializer77fc2->__invoke($valueHolder4ab08, $this, 'detach', array('entity' => $entity), $this->initializer77fc2) || 1) && $this->valueHolder4ab08 = $valueHolder4ab08;

        return $this->valueHolder4ab08->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer77fc2 && ($this->initializer77fc2->__invoke($valueHolder4ab08, $this, 'merge', array('entity' => $entity), $this->initializer77fc2) || 1) && $this->valueHolder4ab08 = $valueHolder4ab08;

        return $this->valueHolder4ab08->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer77fc2 && ($this->initializer77fc2->__invoke($valueHolder4ab08, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer77fc2) || 1) && $this->valueHolder4ab08 = $valueHolder4ab08;

        return $this->valueHolder4ab08->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer77fc2 && ($this->initializer77fc2->__invoke($valueHolder4ab08, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer77fc2) || 1) && $this->valueHolder4ab08 = $valueHolder4ab08;

        return $this->valueHolder4ab08->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer77fc2 && ($this->initializer77fc2->__invoke($valueHolder4ab08, $this, 'getRepository', array('entityName' => $entityName), $this->initializer77fc2) || 1) && $this->valueHolder4ab08 = $valueHolder4ab08;

        return $this->valueHolder4ab08->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer77fc2 && ($this->initializer77fc2->__invoke($valueHolder4ab08, $this, 'contains', array('entity' => $entity), $this->initializer77fc2) || 1) && $this->valueHolder4ab08 = $valueHolder4ab08;

        return $this->valueHolder4ab08->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer77fc2 && ($this->initializer77fc2->__invoke($valueHolder4ab08, $this, 'getEventManager', array(), $this->initializer77fc2) || 1) && $this->valueHolder4ab08 = $valueHolder4ab08;

        return $this->valueHolder4ab08->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer77fc2 && ($this->initializer77fc2->__invoke($valueHolder4ab08, $this, 'getConfiguration', array(), $this->initializer77fc2) || 1) && $this->valueHolder4ab08 = $valueHolder4ab08;

        return $this->valueHolder4ab08->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer77fc2 && ($this->initializer77fc2->__invoke($valueHolder4ab08, $this, 'isOpen', array(), $this->initializer77fc2) || 1) && $this->valueHolder4ab08 = $valueHolder4ab08;

        return $this->valueHolder4ab08->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer77fc2 && ($this->initializer77fc2->__invoke($valueHolder4ab08, $this, 'getUnitOfWork', array(), $this->initializer77fc2) || 1) && $this->valueHolder4ab08 = $valueHolder4ab08;

        return $this->valueHolder4ab08->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer77fc2 && ($this->initializer77fc2->__invoke($valueHolder4ab08, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer77fc2) || 1) && $this->valueHolder4ab08 = $valueHolder4ab08;

        return $this->valueHolder4ab08->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer77fc2 && ($this->initializer77fc2->__invoke($valueHolder4ab08, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer77fc2) || 1) && $this->valueHolder4ab08 = $valueHolder4ab08;

        return $this->valueHolder4ab08->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer77fc2 && ($this->initializer77fc2->__invoke($valueHolder4ab08, $this, 'getProxyFactory', array(), $this->initializer77fc2) || 1) && $this->valueHolder4ab08 = $valueHolder4ab08;

        return $this->valueHolder4ab08->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer77fc2 && ($this->initializer77fc2->__invoke($valueHolder4ab08, $this, 'initializeObject', array('obj' => $obj), $this->initializer77fc2) || 1) && $this->valueHolder4ab08 = $valueHolder4ab08;

        return $this->valueHolder4ab08->initializeObject($obj);
    }

    public function isUninitializedObject($obj) : bool
    {
        $this->initializer77fc2 && ($this->initializer77fc2->__invoke($valueHolder4ab08, $this, 'isUninitializedObject', array('obj' => $obj), $this->initializer77fc2) || 1) && $this->valueHolder4ab08 = $valueHolder4ab08;

        return $this->valueHolder4ab08->isUninitializedObject($obj);
    }

    public function getFilters()
    {
        $this->initializer77fc2 && ($this->initializer77fc2->__invoke($valueHolder4ab08, $this, 'getFilters', array(), $this->initializer77fc2) || 1) && $this->valueHolder4ab08 = $valueHolder4ab08;

        return $this->valueHolder4ab08->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer77fc2 && ($this->initializer77fc2->__invoke($valueHolder4ab08, $this, 'isFiltersStateClean', array(), $this->initializer77fc2) || 1) && $this->valueHolder4ab08 = $valueHolder4ab08;

        return $this->valueHolder4ab08->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer77fc2 && ($this->initializer77fc2->__invoke($valueHolder4ab08, $this, 'hasFilters', array(), $this->initializer77fc2) || 1) && $this->valueHolder4ab08 = $valueHolder4ab08;

        return $this->valueHolder4ab08->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer77fc2 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolder4ab08) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder4ab08 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder4ab08->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer77fc2 && ($this->initializer77fc2->__invoke($valueHolder4ab08, $this, '__get', ['name' => $name], $this->initializer77fc2) || 1) && $this->valueHolder4ab08 = $valueHolder4ab08;

        if (isset(self::$publicPropertiesfb454[$name])) {
            return $this->valueHolder4ab08->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4ab08;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder4ab08;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer77fc2 && ($this->initializer77fc2->__invoke($valueHolder4ab08, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer77fc2) || 1) && $this->valueHolder4ab08 = $valueHolder4ab08;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4ab08;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder4ab08;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer77fc2 && ($this->initializer77fc2->__invoke($valueHolder4ab08, $this, '__isset', array('name' => $name), $this->initializer77fc2) || 1) && $this->valueHolder4ab08 = $valueHolder4ab08;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4ab08;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder4ab08;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer77fc2 && ($this->initializer77fc2->__invoke($valueHolder4ab08, $this, '__unset', array('name' => $name), $this->initializer77fc2) || 1) && $this->valueHolder4ab08 = $valueHolder4ab08;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4ab08;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder4ab08;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer77fc2 && ($this->initializer77fc2->__invoke($valueHolder4ab08, $this, '__clone', array(), $this->initializer77fc2) || 1) && $this->valueHolder4ab08 = $valueHolder4ab08;

        $this->valueHolder4ab08 = clone $this->valueHolder4ab08;
    }

    public function __sleep()
    {
        $this->initializer77fc2 && ($this->initializer77fc2->__invoke($valueHolder4ab08, $this, '__sleep', array(), $this->initializer77fc2) || 1) && $this->valueHolder4ab08 = $valueHolder4ab08;

        return array('valueHolder4ab08');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer77fc2 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer77fc2;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer77fc2 && ($this->initializer77fc2->__invoke($valueHolder4ab08, $this, 'initializeProxy', array(), $this->initializer77fc2) || 1) && $this->valueHolder4ab08 = $valueHolder4ab08;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder4ab08;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder4ab08;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
