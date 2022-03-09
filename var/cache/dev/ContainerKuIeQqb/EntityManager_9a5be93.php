<?php

namespace ContainerKuIeQqb;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder2c7df = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd3fdb = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesdca2f = [
        
    ];

    public function getConnection()
    {
        $this->initializerd3fdb && ($this->initializerd3fdb->__invoke($valueHolder2c7df, $this, 'getConnection', array(), $this->initializerd3fdb) || 1) && $this->valueHolder2c7df = $valueHolder2c7df;

        return $this->valueHolder2c7df->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerd3fdb && ($this->initializerd3fdb->__invoke($valueHolder2c7df, $this, 'getMetadataFactory', array(), $this->initializerd3fdb) || 1) && $this->valueHolder2c7df = $valueHolder2c7df;

        return $this->valueHolder2c7df->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerd3fdb && ($this->initializerd3fdb->__invoke($valueHolder2c7df, $this, 'getExpressionBuilder', array(), $this->initializerd3fdb) || 1) && $this->valueHolder2c7df = $valueHolder2c7df;

        return $this->valueHolder2c7df->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerd3fdb && ($this->initializerd3fdb->__invoke($valueHolder2c7df, $this, 'beginTransaction', array(), $this->initializerd3fdb) || 1) && $this->valueHolder2c7df = $valueHolder2c7df;

        return $this->valueHolder2c7df->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerd3fdb && ($this->initializerd3fdb->__invoke($valueHolder2c7df, $this, 'getCache', array(), $this->initializerd3fdb) || 1) && $this->valueHolder2c7df = $valueHolder2c7df;

        return $this->valueHolder2c7df->getCache();
    }

    public function transactional($func)
    {
        $this->initializerd3fdb && ($this->initializerd3fdb->__invoke($valueHolder2c7df, $this, 'transactional', array('func' => $func), $this->initializerd3fdb) || 1) && $this->valueHolder2c7df = $valueHolder2c7df;

        return $this->valueHolder2c7df->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerd3fdb && ($this->initializerd3fdb->__invoke($valueHolder2c7df, $this, 'wrapInTransaction', array('func' => $func), $this->initializerd3fdb) || 1) && $this->valueHolder2c7df = $valueHolder2c7df;

        return $this->valueHolder2c7df->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerd3fdb && ($this->initializerd3fdb->__invoke($valueHolder2c7df, $this, 'commit', array(), $this->initializerd3fdb) || 1) && $this->valueHolder2c7df = $valueHolder2c7df;

        return $this->valueHolder2c7df->commit();
    }

    public function rollback()
    {
        $this->initializerd3fdb && ($this->initializerd3fdb->__invoke($valueHolder2c7df, $this, 'rollback', array(), $this->initializerd3fdb) || 1) && $this->valueHolder2c7df = $valueHolder2c7df;

        return $this->valueHolder2c7df->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerd3fdb && ($this->initializerd3fdb->__invoke($valueHolder2c7df, $this, 'getClassMetadata', array('className' => $className), $this->initializerd3fdb) || 1) && $this->valueHolder2c7df = $valueHolder2c7df;

        return $this->valueHolder2c7df->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerd3fdb && ($this->initializerd3fdb->__invoke($valueHolder2c7df, $this, 'createQuery', array('dql' => $dql), $this->initializerd3fdb) || 1) && $this->valueHolder2c7df = $valueHolder2c7df;

        return $this->valueHolder2c7df->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerd3fdb && ($this->initializerd3fdb->__invoke($valueHolder2c7df, $this, 'createNamedQuery', array('name' => $name), $this->initializerd3fdb) || 1) && $this->valueHolder2c7df = $valueHolder2c7df;

        return $this->valueHolder2c7df->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd3fdb && ($this->initializerd3fdb->__invoke($valueHolder2c7df, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd3fdb) || 1) && $this->valueHolder2c7df = $valueHolder2c7df;

        return $this->valueHolder2c7df->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerd3fdb && ($this->initializerd3fdb->__invoke($valueHolder2c7df, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd3fdb) || 1) && $this->valueHolder2c7df = $valueHolder2c7df;

        return $this->valueHolder2c7df->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerd3fdb && ($this->initializerd3fdb->__invoke($valueHolder2c7df, $this, 'createQueryBuilder', array(), $this->initializerd3fdb) || 1) && $this->valueHolder2c7df = $valueHolder2c7df;

        return $this->valueHolder2c7df->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerd3fdb && ($this->initializerd3fdb->__invoke($valueHolder2c7df, $this, 'flush', array('entity' => $entity), $this->initializerd3fdb) || 1) && $this->valueHolder2c7df = $valueHolder2c7df;

        return $this->valueHolder2c7df->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd3fdb && ($this->initializerd3fdb->__invoke($valueHolder2c7df, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd3fdb) || 1) && $this->valueHolder2c7df = $valueHolder2c7df;

        return $this->valueHolder2c7df->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerd3fdb && ($this->initializerd3fdb->__invoke($valueHolder2c7df, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd3fdb) || 1) && $this->valueHolder2c7df = $valueHolder2c7df;

        return $this->valueHolder2c7df->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd3fdb && ($this->initializerd3fdb->__invoke($valueHolder2c7df, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd3fdb) || 1) && $this->valueHolder2c7df = $valueHolder2c7df;

        return $this->valueHolder2c7df->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerd3fdb && ($this->initializerd3fdb->__invoke($valueHolder2c7df, $this, 'clear', array('entityName' => $entityName), $this->initializerd3fdb) || 1) && $this->valueHolder2c7df = $valueHolder2c7df;

        return $this->valueHolder2c7df->clear($entityName);
    }

    public function close()
    {
        $this->initializerd3fdb && ($this->initializerd3fdb->__invoke($valueHolder2c7df, $this, 'close', array(), $this->initializerd3fdb) || 1) && $this->valueHolder2c7df = $valueHolder2c7df;

        return $this->valueHolder2c7df->close();
    }

    public function persist($entity)
    {
        $this->initializerd3fdb && ($this->initializerd3fdb->__invoke($valueHolder2c7df, $this, 'persist', array('entity' => $entity), $this->initializerd3fdb) || 1) && $this->valueHolder2c7df = $valueHolder2c7df;

        return $this->valueHolder2c7df->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerd3fdb && ($this->initializerd3fdb->__invoke($valueHolder2c7df, $this, 'remove', array('entity' => $entity), $this->initializerd3fdb) || 1) && $this->valueHolder2c7df = $valueHolder2c7df;

        return $this->valueHolder2c7df->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerd3fdb && ($this->initializerd3fdb->__invoke($valueHolder2c7df, $this, 'refresh', array('entity' => $entity), $this->initializerd3fdb) || 1) && $this->valueHolder2c7df = $valueHolder2c7df;

        return $this->valueHolder2c7df->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerd3fdb && ($this->initializerd3fdb->__invoke($valueHolder2c7df, $this, 'detach', array('entity' => $entity), $this->initializerd3fdb) || 1) && $this->valueHolder2c7df = $valueHolder2c7df;

        return $this->valueHolder2c7df->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerd3fdb && ($this->initializerd3fdb->__invoke($valueHolder2c7df, $this, 'merge', array('entity' => $entity), $this->initializerd3fdb) || 1) && $this->valueHolder2c7df = $valueHolder2c7df;

        return $this->valueHolder2c7df->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerd3fdb && ($this->initializerd3fdb->__invoke($valueHolder2c7df, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd3fdb) || 1) && $this->valueHolder2c7df = $valueHolder2c7df;

        return $this->valueHolder2c7df->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd3fdb && ($this->initializerd3fdb->__invoke($valueHolder2c7df, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd3fdb) || 1) && $this->valueHolder2c7df = $valueHolder2c7df;

        return $this->valueHolder2c7df->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerd3fdb && ($this->initializerd3fdb->__invoke($valueHolder2c7df, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd3fdb) || 1) && $this->valueHolder2c7df = $valueHolder2c7df;

        return $this->valueHolder2c7df->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerd3fdb && ($this->initializerd3fdb->__invoke($valueHolder2c7df, $this, 'contains', array('entity' => $entity), $this->initializerd3fdb) || 1) && $this->valueHolder2c7df = $valueHolder2c7df;

        return $this->valueHolder2c7df->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerd3fdb && ($this->initializerd3fdb->__invoke($valueHolder2c7df, $this, 'getEventManager', array(), $this->initializerd3fdb) || 1) && $this->valueHolder2c7df = $valueHolder2c7df;

        return $this->valueHolder2c7df->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerd3fdb && ($this->initializerd3fdb->__invoke($valueHolder2c7df, $this, 'getConfiguration', array(), $this->initializerd3fdb) || 1) && $this->valueHolder2c7df = $valueHolder2c7df;

        return $this->valueHolder2c7df->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerd3fdb && ($this->initializerd3fdb->__invoke($valueHolder2c7df, $this, 'isOpen', array(), $this->initializerd3fdb) || 1) && $this->valueHolder2c7df = $valueHolder2c7df;

        return $this->valueHolder2c7df->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerd3fdb && ($this->initializerd3fdb->__invoke($valueHolder2c7df, $this, 'getUnitOfWork', array(), $this->initializerd3fdb) || 1) && $this->valueHolder2c7df = $valueHolder2c7df;

        return $this->valueHolder2c7df->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerd3fdb && ($this->initializerd3fdb->__invoke($valueHolder2c7df, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd3fdb) || 1) && $this->valueHolder2c7df = $valueHolder2c7df;

        return $this->valueHolder2c7df->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerd3fdb && ($this->initializerd3fdb->__invoke($valueHolder2c7df, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd3fdb) || 1) && $this->valueHolder2c7df = $valueHolder2c7df;

        return $this->valueHolder2c7df->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerd3fdb && ($this->initializerd3fdb->__invoke($valueHolder2c7df, $this, 'getProxyFactory', array(), $this->initializerd3fdb) || 1) && $this->valueHolder2c7df = $valueHolder2c7df;

        return $this->valueHolder2c7df->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerd3fdb && ($this->initializerd3fdb->__invoke($valueHolder2c7df, $this, 'initializeObject', array('obj' => $obj), $this->initializerd3fdb) || 1) && $this->valueHolder2c7df = $valueHolder2c7df;

        return $this->valueHolder2c7df->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerd3fdb && ($this->initializerd3fdb->__invoke($valueHolder2c7df, $this, 'getFilters', array(), $this->initializerd3fdb) || 1) && $this->valueHolder2c7df = $valueHolder2c7df;

        return $this->valueHolder2c7df->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerd3fdb && ($this->initializerd3fdb->__invoke($valueHolder2c7df, $this, 'isFiltersStateClean', array(), $this->initializerd3fdb) || 1) && $this->valueHolder2c7df = $valueHolder2c7df;

        return $this->valueHolder2c7df->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerd3fdb && ($this->initializerd3fdb->__invoke($valueHolder2c7df, $this, 'hasFilters', array(), $this->initializerd3fdb) || 1) && $this->valueHolder2c7df = $valueHolder2c7df;

        return $this->valueHolder2c7df->hasFilters();
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

        $instance->initializerd3fdb = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder2c7df) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder2c7df = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder2c7df->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerd3fdb && ($this->initializerd3fdb->__invoke($valueHolder2c7df, $this, '__get', ['name' => $name], $this->initializerd3fdb) || 1) && $this->valueHolder2c7df = $valueHolder2c7df;

        if (isset(self::$publicPropertiesdca2f[$name])) {
            return $this->valueHolder2c7df->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2c7df;

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

        $targetObject = $this->valueHolder2c7df;
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
        $this->initializerd3fdb && ($this->initializerd3fdb->__invoke($valueHolder2c7df, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd3fdb) || 1) && $this->valueHolder2c7df = $valueHolder2c7df;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2c7df;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder2c7df;
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
        $this->initializerd3fdb && ($this->initializerd3fdb->__invoke($valueHolder2c7df, $this, '__isset', array('name' => $name), $this->initializerd3fdb) || 1) && $this->valueHolder2c7df = $valueHolder2c7df;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2c7df;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder2c7df;
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
        $this->initializerd3fdb && ($this->initializerd3fdb->__invoke($valueHolder2c7df, $this, '__unset', array('name' => $name), $this->initializerd3fdb) || 1) && $this->valueHolder2c7df = $valueHolder2c7df;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2c7df;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder2c7df;
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
        $this->initializerd3fdb && ($this->initializerd3fdb->__invoke($valueHolder2c7df, $this, '__clone', array(), $this->initializerd3fdb) || 1) && $this->valueHolder2c7df = $valueHolder2c7df;

        $this->valueHolder2c7df = clone $this->valueHolder2c7df;
    }

    public function __sleep()
    {
        $this->initializerd3fdb && ($this->initializerd3fdb->__invoke($valueHolder2c7df, $this, '__sleep', array(), $this->initializerd3fdb) || 1) && $this->valueHolder2c7df = $valueHolder2c7df;

        return array('valueHolder2c7df');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd3fdb = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd3fdb;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerd3fdb && ($this->initializerd3fdb->__invoke($valueHolder2c7df, $this, 'initializeProxy', array(), $this->initializerd3fdb) || 1) && $this->valueHolder2c7df = $valueHolder2c7df;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder2c7df;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder2c7df;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
