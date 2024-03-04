<?php

namespace ContainerHDmXS1Q;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTranslation_WriterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'translation.writer' shared service.
     *
     * @return \Symfony\Component\Translation\Writer\TranslationWriter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Writer/TranslationWriterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Writer/TranslationWriter.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/DumperInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/FileDumper.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/PhpFileDumper.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/XliffFileDumper.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/PoFileDumper.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/MoFileDumper.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/YamlFileDumper.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/QtFileDumper.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/CsvFileDumper.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/IniFileDumper.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/JsonFileDumper.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/IcuResFileDumper.php';

        $container->privates['translation.writer'] = $instance = new \Symfony\Component\Translation\Writer\TranslationWriter();

        $instance->addDumper('php', new \Symfony\Component\Translation\Dumper\PhpFileDumper());
        $instance->addDumper('xlf', new \Symfony\Component\Translation\Dumper\XliffFileDumper());
        $instance->addDumper('xliff', new \Symfony\Component\Translation\Dumper\XliffFileDumper('xliff'));
        $instance->addDumper('po', new \Symfony\Component\Translation\Dumper\PoFileDumper());
        $instance->addDumper('mo', new \Symfony\Component\Translation\Dumper\MoFileDumper());
        $instance->addDumper('yml', new \Symfony\Component\Translation\Dumper\YamlFileDumper());
        $instance->addDumper('yaml', new \Symfony\Component\Translation\Dumper\YamlFileDumper('yaml'));
        $instance->addDumper('ts', new \Symfony\Component\Translation\Dumper\QtFileDumper());
        $instance->addDumper('csv', new \Symfony\Component\Translation\Dumper\CsvFileDumper());
        $instance->addDumper('ini', new \Symfony\Component\Translation\Dumper\IniFileDumper());
        $instance->addDumper('json', new \Symfony\Component\Translation\Dumper\JsonFileDumper());
        $instance->addDumper('res', new \Symfony\Component\Translation\Dumper\IcuResFileDumper());

        return $instance;
    }
}
