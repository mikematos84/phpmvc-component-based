<?php 

class HomeModel extends Model{

    public $sections = [];

    public function __construct(){
        parent::__construct();

        $section = [
            'title' => 'article section h1',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec.'
        ];
        $this->sections[] = $section;

        $section = [
            'title' => 'article section h2',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec. Curabitur posuere enim eget turpis feugiat tempor. Etiam ullamcorper lorem dapibus velit suscipit ultrices. Proin in est sed erat facilisis pharetra.'
        ];
        $this->sections[] = $section;

        $section = [
            'title' => 'article section h3',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec. Curabitur posuere enim eget turpis feugiat tempor.'
        ];
        $this->sections[] = $section;
    }

}