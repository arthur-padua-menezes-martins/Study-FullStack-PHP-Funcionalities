<?php

namespace lib\data\protoocls\widget\proxy\validate;

interface ContentValidateProxyInterface {
  function validateContent (array $arguments);

  function validateMethod ($method);

  public function validate (callable $closure);
}

?>
