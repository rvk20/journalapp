<?php

namespace ContainerFAWluaq;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd7812 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer4bce9 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties9e35a = [
        
    ];

    public function getConnection()
    {
        $this->initializer4bce9 && ($this->initializer4bce9->__invoke($valueHolderd7812, $this, 'getConnection', array(), $this->initializer4bce9) || 1) && $this->valueHolderd7812 = $valueHolderd7812;

        return $this->valueHolderd7812->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer4bce9 && ($this->initializer4bce9->__invoke($valueHolderd7812, $this, 'getMetadataFactory', array(), $this->initializer4bce9) || 1) && $this->valueHolderd7812 = $valueHolderd7812;

        return $this->valueHolderd7812->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer4bce9 && ($this->initializer4bce9->__invoke($valueHolderd7812, $this, 'getExpressionBuilder', array(), $this->initializer4bce9) || 1) && $this->valueHolderd7812 = $valueHolderd7812;

        return $this->valueHolderd7812->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer4bce9 && ($this->initializer4bce9->__invoke($valueHolderd7812, $this, 'beginTransaction', array(), $this->initializer4bce9) || 1) && $this->valueHolderd7812 = $valueHolderd7812;

        return $this->valueHolderd7812->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer4bce9 && ($this->initializer4bce9->__invoke($valueHolderd7812, $this, 'getCache', array(), $this->initializer4bce9) || 1) && $this->valueHolderd7812 = $valueHolderd7812;

        return $this->valueHolderd7812->getCache();
    }

    public function transactional($func)
    {
        $this->initializer4bce9 && ($this->initializer4bce9->__invoke($valueHolderd7812, $this, 'transactional', array('func' => $func), $this->initializer4bce9) || 1) && $this->valueHolderd7812 = $valueHolderd7812;

        return $this->valueHolderd7812->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer4bce9 && ($this->initializer4bce9->__invoke($valueHolderd7812, $this, 'wrapInTransaction', array('func' => $func), $this->initializer4bce9) || 1) && $this->valueHolderd7812 = $valueHolderd7812;

        return $this->valueHolderd7812->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer4bce9 && ($this->initializer4bce9->__invoke($valueHolderd7812, $this, 'commit', array(), $this->initializer4bce9) || 1) && $this->valueHolderd7812 = $valueHolderd7812;

        return $this->valueHolderd7812->commit();
    }

    public function rollback()
    {
        $this->initializer4bce9 && ($this->initializer4bce9->__invoke($valueHolderd7812, $this, 'rollback', array(), $this->initializer4bce9) || 1) && $this->valueHolderd7812 = $valueHolderd7812;

        return $this->valueHolderd7812->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer4bce9 && ($this->initializer4bce9->__invoke($valueHolderd7812, $this, 'getClassMetadata', array('className' => $className), $this->initializer4bce9) || 1) && $this->valueHolderd7812 = $valueHolderd7812;

        return $this->valueHolderd7812->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer4bce9 && ($this->initializer4bce9->__invoke($valueHolderd7812, $this, 'createQuery', array('dql' => $dql), $this->initializer4bce9) || 1) && $this->valueHolderd7812 = $valueHolderd7812;

        return $this->valueHolderd7812->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer4bce9 && ($this->initializer4bce9->__invoke($valueHolderd7812, $this, 'createNamedQuery', array('name' => $name), $this->initializer4bce9) || 1) && $this->valueHolderd7812 = $valueHolderd7812;

        return $this->valueHolderd7812->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer4bce9 && ($this->initializer4bce9->__invoke($valueHolderd7812, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer4bce9) || 1) && $this->valueHolderd7812 = $valueHolderd7812;

        return $this->valueHolderd7812->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer4bce9 && ($this->initializer4bce9->__invoke($valueHolderd7812, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer4bce9) || 1) && $this->valueHolderd7812 = $valueHolderd7812;

        return $this->valueHolderd7812->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer4bce9 && ($this->initializer4bce9->__invoke($valueHolderd7812, $this, 'createQueryBuilder', array(), $this->initializer4bce9) || 1) && $this->valueHolderd7812 = $valueHolderd7812;

        return $this->valueHolderd7812->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer4bce9 && ($this->initializer4bce9->__invoke($valueHolderd7812, $this, 'flush', array('entity' => $entity), $this->initializer4bce9) || 1) && $this->valueHolderd7812 = $valueHolderd7812;

        return $this->valueHolderd7812->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer4bce9 && ($this->initializer4bce9->__invoke($valueHolderd7812, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4bce9) || 1) && $this->valueHolderd7812 = $valueHolderd7812;

        return $this->valueHolderd7812->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer4bce9 && ($this->initializer4bce9->__invoke($valueHolderd7812, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer4bce9) || 1) && $this->valueHolderd7812 = $valueHolderd7812;

        return $this->valueHolderd7812->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer4bce9 && ($this->initializer4bce9->__invoke($valueHolderd7812, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer4bce9) || 1) && $this->valueHolderd7812 = $valueHolderd7812;

        return $this->valueHolderd7812->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer4bce9 && ($this->initializer4bce9->__invoke($valueHolderd7812, $this, 'clear', array('entityName' => $entityName), $this->initializer4bce9) || 1) && $this->valueHolderd7812 = $valueHolderd7812;

        return $this->valueHolderd7812->clear($entityName);
    }

    public function close()
    {
        $this->initializer4bce9 && ($this->initializer4bce9->__invoke($valueHolderd7812, $this, 'close', array(), $this->initializer4bce9) || 1) && $this->valueHolderd7812 = $valueHolderd7812;

        return $this->valueHolderd7812->close();
    }

    public function persist($entity)
    {
        $this->initializer4bce9 && ($this->initializer4bce9->__invoke($valueHolderd7812, $this, 'persist', array('entity' => $entity), $this->initializer4bce9) || 1) && $this->valueHolderd7812 = $valueHolderd7812;

        return $this->valueHolderd7812->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer4bce9 && ($this->initializer4bce9->__invoke($valueHolderd7812, $this, 'remove', array('entity' => $entity), $this->initializer4bce9) || 1) && $this->valueHolderd7812 = $valueHolderd7812;

        return $this->valueHolderd7812->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer4bce9 && ($this->initializer4bce9->__invoke($valueHolderd7812, $this, 'refresh', array('entity' => $entity), $this->initializer4bce9) || 1) && $this->valueHolderd7812 = $valueHolderd7812;

        return $this->valueHolderd7812->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer4bce9 && ($this->initializer4bce9->__invoke($valueHolderd7812, $this, 'detach', array('entity' => $entity), $this->initializer4bce9) || 1) && $this->valueHolderd7812 = $valueHolderd7812;

        return $this->valueHolderd7812->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer4bce9 && ($this->initializer4bce9->__invoke($valueHolderd7812, $this, 'merge', array('entity' => $entity), $this->initializer4bce9) || 1) && $this->valueHolderd7812 = $valueHolderd7812;

        return $this->valueHolderd7812->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer4bce9 && ($this->initializer4bce9->__invoke($valueHolderd7812, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer4bce9) || 1) && $this->valueHolderd7812 = $valueHolderd7812;

        return $this->valueHolderd7812->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer4bce9 && ($this->initializer4bce9->__invoke($valueHolderd7812, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4bce9) || 1) && $this->valueHolderd7812 = $valueHolderd7812;

        return $this->valueHolderd7812->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer4bce9 && ($this->initializer4bce9->__invoke($valueHolderd7812, $this, 'getRepository', array('entityName' => $entityName), $this->initializer4bce9) || 1) && $this->valueHolderd7812 = $valueHolderd7812;

        return $this->valueHolderd7812->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer4bce9 && ($this->initializer4bce9->__invoke($valueHolderd7812, $this, 'contains', array('entity' => $entity), $this->initializer4bce9) || 1) && $this->valueHolderd7812 = $valueHolderd7812;

        return $this->valueHolderd7812->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer4bce9 && ($this->initializer4bce9->__invoke($valueHolderd7812, $this, 'getEventManager', array(), $this->initializer4bce9) || 1) && $this->valueHolderd7812 = $valueHolderd7812;

        return $this->valueHolderd7812->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer4bce9 && ($this->initializer4bce9->__invoke($valueHolderd7812, $this, 'getConfiguration', array(), $this->initializer4bce9) || 1) && $this->valueHolderd7812 = $valueHolderd7812;

        return $this->valueHolderd7812->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer4bce9 && ($this->initializer4bce9->__invoke($valueHolderd7812, $this, 'isOpen', array(), $this->initializer4bce9) || 1) && $this->valueHolderd7812 = $valueHolderd7812;

        return $this->valueHolderd7812->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer4bce9 && ($this->initializer4bce9->__invoke($valueHolderd7812, $this, 'getUnitOfWork', array(), $this->initializer4bce9) || 1) && $this->valueHolderd7812 = $valueHolderd7812;

        return $this->valueHolderd7812->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer4bce9 && ($this->initializer4bce9->__invoke($valueHolderd7812, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4bce9) || 1) && $this->valueHolderd7812 = $valueHolderd7812;

        return $this->valueHolderd7812->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer4bce9 && ($this->initializer4bce9->__invoke($valueHolderd7812, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4bce9) || 1) && $this->valueHolderd7812 = $valueHolderd7812;

        return $this->valueHolderd7812->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer4bce9 && ($this->initializer4bce9->__invoke($valueHolderd7812, $this, 'getProxyFactory', array(), $this->initializer4bce9) || 1) && $this->valueHolderd7812 = $valueHolderd7812;

        return $this->valueHolderd7812->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer4bce9 && ($this->initializer4bce9->__invoke($valueHolderd7812, $this, 'initializeObject', array('obj' => $obj), $this->initializer4bce9) || 1) && $this->valueHolderd7812 = $valueHolderd7812;

        return $this->valueHolderd7812->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer4bce9 && ($this->initializer4bce9->__invoke($valueHolderd7812, $this, 'getFilters', array(), $this->initializer4bce9) || 1) && $this->valueHolderd7812 = $valueHolderd7812;

        return $this->valueHolderd7812->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer4bce9 && ($this->initializer4bce9->__invoke($valueHolderd7812, $this, 'isFiltersStateClean', array(), $this->initializer4bce9) || 1) && $this->valueHolderd7812 = $valueHolderd7812;

        return $this->valueHolderd7812->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer4bce9 && ($this->initializer4bce9->__invoke($valueHolderd7812, $this, 'hasFilters', array(), $this->initializer4bce9) || 1) && $this->valueHolderd7812 = $valueHolderd7812;

        return $this->valueHolderd7812->hasFilters();
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

        $instance->initializer4bce9 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderd7812) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd7812 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderd7812->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer4bce9 && ($this->initializer4bce9->__invoke($valueHolderd7812, $this, '__get', ['name' => $name], $this->initializer4bce9) || 1) && $this->valueHolderd7812 = $valueHolderd7812;

        if (isset(self::$publicProperties9e35a[$name])) {
            return $this->valueHolderd7812->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd7812;

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

        $targetObject = $this->valueHolderd7812;
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
        $this->initializer4bce9 && ($this->initializer4bce9->__invoke($valueHolderd7812, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer4bce9) || 1) && $this->valueHolderd7812 = $valueHolderd7812;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd7812;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd7812;
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
        $this->initializer4bce9 && ($this->initializer4bce9->__invoke($valueHolderd7812, $this, '__isset', array('name' => $name), $this->initializer4bce9) || 1) && $this->valueHolderd7812 = $valueHolderd7812;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd7812;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd7812;
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
        $this->initializer4bce9 && ($this->initializer4bce9->__invoke($valueHolderd7812, $this, '__unset', array('name' => $name), $this->initializer4bce9) || 1) && $this->valueHolderd7812 = $valueHolderd7812;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd7812;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd7812;
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
        $this->initializer4bce9 && ($this->initializer4bce9->__invoke($valueHolderd7812, $this, '__clone', array(), $this->initializer4bce9) || 1) && $this->valueHolderd7812 = $valueHolderd7812;

        $this->valueHolderd7812 = clone $this->valueHolderd7812;
    }

    public function __sleep()
    {
        $this->initializer4bce9 && ($this->initializer4bce9->__invoke($valueHolderd7812, $this, '__sleep', array(), $this->initializer4bce9) || 1) && $this->valueHolderd7812 = $valueHolderd7812;

        return array('valueHolderd7812');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer4bce9 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer4bce9;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer4bce9 && ($this->initializer4bce9->__invoke($valueHolderd7812, $this, 'initializeProxy', array(), $this->initializer4bce9) || 1) && $this->valueHolderd7812 = $valueHolderd7812;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd7812;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd7812;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
