<?php

$files = array_diff(scandir('Scripts'), array('.', '..'));
array_map('require_once', $files);
