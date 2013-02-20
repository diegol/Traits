# Traits [![Build Status](https://travis-ci.org/fermio/Traits.png?branch=master)](https://travis-ci.org/fermio/Traits)

Library providing more advanced traits for the [FermioTraitInjectionBundle][1].

## Installation

Add the library in your composer.json:

``` js
{
    "require": {
        "fermio/traits": "1.0.*@dev"
    }
}
```

### Download the library

Now tell composer to download the library by running the command:

``` bash
$ php composer.phar update fermio/traits
```

Composer will install the library to your project's `vendor/fermio` directory.

## Configuration

The [FermioTraitInjectionBundle][1] provides default configurations for all
traits, the advanced traits are completely compatible and usable out of the box.

``` yaml
# app/config/config.yml
fermio_trait_injection:
    defaults: true # enable default traits configurations
    traits: # manually add DoctrineAware if you use Doctrine
        fermio.doctrine_aware:
            trait: Fermio\Bundle\TraitInjectionBundle\Traits\DoctrineAware
            method: setDoctrine
            service: doctrine
```

> **BEWARE:** The `DoctrineAware` trait is not configured by default.

## Usage

Use the provided traits by this library instead of the ones of the
[FermioTraitInjectionBundle][1]. They are all located in the namespace
`Fermio\Traits` - the class names are equal to the bundle ones.

``` php
<?php // src/Acme/Bundle/DemoBundle/Controller/DemoController.php

namespace Acme\Bundle\DemoBundle\Controller;

use Fermio\Traits; // before: Fermio\Bundle\TraitInjectionBundle\Traits

class DemoController
{
    use Traits\DoctrineAware;        // provides getRepository()
    use Traits\SecurityContextAware; // provides isGranted()
    use Traits\RouterAware;          // provides redirect(), generateUrl()
    use Traits\TemplatingAware;      // provides render()

    public function demoAction()
    {
        if (!$this->isGranted('IS_AUTHENTICATED_REMEMBERME')) {
            return $this->redirect($this->generateUrl('homepage'));
        }

        $entities = $this->getRepository('Acme:Entity')->findAll();

        return $this->render('@AcmeDemoBundle:Demo:demo.html.twig', [
            'entities' => $entities,
        ]);
    }
}
```

## License

For license, see:

[LICENSE](LICENSE)

[1]: https://github.com/fermio/FermioTraitInjectionBundle
