<?php

namespace ContainerC6Pv4xx;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder8aec1 = null;
    private $initializer69b11 = null;
    private static $publicProperties8d990 = [
        
    ];
    public function getConnection()
    {
        $this->initializer69b11 && ($this->initializer69b11->__invoke($valueHolder8aec1, $this, 'getConnection', array(), $this->initializer69b11) || 1) && $this->valueHolder8aec1 = $valueHolder8aec1;
        return $this->valueHolder8aec1->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer69b11 && ($this->initializer69b11->__invoke($valueHolder8aec1, $this, 'getMetadataFactory', array(), $this->initializer69b11) || 1) && $this->valueHolder8aec1 = $valueHolder8aec1;
        return $this->valueHolder8aec1->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer69b11 && ($this->initializer69b11->__invoke($valueHolder8aec1, $this, 'getExpressionBuilder', array(), $this->initializer69b11) || 1) && $this->valueHolder8aec1 = $valueHolder8aec1;
        return $this->valueHolder8aec1->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer69b11 && ($this->initializer69b11->__invoke($valueHolder8aec1, $this, 'beginTransaction', array(), $this->initializer69b11) || 1) && $this->valueHolder8aec1 = $valueHolder8aec1;
        return $this->valueHolder8aec1->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer69b11 && ($this->initializer69b11->__invoke($valueHolder8aec1, $this, 'getCache', array(), $this->initializer69b11) || 1) && $this->valueHolder8aec1 = $valueHolder8aec1;
        return $this->valueHolder8aec1->getCache();
    }
    public function transactional($func)
    {
        $this->initializer69b11 && ($this->initializer69b11->__invoke($valueHolder8aec1, $this, 'transactional', array('func' => $func), $this->initializer69b11) || 1) && $this->valueHolder8aec1 = $valueHolder8aec1;
        return $this->valueHolder8aec1->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer69b11 && ($this->initializer69b11->__invoke($valueHolder8aec1, $this, 'wrapInTransaction', array('func' => $func), $this->initializer69b11) || 1) && $this->valueHolder8aec1 = $valueHolder8aec1;
        return $this->valueHolder8aec1->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer69b11 && ($this->initializer69b11->__invoke($valueHolder8aec1, $this, 'commit', array(), $this->initializer69b11) || 1) && $this->valueHolder8aec1 = $valueHolder8aec1;
        return $this->valueHolder8aec1->commit();
    }
    public function rollback()
    {
        $this->initializer69b11 && ($this->initializer69b11->__invoke($valueHolder8aec1, $this, 'rollback', array(), $this->initializer69b11) || 1) && $this->valueHolder8aec1 = $valueHolder8aec1;
        return $this->valueHolder8aec1->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer69b11 && ($this->initializer69b11->__invoke($valueHolder8aec1, $this, 'getClassMetadata', array('className' => $className), $this->initializer69b11) || 1) && $this->valueHolder8aec1 = $valueHolder8aec1;
        return $this->valueHolder8aec1->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer69b11 && ($this->initializer69b11->__invoke($valueHolder8aec1, $this, 'createQuery', array('dql' => $dql), $this->initializer69b11) || 1) && $this->valueHolder8aec1 = $valueHolder8aec1;
        return $this->valueHolder8aec1->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer69b11 && ($this->initializer69b11->__invoke($valueHolder8aec1, $this, 'createNamedQuery', array('name' => $name), $this->initializer69b11) || 1) && $this->valueHolder8aec1 = $valueHolder8aec1;
        return $this->valueHolder8aec1->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer69b11 && ($this->initializer69b11->__invoke($valueHolder8aec1, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer69b11) || 1) && $this->valueHolder8aec1 = $valueHolder8aec1;
        return $this->valueHolder8aec1->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer69b11 && ($this->initializer69b11->__invoke($valueHolder8aec1, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer69b11) || 1) && $this->valueHolder8aec1 = $valueHolder8aec1;
        return $this->valueHolder8aec1->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer69b11 && ($this->initializer69b11->__invoke($valueHolder8aec1, $this, 'createQueryBuilder', array(), $this->initializer69b11) || 1) && $this->valueHolder8aec1 = $valueHolder8aec1;
        return $this->valueHolder8aec1->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer69b11 && ($this->initializer69b11->__invoke($valueHolder8aec1, $this, 'flush', array('entity' => $entity), $this->initializer69b11) || 1) && $this->valueHolder8aec1 = $valueHolder8aec1;
        return $this->valueHolder8aec1->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer69b11 && ($this->initializer69b11->__invoke($valueHolder8aec1, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer69b11) || 1) && $this->valueHolder8aec1 = $valueHolder8aec1;
        return $this->valueHolder8aec1->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer69b11 && ($this->initializer69b11->__invoke($valueHolder8aec1, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer69b11) || 1) && $this->valueHolder8aec1 = $valueHolder8aec1;
        return $this->valueHolder8aec1->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer69b11 && ($this->initializer69b11->__invoke($valueHolder8aec1, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer69b11) || 1) && $this->valueHolder8aec1 = $valueHolder8aec1;
        return $this->valueHolder8aec1->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer69b11 && ($this->initializer69b11->__invoke($valueHolder8aec1, $this, 'clear', array('entityName' => $entityName), $this->initializer69b11) || 1) && $this->valueHolder8aec1 = $valueHolder8aec1;
        return $this->valueHolder8aec1->clear($entityName);
    }
    public function close()
    {
        $this->initializer69b11 && ($this->initializer69b11->__invoke($valueHolder8aec1, $this, 'close', array(), $this->initializer69b11) || 1) && $this->valueHolder8aec1 = $valueHolder8aec1;
        return $this->valueHolder8aec1->close();
    }
    public function persist($entity)
    {
        $this->initializer69b11 && ($this->initializer69b11->__invoke($valueHolder8aec1, $this, 'persist', array('entity' => $entity), $this->initializer69b11) || 1) && $this->valueHolder8aec1 = $valueHolder8aec1;
        return $this->valueHolder8aec1->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer69b11 && ($this->initializer69b11->__invoke($valueHolder8aec1, $this, 'remove', array('entity' => $entity), $this->initializer69b11) || 1) && $this->valueHolder8aec1 = $valueHolder8aec1;
        return $this->valueHolder8aec1->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer69b11 && ($this->initializer69b11->__invoke($valueHolder8aec1, $this, 'refresh', array('entity' => $entity), $this->initializer69b11) || 1) && $this->valueHolder8aec1 = $valueHolder8aec1;
        return $this->valueHolder8aec1->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer69b11 && ($this->initializer69b11->__invoke($valueHolder8aec1, $this, 'detach', array('entity' => $entity), $this->initializer69b11) || 1) && $this->valueHolder8aec1 = $valueHolder8aec1;
        return $this->valueHolder8aec1->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer69b11 && ($this->initializer69b11->__invoke($valueHolder8aec1, $this, 'merge', array('entity' => $entity), $this->initializer69b11) || 1) && $this->valueHolder8aec1 = $valueHolder8aec1;
        return $this->valueHolder8aec1->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer69b11 && ($this->initializer69b11->__invoke($valueHolder8aec1, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer69b11) || 1) && $this->valueHolder8aec1 = $valueHolder8aec1;
        return $this->valueHolder8aec1->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer69b11 && ($this->initializer69b11->__invoke($valueHolder8aec1, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer69b11) || 1) && $this->valueHolder8aec1 = $valueHolder8aec1;
        return $this->valueHolder8aec1->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer69b11 && ($this->initializer69b11->__invoke($valueHolder8aec1, $this, 'getRepository', array('entityName' => $entityName), $this->initializer69b11) || 1) && $this->valueHolder8aec1 = $valueHolder8aec1;
        return $this->valueHolder8aec1->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer69b11 && ($this->initializer69b11->__invoke($valueHolder8aec1, $this, 'contains', array('entity' => $entity), $this->initializer69b11) || 1) && $this->valueHolder8aec1 = $valueHolder8aec1;
        return $this->valueHolder8aec1->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer69b11 && ($this->initializer69b11->__invoke($valueHolder8aec1, $this, 'getEventManager', array(), $this->initializer69b11) || 1) && $this->valueHolder8aec1 = $valueHolder8aec1;
        return $this->valueHolder8aec1->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer69b11 && ($this->initializer69b11->__invoke($valueHolder8aec1, $this, 'getConfiguration', array(), $this->initializer69b11) || 1) && $this->valueHolder8aec1 = $valueHolder8aec1;
        return $this->valueHolder8aec1->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer69b11 && ($this->initializer69b11->__invoke($valueHolder8aec1, $this, 'isOpen', array(), $this->initializer69b11) || 1) && $this->valueHolder8aec1 = $valueHolder8aec1;
        return $this->valueHolder8aec1->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer69b11 && ($this->initializer69b11->__invoke($valueHolder8aec1, $this, 'getUnitOfWork', array(), $this->initializer69b11) || 1) && $this->valueHolder8aec1 = $valueHolder8aec1;
        return $this->valueHolder8aec1->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer69b11 && ($this->initializer69b11->__invoke($valueHolder8aec1, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer69b11) || 1) && $this->valueHolder8aec1 = $valueHolder8aec1;
        return $this->valueHolder8aec1->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer69b11 && ($this->initializer69b11->__invoke($valueHolder8aec1, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer69b11) || 1) && $this->valueHolder8aec1 = $valueHolder8aec1;
        return $this->valueHolder8aec1->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer69b11 && ($this->initializer69b11->__invoke($valueHolder8aec1, $this, 'getProxyFactory', array(), $this->initializer69b11) || 1) && $this->valueHolder8aec1 = $valueHolder8aec1;
        return $this->valueHolder8aec1->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer69b11 && ($this->initializer69b11->__invoke($valueHolder8aec1, $this, 'initializeObject', array('obj' => $obj), $this->initializer69b11) || 1) && $this->valueHolder8aec1 = $valueHolder8aec1;
        return $this->valueHolder8aec1->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer69b11 && ($this->initializer69b11->__invoke($valueHolder8aec1, $this, 'getFilters', array(), $this->initializer69b11) || 1) && $this->valueHolder8aec1 = $valueHolder8aec1;
        return $this->valueHolder8aec1->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer69b11 && ($this->initializer69b11->__invoke($valueHolder8aec1, $this, 'isFiltersStateClean', array(), $this->initializer69b11) || 1) && $this->valueHolder8aec1 = $valueHolder8aec1;
        return $this->valueHolder8aec1->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer69b11 && ($this->initializer69b11->__invoke($valueHolder8aec1, $this, 'hasFilters', array(), $this->initializer69b11) || 1) && $this->valueHolder8aec1 = $valueHolder8aec1;
        return $this->valueHolder8aec1->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer69b11 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder8aec1) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder8aec1 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder8aec1->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer69b11 && ($this->initializer69b11->__invoke($valueHolder8aec1, $this, '__get', ['name' => $name], $this->initializer69b11) || 1) && $this->valueHolder8aec1 = $valueHolder8aec1;
        if (isset(self::$publicProperties8d990[$name])) {
            return $this->valueHolder8aec1->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8aec1;
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
        $targetObject = $this->valueHolder8aec1;
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
        $this->initializer69b11 && ($this->initializer69b11->__invoke($valueHolder8aec1, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer69b11) || 1) && $this->valueHolder8aec1 = $valueHolder8aec1;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8aec1;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder8aec1;
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
        $this->initializer69b11 && ($this->initializer69b11->__invoke($valueHolder8aec1, $this, '__isset', array('name' => $name), $this->initializer69b11) || 1) && $this->valueHolder8aec1 = $valueHolder8aec1;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8aec1;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder8aec1;
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
        $this->initializer69b11 && ($this->initializer69b11->__invoke($valueHolder8aec1, $this, '__unset', array('name' => $name), $this->initializer69b11) || 1) && $this->valueHolder8aec1 = $valueHolder8aec1;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8aec1;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder8aec1;
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
        $this->initializer69b11 && ($this->initializer69b11->__invoke($valueHolder8aec1, $this, '__clone', array(), $this->initializer69b11) || 1) && $this->valueHolder8aec1 = $valueHolder8aec1;
        $this->valueHolder8aec1 = clone $this->valueHolder8aec1;
    }
    public function __sleep()
    {
        $this->initializer69b11 && ($this->initializer69b11->__invoke($valueHolder8aec1, $this, '__sleep', array(), $this->initializer69b11) || 1) && $this->valueHolder8aec1 = $valueHolder8aec1;
        return array('valueHolder8aec1');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer69b11 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer69b11;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer69b11 && ($this->initializer69b11->__invoke($valueHolder8aec1, $this, 'initializeProxy', array(), $this->initializer69b11) || 1) && $this->valueHolder8aec1 = $valueHolder8aec1;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8aec1;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8aec1;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
