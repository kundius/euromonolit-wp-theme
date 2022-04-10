import lazySizes from "lazysizes";
import "lazysizes/plugins/native-loading/ls.native-loading";
import "lazysizes/plugins/object-fit/ls.object-fit";
import "what-input";

import "./form";

// alert("dada");

import { Keukenhof } from "keukenhof";

Keukenhof.init({
  hasAnimation: true,
});

/**
 * LazySizes configuration
 * https://github.com/aFarkas/lazysizes/#js-api---options
 */
lazySizes.cfg.nativeLoading = {
  setLoadingAttribute: false,
};
