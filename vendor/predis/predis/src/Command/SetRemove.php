<?php
 namespace Predis\Command; class SetRemove extends Command { public function getId() { return 'SREM'; } protected function filterArguments(array $arguments) { return self::normalizeVariadic($arguments); } } 