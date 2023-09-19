<?php

namespace ContainerC6Pv4xx;

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    private $valueHolder8aec1 = null;
    private $initializer69b11 = null;
    private static $publicProperties8d990 = [
        
    ];
    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer69b11 && ($this->initializer69b11->__invoke($valueHolder8aec1, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer69b11) || 1) && $this->valueHolder8aec1 = $valueHolder8aec1;
        if ($this->valueHolder8aec1 === $returnValue = $this->valueHolder8aec1->paginate($target, $page, $limit, $options)) {
            return $this;
        }
        return $returnValue;
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        $instance->initializer69b11 = $initializer;
        return $instance;
    }
    public function __construct()
    {
        static $reflection;
        if (! $this->valueHolder8aec1) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder8aec1 = $reflection->newInstanceWithoutConstructor();
        }
    }
    public function & __get($name)
    {
        $this->initializer69b11 && ($this->initializer69b11->__invoke($valueHolder8aec1, $this, '__get', ['name' => $name], $this->initializer69b11) || 1) && $this->valueHolder8aec1 = $valueHolder8aec1;
        if (isset(self::$publicProperties8d990[$name])) {
            return $this->valueHolder8aec1->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
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
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
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
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
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
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
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

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
