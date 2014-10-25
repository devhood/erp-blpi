<?php

namespace DoctrineORMModule\Proxy\__CG__\Database\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Cities extends \Database\Entity\Cities implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'Database\\Entity\\Cities' . "\0" . 'cityId', '' . "\0" . 'Database\\Entity\\Cities' . "\0" . 'cityName', '' . "\0" . 'Database\\Entity\\Cities' . "\0" . 'provinceId', '' . "\0" . 'Database\\Entity\\Cities' . "\0" . 'recordStatus');
        }

        return array('__isInitialized__', '' . "\0" . 'Database\\Entity\\Cities' . "\0" . 'cityId', '' . "\0" . 'Database\\Entity\\Cities' . "\0" . 'cityName', '' . "\0" . 'Database\\Entity\\Cities' . "\0" . 'provinceId', '' . "\0" . 'Database\\Entity\\Cities' . "\0" . 'recordStatus');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Cities $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getCityId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getCityId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCityId', array());

        return parent::getCityId();
    }

    /**
     * {@inheritDoc}
     */
    public function setCityName($cityName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCityName', array($cityName));

        return parent::setCityName($cityName);
    }

    /**
     * {@inheritDoc}
     */
    public function getCityName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCityName', array());

        return parent::getCityName();
    }

    /**
     * {@inheritDoc}
     */
    public function setProvinceId($provinceId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProvinceId', array($provinceId));

        return parent::setProvinceId($provinceId);
    }

    /**
     * {@inheritDoc}
     */
    public function getProvinceId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProvinceId', array());

        return parent::getProvinceId();
    }

    /**
     * {@inheritDoc}
     */
    public function setRecordStatus($recordStatus)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRecordStatus', array($recordStatus));

        return parent::setRecordStatus($recordStatus);
    }

    /**
     * {@inheritDoc}
     */
    public function getRecordStatus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRecordStatus', array());

        return parent::getRecordStatus();
    }

}
