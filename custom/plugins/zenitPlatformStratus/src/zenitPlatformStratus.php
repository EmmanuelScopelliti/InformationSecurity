<?php declare(strict_types=1);

namespace zenit\PlatformStratus;

use Shopware\Storefront\Framework\ThemeInterface;
use Shopware\Core\Framework\Plugin;
use Shopware\Core\Framework\Plugin\Context\InstallContext;
use Shopware\Core\Framework\Plugin\Context\UpdateContext;
use Shopware\Core\Framework\Plugin\Context\UninstallContext;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use zenit\PlatformStratus\Core\CustomFieldsHelper;

class zenitPlatformStratus extends Plugin implements ThemeInterface
{
    public function getThemeConfigPath(): string
    {
        return 'theme.json';
    }

    public function install(InstallContext $installContext): void
    {
        parent::install($installContext);

        $customFieldSetRepository = $this->container->get('custom_field_set.repository');
        $customFields = new CustomFieldsHelper($customFieldSetRepository);
        $customFields->getCustomFields($this->container, $installContext->getContext());
    }

    public function update(UpdateContext $updateContext): void
    {
        parent::update($updateContext);

        if (version_compare($updateContext->getCurrentPluginVersion(), '2.9.3', '<')) {
            $customFieldSetRepository = $this->container->get('custom_field_set.repository');
            $customFields = new CustomFieldsHelper($customFieldSetRepository);
            $customFields->getCustomFields($this->container, $updateContext->getContext());
        }
    }

    public function uninstall(UninstallContext $uninstallContext): void
    {
        parent::uninstall($uninstallContext);

        if ($uninstallContext->keepUserData()) {
            return;
        }

        $customFieldSetRepository = $this->container->get('custom_field_set.repository');
        $customFields = new CustomFieldsHelper($customFieldSetRepository);
        $customFields->deleteCustomFields($uninstallContext->getContext());
    }

    /**
     * @param ContainerBuilder $container
     * @throws \Exception
     */
    public function build(ContainerBuilder $container): void
    {
        parent::build($container);

        $loader = new XmlFileLoader($container, new FileLocator($this->getPath() . '/Core/Content/DependencyInjection'));
        $loader->load('services.xml');
    }
}
