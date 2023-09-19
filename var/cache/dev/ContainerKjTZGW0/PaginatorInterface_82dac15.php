<?php

namespace ContainerKjTZGW0;
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
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

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializerfa603 && ($this->initializerfa603->__invoke($valueHolder87c20, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializerfa603) || 1) && $this->valueHolder87c20 = $valueHolder87c20;

        if ($this->valueHolder87c20 === $returnValue = $this->valueHolder87c20->paginate($target, $page, $limit, $options)) {
            return $this;
        }

        return $returnValue;
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

        $instance->initializerfa603 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder87c20) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder87c20 = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializerfa603 && ($this->initializerfa603->__invoke($valueHolder87c20, $this, '__get', ['name' => $name], $this->initializerfa603) || 1) && $this->valueHolder87c20 = $valueHolder87c20;

        if (isset(self::$publicPropertiese4ea6[$name])) {
            return $this->valueHolder87c20->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
