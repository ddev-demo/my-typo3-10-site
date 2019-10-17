<?php

// autoload_alias_loader_real.php @generated by typo3/class-alias-loader

class ClassAliasLoaderInit7756aa7bb3a9fe81905a15d16f57dfc5 {

    private static $loader;

    public static function initializeClassAliasLoader($composerClassLoader) {
        if (null !== self::$loader) {
            return self::$loader;
        }
        self::$loader = $composerClassLoader;

        $classAliasMap = require __DIR__ . '/autoload_classaliasmap.php';
        $classAliasLoader = new TYPO3\ClassAliasLoader\ClassAliasLoader($composerClassLoader);
        $classAliasLoader->setAliasMap($classAliasMap);
        $classAliasLoader->setCaseSensitiveClassLoading(true);
        $classAliasLoader->register(true);

        TYPO3\ClassAliasLoader\ClassAliasMap::setClassAliasLoader($classAliasLoader);

        return self::$loader;
    }
}