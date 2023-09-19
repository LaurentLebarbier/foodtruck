<?php

namespace ContainerRjH4l1i;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderdd458 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer1870d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties25954 = [
        
    ];

    public function getConnection()
    {
        $this->initializer1870d && ($this->initializer1870d->__invoke($valueHolderdd458, $this, 'getConnection', array(), $this->initializer1870d) || 1) && $this->valueHolderdd458 = $valueHolderdd458;

        return $this->valueHolderdd458->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer1870d && ($this->initializer1870d->__invoke($valueHolderdd458, $this, 'getMetadataFactory', array(), $this->initializer1870d) || 1) && $this->valueHolderdd458 = $valueHolderdd458;

        return $this->valueHolderdd458->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer1870d && ($this->initializer1870d->__invoke($valueHolderdd458, $this, 'getExpressionBuilder', array(), $this->initializer1870d) || 1) && $this->valueHolderdd458 = $valueHolderdd458;

        return $this->valueHolderdd458->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer1870d && ($this->initializer1870d->__invoke($valueHolderdd458, $this, 'beginTransaction', array(), $this->initializer1870d) || 1) && $this->valueHolderdd458 = $valueHolderdd458;

        return $this->valueHolderdd458->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer1870d && ($this->initializer1870d->__invoke($valueHolderdd458, $this, 'getCache', array(), $this->initializer1870d) || 1) && $this->valueHolderdd458 = $valueHolderdd458;

        return $this->valueHolderdd458->getCache();
    }

    public function transactional($func)
    {
        $this->initializer1870d && ($this->initializer1870d->__invoke($valueHolderdd458, $this, 'transactional', array('func' => $func), $this->initializer1870d) || 1) && $this->valueHolderdd458 = $valueHolderdd458;

        return $this->valueHolderdd458->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer1870d && ($this->initializer1870d->__invoke($valueHolderdd458, $this, 'wrapInTransaction', array('func' => $func), $this->initializer1870d) || 1) && $this->valueHolderdd458 = $valueHolderdd458;

        return $this->valueHolderdd458->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer1870d && ($this->initializer1870d->__invoke($valueHolderdd458, $this, 'commit', array(), $this->initializer1870d) || 1) && $this->valueHolderdd458 = $valueHolderdd458;

        return $this->valueHolderdd458->commit();
    }

    public function rollback()
    {
        $this->initializer1870d && ($this->initializer1870d->__invoke($valueHolderdd458, $this, 'rollback', array(), $this->initializer1870d) || 1) && $this->valueHolderdd458 = $valueHolderdd458;

        return $this->valueHolderdd458->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer1870d && ($this->initializer1870d->__invoke($valueHolderdd458, $this, 'getClassMetadata', array('className' => $className), $this->initializer1870d) || 1) && $this->valueHolderdd458 = $valueHolderdd458;

        return $this->valueHolderdd458->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer1870d && ($this->initializer1870d->__invoke($valueHolderdd458, $this, 'createQuery', array('dql' => $dql), $this->initializer1870d) || 1) && $this->valueHolderdd458 = $valueHolderdd458;

        return $this->valueHolderdd458->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer1870d && ($this->initializer1870d->__invoke($valueHolderdd458, $this, 'createNamedQuery', array('name' => $name), $this->initializer1870d) || 1) && $this->valueHolderdd458 = $valueHolderdd458;

        return $this->valueHolderdd458->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer1870d && ($this->initializer1870d->__invoke($valueHolderdd458, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer1870d) || 1) && $this->valueHolderdd458 = $valueHolderdd458;

        return $this->valueHolderdd458->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer1870d && ($this->initializer1870d->__invoke($valueHolderdd458, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer1870d) || 1) && $this->valueHolderdd458 = $valueHolderdd458;

        return $this->valueHolderdd458->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer1870d && ($this->initializer1870d->__invoke($valueHolderdd458, $this, 'createQueryBuilder', array(), $this->initializer1870d) || 1) && $this->valueHolderdd458 = $valueHolderdd458;

        return $this->valueHolderdd458->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer1870d && ($this->initializer1870d->__invoke($valueHolderdd458, $this, 'flush', array('entity' => $entity), $this->initializer1870d) || 1) && $this->valueHolderdd458 = $valueHolderdd458;

        return $this->valueHolderdd458->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer1870d && ($this->initializer1870d->__invoke($valueHolderdd458, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1870d) || 1) && $this->valueHolderdd458 = $valueHolderdd458;

        return $this->valueHolderdd458->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer1870d && ($this->initializer1870d->__invoke($valueHolderdd458, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer1870d) || 1) && $this->valueHolderdd458 = $valueHolderdd458;

        return $this->valueHolderdd458->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer1870d && ($this->initializer1870d->__invoke($valueHolderdd458, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer1870d) || 1) && $this->valueHolderdd458 = $valueHolderdd458;

        return $this->valueHolderdd458->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer1870d && ($this->initializer1870d->__invoke($valueHolderdd458, $this, 'clear', array('entityName' => $entityName), $this->initializer1870d) || 1) && $this->valueHolderdd458 = $valueHolderdd458;

        return $this->valueHolderdd458->clear($entityName);
    }

    public function close()
    {
        $this->initializer1870d && ($this->initializer1870d->__invoke($valueHolderdd458, $this, 'close', array(), $this->initializer1870d) || 1) && $this->valueHolderdd458 = $valueHolderdd458;

        return $this->valueHolderdd458->close();
    }

    public function persist($entity)
    {
        $this->initializer1870d && ($this->initializer1870d->__invoke($valueHolderdd458, $this, 'persist', array('entity' => $entity), $this->initializer1870d) || 1) && $this->valueHolderdd458 = $valueHolderdd458;

        return $this->valueHolderdd458->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer1870d && ($this->initializer1870d->__invoke($valueHolderdd458, $this, 'remove', array('entity' => $entity), $this->initializer1870d) || 1) && $this->valueHolderdd458 = $valueHolderdd458;

        return $this->valueHolderdd458->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer1870d && ($this->initializer1870d->__invoke($valueHolderdd458, $this, 'refresh', array('entity' => $entity), $this->initializer1870d) || 1) && $this->valueHolderdd458 = $valueHolderdd458;

        return $this->valueHolderdd458->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer1870d && ($this->initializer1870d->__invoke($valueHolderdd458, $this, 'detach', array('entity' => $entity), $this->initializer1870d) || 1) && $this->valueHolderdd458 = $valueHolderdd458;

        return $this->valueHolderdd458->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer1870d && ($this->initializer1870d->__invoke($valueHolderdd458, $this, 'merge', array('entity' => $entity), $this->initializer1870d) || 1) && $this->valueHolderdd458 = $valueHolderdd458;

        return $this->valueHolderdd458->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer1870d && ($this->initializer1870d->__invoke($valueHolderdd458, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer1870d) || 1) && $this->valueHolderdd458 = $valueHolderdd458;

        return $this->valueHolderdd458->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer1870d && ($this->initializer1870d->__invoke($valueHolderdd458, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1870d) || 1) && $this->valueHolderdd458 = $valueHolderdd458;

        return $this->valueHolderdd458->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer1870d && ($this->initializer1870d->__invoke($valueHolderdd458, $this, 'getRepository', array('entityName' => $entityName), $this->initializer1870d) || 1) && $this->valueHolderdd458 = $valueHolderdd458;

        return $this->valueHolderdd458->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer1870d && ($this->initializer1870d->__invoke($valueHolderdd458, $this, 'contains', array('entity' => $entity), $this->initializer1870d) || 1) && $this->valueHolderdd458 = $valueHolderdd458;

        return $this->valueHolderdd458->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer1870d && ($this->initializer1870d->__invoke($valueHolderdd458, $this, 'getEventManager', array(), $this->initializer1870d) || 1) && $this->valueHolderdd458 = $valueHolderdd458;

        return $this->valueHolderdd458->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer1870d && ($this->initializer1870d->__invoke($valueHolderdd458, $this, 'getConfiguration', array(), $this->initializer1870d) || 1) && $this->valueHolderdd458 = $valueHolderdd458;

        return $this->valueHolderdd458->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer1870d && ($this->initializer1870d->__invoke($valueHolderdd458, $this, 'isOpen', array(), $this->initializer1870d) || 1) && $this->valueHolderdd458 = $valueHolderdd458;

        return $this->valueHolderdd458->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer1870d && ($this->initializer1870d->__invoke($valueHolderdd458, $this, 'getUnitOfWork', array(), $this->initializer1870d) || 1) && $this->valueHolderdd458 = $valueHolderdd458;

        return $this->valueHolderdd458->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer1870d && ($this->initializer1870d->__invoke($valueHolderdd458, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1870d) || 1) && $this->valueHolderdd458 = $valueHolderdd458;

        return $this->valueHolderdd458->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer1870d && ($this->initializer1870d->__invoke($valueHolderdd458, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1870d) || 1) && $this->valueHolderdd458 = $valueHolderdd458;

        return $this->valueHolderdd458->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer1870d && ($this->initializer1870d->__invoke($valueHolderdd458, $this, 'getProxyFactory', array(), $this->initializer1870d) || 1) && $this->valueHolderdd458 = $valueHolderdd458;

        return $this->valueHolderdd458->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer1870d && ($this->initializer1870d->__invoke($valueHolderdd458, $this, 'initializeObject', array('obj' => $obj), $this->initializer1870d) || 1) && $this->valueHolderdd458 = $valueHolderdd458;

        return $this->valueHolderdd458->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer1870d && ($this->initializer1870d->__invoke($valueHolderdd458, $this, 'getFilters', array(), $this->initializer1870d) || 1) && $this->valueHolderdd458 = $valueHolderdd458;

        return $this->valueHolderdd458->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer1870d && ($this->initializer1870d->__invoke($valueHolderdd458, $this, 'isFiltersStateClean', array(), $this->initializer1870d) || 1) && $this->valueHolderdd458 = $valueHolderdd458;

        return $this->valueHolderdd458->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer1870d && ($this->initializer1870d->__invoke($valueHolderdd458, $this, 'hasFilters', array(), $this->initializer1870d) || 1) && $this->valueHolderdd458 = $valueHolderdd458;

        return $this->valueHolderdd458->hasFilters();
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

        $instance->initializer1870d = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderdd458) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderdd458 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderdd458->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer1870d && ($this->initializer1870d->__invoke($valueHolderdd458, $this, '__get', ['name' => $name], $this->initializer1870d) || 1) && $this->valueHolderdd458 = $valueHolderdd458;

        if (isset(self::$publicProperties25954[$name])) {
            return $this->valueHolderdd458->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdd458;

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

        $targetObject = $this->valueHolderdd458;
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
        $this->initializer1870d && ($this->initializer1870d->__invoke($valueHolderdd458, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer1870d) || 1) && $this->valueHolderdd458 = $valueHolderdd458;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdd458;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderdd458;
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
        $this->initializer1870d && ($this->initializer1870d->__invoke($valueHolderdd458, $this, '__isset', array('name' => $name), $this->initializer1870d) || 1) && $this->valueHolderdd458 = $valueHolderdd458;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdd458;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderdd458;
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
        $this->initializer1870d && ($this->initializer1870d->__invoke($valueHolderdd458, $this, '__unset', array('name' => $name), $this->initializer1870d) || 1) && $this->valueHolderdd458 = $valueHolderdd458;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdd458;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderdd458;
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
        $this->initializer1870d && ($this->initializer1870d->__invoke($valueHolderdd458, $this, '__clone', array(), $this->initializer1870d) || 1) && $this->valueHolderdd458 = $valueHolderdd458;

        $this->valueHolderdd458 = clone $this->valueHolderdd458;
    }

    public function __sleep()
    {
        $this->initializer1870d && ($this->initializer1870d->__invoke($valueHolderdd458, $this, '__sleep', array(), $this->initializer1870d) || 1) && $this->valueHolderdd458 = $valueHolderdd458;

        return array('valueHolderdd458');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer1870d = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer1870d;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer1870d && ($this->initializer1870d->__invoke($valueHolderdd458, $this, 'initializeProxy', array(), $this->initializer1870d) || 1) && $this->valueHolderdd458 = $valueHolderdd458;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderdd458;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderdd458;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
