<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class User extends \App\Entity\User implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\User' . "\0" . 'id', '' . "\0" . 'App\\Entity\\User' . "\0" . 'CIN', '' . "\0" . 'App\\Entity\\User' . "\0" . 'UserName', '' . "\0" . 'App\\Entity\\User' . "\0" . 'Numero', '' . "\0" . 'App\\Entity\\User' . "\0" . 'Email', '' . "\0" . 'App\\Entity\\User' . "\0" . 'Adresse', '' . "\0" . 'App\\Entity\\User' . "\0" . 'Password', 'confirm_password', '' . "\0" . 'App\\Entity\\User' . "\0" . 'roles', '' . "\0" . 'App\\Entity\\User' . "\0" . 'activation_token', '' . "\0" . 'App\\Entity\\User' . "\0" . 'reset_token', '' . "\0" . 'App\\Entity\\User' . "\0" . 'Image'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\User' . "\0" . 'id', '' . "\0" . 'App\\Entity\\User' . "\0" . 'CIN', '' . "\0" . 'App\\Entity\\User' . "\0" . 'UserName', '' . "\0" . 'App\\Entity\\User' . "\0" . 'Numero', '' . "\0" . 'App\\Entity\\User' . "\0" . 'Email', '' . "\0" . 'App\\Entity\\User' . "\0" . 'Adresse', '' . "\0" . 'App\\Entity\\User' . "\0" . 'Password', 'confirm_password', '' . "\0" . 'App\\Entity\\User' . "\0" . 'roles', '' . "\0" . 'App\\Entity\\User' . "\0" . 'activation_token', '' . "\0" . 'App\\Entity\\User' . "\0" . 'reset_token', '' . "\0" . 'App\\Entity\\User' . "\0" . 'Image'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (User $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
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
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getCIN(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCIN', []);

        return parent::getCIN();
    }

    /**
     * {@inheritDoc}
     */
    public function setCIN(int $CIN): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCIN', [$CIN]);

        return parent::setCIN($CIN);
    }

    /**
     * {@inheritDoc}
     */
    public function getNom(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', []);

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setNom(string $Nom): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', [$Nom]);

        return parent::setNom($Nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumero(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumero', []);

        return parent::getNumero();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumero(?int $Numero): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumero', [$Numero]);

        return parent::setNumero($Numero);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail(string $Email): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$Email]);

        return parent::setEmail($Email);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdresse(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdresse', []);

        return parent::getAdresse();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdresse(?string $Adresse): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdresse', [$Adresse]);

        return parent::setAdresse($Adresse);
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', []);

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword($Password)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', [$Password]);

        return parent::setPassword($Password);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserName', []);

        return parent::getUserName();
    }

    /**
     * {@inheritDoc}
     */
    public function setUserName($UserName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUserName', [$UserName]);

        return parent::setUserName($UserName);
    }

    /**
     * {@inheritDoc}
     */
    public function eraseCredentials()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'eraseCredentials', []);

        return parent::eraseCredentials();
    }

    /**
     * {@inheritDoc}
     */
    public function getSalt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalt', []);

        return parent::getSalt();
    }

    /**
     * {@inheritDoc}
     */
    public function getRoles(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoles', []);

        return parent::getRoles();
    }

    /**
     * {@inheritDoc}
     */
    public function setRoles(array $roles): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRoles', [$roles]);

        return parent::setRoles($roles);
    }

    /**
     * {@inheritDoc}
     */
    public function addRoles(string $roles): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addRoles', [$roles]);

        return parent::addRoles($roles);
    }

    /**
     * {@inheritDoc}
     */
    public function getActivationToken(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActivationToken', []);

        return parent::getActivationToken();
    }

    /**
     * {@inheritDoc}
     */
    public function setActivationToken(?string $activation_token): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setActivationToken', [$activation_token]);

        return parent::setActivationToken($activation_token);
    }

    /**
     * {@inheritDoc}
     */
    public function getResetToken(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getResetToken', []);

        return parent::getResetToken();
    }

    /**
     * {@inheritDoc}
     */
    public function setResetToken(?string $reset_token): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setResetToken', [$reset_token]);

        return parent::setResetToken($reset_token);
    }

    /**
     * {@inheritDoc}
     */
    public function getImage(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImage', []);

        return parent::getImage();
    }

    /**
     * {@inheritDoc}
     */
    public function setImage(?string $Image): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImage', [$Image]);

        return parent::setImage($Image);
    }

}