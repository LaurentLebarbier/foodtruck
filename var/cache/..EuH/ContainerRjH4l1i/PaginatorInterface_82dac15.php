<?php

namespace ContainerRjH4l1i;
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
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

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer1870d && ($this->initializer1870d->__invoke($valueHolderdd458, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer1870d) || 1) && $this->valueHolderdd458 = $valueHolderdd458;

        if ($this->valueHolderdd458 === $returnValue = $this->valueHolderdd458->paginate($target, $page, $limit, $options)) {
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

        $instance->initializer1870d = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolderdd458) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolderdd458 = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializer1870d && ($this->initializer1870d->__invoke($valueHolderdd458, $this, '__get', ['name' => $name], $this->initializer1870d) || 1) && $this->valueHolderdd458 = $valueHolderdd458;

        if (isset(self::$publicProperties25954[$name])) {
            return $this->valueHolderdd458->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
