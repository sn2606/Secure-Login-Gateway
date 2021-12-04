<?php

interface Crypt {
    public function hash($input);
    public function verify($input, $existingHash);
}

?>
