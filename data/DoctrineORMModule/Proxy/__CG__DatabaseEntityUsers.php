<?php

namespace DoctrineORMModule\Proxy\__CG__\Database\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Users extends \Database\Entity\Users implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Database\\Entity\\Users' . "\0" . 'userId', '' . "\0" . 'Database\\Entity\\Users' . "\0" . 'userName', '' . "\0" . 'Database\\Entity\\Users' . "\0" . 'password', '' . "\0" . 'Database\\Entity\\Users' . "\0" . 'fullName', '' . "\0" . 'Database\\Entity\\Users' . "\0" . 'email', '' . "\0" . 'Database\\Entity\\Users' . "\0" . 'mobile', '' . "\0" . 'Database\\Entity\\Users' . "\0" . 'userStatus', '' . "\0" . 'Database\\Entity\\Users' . "\0" . 'designation');
        }

        return array('__isInitialized__', '' . "\0" . 'Database\\Entity\\Users' . "\0" . 'userId', '' . "\0" . 'Database\\Entity\\Users' . "\0" . 'userName', '' . "\0" . 'Database\\Entity\\Users' . "\0" . 'password', '' . "\0" . 'Database\\Entity\\Users' . "\0" . 'fullName', '' . "\0" . 'Database\\Entity\\Users' . "\0" . 'email', '' . "\0" . 'Database\\Entity\\Users' . "\0" . 'mobile', '' . "\0" . 'Database\\Entity\\Users' . "\0" . 'userStatus', '' . "\0" . 'Database\\Entity\\Users' . "\0" . 'designation');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Users $proxy) {
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
    public function getUserId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getUserId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserId', array());

        return parent::getUserId();
    }

    /**
     * {@inheritDoc}
     */
    public function setUserName($userName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUserName', array($userName));

        return parent::setUserName($userName);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserName', array());

        return parent::getUserName();
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword($password)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', array($password));

        return parent::setPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', array());

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setFullName($fullName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFullName', array($fullName));

        return parent::setFullName($fullName);
    }

    /**
     * {@inheritDoc}
     */
    public function getFullName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFullName', array());

        return parent::getFullName();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', array($email));

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', array());

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setMobile($mobile)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMobile', array($mobile));

        return parent::setMobile($mobile);
    }

    /**
     * {@inheritDoc}
     */
    public function getMobile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMobile', array());

        return parent::getMobile();
    }

    /**
     * {@inheritDoc}
     */
    public function setUserStatus($userStatus)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUserStatus', array($userStatus));

        return parent::setUserStatus($userStatus);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserStatus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserStatus', array());

        return parent::getUserStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function setDesignation(\Database\Entity\Designations $designation = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDesignation', array($designation));

        return parent::setDesignation($designation);
    }

    /**
     * {@inheritDoc}
     */
    public function getDesignation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDesignation', array());

        return parent::getDesignation();
    }

}
