<?php

namespace View;


class Plain 
{
    protected  $path;
    protected  $layoutName;

    protected  $template;
    protected  $data;

    public function __construct($path)
    {
        $this->path = $path;
    }

    public function setLayout( $layoutName): self
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

     
            extract($this->data);
            require $pathToLayout;
        
    }

    private function renderTemplate()
    {
        $pathToTemplate = realpath("$this->path/{$this->template}.php");
    
            extract($this->data);
            require $pathToTemplate;
        
    }
}
