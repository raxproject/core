<?php

/**
 * Nickname configuration.
 *
 * A nickname is any arbitrary name you can use to refer to a specific service.
 *
 *     // "request" is the nickname of "Rax\Http\Request"
 *     'request' => 'Rax\\Http\\Request',
 *
 * NOTE: Nicknames are automatically generated by the container, which it does
 * by scanning all the available PHP classes and creating a map such as:
 *
 *     'className' => 'Vendor\\Namespace\\ClassName',
 *
 * Custom nicknames can be set at runtime or through this config:
 *
 *     // Runtime
 *     $container->addNickname('foo', 'Vendor\\Namespace\\Foo');
 *
 *     // Config
 *     'foo' => 'Vendor\\Namespace\\Foo',
 *
 * The override cascade is: Runtime > Config > Generated.
 *
 * Use false to disable a nickname upper in the configuration cascade.
 *
 *     'request' => false,
 */
return array();
