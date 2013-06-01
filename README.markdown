CodepeakLinkedCheckboxBundle
============================

This bundle adds support to more advanced checkbox options in forms. It's developed and tested on Symfony 2.1.

This will help you create nicer and better checkboxes with links in them, for example "I agree to the terms of service"-type of checkbox.

Installation
------------

1. Install the bundle and add this to your __AppKernel.php__

```$bundles[] = new Codepeak\LinkedCheckboxBundle\CodepeakLinkedCheckboxBundle();```

2. Update your __app/config/config.yml__ file and add this

```
twig:
     form:
         resources:
             - 'CodepeakLinkedCheckboxBundle:Form:fields.html.twig'
```

3. Empty the cache and add the new field to your form

```
->add('tos', new LinkedCheckboxType(), array(
    'link_text' => 'I agree to the %link_start%terms of service%link_end%',  // Text can be translated
    'link_class' => 'custom_class(es)-set-on-the-<a>-tag',					 // Class(es) to be placed on the link
    'route' => 'codepeak_user_terms',										 // Route on where to link
    'mapped' => false														 // Don't map against Entity
))
``` 

Changelog
---------

2013-06-01 Initial version of the bundle. Credits to livingstn @ #symfony

License
-------

This bundle is under the MIT license. See the complete license in LICENSE file.

Reporting an issue
------------------

Issues and feature requests are tracked in the [Github issue tracker](https://github.com/codepeak/LinkedCheckboxBundle/issues).
