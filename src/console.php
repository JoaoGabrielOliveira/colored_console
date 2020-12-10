<?php
    namespace Hyper\Useful;

    use Console\Color;

    class Console 
    {
        public static function printc(string $text, $color = Color::DEFAULT, $return=true)
        {
            $text = $color . "$text" . Color::DEFAULT;

            if($return === true)
            {
                return $text;
            }

            echo $text . '\n';
        }

        public static function print_red(string $text,$return=true)
        {
            return Console::printc($text, Color::RED, $return);
        }

        public static function print_green(string $text,$return=true)
        {
            return Console::printc($text, Color::GREEN, $return);
        }

        public static function print_blue(string $text,$return=true)
        {
            return Console::printc($text, Color::BLUE, $return);
        }

        public static function print_yellow(string $text,$return=true)
        {
            return Console::printc($text, Color::YELLOW, $return);
        }

        public static function print_white(string $text,$return=true)
        {
            return Console::printc($text, Color::WHITE, $return);
        }

        public static function info_success(string $current_text,string $success_text="SUCESSO",string $symbol="✔")
        {
            $full_text = Console::print_green("\n$symbol ") . 
            Console::print_white($current_text) . ' ' .
            Console::print_green($success_text . "!\n");

            echo $full_text;
            return $full_text;
        }

        public static function info_fail(string $current_text,string $success_text="FALHOU",string $symbol="✕")
        {
            $full_text = Console::print_red("\n$symbol ") . 
            Console::print_white($current_text ) . ' ' .
            Console::print_red($success_text . "!\n");

            echo $full_text;
            return $full_text;
        }
    }
?>