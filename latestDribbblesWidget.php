<?php

/**
 * Half Court Shot SilverStripe widget - Shows latest dribbbles
 *
 * Half Court Shot jsApp: http://code.google.com/p/halfcourtshot/
 */

class LatestDribbblesWidget extends Widget {

    static $title = "Latest dribbbles";
    static $cmsTitle = "Latest dribbbles widget";
    static $description = "This widget shows your latest dribbbles";

    static $db = array(
        "WidgetTitle" => "Varchar(255)",
        "Jersey" => "Varchar(255)",
        "Shots" => "Int"
    );

    static $defaults = array(
        "WidgetTitle" => "Latest dribbbles",
        "Jersey" => "mattbailey",
        "Shots" => 5
    );

    public function getCMSFields() {
        return new FieldList(
            new TextField('WidgetTitle', 'Widget title'),
            new TextField('Jersey', 'Dribbble username'),
            new NumericField("Shots", "Number of dribbbles")
        );
    }

    public function Title() {
        return $this->WidgetTitle ? $this->WidgetTitle : self::$title;
    }

    public function getLatestDribbbles() {

        Requirements::javascript("widget_latestDribbbles/js/half-court-shot.jsapp.mh.min.101129.js");
        Requirements::css("widget_latestDribbbles/css/half-court-shot.css");

        $output = new ArrayList();
        $output->push(new ArrayData(array(
            "ID" => $this->ID,
            "Jersey" => $this->Jersey,
            "Shots" => $this->Shots
        )));
        return $output;
    }

}
