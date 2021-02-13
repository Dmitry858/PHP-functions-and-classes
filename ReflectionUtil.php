<?php
class ReflectionUtil
{
    public static function getClassSource($class)
    {
        if ($class instanceof ReflectionClass)
        {
            $path = $class->getFileName();
            $lines = file($path);

            if (!$lines) return 'Ошибка чтения файла ' . $path;

            $from = $class->getStartLine();
            $to = $class->getEndLine();
            $len = $to - $from + 1;
            return implode(array_slice($lines, $from - 1, $len));
        }
        else
        {
            return $class . ' не является объектом типа ReflectionClass';
        }
    }    
}

// пример использования
echo '<pre>';
print_r(ReflectionUtil::getClassSource(new ReflectionClass('SomeClassName')));
echo '</pre>';
