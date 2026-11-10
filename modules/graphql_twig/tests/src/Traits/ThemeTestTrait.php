<?php

namespace Drupal\Tests\graphql_twig\Traits;

use Drupal\Core\Session\AccountProxy;
use Drupal\graphql\Entity\Server;
use Drupal\KernelTests\KernelTestBase;
use Prophecy\Argument;

/**
 * ThemeTestTrait.
 */
trait ThemeTestTrait {

  /**
   * A query processor prophecy.
   *
   * @var \Prophecy\Prophecy\ObjectProphecy
   */
  protected \Prophecy\Prophecy\ObjectProphecy $graphQlServer;

  /**
   * Initialize the test theme.
   */
  protected function setupThemeTest($enableCurrentUser = TRUE) {
    if ($this instanceof KernelTestBase) {
      if ($enableCurrentUser) {
        // Mock a user that is allowed to do everything.
        $currentUser = $this->prophesize(AccountProxy::class);
        $currentUser->isAuthenticated()->willReturn(TRUE);
        $currentUser->hasPermission(Argument::any())->willReturn(TRUE);
        $currentUser->id()->willReturn(1);
        $currentUser->getRoles()->willReturn(['administrator']);
        $this->container->set('current_user', $currentUser->reveal());
      }

      // Prepare a mock graphql processor.
      $this->graphQlServer = $this->prophesize(Server::class);

      $themeName = 'graphql_twig_test_theme';

      /** @var \Drupal\Core\Extension\ThemeInstaller $themeInstaller */
      $themeInstaller = $this->container->get('theme_installer');
      /** @var \Drupal\Core\Theme\ThemeInitialization $themeInitialization */
      $themeInitialization = $this->container->get('theme.initialization');
      /** @var \Drupal\Core\Theme\ThemeManager $themeManager */
      $themeManager = $this->container->get('theme.manager');

      $themeInstaller->install([$themeName]);
      $theme = $themeInitialization->initTheme($themeName);
      $themeManager->setActiveTheme($theme);
    }
  }

}
