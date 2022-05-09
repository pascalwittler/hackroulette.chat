<?php

class TemplateRenderer
{
    public static function render(string $template_path, array $template_data)
    {
        if (!file_exists(__DIR__ . '/../templates/' . $template_path . '.html')) {
            return null;
        }

        $content = file_get_contents(__DIR__ . '/../templates/' . $template_path . '.html');

        foreach ($template_data as $key => $value) {
            $content = str_replace('### ' . mb_strtoupper($key) . ' ###', self::escape($value), $content);
        }

        echo $content;
    }

    public static function escape(string $data)
    {
        return htmlspecialchars($data);
    }
}
