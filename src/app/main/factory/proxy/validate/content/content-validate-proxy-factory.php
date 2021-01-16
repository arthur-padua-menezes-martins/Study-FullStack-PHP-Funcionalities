<?php

function content_validate_proxy_factory() {
  return new ContentValidateProxy(new ErrorValidateProxy());
};

?>
