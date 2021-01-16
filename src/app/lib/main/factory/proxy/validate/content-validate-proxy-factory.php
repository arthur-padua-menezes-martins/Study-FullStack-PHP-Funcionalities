<?php

return (function() {
  return new ContentValidateProxy(new ErrorValidateProxy());
})();
