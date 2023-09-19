<?php

namespace Container8Nake97;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder87c20 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerfa603 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese4ea6 = [
        
    ];

    public function getConnection()
    {
        $this->initializerfa603 && ($this->initializerfa603->__invoke($valueHolder87c20, $this, 'getConnection', array(), $this->initializerfa603) || 1) && $this->valueHolder87c20 = $valueHolder87c20;

        return $this->valueHolder87c20->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerfa603 && ($this->initializerfa603->__invoke($valueHolder87c20, $this, 'getMetadataFactory', array(), $this->initializerfa603) || 1) && $this->valueHolder87c20 = $valueHolder87c20;

        return $this->valueHolder87c20->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerfa603 && ($this->initializerfa603->__invoke($valueHolder87c20, $this, 'getExpressionBuilder', array(), $this->initializerfa603) || 1) && $this->valueHolder87c20 = $valueHolder87c20;

        return $this->valueHolder87c20->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerfa603 && ($this->initializerfa603->__invoke($valueHolder87c20, $this, 'beginTransaction', array(), $this->initializerfa603) || 1) && $this->valueHolder87c20 = $valueHolder87c20;

        return $this->valueHolder87c20->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerfa603 && ($this->initializerfa603->__invoke($valueHolder87c20, $this, 'getCache', array(), $this->initializerfa603) || 1) && $this->valueHolder87c20 = $valueHolder87c20;

        return $this->valueHolder87c20->getCache();
    }

    public function transactional($func)
    {
        $this->initializerfa603 && ($this->initializerfa603->__invoke($valueHolder87c20, $this, 'transactional', array('func' => $func), $this->initializerfa603) || 1) && $this->valueHolder87c20 = $valueHolder87c20;

        return $this->valueHolder87c20->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerfa603 && ($this->initializerfa603->__invoke($valueHolder87c20, $this, 'wrapInTransaction', array('func' => $func), $this->initializerfa603) || 1) && $this->valueHolder87c20 = $valueHolder87c20;

        return $this->valueHolder87c20->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerfa603 && ($this->initializerfa603->__invoke($valueHolder87c20, $this, 'commit', array(), $this->initializerfa603) || 1) && $this->valueHolder87c20 = $valueHolder87c20;

        return $this->valueHolder87c20->commit();
    }

    public function rollback()
    {
        $this->initializerfa603 && ($this->initializerfa603->__invoke($valueHolder87c20, $this, 'rollback', array(), $this->initializerfa603) || 1) && $this->valueHolder87c20 = $valueHolder87c20;

        return $this->valueHolder87c20->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerfa603 && ($this->initializerfa603->__invoke($valueHolder87c20, $this, 'getClassMetadata', array('className' => $className), $this->initializerfa603) || 1) && $this->valueHolder87c20 = $valueHolder87c20;

        return $this->valueHolder87c20->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerfa603 && ($this->initializerfa603->__invoke($valueHolder87c20, $this, 'createQuery', array('dql' => $dql), $this->initializerfa603) || 1) && $this->valueHolder87c20 = $valueHolder87c20;

        return $this->valueHolder87c20->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerfa603 && ($this->initializerfa603->__invoke($valueHolder87c20, $this, 'createNamedQuery', array('name' => $name), $this->initializerfa603) || 1) && $this->valueHolder87c20 = $valueHolder87c20;

        return $this->valueHolder87c20->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerfa603 && ($this->initializerfa603->__invoke($valueHolder87c20, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerfa603) || 1) && $this->valueHolder87c20 = $valueHolder87c20;

        return $this->valueHolder87c20->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerfa603 && ($this->initializerfa603->__invoke($valueHolder87c20, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerfa603) || 1) && $this->valueHolder87c20 = $valueHolder87c20;

        return $this->valueHolder87c20->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerfa603 && ($this->initializerfa603->__invoke($valueHolder87c20, $this, 'createQueryBuilder', array(), $this->initializerfa603) || 1) && $this->valueHolder87c20 = $valueHolder87c20;

        return $this->valueHolder87c20->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerfa603 && ($this->initializerfa603->__invoke($valueHolder87c20, $this, 'flush', array('entity' => $entity), $this->initializerfa603) || 1) && $this->valueHolder87c20 = $valueHolder87c20;

        return $this->valueHolder87c20->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerfa603 && ($this->initializerfa603->__invoke($valueHolder87c20, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfa603) || 1) && $this->valueHolder87c20 = $valueHolder87c20;

        return $this->valueHolder87c20->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerfa603 && ($this->initializerfa603->__invoke($valueHolder87c20, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerfa603) || 1) && $this->valueHolder87c20 = $valueHolder87c20;

        return $this->valueHolder87c20->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerfa603 && ($this->initializerfa603->__invoke($valueHolder87c20, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerfa603) || 1) && $this->valueHolder87c20 = $valueHolder87c20;

        return $this->valueHolder87c20->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerfa603 && ($this->initializerfa603->__invoke($valueHolder87c20, $this, 'clear', array('entityName' => $entityName), $this->initializerfa603) || 1) && $this->valueHolder87c20 = $valueHolder87c20;

        return $this->valueHolder87c20->clear($entityName);
    }

    public function close()
    {
        $this->initializerfa603 && ($this->initializerfa603->__invoke($valueHolder87c20, $this, 'close', array(), $this->initializerfa603) || 1) && $this->valueHolder87c20 = $valueHolder87c20;

        return $this->valueHolder87c20->close();
    }

    public function persist($entity)
    {
        $this->initializerfa603 && ($this->initializerfa603->__invoke($valueHolder87c20, $this, 'persist', array('entity' => $entity), $this->initializerfa603) || 1) && $this->valueHolder87c20 = $valueHolder87c20;

        return $this->valueHolder87c20->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerfa603 && ($this->initializerfa603->__invoke($valueHolder87c20, $this, 'remove', array('entity' => $entity), $this->initializerfa603) || 1) && $this->valueHolder87c20 = $valueHolder87c20;

        return $this->valueHolder87c20->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerfa603 && ($this->initializerfa603->__invoke($valueHolder87c20, $this, 'refresh', array('entity' => $entity), $this->initializerfa603) || 1) && $this->valueHolder87c20 = $valueHolder87c20;

        return $this->valueHolder87c20->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerfa603 && ($this->initializerfa603->__invoke($valueHolder87c20, $this, 'detach', array('entity' => $entity), $this->initializerfa603) || 1) && $this->valueHolder87c20 = $valueHolder87c20;

        return $this->valueHolder87c20->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerfa603 && ($this->initializerfa603->__invoke($valueHolder87c20, $this, 'merge', array('entity' => $entity), $this->initializerfa603) || 1) && $this->valueHolder87c20 = $valueHolder87c20;

        return $this->valueHolder87c20->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerfa603 && ($this->initializerfa603->__invoke($valueHolder87c20, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerfa603) || 1) && $this->valueHolder87c20 = $valueHolder87c20;

        return $this->valueHolder87c20->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerfa603 && ($this->initializerfa603->__invoke($valueHolder87c20, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfa603) || 1) && $this->valueHolder87c20 = $valueHolder87c20;

        return $this->valueHolder87c20->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerfa603 && ($this->initializerfa603->__invoke($valueHolder87c20, $this, 'getRepository', array('entityName' => $entityName), $this->initializerfa603) || 1) && $this->valueHolder87c20 = $valueHolder87c20;

        return $this->valueHolder87c20->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerfa603 && ($this->initializerfa603->__invoke($valueHolder87c20, $this, 'contains', array('entity' => $entity), $this->initializerfa603) || 1) && $this->valueHolder87c20 = $valueHolder87c20;

        return $this->valueHolder87c20->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerfa603 && ($this->initializerfa603->__invoke($valueHolder87c20, $this, 'getEventManager', array(), $this->initializerfa603) || 1) && $this->valueHolder87c20 = $valueHolder87c20;

        return $this->valueHolder87c20->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerfa603 && ($this->initializerfa603->__invoke($valueHolder87c20, $this, 'getConfiguration', array(), $this->initializerfa603) || 1) && $this->valueHolder87c20 = $valueHolder87c20;

        return $this->valueHolder87c20->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerfa603 && ($this->initializerfa603->__invoke($valueHolder87c20, $this, 'isOpen', array(), $this->initializerfa603) || 1) && $this->valueHolder87c20 = $valueHolder87c20;

        return $this->valueHolder87c20->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerfa603 && ($this->initializerfa603->__invoke($valueHolder87c20, $this, 'getUnitOfWork', array(), $this->initializerfa603) || 1) && $this->valueHolder87c20 = $valueHolder87c20;

        return $this->valueHolder87c20->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerfa603 && ($this->initializerfa603->__invoke($valueHolder87c20, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfa603) || 1) && $this->valueHolder87c20 = $valueHolder87c20;

        return $this->valueHolder87c20->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerfa603 && ($this->initializerfa603->__invoke($valueHolder87c20, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfa603) || 1) && $this->valueHolder87c20 = $valueHolder87c20;

        return $this->valueHolder87c20->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerfa603 && ($this->initializerfa603->__invoke($valueHolder87c20, $this, 'getProxyFactory', array(), $this->initializerfa603) || 1) && $this->valueHolder87c20 = $valueHolder87c20;

        return $this->valueHolder87c20->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerfa603 && ($this->initializerfa603->__invoke($valueHolder87c20, $this, 'initializeObject', array('obj' => $obj), $this->initializerfa603) || 1) && $this->valueHolder87c20 = $valueHolder87c20;

        return $this->valueHolder87c20->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerfa603 && ($this->initializerfa603->__invoke($valueHolder87c20, $this, 'getFilters', array(), $this->initializerfa603) || 1) && $this->valueHolder87c20 = $valueHolder87c20;

        return $this->valueHolder87c20->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerfa603 && ($this->initializerfa603->__invoke($valueHolder87c20, $this, 'isFiltersStateClean', array(), $this->initializerfa603) || 1) && $this->valueHolder87c20 = $valueHolder87c20;

        return $this->valueHolder87c20->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerfa603 && ($this->initializerfa603->__invoke($valueHolder87c20, $this, 'hasFilters', array(), $this->initializerfa603) || 1) && $this->valueHolder87c20 = $valueHolder87c20;

        return $this->valueHolder87c20->hasFilters();
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

        $instance->initializerfa603 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder87c20) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder87c20 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder87c20->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerfa603 && ($this->initializerfa603->__invoke($valueHolder87c20, $this, '__get', ['name' => $name], $this->initializerfa603) || 1) && $this->valueHolder87c20 = $valueHolder87c20;

        if (isset(self::$publicPropertiese4ea6[$name])) {
            return $this->valueHolder87c20->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder87c20;

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

        $targetObject = $this->valueHolder87c20;
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
        $this->initializerfa603 && ($this->initializerfa603->__invoke($valueHolder87c20, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerfa603) || 1) && $this->valueHolder87c20 = $valueHolder87c20;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder87c20;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder87c20;
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
        $this->initializerfa603 && ($this->initializerfa603->__invoke($valueHolder87c20, $this, '__isset', array('name' => $name), $this->initializerfa603) || 1) && $this->valueHolder87c20 = $valueHolder87c20;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder87c20;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder87c20;
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
        $this->initializerfa603 && ($this->initializerfa603->__invoke($valueHolder87c20, $this, '__unset', array('name' => $name), $this->initializerfa603) || 1) && $this->valueHolder87c20 = $valueHolder87c20;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder87c20;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder87c20;
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
        $this->initializerfa603 && ($this->initializerfa603->__invoke($valueHolder87c20, $this, '__clone', array(), $this->initializerfa603) || 1) && $this->valueHolder87c20 = $valueHolder87c20;

        $this->valueHolder87c20 = clone $this->valueHolder87c20;
    }

    public function __sleep()
    {
        $this->initializerfa603 && ($this->initializerfa603->__invoke($valueHolder87c20, $this, '__sleep', array(), $this->initializerfa603) || 1) && $this->valueHolder87c20 = $valueHolder87c20;

        return array('valueHolder87c20');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerfa603 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerfa603;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerfa603 && ($this->initializerfa603->__invoke($valueHolder87c20, $this, 'initializeProxy', array(), $this->initializerfa603) || 1) && $this->valueHolder87c20 = $valueHolder87c20;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder87c20;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder87c20;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
