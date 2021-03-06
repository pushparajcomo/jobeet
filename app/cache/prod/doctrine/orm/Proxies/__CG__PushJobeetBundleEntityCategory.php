<?php

namespace Proxies\__CG__\Push\JobeetBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Category extends \Push\JobeetBundle\Entity\Category implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setName($name)
    {
        $this->__load();
        return parent::setName($name);
    }

    public function getName()
    {
        $this->__load();
        return parent::getName();
    }

    public function addJob(\Push\JobeetBundle\Entity\Job $jobs)
    {
        $this->__load();
        return parent::addJob($jobs);
    }

    public function removeJob(\Push\JobeetBundle\Entity\Job $jobs)
    {
        $this->__load();
        return parent::removeJob($jobs);
    }

    public function getJobs()
    {
        $this->__load();
        return parent::getJobs();
    }

    public function addCategoryAffiliate(\Push\JobeetBundle\Entity\CategoryAffiliate $categoryAffiliates)
    {
        $this->__load();
        return parent::addCategoryAffiliate($categoryAffiliates);
    }

    public function removeCategoryAffiliate(\Push\JobeetBundle\Entity\CategoryAffiliate $categoryAffiliates)
    {
        $this->__load();
        return parent::removeCategoryAffiliate($categoryAffiliates);
    }

    public function getCategoryAffiliates()
    {
        $this->__load();
        return parent::getCategoryAffiliates();
    }

    public function __toString()
    {
        $this->__load();
        return parent::__toString();
    }

    public function setActiveJobs($jobs)
    {
        $this->__load();
        return parent::setActiveJobs($jobs);
    }

    public function getActiveJobs()
    {
        $this->__load();
        return parent::getActiveJobs();
    }

    public function getSlug()
    {
        $this->__load();
        return parent::getSlug();
    }

    public function setMoreJobs($jobs)
    {
        $this->__load();
        return parent::setMoreJobs($jobs);
    }

    public function getMoreJobs()
    {
        $this->__load();
        return parent::getMoreJobs();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'name', 'jobs', 'category_affiliates');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}