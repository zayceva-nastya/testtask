<?php

namespace View;


class Plain 
{
    protected string $path;
    protected string $layoutName;

    protected string $template;
    protected array $data;

    public function __construct($path)
    {
        $this->path = $path;
    }

    public function setLayout(string $layoutName): self
    {
        $this->layoutName = $layoutName;
        return $this;
    }

    public function render(string $template, array $data): string
    {
        $this->data = $data;
        $this->template = $template;

        ob_start();

        $this->renderLayout();

        return ob_get_clean();
    }

    private function renderLayout()
    {
        $pathToLayout = realpath("$this->path/layouts/{$this->layoutName}.php");

        //todo: проверить есть ли такой файл, а если нет бросить ошибку
        if (!file_exists($pathToLayout)) {
            throw new RuntimeException('Not exist such layout');
        } else {
            extract($this->data);
            /** @noinspection PhpIncludeInspection */
            require $pathToLayout;
        }
    }

    private function renderTemplate()
    {
        $pathToTemplate = realpath("$this->path/{$this->template}.php");
        //todo: проверить есть ли такой файл, а если нет бросить ошибку
        if (!file_exists($pathToTemplate)) {
            throw new RuntimeException('Not exist such view');
        } else {
            extract($this->data);
            /** @noinspection PhpIncludeInspection */
            require $pathToTemplate;
        }
    }
}
