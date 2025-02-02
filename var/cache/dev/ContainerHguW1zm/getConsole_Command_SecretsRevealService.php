<?php

namespace ContainerHguW1zm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_SecretsRevealService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.secrets_reveal' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsRevealCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['console.command.secrets_reveal'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsRevealCommand(($container->privates['secrets.vault'] ?? $container->load('getSecrets_VaultService')), ($container->privates['secrets.local_vault'] ??= new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault('D:\\todo_mobil_react/.env.dev.local')));

        $instance->setName('secrets:reveal');
        $instance->setDescription('Reveal the value of a secret');

        return $instance;
    }
}
