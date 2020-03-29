<?php

defined('_JEXEC') or die;

class CoursesRouter extends JComponentRouterBase{

    public function build(&$query)
    {

        $segments = array();

        if(isset($query['view']))
        {
            $segments[] = $query['view'];
            unset($query['view']);
        };

        if(isset($query['id']))
        {
            $segments[] = $query['id'];
            unset($query['id']);
        };

        return $segments;

    }

    public function parse(&$segments)
    {

        $vars = array();

        $vars['view'] = $segments[0];


        if(isset($segments[1])){
            $vars['id'] = $segments[1];
        }

        return $vars;

    }
}

function coursesBuildRoute(&$query)
{
    $router = new CoursesRouter;

    return $router->build($query);
}

function coursesParseRoute($segments)
{
    $router = new CoursesRouter;

    return $router->parse($segments);
}
