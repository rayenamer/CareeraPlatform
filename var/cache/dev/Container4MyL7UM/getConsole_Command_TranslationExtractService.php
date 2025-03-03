<?php

namespace Container4MyL7UM;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_TranslationExtractService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.translation_extract' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\TranslationUpdateCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['console.command.translation_extract'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\TranslationUpdateCommand(($container->privates['translation.writer'] ?? $container->load('getTranslation_WriterService')), ($container->privates['translation.reader'] ?? $container->load('getTranslation_ReaderService')), ($container->privates['translation.extractor'] ?? $container->load('getTranslation_ExtractorService')), 'en', 'C:\\careera/translations', 'C:\\careera/templates', ['C:\\careera\\vendor\\symfony\\validator/Resources/translations', 'C:\\careera\\vendor\\symfony\\form/Resources/translations', 'C:\\careera\\vendor\\symfony\\security-core/Resources/translations', 'C:\\careera\\vendor\\symfonycasts\\reset-password-bundle\\src/Resources/translations', 'C:\\careera\\vendor\\easycorp\\easyadmin-bundle/translations', 'C:\\careera/translations'], ['C:\\careera\\vendor\\easycorp\\easyadmin-bundle\\src/../templates/', 'C:\\careera\\vendor\\symfony\\twig-bridge/Resources/views/Email', 'C:\\careera\\vendor\\symfony\\twig-bridge/Resources/views/Form', 'C:\\careera\\src\\Controller\\CandidatureController.php', 'C:\\careera\\src\\Controller\\OffreController.php', 'C:\\careera\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\RequestPayloadValueResolver.php', 'C:\\careera\\vendor\\symfony\\framework-bundle\\Command\\TranslationDebugCommand.php', 'C:\\careera\\vendor\\symfony\\framework-bundle\\CacheWarmer\\TranslationsCacheWarmer.php', 'C:\\careera\\vendor\\symfony\\form\\Extension\\Core\\Type\\ChoiceType.php', 'C:\\careera\\vendor\\symfony\\form\\Extension\\Core\\Type\\FileType.php', 'C:\\careera\\vendor\\symfony\\form\\Extension\\Core\\Type\\ColorType.php', 'C:\\careera\\vendor\\symfony\\form\\Extension\\Core\\Type\\TransformationFailureExtension.php', 'C:\\careera\\vendor\\symfony\\form\\Extension\\Validator\\Type\\FormTypeValidatorExtension.php', 'C:\\careera\\vendor\\symfony\\form\\Extension\\Validator\\Type\\UploadValidatorExtension.php', 'C:\\careera\\vendor\\symfony\\form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension.php', 'C:\\careera\\vendor\\symfony\\validator\\ValidatorBuilder.php', 'C:\\careera\\vendor\\symfony\\serializer\\Normalizer\\ProblemNormalizer.php', 'C:\\careera\\vendor\\symfony\\serializer\\SerializerAwareTrait.php', 'C:\\careera\\vendor\\symfony\\serializer\\Normalizer\\TranslatableNormalizer.php', 'C:\\careera\\vendor\\symfony\\twig-bridge\\Extension\\TranslationExtension.php', 'C:\\careera\\vendor\\symfony\\twig-bridge\\Extension\\FormExtension.php', 'C:\\careera\\vendor\\easycorp\\easyadmin-bundle\\src\\Twig\\EasyAdminTwigExtension.php', 'C:\\careera\\vendor\\symfony\\translation\\DataCollector\\TranslationDataCollector.php'], []);

        $instance->setName('translation:extract');
        $instance->setDescription('Extract missing translations keys from code to translation files');

        return $instance;
    }
}
