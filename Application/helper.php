<?php

/**
 *
 */
class Helper
{
}

/**
 */
class Html extends Helper
{

    public function link($title, $url = null, $span)
    {
        if (is_array($url)) {
            if (! empty($url["controller"]) and ! empty($url["method"])) {
                $url = "/" . implode("/", $url);
            } else 
                if (! empty($url["controller"])) {
                    $url = "/" . $url["controller"];
                    if (! empty($url["method"])) {
                        $url = "/" . $url["method"];
                    } elseif (! empty($url["method"])) {
                        $url = "/" . $url["method"];
                    }
                }
            $link = '<a style="text-decoration:none;color:gray;" href="' . APP_URL . $url . '"><span class="' . $span . '"></span>' . " " . $title . '</a>';
            return $link;
        }
    }
}

?>
