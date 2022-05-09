<?php

class User
{
    public static function setupAction()
    {
        $template_data = [
            'title' => 'Start | hackroulette.chat',
        ];

        TemplateRenderer::render('userSetup', $template_data);
    }
}
