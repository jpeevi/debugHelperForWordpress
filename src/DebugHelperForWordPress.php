<?php

class DebugHelperForWordPress
{
    /**
     * @param mixed $variable
     * @param bool $dumpType
     * @param bool $prettyPrint
     * @return void
     */
    public static function dumpAndDie(mixed $variable, bool $dumpType = false, bool $prettyPrint = false): void
    {
        self::dump($variable, $dumpType, $prettyPrint);
        die();
    }

    /**
     * @param mixed $variable
     * @param bool $dumpType
     * @param bool $prettyPrint
     * @return void
     */
    public static function dump(mixed $variable, bool $dumpType = false, bool $prettyPrint = false): void
    {
        if ($prettyPrint) {
            if (php_sapi_name() !== 'cli') {
                header('Content-Type: text/html; charset=UTF-8');
                echo "<pre style='background-color: #282c34; color: #ffffff; padding: 10px; border-radius: 5px;'>";
            }

            if ($dumpType) {
                echo var_dump($variable) . PHP_EOL;
            } else {
                echo htmlspecialchars(print_r($variable, true))  . PHP_EOL;
            }

            echo "</pre>";
        } else {
            if ($dumpType) {
                var_dump($variable);
            } else {
                print_r($variable);
            }
        }
    }
}