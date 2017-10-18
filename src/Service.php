<?php
/*
 * This file is part of the BasePlatform project.
 *
 * (c) BasePlatform project <https://github.com/BasePlatform>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Base\TenantService;

/**
 * This is the main service provider for the Tenant Service.
 *
 * @author Tuan Nguyen <nganhtuan63@gmail.com>
 */
class Service
{
  const VERSION = '1.0.1';

  /**
   * @var string The prefix for Tenant service URL.
   *
   */
  public $pathPrefix = 'tenant';
}