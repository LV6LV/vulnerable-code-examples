<?php

class Invoice
    public $id
    public $total
    public $tax
    public $items

    function get_details() {
        return array($id, $total, $tax, $items);
    }
}

// this example is not finished

?>
