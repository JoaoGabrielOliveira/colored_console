<?php
    namespace Hyper;

    use Hyper\Console\Color;

    class Console 
    {
        public static function printc($text, $color = Color::DEFAULT, $return=true)
        {
            $text = $color . "$text" . Color::DEFAULT;

            if($return === true)
            {
                return $text;
            }

            echo $text;
        }

        public static function print_red($text,$return=true)
        {
            return Console::printc($text, Color::RED, $return);
        }

        public static function print_green($text,$return=true)
        {
            return Console::printc($text, Color::GREEN, $return);
        }

        public static function print_blue($text,$return=true)
        {
            return Console::printc($text, Color::BLUE, $return);
        }

        public static function print_yellow($text,$return=true)
        {
            return Console::printc($text, Color::YELLOW, $return);
        }

        public static function print_white($text,$return=true)
        {
            return Console::printc($text, Color::WHITE, $return);
        }

        public static function info_success($current_text,$success_text="SUCESSO",$symbol="✔")
        {
            $full_text = Console::print_green("\n$symbol") . 
            Console::print_white($current_text) .
            Console::print_green($success_text . "!\n");

            echo $full_text;
            return $full_text;
        }

        public static function info_fail($current_text,$success_text="FALHOU",$symbol="✕")
        {
            $full_text = Console::print_red("\n$symbol") . 
            Console::print_white($current_text) .
            Console::print_red($success_text . "!\n");

            echo $full_text;
            return $full_text;
        }
    }
?>