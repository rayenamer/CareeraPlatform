<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Missionfreelencer extends \App\Entity\Missionfreelencer implements \Doctrine\ORM\Proxy\InternalProxy
{
     use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as private;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    public function __load(): void
    {
        $this->initializeLazyObject();
    }
    

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'candidaturemissions' => [parent::class, 'candidaturemissions', null],
        "\0".parent::class."\0".'date' => [parent::class, 'date', null],
        "\0".parent::class."\0".'datelimite' => [parent::class, 'datelimite', null],
        "\0".parent::class."\0".'demandeMissions' => [parent::class, 'demandeMissions', null],
        "\0".parent::class."\0".'description' => [parent::class, 'description', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'imageUrl' => [parent::class, 'imageUrl', null],
        "\0".parent::class."\0".'prix' => [parent::class, 'prix', null],
        "\0".parent::class."\0".'specialite' => [parent::class, 'specialite', null],
        "\0".parent::class."\0".'titre' => [parent::class, 'titre', null],
        "\0".parent::class."\0".'userid' => [parent::class, 'userid', null],
        'candidaturemissions' => [parent::class, 'candidaturemissions', null],
        'date' => [parent::class, 'date', null],
        'datelimite' => [parent::class, 'datelimite', null],
        'demandeMissions' => [parent::class, 'demandeMissions', null],
        'description' => [parent::class, 'description', null],
        'id' => [parent::class, 'id', null],
        'imageUrl' => [parent::class, 'imageUrl', null],
        'prix' => [parent::class, 'prix', null],
        'specialite' => [parent::class, 'specialite', null],
        'titre' => [parent::class, 'titre', null],
        'userid' => [parent::class, 'userid', null],
    ];

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"]);

        return $properties;
    }
}
