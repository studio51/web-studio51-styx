<?php

  class SelectBox {
    public $items = array();
    public $defaultText = "";
    public $title = "";

    public function __construct( $type, $title, $default ) {
      $this->defaultText = $default;
      $this->title = $title;
      $this->type = $type;
    }

    public function addItem( $name, $connection = NULL ) {
      $this->items[$name] = $connection;

      return $this;
    }

    public function toJSON() {
      return json_encode( $this );
    }
  }

  $manufacturer = new SelectBox("radio", "Manufacturer", "Choose a Manufacturer");
  $manufacturer
    -> addItem("Apple","appleProductSelect")
    -> addItem("Samsung","samsungProductSelect");

  // Apple

  $appleProductSelect = new SelectBox("select", "What kind of phone are you interested in?", "Pick a phone type");
  $appleProductSelect
    -> addItem("iPhone","iphoneSelect")
    -> addItem("iPod","ipodSelect")
    -> addItem("iPad","ipadSelect");

  $iphoneSelect = new SelectBox("select", "", "");
  $iphoneSelect
    -> addItem("iPhone", "servicesSelect")
    -> addItem("iPhone 3G", "servicesSelect")
    -> addItem("iPhone 3GS", "servicesSelect")
    -> addItem("iPhone 4", "servicesSelect")
    -> addItem("iPhone 4S", "servicesSelect")
    -> addItem("iPhone 5", "servicesSelect")
    -> addItem("iPhone 5C", "servicesSelect")
    -> addItem("iPhone 5S", "servicesSelect");

  $ipodSelect = new SelectBox("select", "", "");
  $ipodSelect
    -> addItem("iPod Touch", "servicesSelect");

  $ipadSelect = new SelectBox("select", "", "");
  $ipadSelect
    -> addItem("iPad", "servicesSelect")
    -> addItem("iPad 2", "servicesSelect")
    -> addItem("iPad 3", "servicesSelect")
    -> addItem("iPad Mini", "servicesSelect")
    -> addItem("iPad 4", "servicesSelect")
    -> addItem("iPad Mini Retina", "servicesSelect")
    -> addItem("iPad Air", "servicesSelect");

  // Samsung

  $samsungProductSelect = new SelectBox("select", "What kind of phone are you interested in?", "Pick a phone type");
  $samsungProductSelect
    -> addItem("Galaxy S Series","galaxySelect")
    -> addItem("Galaxy Note","galaxyNoteSelect");

  $galaxySelect = new SelectBox("select", "", "");
  $galaxySelect
    -> addItem("Galaxy SII", "servicesSelect")
    -> addItem("Galaxy SIII", "servicesSelect")
    -> addItem("Galaxy SIII Mini", "servicesSelect")
    -> addItem("Galaxy S4", "servicesSelect")
    -> addItem("Galaxy S4 Mini", "servicesSelect")
    -> addItem("Galaxy S4 Active", "servicesSelect")
    -> addItem("Galaxy S5", "servicesSelect")
    -> addItem("Galaxy S5 Mini", "servicesSelect");

  $galaxyNoteSelect = new SelectBox("select", "", "");
  $galaxyNoteSelect
    -> addItem("Galaxy Note 2", "servicesSelect")
    -> addItem("Galaxy Note 3", "servicesSelect");


  $servicesSelect = new SelectBox("select", "", "");
  $servicesSelect
    -> addItem("Cosmetic Issues")
    -> addItem("Front Glass / Digitizer & LCD")
    -> addItem("Camera", "cameraServicesSelect")
    -> addItem("Audio Issues")
    -> addItem("Battery Replacement")
    -> addItem("Charging Issues")
    -> addItem("Buttons Issues", "buttonsServicesSelect")
    -> addItem("Other");

  $buttonsServicesSelect = new SelectBox("select", "", "");
  $buttonsServicesSelect
    -> addItem("Slient / Mute Button")
    -> addItem("Power Button")
    -> addItem("Volume Buttons")
    -> addItem("Home Button");

  $cameraServicesSelect = new SelectBox("select", "", "");
  $cameraServicesSelect
    -> addItem("Front Camers")
    -> addItem("Rear Camera");

  $selects = array(
    "manufacturer"          => $manufacturer,
    "appleProductSelect"    => $appleProductSelect,
    "samsungProductSelect"  => $samsungProductSelect,
    "iphoneSelect"          => $iphoneSelect,
    "ipodSelect"            => $ipodSelect,
    "ipadSelect"            => $ipadSelect,
    "galaxySelect"          => $galaxySelect,
    "galaxyNoteSelect"      => $galaxyNoteSelect,
    "servicesSelect"        => $servicesSelect,
    "buttonsServicesSelect" => $buttonsServicesSelect,
    "cameraServicesSelect"  => $cameraServicesSelect
  );

  $key = $_GET["key"];

  if( array_key_exists( $key, $selects )) {
    header("Content-type: application/json");

    echo $selects[$key] -> toJSON();

  } else {
    header("HTTP/1.0 404 Not Found");
    header("Status: 404 Not Found");
  }
